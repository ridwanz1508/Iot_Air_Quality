<?php 
    //membuat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "iot-air-quality-db");
    //membaca data dari tabel tb-datacard
    $sql = mysqli_query($konek, "SELECT * FROM `tb-dataarea` ORDER BY ID DESC"); //data terakhir akan berada di atas
    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    //panggil CO dari database
    $CO = $data['CO'];
    //menguji apabila CO kosong maka nol
    if ($CO == "") $CO = 0;
    //cetak nillai CO
    echo $CO;
?>
