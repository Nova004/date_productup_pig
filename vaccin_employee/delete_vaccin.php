<?php 
include_once('../www/connect.php');
?>
<?php
    $vaccinID=$_GET['vaccinID'];
    $sql="DELETE FROM `vaccin` WHERE vaccinID = $vaccinID";
   
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จสิ้น!")</script>'; 
        header('Refresh:0; url=../www_employee/vaccin.php');
	} else {
        echo "Error deleting record: " . mysqli_error($connect);
        header('Refresh:0; url=../www_employee/vaccin.phpp');
	}
	mysqli_close($conn);
?>