<?php 
    //membuat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "iot-air-quality-db");
    //membaca data dari tabel tb-datacard
    $sql = mysqli_query($konek, "SELECT * FROM `tb-dataarea` ORDER BY ID DESC"); //data terakhir akan berada di atas
    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    //panggil CO2 dari database
    $CO2 = $data['CO2'];
    //menguji apabila CO2 kosong maka nol
    if ($CO2 == "") $NCO2 = 0; 
    //cetak nillai CO2
    echo $CO2;
?>
