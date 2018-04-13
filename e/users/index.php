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
                
            </div>
        </div>
    </div>
</main>



<?php

?>