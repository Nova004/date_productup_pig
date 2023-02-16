<?php 
session_start();
        if(isset($_POST['username'])){
                  include("connect.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM users 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["userID"] = $row["userID"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["Department"] = $row["Department"];

                      if($_SESSION["Department"]=="เจ้าของฟาร์ม"){ 

                        Header("Location: ../www/index.php");
                      }
                  if ($_SESSION["Department"]=="พนักงาน"){ 

                        Header("Location: ../www_employee/index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>