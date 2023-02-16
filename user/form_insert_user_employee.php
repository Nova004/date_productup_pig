<?php include_once('../www/authen.php');
include('../www/connect.php');
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
<div class="card">
  <div class="card-header">
  <center> <h3 class="card-title d-inline-block" >เพิ่มหนักงาน</h3></center>
  </div>
  <!-- /.card-header -->
  <form role="form" action="insert_user_employee.php" method="post"enctype="multipart/form-data"id="formRegister">
    <div class="card-body">
      <div class="form-row">
      <center>
      <table >
        <div class="form-group col-md-4">
            <label for="Title">คำนำหน้า</label>
            <input type="text" class="form-control" id="Title" name="Title" >
        </div>
        <div class="form-group col-md-4">
            <label for="name">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="form-group col-md-4">
            <label for="Sex">เพศ</label>
            <input type="text" class="form-control" id="Sex" name="Sex"  >
        </div>
        <div class="form-group col-md-4">
            <label for="Sex">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="username" name="username"  >
        </div>
        <div class="form-group col-md-4">
            <label for="Sex">รหัสผ่าน</label>
            <input type="text" class="form-control" id="password" name="password"  >
        </div>
        <div class="form-group col-md-4">
            <label for="Department">ตำเเหน่ง</label>
            <input type="text" class="form-control" id="Department" name="Department"  >
        </div>                             
        <div class="form-group col-md-3">
                  <label for="submit" style="opacity: 0;">submit</label><br>
                  <input type="submit" class="btn btn-success"name="submit">
              </div>  

           </select>
           
        

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>