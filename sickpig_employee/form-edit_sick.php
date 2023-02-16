<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php include_once('../www/authen.php');
include('../www/connect.php');
?>
<?php include_once('../includes/header_employee.php') ?>
        <section class="content">

<!-- Default box -->
<?php 
  include_once('../www/connect.php');
  $sickid=$_GET['sickid'];
  $sql1="select * from sickpig where sickid = $sickid";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
?>
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <center> <h3 class="card-title d-inline-block" >เเก้ไข</h3></center>
        </div>
        <center>
        <form role="form" action="update_sick.php" method="post" enctype="multipart/form-data" >
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="sickid" name="sickid" value="<?php echo $row1['sickid']=$sickid?>" hidden>
                  <label for="sickid"></label>
              </div>
              <div class="form-group col-md-4">
                  <label for="sick">อาการป่วย</label>
                  <input type="text" class="form-control" id="sick" name="sick" value="<?php echo $row1['sick']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="pig_sick_ID">รหัสสุกร</label>
                  <input type="text" class="form-control" id="pig_sick_ID" name="pig_sick_ID" value="<?php echo $row1['pig_sick_ID']?>">
              </div> 
              <div class="form-group col-md-4">
                  <label for="sickdate">วันที่ป่วย</label>
                  <input type="date" class="form-control" id="sickdate" name="sickdate" value="<?php echo $row1['sickdate']?>">
              </div>   
              <div class="form-group col-md-4">
            <label for="file">รูปสุกร</label>
            <input type="file" class="form-control" id="file" name="file"  >
            <input type="hidden" name="OldFile" value="<?php echo $row1["sick_img"];?>">
        </div>               
            </div>

          </div>
          <div class="card-footer">
          <a href="../www_employee/register.php" class="btn btn-warning float-left">ย้อนกลับ</a>
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
