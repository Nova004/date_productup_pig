<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php  $name = $_SESSION["Department"];  ?>
<?php include_once('../includes/header_employee.php') ?>  
<h6 align = 'right' ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg><?php  echo $name;?></h6> 

<body bgcolor="">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">ภาพรวม</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                
                        </div>

                        <div class="col-md-6">
                        <div class="card-header">
                        <?php include_once('../DonutChart/DonutChart.php') ?>
                      
                </div>
                </div>
            <div class="col-md-6">
            <div class="card-header">
                    <?php include_once('../graph_employee/r_breed.php') ?>
                </div>

                </div>
                        </div>
                        <html>

        
    <!-- /.content-header -->
    <body>
    <!-- Main content -->
    <section class="content">
     
              
              <div class="card-footer">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                    <?php 
                    require_once('../www/connect.php');
                          $sql="SELECT COUNT(*) as summember FROM `pigregister`"; 
                          $res=mysqli_query($conn,$sql);
                          $row=mysqli_fetch_array($res);
                        ?>
                    <?php $sql1="SELECT COUNT(*) as sumteacher FROM users";
                    $res1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_array($res1);
                    ?>
                    <?php $sql2="SELECT SUM(produt_amount) as produt_amount FROM view_breed_produt";
                    $res2=mysqli_query($conn,$sql2);
                    $row2=mysqli_fetch_array($res2);
                    ?>
                    <?php $sql3="SELECT COUNT(*) as sumparent FROM vaccin";
                    $res3=mysqli_query($conn,$sql3);
                    $row3=mysqli_fetch_array($res3);
                    ?>

                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <center><h3><?php echo $row['summember']?></h3></center>
              <center><a href="../www_employee/register.php" class=" nav-link active "><h4>All pig</h4></a></center>
                <center><a href="../www_employee/register.php" class=" nav-link active "><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-piggy-bank-fill" viewBox="0 0 16 16">
  <path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595Zm7.173 3.876a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199Zm-8.999-.65a.5.5 0 1 1-.276-.96A7.613 7.613 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.602 6.602 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
</svg></a></center>
<br>
              </div>
              <div class="icon">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-success">
              <div class="inner">
              
                <center><h3><?php echo $row1['sumteacher']?></h3></center>
                <center><a href="../user/user_employee.php" class=" nav-link active "><h4>All employee</h4></a></center>
                <center><a href="../user/user_employee.php" class=" nav-link active "><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg></a></center>
<br>
              </div>
              <div class="icon">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <center><h3><?php echo $row2['produt_amount']?></h3></center>
                <center><a href="../graph_employee/r_breedtable.php" class=" nav-link active "><h4>All produt</h4></a></center>
                <center><a href="../graph_employee/r_breedtable.php" class=" nav-link active "><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg></a></center>
<br>
              </div>
              <div class="icon">
               
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <center><h3><?php echo $row3['sumparent']?></h3></center>
                <center><a href="../www_employee/vaccin.php" class=" nav-link active "><h4>All vaccin</h4></a></center>
                <center><a href="../www_employee/vaccin.php" class=" nav-link active "><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-capsule" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z"/>
</svg></a></center>
<br>
              </div>
              <div class="icon">
     
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- footer -->
 
</div> 
                    </div>
                </div>
            </div>
        </div>     
        </div>
    </div>
</div>
<html>

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




    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
  
</html>

     

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




    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
  
</html>
<?php }?>