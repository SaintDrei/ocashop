
<?php 
	$page_title = "Account Management";
	include_once('../../includes/header_admin.php');

  
  
    
    if (isset($_REQUEST['uname']))
    {
       
		$userID = mysqli_real_escape_string($con, $_REQUEST['uname']);
		$stat = mysqli_real_escape_string($con, $_REQUEST['stat']);
                
        
        $sql_switch = "";
        if ($stat=="Active"){
            
        $sql_switch = "UPDATE users SET status='Archived' WHERE username='$userID'";
        } else{
            
        $sql_switch = "UPDATE users SET status='Active' WHERE username='$userID'";
        }
        $con->query($sql_switch);
       	header('location: ./index.php');
    }
    
?>


