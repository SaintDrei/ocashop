                     
<?php 
	$page_title = "Dashboard";
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
      <div class="row">
      
      </div>
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>User Management</b>
            </div>
          </div>

          <div class="row">
            <a href="./accounts/index.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                 
               <i class="material-icons large">account_box</i><br>
                <span class="blue-text text-lighten-1"><h5>Account Management</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/people_2_knqa3y.png" class="responsive-img" /><br>
                <span class="blue-text text-lighten-1"><h5>Task Assignment</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Product Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989970/product_mdq6fq.png" class="responsive-img" /><br>
                <span class="blue-text text-lighten-1"><h5>Product</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">

                  <i class="material-icons large">event</i>
                  <br>
                <span class="blue-text text-lighten-1"><h5>Events</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Staff Management</b>
            </div>
          </div>

          <div class="row">
            <a href="./task/add.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="material-icons large">person_add</i><br>
                <span class="blue-text text-lighten-1"><h5>Task Assignment</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                 <i class="material-icons large">contacts</i>
                <span class="blue-text text-lighten-1"><h5>Contacts</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Category Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/squares_dylwo9.png" class="responsive-img" /><br>
                <span class="blue-text text-lighten-1"><h5>Category</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/squares_dylwo9.png" class="responsive-img" /><br>
                <span class="truncate blue-text text-lighten-1"><h5>Sub Category</h5></span>
              </div>
            </a>
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
    
	include_once('includes/footer.php');
    ?>