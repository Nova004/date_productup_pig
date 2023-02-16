
<?php 
include_once('authen.php');
include_once('connect.php');
?>
<?php

echo '<pre>',print_r ($_POST),'<pre>';
$pig_ID=$_POST['pig_ID'];
$pigSex=$_POST['pigSex'];
$pigSick=$_POST['pigSick'];
$produt=$_POST['produt'];
$sql="UPDATE `pigregister` SET `pigSex` = '$pigSex',`pigSick` = '$pigSick' WHERE `pig_ID` = $pig_ID;";
$res=mysqli_query($conn,$sql);
$sql2="UPDATE `produtpig` SET `produt` = '$produt' WHERE `pig_produt` = $pig_ID;";
$res2=mysqli_query($conn,$sql2);


if(mysqli_query($conn,$sql)){
    echo '<script> alert("แก้ไขข้อมูลเสร็จสิ้น!")</script>'; 
    header('Refresh:0; url=register.php');
}else{
    echo "Sql Error:ไม่สามารถแก้ไขข้อมูลได้".$sql; 
    header('Refresh:5; url=register.php');
}
    //echo '<pre>'.print_r($_POST),'<pre>';

?>