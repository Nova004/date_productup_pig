<?php 
     require_once('../www/connect.php');
     echo '<pre>',print_r ($_POST),'<pre>';
     $sickid=$_POST['sickid'];
     $sick=$_POST['sick'];
     $pig_sick_ID=$_POST['pig_sick_ID'];
     $sickdate=$_POST['sickdate'];
     $OldFile=$_POST['OldFile'];
        print_r($_FILES); 
    
    
        $dir = "img/"; 

       $fileImage  = $dir . basename($_FILES["file"]["name"]);
       $nameimg = basename($_FILES["file"]["name"]);
       $sql="UPDATE `sickpig` SET `sick` = '$sick',`pig_sick_ID` = '$pig_sick_ID',`sickdate` = '$sickdate',`sick_img` = '$nameimg' WHERE `sickid` = $sickid;";
       $res= $conn->query($sql) or die($conn->error);
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){

         @unlink("img/".$OldFile);
                echo "ไฟล์ภาพชื่อ ". basename($_FILES["file"]["name"]) . "อัพโหลด";
         
                header('Refresh:0; url=../www_employee/register.php');//สำเร็จ
        
         } else{
            $sql1="UPDATE `sickpig` SET `sick` = '$sick',`pig_sick_ID` = '$pig_sick_ID',`sickdate` = '$sickdate',`sick_img` = '$OldFile' WHERE `sickid` = $sickid;";
            $res1= $conn->query($sql1) or die($conn->error);
            echo "เกิดข้อผิดพลาด";
            header('Refresh:0; url=../www_employee/register.php');//ไม่สำเร็จecho "เกิดข้อผิดพลาด";
         }

        
    
        

?>