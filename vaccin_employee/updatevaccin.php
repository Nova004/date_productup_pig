<?php 
include_once('../www/authen.php');
include_once('../www/connect.php');
?>
<?php

echo '<pre>',print_r ($_POST),'<pre>';
$vaccinID=$_POST['vaccinID'];
$vaccinName=$_POST['vaccinName'];
$vaccin_Name_eng=$_POST['vaccin_Name_eng'];
$date=$_POST['date'];
$sql="UPDATE `vaccin` SET `vaccinID` = '$vaccinID',`vaccinName` = '$vaccinName',`vaccin_Name_eng` = '$vaccin_Name_eng',`date` = '$date' WHERE `vaccinID` = $vaccinID;";
$res=mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql)){
    echo '<script> alert("แก้ไขข้อมูลเสร็จสิ้น!")</script>'; 
    header('Refresh:0; url=../www_employee/vaccin.php');
}else{
    echo "Sql Error:ไม่สามารถแก้ไขข้อมูลได้".$sql; 
    header('Refresh:5; url=../www_employee/vaccin.php');
}
    //echo '<pre>'.print_r($_POST),'<pre>';

?>