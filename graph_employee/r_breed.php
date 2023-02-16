<?php 
include_once('../www/authen.php');
include_once('../www/connect.php');
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"
  </head>
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>

        </div>  
        <html>
        <center>
            <?php
            $sql="
            SELECT produt_amount, SUM(produt_amount)AS totol ,pig_breed
            FROM view_breed_produt
            WHERE 1
            GROUP BY pig_breed
            ORDER BY DATE_FORMAT(pig_breed, 'แลนด์เรซ') ASC
           
   
            ";
            
            $result = mysqli_query($conn, $sql);
            $resultchart = mysqli_query($conn, $sql);
            //for chart
            $date_produt = array();
            $totol = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $date_produt[] = "\"".$rs['pig_breed']."\"";
            $totol[] = "\"".$rs['totol']."\"";
            }
            $date_produt = implode(",", $date_produt);
            $totol = implode(",", $totol);
            
            ?>
            <h3 align="center">ผลผลิตลูกสุกร</h3>
            
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart" width="500px" height="250px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [<?php echo $date_produt;?>
                
                ],
                datasets: [{
                label: 'รายงานผลผลิต แยกสายพันธ์ุ',
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
