<!-- <h1>CONTROPANEL</h1> -->
<!-- <a href="../index.php"><input type="submit" name="sua" value="THOÁT ADMIN " style="border-radius: 10px; background-color: aqua;"></a> -->
<?php
extract($countsanpham);
extract($counttaikhoan);
  foreach($listthongke as $listthongke){
    extract($listthongke);
    
?>
<?php
  }
?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="../index.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Doanh Thu Tháng  (NEW)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$tong_tien?> VNĐ</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                       Tổng Số Tài Khoản User </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$total?></div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->


  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Tổng Số Sản Phẩm</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$total1?></div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">  
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Month', 'Week', 'Doanh Thu'],
          <?php
            foreach($thongke as $tk){
                extract($tk);
                echo "['$nam', '$thang', '$tuan', $tong_tien],";
            }
          ?>
        //   ['2014', 1000, 400, 200],
        //   ['2015', 1170, 460, 250],
        //   ['2016', 660, 1120, 300],
        //   ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
  </div>
</div>

