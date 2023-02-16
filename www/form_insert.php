<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php include_once('authen.php');
include('connect.php');
?>
<?php include_once('../includes/header.php') ?> 
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>
           
         
        </div> 
        <section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
  <center> <h3 class="card-title d-inline-block" >ลงทะเบียนสุกร</h3></center>
  </div>
  <!-- /.card-header -->
  <form role="form" action="insert.php" method="post"enctype="multipart/form-data"id="formRegister">
    <div class="card-body">
      <div class="form-row">
      <center>
      <table >
        <div class="form-group col-md-4">
            <label for="pigSex">เพศ</label>
            <input type="text" class="form-control" id="pigSex" name="pigSex" >
        </div>
        <div class="form-group col-md-4">
            <label for="pig_breed">สายพันธุ์</label>
            <input type="text" class="form-control" id="pig_breed" name="pig_breed" >
        </div>
        <div class="form-group col-md-4">
            <label for="pigSick">อาการป่วย</label>
            <input type="text" class="form-control" id="pigSick" name="pigSick" >
        </div>    
        <div class="form-group col-md-3">
                  <label for="submit" style="opacity: 0;">submit</label><br>
                  <input type="submit" class="btn btn-success"name="submit">
              </div>  
           </select>
           
        

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<?php }?>