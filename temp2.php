
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
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo app_path ?>materialize/css/custom.css">
       
        <!-- SCRIPTS -->
      
       
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div class="">
    
    
        <!----------------------------------- HEADER END ---------------------->
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
          <a class="btn-floating black"><i class="material-icons medium">note_add</i></a>
          <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

      </ul>
    </div>
  </main>
<!---------------------------------------- FOOTER START ----------------------------->
        <footer class="yellow darken-2 page-footer">
 
    <div class="footer-copyright">
      <div class="container">
        <span>Made By <a class="white-text" style='font-weight: bold;' href="">TEAM QUADRA</a></span>
      </div>
    </div>
  </footer>
</div>
      
    
     <!--Import jQuery before materialize.js-->
        <!--import use echo app path to pertain to home directory because if not, the document will point to current document where footer is included instead of footer's directory-->

        <script type="text/javascript" src='<?php echo app_path ?>includes/jquery-3.2.1.min.js'></script>
        <script type="text/javascript" src='<?php echo app_path ?>materialize/js/materialize.min.js'></script>
        <script type="text/javascript" src='<?php echo app_path ?>includes/script.js'></script> 
     
    
       

</body>
</html> 
<!------------------------------------------ FOOTER END ---------------------------->
  
    <?php
    
//	include_once('../includes/footclean.php');
    ?>