<?php 
    //membuat koneksi ke database
    $conn = mysqli_connect ("localhost", "root", "", "iot-air-quality-db");
    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data terbaru dari tabel
    $query = "SELECT * FROM `tb-dataarea` ORDER BY id DESC LIMIT 1";
    $result = $conn->query($query);

    $data = array();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pm10 = $row['PM10'];
        $no2 = $row['NO2'];
        $co2 = $row['CO2'];
        $co = $row['CO'];

    // Membuat array data berdasarkan kondisi
    $data = array(
        'Aman' => 0,
        'Peringatan' => 0,
        'Tidak Aman' => 0
    );

    if ($pm10 > 150 || $no2 > 50 || $co2 > 400 || $co > 10) {
        $data['Tidak Aman'] = 100;
    } elseif (($pm10 >= 101 && $pm10 <= 150) || ($no2 >= 25 && $no2 <= 50) || ($co2 >= 300 && $co2 <= 400) || ($co >= 5 && $co <= 10)) {
        $data['Peringatan'] = 100;
    } else {
        $data['Aman'] = 100;
    }
}
// Mengirimkan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);
$conn->close();
