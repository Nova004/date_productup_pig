<?php include_once('../www/authen.php');
include('../www/connect.php');
?>
<?php include_once('../includes/header_employee.php') ?> 
        <section class="content">

<!-- Default box -->
<?php 
  include_once('../www/connect.php');
  $userID=$_GET['userID'];
  $sql1="select * from users where userID = $userID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ลงทะเบียนผู้ใช้ </title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="alert alert-info" role="alert">
            <h3>เเก้ไขผู้ใช้ </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <form role="form" action="update_user_employee.php" method="post" >
            <h5>*กรุณากรอกข้อมูลให้ครบทุกช่อง</h5>
            <br>
            <div class="row">
            <input type="text" class="form-control" id="userID" name="userID" value="<?php echo $row1['userID']=$userID?>" hidden>
            <div class="col-1 col-sm-1 mb-3">
            </div>
            <div class="row">
              <div class="col-12 col-sm-2 mb-3">
                <select name="Title" class="form-control" required>
                  <option value="<?php echo $row1['Title']?>">-<?php echo $row1['Title']?>-</option>
                  <option value="นาย">-นาย</option>
                  <option value="นางสาว">-นางสาว</option>
                </select>
              </div>
              <div class="col-12 col-sm-7 mb-3">
                <input type="text"  name="name" class="form-control" value="<?php echo $row1['name']?>" placeholder="ชื่อ-นามสกุล" required> 
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <select name="Department" class="form-control" required>
                  <option value="<?php echo $row1['Department']?>">-<?php echo $row1['Department']?>-</option>
                </select>
              </div>
              <div class="col-12 col-sm-6 mb-3">
              <select name="Sex" class="form-control" required>
                  <option value="<?php echo $row1['Sex']?>">-<?php echo $row1['Sex']?>-</option>
                  <option value="ชาย">-ชาย</option>
                  <option value="หญิง">-หญิง</option>
                </select>
            </div>

             <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="telephone_number" class="form-control" value="<?php echo $row1['telephone_number']?>" placeholder="เบอร์โทรศัพท์ 10 หลัก" minlength="10" maxlength="10"  required> 
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="email" name="email" class="form-control" value="<?php echo $row1['email']?>" placeholder="email(ใส่หรือไม่ใส่ก็ได้)" required>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="username" class="form-control" value="<?php echo $row1['username']?>" placeholder="ชื่อผู้ใช้" required> 
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="text" name="password" class="form-control" value="<?php echo $row1['password']?>" placeholder="รหัสผ่าน" required>
              </div>
            </div>

            <div class="form-group col-md-3">
                  <label for="submit" style="opacity: 0;">submit</label><br>
                  <input type="submit" class="btn btn-success"name="submit">
              </div>  
            </div>
          </form>
        </div>
      </div>
    </div>


    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>