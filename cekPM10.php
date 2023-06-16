<?php 
    //membuat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "iot-air-quality-db");
    //membaca data dari tabel tb-datacard
    $sql = mysqli_query($konek, "SELECT * FROM `tb-dataarea` ORDER BY ID DESC"); //data terakhir akan berada di atas
    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    //panggil PM10 dari database
    $PM10 = $data['PM10'];
    //menguji apabila PM10 kosong maka nol
    if ($PM10 == "") $PM10 = 0;   
    //cetak nillai PM10
    echo $PM10;
?>
