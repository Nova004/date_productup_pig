<?php 
include_once('../www/connect.php');
  $sql="SELECT * FROM `sickpig` WHERE 1
  ORDER BY 	sickid  ASC;";
  $res=mysqli_query($conn,$sql);
?>
<?php include_once('../includes/header.php') ?> 
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>
        </div>  
        <html>
        
        
        <div>
           
        <center> <h3 class="card-title d-inline-block">รายการป่วย<br><br></h3></center>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <section class="content">

          
          <table id="dataTable" class="table table-bordered table-striped w-100 " >
            <thead>
            <tr>
              <th>รหัสป่วย</th>
              <th>อาการ</th>
              <th>รหัสสุกร</th>
              <th>วันที่ป่วย</th>
              <th><a href="form_insert_user.php" class="btn btn-infobtn btn-primary"><i class="fas fa-plus-square"></i> เพิ่ม </a></th>
            </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_array($res)) { ?>
              <tr>
                <td><?php echo $row['sickid']; ?></td>
                <td><?php echo $row['sick']; ?></td>
                <td><?php echo $row['pig_sick_ID']; ?></td>
                <td><?php echo $row['sickdate']; ?></td>

                <td>
                  <a href="form-edit_user.php?sickid =<?php echo $row['sickid']; ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i> เเก้ไข
                  </a> 
                  <a href="delete.php?sickid =<?php echo $row['sickid']; ?>" onClick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่');" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> ลบ</a>
              </tr>
            <?php } ?>
            </tbody>
          </table>
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