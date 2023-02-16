<?php 
    require_once('../www/connect.php');
    date_default_timezone_set('Asia/Bangkok');
    
    if(isset($_POST['submit'])){
         echo '<pre>',print_r ($_POST),'<pre>';
        $produt_ID=$_POST['produt_ID']; 
        $pig_produt_month_ID=$_POST['pig_produt_month_ID'];
        $produt_amount=$_POST['produt_amount'];
        $users_ID=$_POST['users_ID'];
        $date_produt=$_POST['date_produt'];
        $sql="INSERT INTO `produt_month` values('$produt_ID','$pig_produt_month_ID','$produt_amount','$users_ID','$date_produt')";
        $res= $conn->query($sql) or die($conn->error);
        if($res){
               
            echo '<script>alert("เพิ่มสำเร็จแล้ว") </script>';
           header('Refresh:0; url=register.php');//สำเร็จ
        }else{
            echo $sql;
        }

   
}else{
    header('Location: ../../../../login.php');  
}   
?>    
   