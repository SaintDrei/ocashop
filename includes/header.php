<?php
session_start();
//    ob_start(); # Quick fix to 'Warning: Cannot modify header information - headers already sent by...'
//    
    # sets path of application folder
    $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $port      = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $domain    = $_SERVER['SERVER_NAME'];

    define('app_path', "${protocol}://${domain}${disp_port}" . '/ocashop/');

    require($_SERVER['DOCUMENT_ROOT'] . '/ocashop/config.php');

    $userid = $_SESSION['userid'];
    $sql_cart = "SELECT pcode, qty from orders WHERE userid='$userid'";
    $cart_result = $con->query($sql_cart);
    $cart_list = '';
$list = '';  $total = 0;
    if (mysqli_num_rows($cart_result) >0){
       
    while ($row = mysqli_fetch_array($cart_result)){
            $pcode = $row['pcode'];
            $qty = $row['qty'];
            $sql_prod = "SELECT product_name, price from products where product_code='$pcode'";
            $result_prod = $con->query($sql_prod);
       
            while($row = mysqli_fetch_array($result_prod)){
                $pname = $row['product_name'];
                $price = $row['price'];
                $net = $qty * $price;
                $total = $total + $net;
                $list .= "<li><a class='lime-text text-darken-2'><span class='left'>$pname</span><span class='right'>$net</span></a></li>";    
            }
            
            
    }
    } else {
        $list =  '<li><a href="#!" class="lime-text text-darken-2">You have no items in your cart</a></li>';
    }
?> 
<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $page_title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Andrei Mishael D. Santos">
    <meta charset="utf-8">
    <meta name="description" content="Official Website of DLS-CSB's Office of Culture and Arts">
    <meta name='keywords' content="arts, theater, dance, choir, de la salle, saint, benilde, la salle, DLS-CSB">
    <link rel="icon" href="../content/images/OCA/fav.png">
     <!-- Stylesheets -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->
    <link rel="stylesheet" href="<?php echo app_path ?>/materialize/css/materialize.min.css">
    
        <link rel="stylesheet" href="<?php echo app_path ?>materialize/css/custom.css">
       
    <link rel="icon" href="<?php echo app_path ?>/content/images/fav.png">
        <!-- SCRIPTS -->
        
       
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src='<?php echo app_path ?>includes/jquery-3.2.1.min.js'></script>
        <script type="text/javascript" src='<?php echo app_path ?>materialize/js/materialize.min.js'></script>
        <script type="text/javascript" src='<?php echo app_path ?>includes/script.js'></script> 
     
    
</head>
<body>
       
     <nav>
    <div class="nav-wrapper yellow darken-2">
      <a href="<?php echo app_path;?>" class="brand-logo  blue-grey-text text-darken-4"><img src="<?php echo app_path ?>/content/images/logo-c.png" height="55em" style="margin-left:0.4em; margin-top:0.2em;"></a>
         <ul id="cart1" class="dropdown-content lime-text" style="width:26vw;">
                <?php echo $list ?>
          <li class="divider"></li>
          <li class="lime"><a href="<?php echo app_path;?>cart.php" class="white-text   ">Checkout<i class="material-icons right">send</i></a></li>
        </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down " >
        
          
          
            <?php if (isset($_SESSION['userid'])){
    echo '    <li><a href="/logout.php" class="blue-grey-text text-darken-4">Logout</a></li>';
} else {
    echo '<li><a href="'.app_path.'login/" class="blue-grey-text text-darken-4">Login</a></li>
        <li><a href="'.app_path.'register/" class="blue-grey-text text-darken-4">Signup</a></li>';
} ?>
         <li><a href="" class="dropdown-button  blue-grey-text text-darken-4" data-activates='cart1'><i class="material-icons right">shopping_cart</i>Cart</a></li>
      </ul>
    </div>
  </nav>