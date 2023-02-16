<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php include_once('authen.php');
include('connect.php');
?>
<?php include_once('../includes/header.php') ?> 
        <section class="content">

<!-- Default box -->
<?php 
  include_once('connect.php');
  $pig_ID=$_GET['pig_ID'];
  $sql1="select * from pigregister where pig_ID = $pig_ID";
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
        <form role="form" action="update.php" method="post" >
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="pig_ID" name="pig_ID" value="<?php echo $row1['pig_ID']=$pig_ID?>" hidden>
              <input type="text" class="form-control" id="pigSex" name="pigSex" value="<?php echo $row1['pigSex']?>" hidden>
                  <label for="pig_ID">รหัสสุกร</label>
                  <input type="text" class="form-control" id="pig_ID" name="pig_ID" value="<?php echo $row1['pig_ID']?>" disabled>
              </div>
              <div class="form-group col-md-4">
                  <label for="pigSex">เพศ</label>
                  <input type="text" class="form-control" id="pigSex" name="pigSex" value="<?php echo $row1['pigSex']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="pig_breed">สายพันธุ์</label>
                  <input type="text" class="form-control" id="pig_breed" name="pig_breed" value="<?php echo $row1['pig_breed']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="pigSick">อาการป่วย</label>
                  <input type="text" class="form-control" id="pigSick" name="pigSick" value="<?php echo $row1['pigSick']?>">
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
