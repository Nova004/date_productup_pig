<?php 
include_once('../www/authen.php');
include_once('../www/connect.php');
?>
<?php

echo '<pre>',print_r ($_POST),'<pre>';
$vaccinID=$_POST['vaccinID'];
$vaccinName=$_POST['vaccinName'];
$sql="UPDATE `vaccin` SET `vaccinID` = '$vaccinID',`vaccinName` = '$vaccinName' WHERE `vaccinID` = $vaccinID;";
$res=mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql)){
    echo '<script> alert("แก้ไขข้อมูลเสร็จสิ้น!")</script>'; 
    header('Refresh:0; url=../www/vaccin.php');
}else{
    echo "Sql Error:ไม่สามารถแก้ไขข้อมูลได้".$sql; 
    header('Refresh:5; url=../www/vaccin.php');
}
    //echo '<pre>'.print_r($_POST),'<pre>';

?>