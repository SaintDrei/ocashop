<?php
$db_username = 'root';
$db_password = '';
$db_name = 'sample';
$db_host = 'localhost';

//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$currency = 'PHP '; 			//Currency Character or code
$shipping_cost      = 250; 			//shipping cost
$taxes              = array( 		//List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );						
?>