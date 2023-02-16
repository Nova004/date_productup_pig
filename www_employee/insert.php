<?php 
     require_once('../www/connect.php');
        $pigSex=$_POST['pigSex'];
        $pig_breed=$_POST['pig_breed'];
        print_r($_FILES); 
    
    
        $dir = "../www/img/"; 

       $fileImage  = $dir . basename($_FILES["file"]["name"]);
       $nameimg = basename($_FILES["file"]["name"]);
       $sql="INSERT INTO `pigregister` values('','$pigSex','$pig_breed','still','$nameimg')";
       $res= $conn->query($sql) or die($conn->error);
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){

            echo "ไฟล์ภาพชื่อ ". basename($_FILES["file"]["name"]) . "อัพโหลด";
            
            header('Refresh:0; url=register.php');//สำเร็จ

        
         } else{

            echo "เกิดข้อผิดพลาด";
         }

        
    
        

?>
