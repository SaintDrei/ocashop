<?php
	$page_title = "Dashboard";
	include_once('../includes/header_admin.php');
   $welcome = "<script>
            $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
            Materialize.toast('Welcome admin!', 4000,);});
            </script>";
    

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
            <div class="col l5 push-l1">
                
            </div>
        </div>
    </div>
</main>

<?php

?>