<?php 
include_once('../www/connect.php');
?>
<?php
    $injectID=$_GET['injectID'];
    $sql="DELETE FROM `inject` WHERE injectID = $injectID";
    
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จสิ้น!")</script>'; 
        header('Refresh:0; url=inject.php');
	} else {
        echo "Error deleting record: " . mysqli_error($connect);
        header('Refresh:0; url=inject.php');
	}
	mysqli_close($conn);
?>