<?php
	$page_title = "Product Management";
	include_once('../../includes/header_admin.php');
   $welcome = "";
    $orderby = 'userid';
    if (isset($_GET['orderby'])){
        $orderby = $_GET['orderby'];
    }
    $sql_products = "SELECT product_cat, product_collection, product_code, product_name, product_desc, product_img_name, price, product_available from products order by $orderby";
    $result_products = $con->query($sql_products) or die(mysqli_error($con));
    $list_products="";


    while ($row = mysqli_fetch_array($result_products))
	{
        $category = $row['product_cat'];
        $collection = $row['product_collection'];
        $code = $row['product_code'];
        $name = $row['product_name'];
        $desc = $row['product_desc'];
        $img = $row['product_img_name'];
        $price = $row['price'];
        $available = $row['product_available'];
        $btncol='';
    
        if ($available == "No"){
            $btncol = "red darken-4 ' data-tooltip='Product is Archived: click to switch status";
            $btnicon = 'remove_shopping_cart';
            
        } else {
            $btncol = "green accent-4 ' data-tooltip='Product is Available: click to switch status";
            $btnicon = 'done';
        }
        $list_users .="
        <tr>
        <th>Image</th>
         <td>Name</td>
         <td>Collection</td>
         <td>Price</td>
         <td>Description</td>
         <td>Code</td>
         <td>Available</td>
        <td><a href='switch.php?pcode=$code&stat=$available' class='btn-floating btn-medium  center-align tooltipped $btncol' 
										data-position='top'  onclick='return confirm(\"Switch Status?\");'>
										 <i class='tiny material-icons right center'>$btnicon</i>
							</a></td>
        <td> <a href='details.php?pcode=$code' class='btn-floating btn-medium teal lighten-2 center-align'>
										 <i class='tiny material-icons right center tooltipped' data-position='top' data-tooltip='Edit Product'>create</i>
									</a></td>                    
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Collection</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Code</th>
                            <th>Available</th>
                            <th></th>
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