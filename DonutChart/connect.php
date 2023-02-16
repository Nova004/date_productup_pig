<?php
$servername = "localhost";
$username = "root";
$password = "12345678"; //ไม่ได้ตั้งรหัสผ่านก็ลบ yourpassword ออก

try {
  $conn = new PDO("mysql:host=$servername;dbname=pigdate", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
?>