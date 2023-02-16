<?php 
include_once('../www/authen.php');
include_once('../www/connect.php');
?>

<?php include_once('../includes/header_employee.php') ?>
        <?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
        PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
        Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
        <html>
        
        
        <div>

        </div>  
        <html>
        <center>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $sql="
            SELECT produt_amount, SUM(produt_amount)AS totol ,pig_breed
            FROM view_breed_produt
            WHERE 1
            GROUP BY pig_breed
            ORDER BY DATE_FORMAT(pig_breed, 'แลนด์เรซ') ASC
           
   
            ";
            
            $result = mysqli_query($conn, $sql);
            $resultchart = mysqli_query($conn, $sql);
            //for chart
            $date_produt = array();
            $totol = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $date_produt[] = "\"".$rs['pig_breed']."\"";
            $totol[] = "\"".$rs['totol']."\"";
            }
            $date_produt = implode(",", $date_produt);
            $totol = implode(",", $totol);
            
            ?>
           
            <div class="col-sm-7">
                <h3>List</h3>
                <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                    <thead>
                        <tr class="table-primary">
                            <th width="30%">สายพันธ์</th>
                            <th width="70%"><center>ผลผลิต</center></th>
                        </tr>
                    </thead>
                    
                    <?php while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td> <?php echo $row['pig_breed'];?></td>
                        <td align="right"><?php echo number_format($row['totol'],0);?></td>
                    </tr>
                    <?php
                    @$amount_total += $row['totol'];
                    }
                    ?>
                    <tr class="table-danger">
                        <td align="center">รวม</td>
                        <td align="right"><b>
                        <?php echo number_format($amount_total,0);?></b></td></td>
                    </tr>
                </table>
    
                <a href="../www_employee/index.php" class="btn btn-warning float-left">ย้อนกลับ</a>
                <br>
                <br>
                
            </div>
            
        </div>
                </center>
                
    </div>
</div>