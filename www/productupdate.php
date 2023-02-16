<?php 
    require_once('connect.php');
    date_default_timezone_set('Asia/Bangkok');
    
    if(isset($_POST['submit'])){
         //echo '<pre>',print_r ($_POST),'<pre>';
        $pig_ID=$_POST['pig_ID'];
        $produt=$_POST['produt'];
        $productnumber=$_POST['productnumber'];
        $sql="UPDATE `produtpig` 
        SET `produt` = `produt`+'$productnumber'     
        WHERE `pig_produt` = $pig_ID;";
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
   