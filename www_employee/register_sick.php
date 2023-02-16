<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php 
  require_once('../www/connect.php');
  mysqli_query($conn, "SET NAMES 'utf8' ");
  //query
  $query=mysqli_query($conn,"SELECT COUNT(pig_ID) FROM `pigregister`");
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
   
    $res=mysqli_query($conn,"SELECT pig_sick_ID, COUNT(pig_sick_ID),pig_ID,pig_img,pig_breed FROM pigsick_view2 WHERE 1 GROUP BY pig_sick_ID ORDER BY pig_sick_ID ASC   $limit");
   
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
<p> 
<div class= "row">
      <div class = "col-md-4">
      </div>
	  <div class = "col-md-4">
	     <center>
          <form action = "form_insert.php" method = "post">
		   <input type = "submit" class="btn btn-success" value = "เพิ่มข้อมูล" >
		  </form>
		 </center>
      </div>
      <div class = "col-md-4">
	   <form action = "register_search.php" method = "post">
       <div class="input-group">
            <span class="input-group-text" style='font-size:16px;color:blue'>รหัสสุกร</span>
		    <input type = "text" class="form-control" name = "pig_ID"> 
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
$sql="SELECT pig_sick_ID, COUNT(pig_sick_ID),pig_ID,pig_img,pig_breed FROM pigsick_view2 WHERE 1 GROUP BY pig_sick_ID ORDER BY pig_sick_ID ASC ";
$query=mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);
$num_fields = mysqli_num_fields($query);
$i=1;
while($row=mysqli_fetch_array($res)){
?>
<div class="col-md-4">
		<div class="card shadow-sm" id="bg_card">
		        <div class="card-header bg-secondary text-white"><h5> รหัสสุกร <?php echo "$row[pig_ID]"; ?></h5></div>
				<div class="card-body">
                <h5>สายพันธุ์ <?php echo $row['pig_breed']; ?></h5>
	              <?php echo "<img class='rounded' width='200' height ='150'src ='../www/img/".$row['pig_img']."'>";?>
                </div>
				<div class="card-footer">
					<?php echo"<a href='../inject_employee/inject_search_auto.php?pig_ID=$row[0]'><button type='button' class='btn btn-sm btn-outline-success'><i class='fas fa-eye'style='font-size:16px;color:blue'> ข้อมูลวัคซีน </i></a>";?>
          <?php echo"<a href='../sickpig_employee/inject_search_auto.php?pig_ID=$row[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-heartbeat' style='font-size:16px;color:blue'> อาการป่วย </i></a>";?>
          <?php echo"<a href='../sickpig_employee/form_sick.php?pig_ID=$row[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-ambulance' style='font-size:16px;color:blue'> เพิ่มอาการป่วย </i></a>";?>
					<?php echo"<a href='../graph_employee/form-search.php?pig_ID=$row[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-chart-line' style='font-size:16px;color:blue'> ผลผลิต</i></a>";?>
          <?php echo"<a href='productupdateformcopy.php?pig_ID=$row[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-box' style='font-size:16px;color:blue'> เพิ่มผลผลิต</i></a>";?>
          <?php echo"<a href='form-edit2.php?pig_ID=$row[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-tools' style='font-size:16px;color:blue'> เเก้ไข</i></a>";?>
          <?php echo"<a href='delete.php?pig_ID=$row[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-trash-alt' style='font-size:16px;color:blue'> ลบ </i></a>";?>
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
<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
</p>

<?php
  mysqli_close($conn);
?>
<?php }?>