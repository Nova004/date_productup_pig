<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php 
  require_once('../www/connect.php');
  include_once('../includes/datethai2.php');
?>
<?php include_once('../includes/header.php') ?> 
<p> 
<div class= "row">
      <div class = "col-md-4">
      <form action = "form_insert.php" method = "post">
      <a href='../www/register_sick.php?'><button type='button' class='btn btn-info'><i class='fas fa-stethoscope' style='font-size:20px;color:white'> สุกรป่วย</i></a>
      </div>
	  <div class = "col-md-4">
	     <center>
         
		 </center>
      </div>
      <div class = "col-md-4">
	   <form action = "../www/register_sick.php" method = "post">
       <div class="input-group">
            <span class="input-group-text" style='font-size:16px;color:blue'>รหัสสุกร</span>
		    <input type = "text" class="form-control" name = "pig_sick_ID"> 
		    <input type = "submit" class="btn btn-success" value = "ค้นหา"> 
		  </div>
		</div>
	   </form>
	 </div>
    </div>
    <br>
 <p>
<center>
<div class="row" align="center">
<?php
$pig_ID=$_POST['pig_sick_ID'];
$sql="SELECT * FROM `sickpig` WHERE pig_sick_ID = '$pig_ID'
ORDER BY sickdate DESC;";
$query=mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);
$num_fields = mysqli_num_fields($query);
$i=1;
while($row=mysqli_fetch_array($query)){
?>
<div class="col-md-4">
		<div class="card shadow-sm" id="bg_card">
		        <div class="card-header bg-secondary text-white"><h5> รหัสสุกร <?php echo "$row[pig_sick_ID]"; ?></h5></div>
				<div class="card-body">
	              <?php echo "<img class='rounded' width='200' height ='150'src ='../sickpig_employee/img/".$row['sick_img']."'>";?>
                </div>
        <div class="card-body">
        <h5>อาการป่วย : <?php echo $row['sick']; ?></h5>
        <h7>วันที่ : <?php echo dates_thai("$row[sickdate]");?></h7>
	
                </div>
				<div class="card-footer">

				</div>
			</div>
    	</div>
<?php
if($i%3==0){
echo"<p>";
}
$i++;
}
?>
</div>
</p>

<?php
  mysqli_close($conn);
?>
<?php }?>