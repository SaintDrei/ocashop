<?php
    ob_start(); # Quick fix to 'Warning: Cannot modify header information - headers already sent by...'
    
    # sets path of application folder
    $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $port      = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $domain    = $_SERVER['SERVER_NAME'];

    define('app_path', "${protocol}://${domain}${disp_port}" . '/casppr/');

    require($_SERVER['DOCUMENT_ROOT'] . '/casppr/config.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/casppr/function.php');
    $logout = $_SERVER['DOCUMENT_ROOT'] . 'casppr/includes/logout.php';
    $userName = "John Doe";
    $userType = "Administrator";

    session_start();
    if(isset($_SESSION['userid']))
    {
        $userid = $_SESSION['userid'];
        $sql_user = "SELECT u.username, u.firstName, u.lastName, u.userType, t.typeID FROM users u INNER JOIN usertype t ON u.userType = t.typeID WHERE u.username='$userid'";
        $result_user = $con->query($sql_user) or die(mysqli_error($con));
        while($row = mysqli_fetch_array($result_user))
        {
            $fn = $row['firstName'];
            $ln = $row['lastName'];
            $username = $fn . ' ' . $ln;
        
        }
    } else {
        $fn = '';
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
    <link rel="icon" href="<?php echo app_path ?>/content/images/OCA/fav.png">
     <!-- Stylesheets -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo app_path ?>materialize/css/custom.css">
       
        <!-- SCRIPTS -->
      
     
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
  <header>
    
 
      <ul class="dropdown-content" id="user_dropdown">
      
      <li><a class="blue-text" href="#!">Profile</a></li>
      <li><a class="blue-text" href="<?php echo app_path ?>/includes/logout.php">Logout</a></li>
    </ul>
    <nav class="blue" role="navigation">
        
      <div class="nav-wrapper">
          
<!--        <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>-->

          <ul class="left" onclick="visibility:hidden;">
          <li>
           
          </li>
        </ul>
          
        <ul class="right hide-on-med-and-down">
          <li>
            <a class='right dropdown-button' href='' data-activates='user_dropdown' visibility="<?php if($userid=''){echo 'hidden';};?>"><i class=' material-icons'>account_circle</i></a>
          </li>
        </ul>
 

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>

    <nav>
      <div class="nav-wrapper blue darken-2">
        
        <a style="margin-left: 20px;" class="breadcrumb" href="<?php echo app_path ?>/admin/dashboard.php">Admin</a>
        <a class="breadcrumb" href="#!"><?php echo $page_title; ?></a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
          
      </div>
    </nav>
      
  </header>
