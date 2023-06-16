#include <HTTPClient.h>
#include <WiFi.h>
#include <Wire.h>
#include <dummy.h>
#include <LiquidCrystal_I2C.h>
#include <SimpleTimer.h>
#include <stdio.h>
#include <math.h>
#include <MQ135.h>

//variabel untuk wifi hostpot dan password
const char* ssid = "abla bae";
const char* pass = "abla aja";

//varible host ke web database
const char* host = "192.168.7.160";

LiquidCrystal_I2C lcd(0x27,20,4); // SDA 21 SCL 22
int ledPower = 25;
int samplingTime = 280;
int sleepTime = 100;
int bacaPM10, Vout;

int bacamq7,ppm_CO;
int bacamq135, Co2,ppm_CO2;
MQ135 gasSensor = MQ135(34);

const int mq135Pin = 34; // Pin analog untuk sensor MQ135
float R0 = 10000.0; // Nilai resistansi R0 pada udara bersih
float NO2Curve[3] = {0.21, -0.14, -0.03}; // Koefisien kalibrasi untuk gas NO2

void setup() 
{
  Serial.begin(9600);
  Wire.begin();
  lcd.begin();
  lcd.setCursor(4,0);
  lcd.print("AIR QUALITY");
  lcd.setCursor(6,1);
  lcd.print("MONITOR");
  delay(3000);
  lcd.clear();

  //koneksi ke wifi
  WiFi.begin(ssid, pass);
  //status koneksi wifi
  Serial.println("connecting...");
  while (WiFi.status() != WL_CONNECTED){
    Serial.print(".");
    delay (500);
  }
  Serial.println("connected"); 
}

void loop()
{  
  // Baca nilai pada pin analog untuk sensor MQ135
  int sensorVoltage = analogRead(34);
  // Hitung resistansi sensor (Rs) berdasarkan nilai bacaan sensor
  int Rs = ((1023/sensorVoltage)-1)*R0;
  // Hitung rasio antara Rs dengan R0
  int ratio = Rs / R0;
  // Hitung konsentrasi gas NO2 dalam ppm menggunakan persamaan kalibrasi
  int ppm = pow(10, (NO2Curve[0] * log(ratio) + NO2Curve[1]) + NO2Curve[2]);
  // Tampilkan hasil pengukuran
  Serial.print("Konsentrasi NO2 (ppm): ");
  Serial.println(ppm);
  //Tampilan LCD
  lcd.setCursor(0,0);
  lcd.print("NO2 :");
  lcd.setCursor(5,0);
  lcd.print(ppm); 


  //Menghitung CO2
  bacamq135 = analogRead(34);
  ppm_CO2 = (0.0513*bacamq135) + 334.85;
  Serial.println("adc CO2 = " +String(bacamq135));
  Serial.println("adc CO2 = " +String(ppm_CO2));
  //Tampilan LCD
  lcd.setCursor(0,3);
  lcd.print("CO2 :");
  lcd.setCursor(5,3);
  lcd.print(ppm_CO2);

  //Menghitung PM10
  digitalWrite(ledPower,LOW);
  delayMicroseconds(samplingTime);
  bacaPM10 = analogRead(32); 
  digitalWrite(ledPower,HIGH);
  delayMicroseconds(sleepTime);
  Vout = bacaPM10*5.00/1024;
  int ugm3 = (0.0756*bacaPM10) + 8.5651;
  Serial.println("adc PM10 = " +String(bacaPM10));
  Serial.println("ugm3 PM10 = " +String(ugm3));
  //Tampilan LCD
  lcd.setCursor(0,1);
  lcd.print("PM10:");
  lcd.setCursor(5,1);
  lcd.print(ugm3);


  //Menghitung CO
  bacamq7 = analogRead(35); 
  ppm_CO = (0.0137*bacamq7)- 4.3245;
  Serial.println("adc CO = " +String(bacamq7));
  Serial.println("ppm CO = " +String(ppm_CO));
  //Tampilan LCD
  lcd.setCursor(0,2);
  lcd.print("CO  :");
  lcd.setCursor(5,2);
  lcd.print(ppm_CO); 

  
  //sending ke server 
  WiFiClient client;
  //inisialisasi port web server 80
  const int HTTPPort = 80;
  if(!client.connect(host, HTTPPort)){
    Serial.println("connection failed");
    return;
  }
  
  //kondisi terkoneksi, sending ke database
  String Link;
  HTTPClient http;
  Link = "http://" +String(host) + "/iot_air_quality/kirimdata.php?NO2=" +String(ppm) +"&PM10=" +String(ugm3) +"&CO=" +String(ppm_CO) +"&CO2=" +String(ppm_CO2);
  //eksekusi alamat Link
  http.begin(Link);
  http.GET();
  //baca respon - berhasil koneksi- kirim nilai sensornya
  String respon = http.getString();
  Serial.print(respon);
  http.end();
  
  delay(1000);
  
}
