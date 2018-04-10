<?php
//    ob_start(); # Quick fix to 'Warning: Cannot modify header information - headers already sent by...'
//    
    # sets path of application folder
    $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $port      = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $domain    = $_SERVER['SERVER_NAME'];

    define('app_path', "${protocol}://${domain}${disp_port}" . '/ocashop/');

    require($_SERVER['DOCUMENT_ROOT'] . '/casppr/config.php');
//    require($_SERVER['DOCUMENT_ROOT'] . '/casppr/function.php');
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
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo app_path ?>materialize/css/custom.css">
       
    <link rel="icon" href="<?php echo app_path ?>/content/images/fav.png">
        <!-- SCRIPTS -->
      
       
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
       
     <nav>
    <div class="nav-wrapper yellow darken-2">
      <a href="#" class="brand-logo  blue-grey-text text-darken-4">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        
           <li><a href="shop_cart.php" class="blue-grey-text text-darken-4"><i class="material-icons right">shopping_cart</i>Cart</a></li>
        <li><a href="badges.html" class="blue-grey-text text-darken-4">Login</a></li>
        <li><a href="collapsible.html" class="blue-grey-text text-darken-4">Signup</a></li>
      </ul>
    </div>
  </nav>