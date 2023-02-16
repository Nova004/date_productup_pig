<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php include_once('authen.php');
include('../www/connect.php');
?>
<!doctype html>
<html lang="en">
<?php include_once('../includes/header_employee.php') ?> 

<!-- Default box -->
<div class="card">
  <div class="card-header">
  <center> <h3 class="card-title d-inline-block" >ลงทะเบียนสุกร</h3></center>
  </div>
  <!-- /.card-header -->
  <form role="form" action="insert.php" method="post" enctype="multipart/form-data" >
    <div class="card-body">
      <div class="form-row">
      <center>
      <table >
        <div class="form-group col-md-4">
            <label for="pig_breed">สายพันธุ์</label>
            <input type="text" class="form-control" id="pig_breed" name="pig_breed" >
        </div>
        <div class="form-group col-md-4">
        <label for="pigSex">เพศ</label>
                <select name="pigSex" class="form-control" required>
                  <option value="">-เพศ-</option>
                  <option value="เพศผู้">-เพศผู้</option>
                  <option value="เพศเมีย">-เพศเมีย</option>
                </select>
        </div>
        <div class="form-group col-md-4">
            <label for="file">รูปสุกร</label>
            <input type="file" class="form-control" id="file" name="file" >
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