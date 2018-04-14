<?php 
session_start();
include('config.php');
$userid= $_SESSION['userid'];
 if(isset($_REQUEST['pcode'])){
     $pcode = $_REQUEST['pcode'];
     $sql_check = "SELECT qty from orders WHERE userid='$userid' AND pcode='$pcode'";
     
		$result_check = $con->query($sql_check) or die(mysqli_error($con));
        while ($row = mysqli_fetch_array($result_check))
        {
            $qty = $row['qty'];
        }
		$isting= mysqli_num_rows($result_check) > 0 ? true : false;
     
     if($qty>0){
         $sql_add = "UPDATE orders SET qty= qty - 1 WHERE pcode='$pcode' AND userid='$userid'";
         $con->query($sql_add) or die(mysqli_error($con));
     } else {
         $sql_add = "DELETE from orders WHERE pcode='$pcode' AND userid='$userid'";
         $con->query($sql_add) or die(mysqli_error($con));
     }
     header('location:cart.php');
     
}

?>