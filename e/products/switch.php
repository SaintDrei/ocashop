
<?php 
	$page_title = "Account Management";
	include_once('../../includes/header_admin.php');

  
  
    
    if (isset($_REQUEST['stat']))
    {
       
		$code = mysqli_real_escape_string($con, $_REQUEST['pcode']);
		$stat = mysqli_real_escape_string($con, $_REQUEST['stat']);
                
        
        echo $code;
        echo $stat;
        $sql_switch = "";
        if ($stat=="yes"){
            
        $sql_switch = "UPDATE products SET product_available='no' WHERE product_code='$code'";
            $con->query($sql_switch) or die(mysqli_error($con));
            echo 'woot';
        } else{
           
        $sql_switch = "UPDATE products SET product_available='yes' WHERE product_code='$code'";
             $con->query($sql_switch) or die(mysqli_error($con));
            echo 'nah';
        }
        $con->query($sql_switch);
       	header('location: ./index.php');
    }
    
?>


