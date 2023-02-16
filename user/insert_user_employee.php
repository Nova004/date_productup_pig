
<?php 
    require_once('../www/connect.php');
    date_default_timezone_set('Asia/Bangkok');
    echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $Title=$_POST['Title'];
        $name=$_POST['name'];
        $Sex=$_POST['Sex'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $Department	=$_POST['Department'];      
        $sql="INSERT INTO `users` values('','$Title','$name','$Sex','$username','$password','$Department')";
        $res= $conn->query($sql) or die($conn->error);
            if($res){
               
                echo '<script>alert("เพิ่มสำเร็จแล้ว") </script>';
               header('Refresh:0; url=user_employee.php');//สำเร็จ
            }else{
                echo $sql;
            }

       
    }else{
        header('Location: ../../../../login.php');  
    }   
    ?>