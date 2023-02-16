<?php include_once('../www/authen.php');
include('../www/connect.php');
?>
<?php include_once('../includes/header.php') ?> 
        <section class="content">
        <?php 
  include_once('../www/connect.php');
  $injectID=$_GET['injectID'];
  $sql1="select * from inject_view2 where injectID = $injectID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
  $vaccinID_inject=$row1['vaccinID_inject'];

  $injectID=$_GET['injectID'];
  $sql2="select * from inject_view2 where injectID = $injectID";
  $res2=mysqli_query($conn,$sql2);
  $row2=mysqli_fetch_assoc($res2);
  $usersID_inject=$row2['usersID_inject'];
?>
?>
<!-- Default box -->

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <center> <h3 class="card-title d-inline-block" >เเก้ไข</h3></center>
        </div>
        <center>
        <form role="form" action="update_inject.php" method="post" >
        <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="injectID" name="injectID" value="<?php echo $row1['injectID']=$injectID?>" hidden>
                  <label for="injectID">รหัสฉีดวัคซีน</label>
                  <input type="text" class="form-control" id="injectID" name="injectID" value="<?php echo $row1['injectID']?>" disabled>
              </div>
             <div class="form-group col-md-4">
                  <label for="vaccinID_inject">วัคซีน</label>
                  <select class="form-control" id="vaccinID_inject" name="vaccinID_inject">
                  <?php 
                  $sql1="select * from vaccin";
                  $res=mysqli_query($conn,$sql1);
                  while($row=mysqli_fetch_array($res)){
                  ?>
                  <option value="<?php echo $row['vaccinID']?>" <?php if($row['vaccinID']==$vaccinID_inject){
                      echo "selected";
                  }?>><?php echo $row['vaccinName']?></option>
                  <?php }
                  ?>
                  </select>
              </div>
              <div class="form-group col-md-4">
                  <label for="amount">เข็มที่</label>
                  <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $row1['amount']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="manage">การจัดการเพิ่มเติม</label>
                  <input type="text" class="form-control" id="manage" name="manage" value="<?php echo $row1['manage']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="pigID_inject">รหัสสุกร</label>
                  <input type="text" class="form-control" id="pigID_inject" name="pigID_inject" value="<?php echo $row1['pigID_inject']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="usersID_inject">รหัสพนักงาน</label>
                  <select class="form-control" id="usersID_inject" name="usersID_inject">
                  <?php 
                  $sql2="select * from users";
                  $res=mysqli_query($conn,$sql2);
                  while($row=mysqli_fetch_array($res)){
                  ?>
                  <option value="<?php echo $row['userID']?>" <?php if($row['userID']==$usersID_inject){
                      echo "selected";
                  }?>><?php echo $row['userID']?></option>
                  <?php }
                  ?>
                  </select>
              </div>
              <div class="form-group col-md-4">
                  <label for="date_inject">วันที่</label>
                  <input type="date" class="form-control" id="date_inject"  name="date_inject" value="<?php echo $row1['date_inject']?>">
              </div>
              
            </div>

          </div>
          <div class="card-footer">
          <a href="inject.php" class="btn btn-warning float-left">ย้อนกลับ</a>
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
