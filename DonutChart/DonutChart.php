<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once 'connect.php';

//คิวรี่ข้อมูลหาผมรวมยอดขายโดยใช้ SQL SUM
$stmt = $conn->prepare("SELECT pig_breed, COUNT(pig_breed) as total FROM pigregister GROUP BY pig_breed");
$stmt->execute();
$result = $stmt->fetchAll();
//นำข้อมูลที่ได้จากคิวรี่มากำหนดรูปแบบข้อมูลให้ถูกโครงสร้างของกราฟที่ใช้ 
//*อ่าน docs เพิ่มเติม https://developers.google.com/chart/interactive/docs/gallery/piechart#donut
$saleData = array();
  foreach ($result as $k) {
  $saleData[] = "['".$k['pig_breed']."'".", ".$k['total']."]";
}
//ตัด commar อันสุดท้ายโดยใช้ implode เพื่อให้โครงสร้างข้อมูลถูกต้องก่อนจะนำไปแสดงบนกราฟ
$saleData = implode(",", $saleData);


?>
<html>
  <head>
  <h3 align="center">จำนวนพันธ์สุกร</h3>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- เรียก js มาใช้งาน -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'COUNTmary per pig_breed'],
        <?php echo $saleData; //เรียกใช้งานตัวแปรจากบรรทัดที่ 16 ?>
        ]);

        var options = {
         
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>


  </head>
  <body>         
          <!-- ส่วนของการแสดงผลและกำหนดขนาดของกราฟ -->
         <div id="donutchart" style="width: 590px; height: 300px;"></div>
          
       
  </body>
</html>