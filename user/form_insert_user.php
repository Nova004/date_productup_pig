<?php include_once('../www/authen.php');
include('../www/connect.php');
?>
<?php include_once('../includes/header.php') ?> 
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ลงทะเบียนผู้ใช้</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="alert alert-info" role="alert">
            <h3>ลงทะเบียนผู้ใช้</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <form role="form" action="insert_user.php" method="post" >
            <h5>*กรุณากรอกข้อมูลให้ครบทุกช่อง</h5>
            <br>
            <div class="row">
              <div class="col-12 col-sm-2 mb-3">
                <select name="Title" class="form-control" required>
                  <option value="">-คำนำหน้าชื่อ-</option>
                  <option value="นาย">-นาย</option>
                  <option value="นางสาว">-นางสาว</option>
                </select>
              </div>
              <div class="col-12 col-sm-7 mb-3">
                <input type="text"  name="name" class="form-control" placeholder="ชื่อ-นามสกุล" required> 
              </div>
              <div class="col-12 col-sm-5 mb-3">
                
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <select name="Department" class="form-control" required>
                  <option value="">-ตำเเหน่ง-</option>
                  <option value="พนักงาน">-พนักงาน</option>
                  <option value="เจ้าของฟาร์ม">-เจ้าของฟาร์ม</option>
                </select>
              </div>
              <div class="col-12 col-sm-6 mb-3">
              <select name="Sex" class="form-control" required>
                  <option value="">-เพศ-</option>
                  <option value="ชาย">-ชาย</option>
                  <option value="หญิง">-หญิง</option>
                </select>
            </div>

             <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="Departmentphone" class="form-control" placeholder="เบอร์โทรศัพท์ 10 หลัก" minlength="10" maxlength="10"  required> 
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="email" name="email" class="form-control" placeholder="email(ใส่หรือไม่ใส่ก็ได้)" required>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="username" class="form-control" placeholder="ชื่อผู้ใช้" required> 
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="text" name="password" class="form-control" placeholder="รหัสผ่าน" minlength="10" maxlength="10" required>
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