
<?php 
    require_once('connect.php');
    date_default_timezone_set('Asia/Bangkok');
    echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $pigSex=$_POST['pigSex'];
        $pig_breed=$_POST['pig_breed'];
        $pigSick=$_POST['pigSick'];
        $pig_img=$_POST['pig_img'];     
        $sql="INSERT INTO `pigregister` values('','$pigSex','$pig_breed','$pigSick')";
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