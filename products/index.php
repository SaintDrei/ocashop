                     
<?php 
	$page_title = "Products";
//	include_once('../includes/header_admin.php'); 
//    include_once('../includes/header.php');
?>

<!----------------------------------- HEADER START ----------------------------------->
<?php
//    ob_start(); # Quick fix to 'Warning: Cannot modify header information - headers already sent by...'
//    
    # sets path of application folder
    $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $port      = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $domain    = $_SERVER['SERVER_NAME'];

    define('app_path', "${protocol}://${domain}${disp_port}" . '/ocashop/');
//
//    require($_SERVER['DOCUMENT_ROOT'] . '/casppr/config.php');
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
       
        <!-- SCRIPTS -->
      
       
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    
    
    
        <!----------------------------------- HEADER END ---------------------->
    
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
    
    
  <main>
      <div class="col l10 m10 s10">
          <div class="row">
            <div class="col l6 push-l3">
                    <div class="row">
                        <div class="col l4">
                        Books
                        </div>
                        <div class="col l4">
                        Books
                        </div>
                        <div class="col l4">
                        Books
                        </div>
                </div>
              </div>
          </div>
            <div class="row">
                <div class="col l3">
                    <div class="card medium" >
                        <div class="card-image">
                            <img src="images/card.jpg" style="max-width: 100%; max-height:100%;">
                            <span class="card-title">Hamilton Card</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                
                    </div>
                </div>
                
          </div>
      </div>
   

   
<ul class="left">
         
        </ul>
    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large blue-grey darken-4 waves-effect waves-light">
        <i class="large material-icons">add</i>
      </a>

      <ul>
        <li>
          <a class="btn-floating"><i class="material-icons medium">note_add</i></a>
          <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

      </ul>
    </div>
  </main>
    
    <?php
    
	include_once('../includes/footer.php');
    ?>