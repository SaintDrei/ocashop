<html>
<body>
<?php

$vf = $_REQUEST['fn'];
$vl = $_REQUEST['ln'];
$vs = $_REQUEST['sc'];

if (isset($vf)) {
$pdo = new PDO("mysql:host=localhost;dbname=sample",'root', '');
$query = "UPDATE person SET firstname = '". $vf . "', lastname ='". $vl . "', school = '". $vs . "' where firstname = '". $vf . "';";

$result = $pdo->query($query);
echo "Record is added to the database";
}
 else {
	echo "Please fill-out the form..<br>";
}
?>
<br>
<a href="dbsample.php">Main</a>
</body>
</html>

