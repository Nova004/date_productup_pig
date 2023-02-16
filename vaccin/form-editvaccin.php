<?php include_once('../www/authen.php');
include('../www/connect.php');
?>
<?php include_once('../includes/header.php') ?> 
        <section class="content">

<!-- Default box -->
<?php 
  include_once('../www/connect.php');
  $vaccinID=$_GET['vaccinID'];
  $sql1="select * from vaccin where vaccinID = $vaccinID";
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
        <form role="form" action="updatevaccin.php" method="post" >
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="vaccinID" name="vaccinID" value="<?php echo $row1['vaccinID']=$vaccinID?>" hidden>
                  <label for="vaccinID">รหัสวัคซีน</label>
                  <input type="text" class="form-control" id="vaccinID" name="vaccinID" value="<?php echo $row1['vaccinID']?>" disabled>
              </div>
              <div class="form-group col-md-4">
                  <label for="vaccinName">ชื่อวัคซีน</label>
                  <input type="text" class="form-control" id="vaccinName" name="vaccinName" value="<?php echo $row1['vaccinName']?>">
              </div>          
            </div>

          </div>
          <div class="card-footer">
          <a href="../www/vaccin.php" class="btn btn-warning float-left">ย้อนกลับ</a>
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
