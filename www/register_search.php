<?php session_start();?>
<?php 

if (!$_SESSION["userID"]){  //check session

	  Header("Location: ../no_login/index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php 
  require_once('connect.php');
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
   
    $res=mysqli_query($conn,"SELECT * from  pigregister $limit");
   
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
<p> 
    <div class= "row">
      <div class = "col-md-9">
      </div>

      <div class = "col-md-3">
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
 <p>
<center>

<div class="row" align="center">

<?php
$pig_ID=$_POST['pig_ID'];
include("connect.php");
$sql="select * from pigregister WHERE pig_ID = '$pig_ID' order by pig_ID asc";
$query=mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);
$num_fields = mysqli_num_fields($query);
$i=1;
while($rs=mysqli_fetch_array($query)){
?>
<div class="col-md-4">
		<div class="card shadow-sm" id="bg_card">
		        <div class="card-header bg-secondary text-white"><h5> รหัสสุกร <?php echo "$rs[pig_ID]"; ?></h5></div>
				<div class="card-body">
                <h5>สายพันธุ์ <?php echo $rs['pig_breed']; ?></h5>
	              <?php echo "<img class='rounded' width='200' height ='150'src ='img/".$rs['pig_img']."'>";?>
                </div>
				<div class="card-footer">
					<?php echo"<a href='../inject/inject_search_auto.php?pig_ID=$rs[0]'><button type='button' class='btn btn-sm btn-outline-success'><i class='fas fa-eye'style='font-size:14px;color:blue'> ดูข้อมูลวัคซีน </i></a>";?>
          <?php echo"<a href='../sickpig/inject_search_auto.php?pig_ID=$rs[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-heartbeat' style='font-size:14px;color:blue'> อาการป่วย </i></a>";?>
					<?php echo"<a href='../graph/form-search.php?pig_ID=$rs[0]'><button type='button' class='btn btn-sm btn-outline-primary'><i class='fas fa-chart-line' style='font-size:14px;color:blue'> ผลผลิต</i></a>";?>
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