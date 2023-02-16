<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php 
  require_once('../www/connect.php');
  mysqli_query($conn, "SET NAMES 'utf8' ");
  //query
  $query=mysqli_query($conn,"SELECT COUNT(pig_ID) FROM `pigregister` WHERE pig_status='still'");
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
   
    $res=mysqli_query($conn,"SELECT * from  pigregister WHERE pig_status='still'$limit");
   
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
<?php include_once('../includes/header_employee.php') ?>
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>

        </div>  
        <html>
        
        
        <div>
           
        <center> <h3 class="card-title d-inline-block" >ทะเบียนสุกร<br><br></h3></center>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <section class="content">

      <div align="right">
        <form role="form" action="register_search.php" method="post">
            <label for="register_search.php"></label>
            <input type="text" id="pig_ID" name="pig_ID" placeholder="รหัสสุกร" required>
            <input type="submit" value= "ค้าหา">
            <br>
            <br>
        </form>
     </div >
     
          <table id="dataTable" class="table table-bordered table-striped w-100 " >
            <tr>
              <th>รหัสหมู</th>
              <th>เพศ</th>
              <th>สายพันธุ์</th>
              <th>อาการป่วย</th>
              <th>ผลผลิต</th>
              <th>วัคซีน</th>
              <th><a href="form_insert.php" class="btn btn-primary"><i class="fas fa-plus-square"></i> เพิ่ม </a></th>
            </tr>
            
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_array($res)) { ?>
              <tr>
                <td><?php echo $row['pig_ID']; ?></td>
                <td><?php echo $row['pigSex']; ?></td>
                <td><?php echo $row['pig_breed']; ?></td>
                <td> </a>
                    <a href="../sickpig_employee/inject_search_auto.php?pig_ID=<?php echo $row['pig_ID']; ?>" class=" btn btn-info text-white" >
                    <i class="fas fa-edit"></i>อาการป่วย
                  </a>  </td>
                <th> <a href="../graph_employee/form-search.php?pig_ID=<?php echo $row['pig_ID']; ?>" class=" btn btn-info text-white">
                    <i class="fas fa-edit"></i> ดูผลผลิต
                  </a> 
                  <a href="productupdateformcopy.php?pig_ID=<?php echo $row['pig_ID']; ?>" class="btn btn-sm btn btn-success text-white">
                    <i class="fas fa-edit"></i> เพิ่มผลผลิต    
                  </th>
                  <th> <a href="../inject_employee/inject_search_auto.php?pig_ID=<?php echo $row['pig_ID']; ?>" class=" btn btn-info text-white" >
                    <i class="fas fa-edit"></i> ดูวัคซีน
                  </a> 
                  <td>
                  <a href="form-edit2.php?pig_ID=<?php echo $row['pig_ID']; ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i> เเก้ไข
                  </a> 
                  <a href="delete.php?pig_ID=<?php echo $row['pig_ID']; ?>" onClick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่');" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> ลบ</a>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
          <br>
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
<?php }?>