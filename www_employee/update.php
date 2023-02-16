<?php 
     require_once('../www/connect.php');
        $pig_ID=$_POST['pig_ID'];
        $pigSex=$_POST['pigSex'];
        $pig_breed=$_POST['pig_breed'];
        $hdnOldFile=$_POST['hdnOldFile'];
        print_r($_FILES); 
    
    
        $dir = "../www/img/"; 

       $fileImage  = $dir . basename($_FILES["file"]["name"]);
       $nameimg = basename($_FILES["file"]["name"]);
       $sql="UPDATE `pigregister` SET `pigSex` = '$pigSex',`pig_breed` = '$pig_breed',`pig_img` = '$nameimg' WHERE `pig_ID` = $pig_ID;";
       $res= $conn->query($sql) or die($conn->error);
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){
         
         @unlink("../www/img/".$hdnOldFile);
            echo "ไฟล์ภาพชื่อ ". basename($_FILES["file"]["name"]) . "อัพโหลด";
            
            header('Refresh:0; url=register.php');//สำเร็จ

        
         } else{
            $sql1="UPDATE `pigregister` SET `pigSex` = '$pigSex',`pig_breed` = '$pig_breed',`pig_img` = '$hdnOldFile' WHERE `pig_ID` = $pig_ID;";
            $res1= $conn->query($sql1) or die($conn->error);
            echo "เกิดข้อผิดพลาด";
            header('Refresh:0; url=register.php');//ไม่สำเร็จ
         }

        
    
        

?>