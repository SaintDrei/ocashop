<?php
include_once("config.php");

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo app_path ?>materialize/css/custom.css">
       
</head>
<body>
      <nav>
    <div class="nav-wrapper yellow darken-2">
      <a href="#" class="brand-logo blue-grey-text text-darken-4">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        
           <li><a href="view_cart.php" class="blue-grey-text text-darken-4"><i class="material-icons right">shopping_cart</i>Cart</a></li>
        </li>
      </ul>
    </div>
  </nav>
<h1 align="center">Products </h1>


<!-- Products List Start -->
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, price FROM products ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<li class="product">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3>{$obj->product_name}</h3>
	<div class="product-thumb"><img src="images/{$obj->product_img_name}" style='width:150px; height:200px;'></div>
	<div class="product-desc">{$obj->product_desc}</div>
	<div class="product-info">
	Price {$currency}{$obj->price} 
	
	<fieldset>
	
	<label>
		<span>Color</span>
		<select name="product_color">
		<option value="Black">Black</option>
		<option value="Silver">Silver</option>
		</select>
	</label>
	
	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center">
	<button type="submit"><a href="login.php" class="button">BUY NOW</a></button>
	</div>
	</div></div>
	</form>
	</li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    
<!-- Products List End -->
    
        
    <footer class="yellow darken-2 page-footer">
 
    <div class="footer-copyright">
      <div class="container blue-grey-text text-darken-4">
        <span>Made By <a class="blue-grey-text text-darken-4" style='font-weight: bold;' href="">YOURS TRULY</a></span>
      </div>
    </div>
  </footer>

      
    
     <!--Import jQuery before materialize.js-->
        <!--import use echo app path to pertain to home directory because if not, the document will point to current document where footer is included instead of footer's directory-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
         
        <script type="text/javascript" src='<?php echo app_path ?>includes/jquery-3.2.1.min.js'></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
         
        <script type="text/javascript" src='<?php echo app_path ?>materialize/js/materialize.min.js'></script>
        <script type="text/javascript" src='<?php echo app_path ?>includes/script.js'></script> 
</body>
</html>
