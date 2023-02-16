<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php  $userID = $_SESSION["userID"];  ?>
<?php include_once('authen.php');
include('../www/connect.php');
?>
<?php include_once('../includes/header_employee.php') ?>
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>
        </div>
        <section class="content">

<!-- Default box -->
<?php 
  include_once('../www/connect.php');
  $pig_ID=$_GET['pig_ID'];
  $sql1="SELECT * FROM `produtpig` WHERE pig_produt = $pig_ID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
?>
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <center> <h3 class="card-title d-inline-block" >เกิดลูกสุกร</h3></center>
        </div>
        <center>
        <form role="form" action="productupdatecopy.php" method="post" >
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="pig_produt_month_ID" name="pig_produt_month_ID" value="<?php echo $row1['pig_ID']=$pig_ID?>" hidden>
                  <label for="pig_produt_month_ID">รหัสสุกร</label>
                  <input type="text" class="form-control" id="pig_produt_month_ID" name="pig_produt_month_ID" value="<?php echo $row1['pig_ID']?>" disabled>
              </div>
              <br>
              <div class="form-group col-md-4">
                  <label for="produt_amount">เพิ่มลูกหมู</label>
                  <input type="text" class="form-control" id="produt_amount" name="produt_amount">
              </div>
              <div class="form-group col-md-4">
                  <label for="usersID_inject"></label>
                  <input type="text" class="form-control" id="usersID_inject" name="usersID_inject" value="<?php echo  $userID ?>" hidden >
              </div>
              <div class="form-group col-md-4">
                  <label for="date_produt">วันที่</label>
                  <input type="date" class="form-control" id="date_produt" name="date_produt">
              </div>
              
            </div>

          </div>
          <div class="card-footer">
          <a href="register.php" class="btn btn-warning float-left">ย้อนกลับ</a>
          <input type="submit" name="submit" class="btn btn-primary float-right" value="บันทึกข้อมูล">
          </div>
        </form>
      </div>    
    </section>
</center>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="../../../../node_modules/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>


</body>
</html>
<?php }?>