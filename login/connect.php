<?php
$conn= mysqli_connect("localhost","root","12345678","pigdate") or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>