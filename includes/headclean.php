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
    $fav = $_SERVER['DOCUMENT_ROOT'] . '/casppr/content/images/OCA/fav.png';
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
    
    