<?php 
include_once('../www/connect.php');
include_once('../includes/datethai2.php');
$pigID_inject=$_POST['pig_ID'];
  $sql="SELECT * FROM `inject_view2` WHERE `pigID_inject` = '$pigID_inject'
  ORDER BY date_inject DESC;";
  $res=mysqli_query($conn,$sql);
?>
<?php include_once('../includes/header_employee.php') ?>
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>
        </div>  
        <html>
        
        
        <div>
           
        <center> <h3 class="card-title d-inline-block"> <h3 class="card-title d-inline-block">รายการฉีดวัคซีน </svg> สุกร <?php  echo $pigID_inject;?> </h3><br><br></center>
<!-- /.ค้นหา -->
        <div align="right">
        <form role="form" action="inject_search.php" method="post">
            <label for="inject_search"></label>
  <input type="text" id="pig_ID" name="pig_ID" placeholder="รหัสสุกร" required>
  <input type="submit" value= "ค้าหา">
  <br>
  <br>
</form>
</div >
<!-- /.จบค้นหา -->

        </ฝdiv>
        <!-- /.card-header -->
        <div class="card-body">
        <section class="content">         
          <table id="dataTable" class="table table-bordered table-striped w-100 " >
            <thead>
            <tr>
              <th>รหัสฉีดวัคซีน</th>
              <th>ชื่อวัคซีน</th>
              <th>เข็มที่</th>
              <th>การจัดการเพิ่มเติม</th>
              <th>รหัสสุกร</th>
              <th>ชื่อ-นามสกุล</th>
              <th>วันที่</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_array($res)) { ?>
              <tr>
                <td><?php echo $row['injectID']; ?></td>
                <td><?php echo $row['vaccinName']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['manage']; ?></td>
                <td><?php echo $row['pigID_inject']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo dates_thai("$row[date_inject]");?></td>
                <td>
                  <a href="form-edit_inject.php?injectID=<?php echo $row['injectID']; ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i> เเก้ไข
                  </a> 
                  <a href="delete.php?injectID=<?php echo $row['injectID']; ?>" onClick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่');" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> ลบ</a>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          <center> <a href="../www_employee/register.php" class="btn btn-warning float-left">ย้อนกลับ</a></center> 
          </div>
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
            </section>
    </section>
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
<script src="../../plugins/responsive/dataTables.responsive.min.js"></script> <!-- responsive-->


<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true
    });
  });

  function deleteItem (teacherID) { 
    if( confirm('คุณต้องการลบข้อมูลนี้หรือไม่') == true){
      window.location=`delete.php?teacherID=${teacherID}`;
      // window.location='delete.php?id='+id;
    }else{

    }
  };

</script> 
        </body>
        
        </html>  

    


    
  </body>
</html>