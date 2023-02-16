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
<?php 
  include_once('../www/connect.php');
  $vaccinID=$_GET['vaccinID'];
  $sql1="SELECT * FROM `produtpig` WHERE pig_produt = $vaccinID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
?>
        <section class="content">
<!-- Default box -->
<div class="card">
<div class="card">
  <div class="card-header">
  <center> <h3 class="card-title d-inline-block" >ฉีดวัคซีน</h3></center>
  </div>
  <!-- /.card-header -->
  <form role="form" action="insert_inject.php" method="post"enctype="multipart/form-data"id="formRegister">
    <div class="card-body">
      <div class="form-row">
      <center>
      <table >
        <div class="form-group col-md-4">
              <input type="text" class="form-control" id="vaccinID" name="vaccinID" value="<?php echo $row1['vaccinID']=$vaccinID?>" hidden>
                  <label for="vaccinID">รหัสวัคซีน</label>
                  <input type="text" class="form-control" id="vaccinID" name="vaccinID" value="<?php echo $row1['vaccinID']?>" disabled>
              </div>
        <div class="form-group col-md-4">
            <label for="amount">เข็มที่</label>
            <input type="text" class="form-control" id="amount" name="amount" >
        </div>
        <div class="form-group col-md-4">
            <label for="manage">การจัดการเพิ่มเติม</label>
            <input type="text" class="form-control" id="manage" name="manage" >
        </div>
        <div class="form-group col-md-4">
            <label for="pigID_inject">รหัสสุกร</label>
            <input type="text" class="form-control" id="pigID_inject" name="pigID_inject" >
        </div>
        <div class="form-group col-md-4">
                  <label for="usersID_inject">รหัสพนักงาน</label>
                  <select class="form-control" name="usersID_inject">
                    <?php $sql2="SELECT * FROM users";
                       $res=mysqli_query($conn,$sql2);
                       while($rows=mysqli_fetch_assoc($res)){
                    ?>
                    <option value="<?php echo $rows['userID']?>"><?php echo $rows['userID']?></option>
                    <?php } ?>
                 </select>
              </div>
        <div class="form-group col-md-4">
            <label for="date_inject">วันที่</label>
            <input type="date" class="form-control" id="date_inject" name="date_inject"  >
        </div>                             
        <div class="form-group col-md-3">
                  <label for="submit" style="opacity: 0;">submit</label><br>
                  <input type="submit" class="btn btn-success"name="submit">
              </div>  

           </select>
           
        

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>