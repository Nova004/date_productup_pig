
<?php 
    require_once('../www/connect.php');
    date_default_timezone_set('Asia/Bangkok');
    echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $vaccinID=$_POST['vaccinID'];
        $vaccinName=$_POST['vaccinName'];
        $vaccin_Name_eng=$_POST['vaccin_Name_eng'];
        $date=$_POST['date'];   
        $sql="INSERT INTO `vaccin` values('$vaccinID','$vaccinName','$vaccin_Name_eng','$date')";
        $res= $conn->query($sql) or die($conn->error);
            if($res){
               
                echo '<script>alert("เพิ่มสำเร็จแล้ว") </script>';
               header('Refresh:0; url=../www_employee/vaccin.php');//สำเร็จ
            }else{
                echo $sql;
            }

       
    }else{
        header('Location: ../../../../login.php');  
    }   
    ?>