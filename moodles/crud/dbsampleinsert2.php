<?php

$vf = $_REQUEST['fn'];
$vl = $_REQUEST['ln'];
$vs = $_REQUEST['sc'];

if (isset($vf)) {
$pdo = new PDO("mysql:host=localhost;dbname=sample",'root', '');
$query = "insert into person values ('". $vf . "', '". $vl . "', '". $vs . "');";

$result = $pdo->query($query);
echo "Record is added to the database";
}
 else {
	echo "Please fill-out the form..<br>";
}
?>
