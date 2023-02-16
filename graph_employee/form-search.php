<?php include_once('../www/authen.php');
include('../www/connect.php');
?>
<!doctype html>
<html lang="en"></html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"
  </head>
  <body OnLoad="document.form1.submit();">
    
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use href="#bootstrap"></use></svg>
            <span class="display-6"> <img src="img/piglogo.png" width="80" height="60" >
</svg > &nbsp;ทะเบียนสุกร</span>
          </a>
          </a>
    
          <ul class="nav nav-pills">
          <li class="nav-item"><a href="../www_employee/index.php" class="nav-link " aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg> &nbsp;Home</a></li>
            <li class="nav-item"><a href="../www_employee/register.php" class=" nav-link active ">register</a></li>
            <li class="nav-item"><a href="../www_employee/vaccin.php" class="nav-link">vaccin</a></li>
            <li class="nav-item"><a href="../inject/inject.php" class="nav-link">inject</a></li>

            
          </ul>
        </header>
        <section class="content">

<!-- Default box -->
<?php 
  include_once('../www/connect.php');
  $pig_ID=$_GET['pig_ID'];
  $sql1="select * from viewpigandprodut where pig_produt_month_ID = $pig_ID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
?>
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <center> <h3 class="card-title d-inline-block" >ค้นหา</h3></center>
        </div>
        <center>
        <form name="form1" method="post" action="r_monthy.php" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="pig_ID" name="pig_ID" value="<?php echo $row1['pig_ID']=$pig_ID?>" hidden>
                  <label for="pig_ID">รหัสสุกร</label>
                  <input type="text" class="form-control" id="pig_ID" name="filUpload" value="<?php echo $row1['pig_ID']?>" disabled>
              </div>    
            </div>

          </div>
          <div class="card-footer">
          <a href="../www_employee/register.php" class="btn btn-warning float-left">ย้อนกลับ</a>
          <input type="submit" name="btnSubmit" class="btn btn-primary float-right" value="ค้นหาผลผลิต">
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

<script language='javascript'>
document.frm_to_submit.submit();
</body>
</html>
