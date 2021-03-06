<?php
    session_start();
    ob_start(); # Quick fix to 'Warning: Cannot modify header information - headers already sent by...'
    
    # sets path of application folder
    $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $port      = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $domain    = $_SERVER['SERVER_NAME'];

    define('app_path', "${protocol}://${domain}${disp_port}" . '/ocashop/');

    require($_SERVER['DOCUMENT_ROOT'] . '/ocashop/config.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/ocashop/function.php');
    $logout = $_SERVER['DOCUMENT_ROOT'] . 'ocashop/includes/logout.php';
    $userName = "John Doe";
  

    if(isset($_SESSION['userid']))
    {
        $userid = $_SESSION['userid'];
        
    } else {
        header('location:'. app_path.'login/');
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
    <link rel="icon" href="<?php echo app_path; ?>content/images/OCA/fav.png">
     <!-- Stylesheets -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->
    <link rel="stylesheet" href="<?php echo app_path ?>materialize/css/materialize.min.css">
    
        <link rel="stylesheet" href="<?php echo app_path ?>materialize/css/custom.css">
       
    <link rel="icon" href="<?php echo app_path ?>/content/images/fav.png">
        <!-- SCRIPTS -->
        
       
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src='<?php echo app_path ?>includes/jquery-3.2.1.min.js'></script>
        <script type="text/javascript" src='<?php echo app_path ?>materialize/js/materialize.js'></script>
        <script type="text/javascript" src='<?php echo app_path ?>includes/script.js'></script> 
     
    
</head>
<body>
      <header> 
          <div class="navbar-fixed">
     <nav class="top-nav">
    <div class="nav-wrapper grey darken-2">
      <a href="<?php echo app_path;?>" class="brand-logo  blue-grey-text text-darken-4"><img src="<?php echo app_path ?>content/images/logo-c.png" height="55em" style="margin-left:0.4em; margin-top:0.2em; filter:invert(1);"></a>
       
      <ul id="nav-mobile" class="right hide-on-med-and-down white-text">
        
          
          <?php if (isset($_SESSION['userid'])){
        
    echo '    <li><a href="'. app_path .'login/logout.php" class="grey-text text-lighten-1">Logout</a></li>';
} else {
    header('location: ../login/');
} ?>
        
      </ul>
    </div>
  </nav>
          </div>
          <div class="navbar-fixed">
    <nav style="height:50px;">
      <div class="nav-wrapper grey darken-1" style="height:50px; ">
        
        <a style="margin-left: 20px;" class="breadcrumb" href="<?php echo app_path ?>e/">Admin</a>
        <a class="breadcrumb" href="#!"><?php echo $page_title; ?></a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
          
      </div>
    </nav>
          </div>
    </header>
    
<div class="aside">
  <ul id="slide-out" class="side-nav fixed" style="margin-top:114px; ">
    <li><a class="subheader"><i class="material-icons">people</i>User Management</a></li>
    <li><a href="<?php echo app_path; ?>e/users/">Users</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader"><i class="material-icons">shopping_cart</i>Product Management</a></li>
    <li><a class="waves-effect" href="<?php echo app_path; ?>index.php">View Shop</a></li>
    <li><a class="waves-effect" href="<?php echo app_path; ?>e/products/">View Products</a></li>
    <li><a class="waves-effect" href="<?php echo app_path; ?>e/products/add.php/">Add Product</a></li>
  </ul>


</div>

