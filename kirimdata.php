<!---Untuk Data Card dan Grafik-->
<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "iot-air-quality-db");
//baca data yang dikirim  oleh esp32
$NO2 = $_GET['NO2'];
$PM10 = $_GET['PM10'];
$CO = $_GET['CO'];
$CO2 = $_GET['CO2'];
//simpan ke tb-dataarea
//auto increament = 1 atau mengembalikan id = 1 apabila dikosongkan
mysqli_query($konek, "ALTER TABLE `tb-dataarea` AUTO_INCREMENT = 1");
//simpan data sensor ke tabel db-dataarea
$simpan = mysqli_query($konek, "INSERT INTO `tb-dataarea` (NO2, PM10, CO, CO2) VALUES ('$NO2', '$PM10', '$CO', '$CO2')");
//uji simpan untuk memberikan respon
if ($simpan)
    echo " Successfull Sending";
else
    echo " Failed Sending";
?>
