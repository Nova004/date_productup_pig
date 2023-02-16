<?php 
include_once('../www/authen.php');
include_once('../www/connect.php');
?>
<?php

echo '<pre>',print_r ($_POST),'<pre>';
$userID=$_POST['userID'];
$Title=$_POST['Title'];
$name=$_POST['name'];
$Sex=$_POST['Sex'];
$telephone_number=$_POST['telephone_number'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$Department=$_POST['Department'];
$sql="UPDATE `users` SET `userID` = '$userID',`Title` = '$Title',`name` = '$name',`Sex` = '$Sex',`telephone_number` = '$telephone_number',`email` = '$email',`username` = '$username',`password` = '$password',`Department` = '$Department' WHERE `userID` = $userID;";
$res=mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql)){
    echo '<script> alert("แก้ไขข้อมูลเสร็จสิ้น!")</script>'; 
    header('Refresh:0; url=user_employee.php');
}else{
    echo "Sql Error:ไม่สามารถแก้ไขข้อมูลได้".$sql; 
    header('Refresh:5; url=user_employee.php');
}
    //echo '<pre>'.print_r($_POST),'<pre>';

?>