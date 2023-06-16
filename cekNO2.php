<?php 
    //membuat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "iot-air-quality-db");
    //membaca data dari tabel tb-datacard
    $sql = mysqli_query($konek, "SELECT * FROM `tb-dataarea` ORDER BY ID DESC"); //data terakhir akan berada di atas
    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    //panggil NO2 dari database
    $NO2 = $data['NO2'];
    //menguji apabila NO2 kosong maka nol
    if ($NO2 == "") $NO2 = 0; 
    //cetak nillai NO2
    echo $NO2;
?>
