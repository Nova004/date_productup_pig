<?php 
include_once('../www/connect.php');
?>
<?php
    $userID=$_GET['userID'];
    $sql="DELETE FROM `users` WHERE userID = $userID";
    
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จสิ้น!")</script>'; 
        header('Refresh:0; url=user_employee.php');
	} else {
        echo "Error deleting record: " . mysqli_error($connect);
        header('Refresh:0; url=user_employee.php');
	}
	mysqli_close($conn);
?>