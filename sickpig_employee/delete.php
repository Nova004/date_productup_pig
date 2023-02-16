<?php 
include_once('../www/connect.php');
?>
<?php
    $sickid=$_GET['sickid'];
    $sql="DELETE FROM `sickpig` WHERE sickid = $sickid";
    
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จสิ้น!")</script>'; 
        header('Refresh:0; url=../www_employee/register.php');
	} else {
        echo "Error deleting record: " . mysqli_error($connect);
        header('Refresh:0; url=../www_employee/register.php');
	}
	mysqli_close($conn);
?>