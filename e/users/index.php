<?php
	$page_title = "User Management";
	include_once('../../includes/header_admin.php');
   $welcome = "";
    $orderby = 'userid';
    if (isset($_GET['orderby'])){
        $orderby = $_GET['orderby'];
    }
    $sql_users = "SELECT userid, username, email, reg_date, status from users order by $orderby";
    $result_users = $con->query($sql_users) or die(mysqli_error($con));
    $list_users="";


    while ($row = mysqli_fetch_array($result_users))
	{
        $uname = $row['username'];
        $email = $row['email'];
        $regdate = $row['reg_date'];
        $status = $row['status'];
        $btncol = "";
        if ($status == "Active"){
            $btncol = "red darken-4 ' data-tooltip='Archive User";
            
        } else {
            $btncol = "green accent-4 ' data-tooltip='Activate User";
        }
        $list_users .="
        <tr>
        <td>$uname</td>
        <td>$email</td>
        <td>$regdate</td>
        <td>$status</td>
        <td><a href='switch.php?uname=$uname&stat=$status' class='btn-floating btn-medium  center-align tooltipped $btncol' 
										data-position='top'  onclick='return confirm(\"Switch Status?\");'>
										 <i class='tiny material-icons right center'>verified_user</i>
							</a>    
                                    <a href='details.php?uname=$uname' class='btn-floating btn-medium teal lighten-2 center-align' 
										onclick='return confirm(\"Delete User Task?\");''>
										 <i class='tiny material-icons right center tooltipped' data-position='top' data-tooltip='Edit User'>create</i>
									</a>
                                    </td>
        </tr>
        ";
        
	}
?>
<?php echo $welcome; ?>
<script>
$(document).ready(function(){
  $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
});
</script>


<main>
    <div class="" style="padding-left:300px;">
        <div class="row">
            <div class="col l10 push-l1">
                <table class="bordered highlight responsive-table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>E-Mail</th>
                            <th>Register Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           echo $list_users; 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



<?php

?>