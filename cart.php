<?php 
$page_title = 'Checkout';
include_once('/includes/header.php'); 
 $userid = $_SESSION['userid'];
    $sql_cart = "SELECT pcode, qty from orders WHERE userid='$userid'";
    $cart_result = $con->query($sql_cart);
    $cart_list = '';
$list = '';  $total = 0;
    if (mysqli_num_rows($cart_result) >0){
       
    while ($row = mysqli_fetch_array($cart_result)){
            $pcode = $row['pcode'];
            $qty = $row['qty'];
            $sql_prod = "SELECT product_name, price, product_img_name from products where product_code='$pcode'";
            $result_prod = $con->query($sql_prod) or die(mysqli_error($con));
       
            while($row = mysqli_fetch_array($result_prod)){
                $img = app_path.'content/images/products/'.$row['product_img_name'];
                $name = $row['product_name'];
                $price = $row['price'];
                $net = $qty * $price;
                $total = $total + $net;
                $_SESSION['total'] = $total;
                $list .= "
        <tr>
         <td><img src='$img' style='width:100px;height:100px;'></td>
         <td>$name</td>
         <td>$price</td>
         <td>$qty</td>
         <td>$net</td>
        <td> <a class='btn-floating waves-effect waves-light red lighten-2' href='subcart.php?pcode=$pcode' ><i class='material-icons'>clear</i></a> 
        <a class='btn-floating waves-effect waves-light green lighten-2' href='addtocart.php?pcode=$pcode'><i class='material-icons'>add</i></a> </td>                    
        </tr>";    
            }
            
            
    }
    } else {
        $list =  '<li><a href="#!" class="lime-text text-darken-2">You have no items in your cart</a></li>';
    }


?>





<main>
    <div class="">
        <div class="row">
            <div class="col l8 push-l2">
                <table class="bordered highlight responsive-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           echo $list; 
                        ?>
                        <divider></divider>
                        <tr>
                            <b>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><?php echo $total;?></th>
                                <th></th>
                            </b>
                        
                        </tr>
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>
                <p></p>
                <form action="customer_info.php">
                <button class="btn waves-effect waves-light right" type="submit" name="action">Continue
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>
    </div>
</main>



<!--

<?php include_once('/includes/footer.php'); ?>-->
