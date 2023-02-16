<?php 
     require_once('../www/connect.php');
     $sick=$_POST['sick'];
     $pig_sick_ID=$_POST['pig_sick_ID'];
     $sickdate=$_POST['sickdate'];
        print_r($_FILES); 
    
    
        $dir = "img/"; 

       $fileImage  = $dir . basename($_FILES["file"]["name"]);
       $nameimg = basename($_FILES["file"]["name"]);
       $sql="INSERT INTO `sickpig` values('','$sick','$pig_sick_ID','$sickdate','$nameimg')";
       $res= $conn->query($sql) or die($conn->error);
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){

            echo "ไฟล์ภาพชื่อ ". basename($_FILES["file"]["name"]) . "อัพโหลด";
            
            header('Refresh:0; url=../www_employee/register.php');//สำเร็จ

        
         } else{

            echo "เกิดข้อผิดพลาด";
         }

        
    
        

?>