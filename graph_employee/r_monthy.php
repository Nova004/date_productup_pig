<?php 
include_once('../www/authen.php');
include_once('../www/connect.php');
include_once('../includes/datethai.php');
?>
<?php
// ปิดการแสดง error
error_reporting(0);
?>
<?php include_once('../includes/header_employee.php') ?>
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>

        </div>  
        <html>
        <center>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $pig_ID=$_POST['pig_ID'];
            $sql="
            SELECT produt_amount, SUM(produt_amount) AS totol,  date_produt AS date_produt
            FROM produt_month
            WHERE `pig_produt_month_ID` = '$pig_ID'
            GROUP BY DATE_FORMAT(date_produt, '%m%')
            ORDER BY DATE_FORMAT(date_produt, '%Y-%m-%d') DESC 
            ";
            
            $result = mysqli_query($conn, $sql);
            $resultchart = mysqli_query($conn, $sql);
            //for chart
            $date_produt = array();
            $totol = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $date_produt[] = "\"".dates_thai("$rs[date_produt]")."\"";
            $totol[] = "\"".$rs['totol']."\"";
            }
            $date_produt = implode(",", $date_produt);
            $totol = implode(",", $totol);
            
            ?>
            <h3 align="center">รายงานในแบบกราฟ สุกร <?php echo $pig_ID  ?></h3>
            
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
            <hr>
            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart" width="800px" height="300px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [<?php echo $date_produt;?>
                
                ],
                datasets: [{
                label: 'รายงานผลผลิต แยกตามเดือน',
                data: [<?php echo $totol;?>
                ],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
                }]
                },
                options: {
                scales: {
                yAxes: [{
                ticks: {
                beginAtZero:true
                }
                }]
                }
                }
                });
                </script>
            </p>
            <div class="col-sm-7">
                <h3>List</h3>
                <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                    <thead>
                        <tr class="table-primary">
                            <th width="30%">ว/ด/ป</th>
                            <th width="70%"><center>ผลผลิต</center></th>
                        </tr>
                    </thead>
                    
                    <?php while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                      <td><?php echo dates_thai("$row[date_produt]");?></td>
                        <td align="right"><?php echo number_format($row['totol'],0);?></td>
                    </tr>
                    <?php
                    @$amount_total += $row['totol'];
                    }
                    ?>
                    <tr class="table-danger">
                        <td align="center">รวม</td>
                        <td align="right"><b>
                        <?php echo number_format($amount_total,0);?></b></td></td>
                    </tr>
                </table>
                <a href="../www_employee/register.php" class="btn btn-warning float-left">ย้อนกลับ</a>
                <br>
                <br>
            </div>
            <?php mysqli_close($conn);?>
        </div>
                </center>
    </div>
</div>