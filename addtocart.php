<?php 
session_start();
include('config.php');
$userid= $_SESSION['userid'];
 if(isset($_REQUEST['pcode'])){
     $pcode = $_REQUEST['pcode'];
     $sql_check = "SELECT qty from orders WHERE userid='$userid' AND pcode='$pcode'";
     
		$result_check = $con->query($sql_check) or die(mysqli_error($con));
		$isting= mysqli_num_rows($result_check) > 0 ? true : false;
     
     if($isting){
         $sql_add = "UPDATE orders SET qty= qty + 1 WHERE pcode='$pcode' AND userid='$userid'";
         $con->query($sql_add) or die(mysqli_error($con));
     } else {
         $sql_add = "INSERT INTO orders VALUES('', '$pcode', '$userid', 1)";
         $con->query($sql_add) or die(mysqli_error($con));
     }
     header('location:cart.php');
     
}

?>