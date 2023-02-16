<?php 
include_once('../www/connect.php');
?>
<?php
    $pig_ID=$_GET['pig_ID'];
    $sql="UPDATE `pigregister` SET `pig_status`='sell'WHERE pig_ID = $pig_ID";
   
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จสิ้น!")</script>'; 
        header('Refresh:0; url=register.php');
	} else {
        echo "Error deleting record: " . mysqli_error($connect);
        header('Refresh:0; url=register.php');
	}
	mysqli_close($conn);
?>