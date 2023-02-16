<?php 
include_once('../www/authen.php');
include_once('../www/connect.php');
?>
<?php

echo '<pre>',print_r ($_POST),'<pre>';
$injectID=$_POST['injectID'];
$vaccinID_inject=$_POST['vaccinID_inject'];
$pigID_inject=$_POST['pigID_inject'];
$usersID_inject=$_POST['usersID_inject'];
$date_inject=$_POST['date_inject'];
$amount=$_POST['amount'];
$manage=$_POST['manage'];
$sql="UPDATE `inject` SET `injectID` = '$injectID',`vaccinID_inject` = '$vaccinID_inject',`amount` = '$amount',`manage` = '$manage',`pigID_inject` = '$pigID_inject',`usersID_inject` = '$usersID_inject',`date_inject` = '$date_inject'WHERE `injectID` = $injectID;";
$res=mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql)){
    echo '<script> alert("แก้ไขข้อมูลเสร็จสิ้น!")</script>'; 
    header('Refresh:0; url=../www_employee/register.php');
}else{
    echo "Sql Error:ไม่สามารถแก้ไขข้อมูลได้".$sql; 
    header('Refresh:5; url=../www_employee/register.php');
}
    //echo '<pre>'.print_r($_POST),'<pre>';

?>