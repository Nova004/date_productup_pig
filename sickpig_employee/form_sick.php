<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php 
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
        <form role="form" action="insert_sick.php" method="post" enctype="multipart/form-data" >
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="pig_sick_ID" name="pig_sick_ID" value="<?php echo $row1['pig_ID']=$pig_ID?>" hidden>
                  <label for="pig_sick_ID">รหัสสุกร</label>
                  <input type="text" class="form-control" id="pig_sick_ID" name="pig_sick_ID" value="<?php echo $row1['pig_ID']?>" disabled>
              </div>
              <div class="form-group col-md-4">
                  <label for="sick">อาการป่วย</label>
                  <input type="text" class="form-control" id="sick" name="sick">
              </div>
              <div class="form-group col-md-4">
                  <label for="sickdate">วันที่</label>
                  <input type="date" class="form-control" id="sickdate" name="sickdate">
              </div>
              <div class="form-group col-md-4">
            <label for="file">รูปสุกร</label>
            <input type="file" class="form-control" id="file" name="file" >
        </div>    
            </div>

          </div>
          <div class="form-group col-md-3">
                  <label for="submit" style="opacity: 0;">submit</label><br>
                  <input type="submit" class="btn btn-success"name="submit">
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