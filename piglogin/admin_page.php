<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>You are Administrator </h1>
    <p><strong>hi</strong> :&nbsp;<?php print_r($_SESSION);?> //show detail login
      <?php //session_destroy();?>
    </p>
    <p>&nbsp;</p>
    <p><a href="logout.php">Log out</strong></a></p>
    <p>&nbsp;</p>

</body>
</html>
<?php }?>