<?php 
$page_title = 'turtle';
include_once('/includes/header_products.php'); 

    
    
if(isset($_REQUEST['cat'])){
    $cat = $_REQUEST['cat'];
    $sql_products = "SELECT product_cat, product_collection, product_code, product_name, product_desc, product_img_name, price from products where product_cat='$cat' AND product_available='yes'";}
else{
    $sql_products = "SELECT product_cat, product_collection, product_code, product_name, product_desc, product_img_name, price from products  WHERE product_available='yes'";}
     $result_product = $con->query($sql_products);
        $list_product='';
        while ($row = mysqli_fetch_array($result_product))
        {
            $pcat = $row['product_cat'];
            $pcollection = $row['product_collection'];
            $pcode = $row['product_code'];
            $pname = $row['product_name'];
            $pdesc = $row['product_desc'];
            $img = app_path.'content/images/products/'.$row['product_img_name'];
            $price = $row['price'];
            
            $list_product.="
             <div class='col l4' ><div class='card'>
                                 <div class='card-image' style='max-height:80%;' >
                            <img id='image' src='$img'>
                              <a class='btn-floating halfway-fab waves-effect waves-light green lighten-2' href='addtocart.php?pcode=$pcode'><i class='material-icons'>add</i></a>
                        </div>
                        <div class='card-content'>
                            <span class='card-title'>$pname</span>
                            <span>P$price</span>
                            <p>$pdesc</p>
                        </div>
                                
                            </div></div>";
           
        
}

?>

<main>
<div class="aside">
    <div class="">
    <img src="">
    </div>
  <ul id="slide-out" class="side-nav fixed" style=" z-index:-2">
      <div class="background">
        <img src="https://orig00.deviantart.net/0c5c/f/2006/344/1/8/t_shirt_design__tank_you_by_godie.jpg"  style="width:100%; height:100%; margin-top:114px">
      </div>  
  </ul>


</div>
    
    
<div class="row" style="padding-top:30px; padding-left:300px;">
    
          <div class="col" style="column-break-inside:avoid;">
    
      
              
     <?php echo $list_product;?>
              
    </div>
    </div>
    

</main>



<?php include_once('/includes/footer.php'); ?>