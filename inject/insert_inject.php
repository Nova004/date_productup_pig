
<?php 
    require_once('../www/connect.php');
    date_default_timezone_set('Asia/Bangkok');
    echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $vaccinID=$_POST['vaccinID'];
        $pigID_inject=$_POST['pigID_inject'];
        $usersID_inject=$_POST['usersID_inject'];
        $date_inject=$_POST['date_inject'];
        $amount=$_POST['amount'];
        $manage=$_POST['manage'];    
        $sql="INSERT INTO `inject` values('','$vaccinID','$amount','$manage','$pigID_inject','$usersID_inject','$date_inject')";
        $res= $conn->query($sql) or die($conn->error);
            if($res){
               
                echo '<script>alert("เพิ่มสำเร็จแล้ว") </script>';
               header('Refresh:0; url=../www/register.php');//สำเร็จ
            }else{
                echo $sql;
            }

       
    }else{
        header('Location: ../../../../login.php');  
    }   
    ?>