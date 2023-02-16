<?php 
  require_once('../www/connect.php');
  mysqli_query($conn, "SET NAMES 'utf8' ");
  //query
  $query=mysqli_query($conn,"SELECT COUNT(injectID) FROM `inject_view2`");
    $row = mysqli_fetch_row($query);
   
    $rows = $row[0];
    
    $page_rows = 10;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
   
    $last = ceil($rows/$page_rows);
    if($last < 1){
      $last = 1;
    }
   
    $pagenum = 1;
   
    if(isset($_GET['pn'])){
      $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
    }
   
    if ($pagenum < 1) {
      $pagenum = 1;
    }
    else if ($pagenum > $last) {
      $pagenum = $last;
    }
   
    $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
   
    $res=mysqli_query($conn,"SELECT * from  inject_view2  $limit");
   
    $paginationCtrls = '';
   
    if($last != 1){
   
    if ($pagenum > 1) {
  $previous = $pagenum - 1;
      $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info text-">Previous</a> &nbsp; &nbsp; ';
   
      for($i = $pagenum-4; $i < $pagenum; $i++){
        if($i > 0){
      $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
        }
    }
  }
   
    $paginationCtrls .= ''.$pagenum.' &nbsp; ';
   
    for($i = $pagenum+1; $i <= $last; $i++){
      $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
      if($i >= $pagenum+4){
        break;
      }
    }
   
  if ($pagenum != $last) {
  $next = $pagenum + 1;
  $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
  }
    }  
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
           
        <center> <h3 class="card-title d-inline-block">รายการฉีดวัคซีน<br><br></h3></center>
<!-- /.ค้นหา -->
        <div align="right">
        <form role="form" action="inject_search.php" method="post">
            <label for="inject_search.php"></label>
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
                <td><?php echo $row['date_inject']; ?></td>
               
              </tr>
            <?php } ?>
            </tbody>
          </table>
          <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
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