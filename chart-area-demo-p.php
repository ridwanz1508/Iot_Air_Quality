
<?php 
    //membuat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "iot-air-quality-db");

    //baca ID tertinggi
    $sql_ID = mysqli_query($konek, "SELECT MAX(ID) FROM `tb-dataarea`");
    //tanggap datanya
    $data_ID = mysqli_fetch_array($sql_ID);
    //ambil data terakhir atau terbesar
    $ID_Akhir = $data_ID ['MAX(ID)'];
    $ID_Awal = $ID_Akhir-10;

    //membaca informasi tanggal untuk semua data - sumbu x
    $tanggal = mysqli_query($konek, "SELECT tanggal FROM `tb-dataarea` WHERE ID >= '$ID_Awal' 
    and ID <= '$ID_Akhir' ORDER BY ID ASC ");
    //membaca informasi NO2 untuk semua data - sumbu y
    $NO2 = mysqli_query($konek, "SELECT NO2 FROM `tb-dataarea` WHERE ID >= '$ID_Awal' 
    and ID <= '$ID_Akhir'ORDER BY ID ASC ");
    $PM10 = mysqli_query($konek, "SELECT PM10 FROM `tb-dataarea` WHERE ID >= '$ID_Awal' 
    and ID <= '$ID_Akhir' ORDER BY ID ASC ");
    $CO = mysqli_query($konek, "SELECT CO FROM `tb-dataarea` WHERE ID >= '$ID_Awal' 
    and ID <= '$ID_Akhir' ORDER BY ID ASC ");
    $CO2 = mysqli_query($konek, "SELECT CO2 FROM `tb-dataarea` WHERE ID >= '$ID_Awal' 
    and ID <= '$ID_Akhir' ORDER BY ID ASC ");
?>

<!-- Card Header -->
<div class="card-header bg-dark shadow py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-light">Data Grafik</h6>
</div>
<!-- Card Body -->
<div class="card-body shadow col-xl-12 col-gl-10">
    <div class="chart-area col-xl-11">
        <canvas id="MyChart" width="100%" height="50%"></canvas>

        <!---Gambar AreaChart atau Grafik-->
        <script type="text/javascript">
            var canvas = document.getElementById('MyChart');
            var data = {
                labels: [ //sumbu x grafik
                  <?php 
                      while($data_tanggal = mysqli_fetch_array($tanggal))
                      {
                        echo '"'.$data_tanggal['tanggal'].'",' ; //["22-02-2023", "23-02-2023", dst ]
                      }
                  ?>
                ],

                datasets: [
                  { //sumbu y grafik
                          label : 'NO2', 
                          fill : true,
                          backgroundColor : "rgba(253, 215, 8, 0.4)",
                          borderColor: "rgba(253, 215, 3, 1)",
                          borderWidth: 2,
                          lineTension: 0.5,
                          pointRadius: 2,
                          data : [
                              <?php
                                while($data_NO2 = mysqli_fetch_array($NO2))
                                {
                                  echo $data_NO2['NO2'].',' ;
                                }
                              ?>
                          ]
                  },

                  { //sumbu y grafik
                          label : 'PM10', 
                          fill : true,
                          backgroundColor : "rgba(34, 139, 34, 0.4)",
                          borderColor: "rgba(34, 139, 34, 0.5)",
                          borderWidth: 2,
                          lineTension: 0.5,
                          pointRadius: 2,
                          data : [
                              <?php
                                while($data_PM10 = mysqli_fetch_array($PM10))
                                {
                                  echo $data_PM10['PM10'].',' ;
                                }
                              ?>
                          ]
                  },

                  { //sumbu y grafik
                          label : 'CO', 
                          fill : true,
                          backgroundColor : "rgba(78, 115, 223, 0.5)",
                          borderColor: "rgba(78, 115, 223, 0.5)",
                          borderWidth: 2,
                          lineTension: 0.5,
                          pointRadius: 2,
                          data : [
                              <?php
                                while($data_CO = mysqli_fetch_array($CO))
                                {
                                  echo $data_CO['CO'].',' ;
                                }
                              ?>
                          ]
                  }, 

                  { //sumbu y grafik
                          label : 'CO2', 
                          fill : true,
                          backgroundColor : "rgba(255, 0, 0, 0.2)",
                          borderColor: "rgba(255, 0, 0, 0.5)",
                          borderWidth: 2,
                          lineTension: 0.5,
                          pointRadius: 2,
                          data : [
                              <?php
                                while($data_CO2 = mysqli_fetch_array($CO2))
                                {
                                  echo $data_CO2['CO2'].',' ;
                                }
                              ?>
                          ]
                  }
              ]
            };
          
            
          //option grafik
          var option = {
            ShowLines : true,
            animation : {duration : 0}
          };

          //cetak grafik ke dalam canvas
          var myLineChart = Chart.Line(canvas, {
            data : data,
            options : option
          });

        </script>

    </div>
</div>


