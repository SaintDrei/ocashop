<html>
<body>
<?php 
$vf = $_REQUEST['fn'];
echo $vf;
$pdo = new PDO("mysql:host=localhost;dbname=sample",'root', '');
$query = "SELECT  lastname, firstname,school FROM person where firstname = '" . $vf . "';";
$result = $pdo->query($query);
$myrow = $result->fetch(PDO::FETCH_ASSOC);
echo "myrow: ". $myrow["firstname"];
/*
while ($myrow = $result->fetch(PDO::FETCH_ASSOC)) {
 echo "firstname: " . $myrow["firstname"] . "<br>";
 echo "lastname: " . $myrow["lastname"]."<br>";
 echo "school: " . $myrow["school"]."<br>";
 }
 */
?>
<form action=dbsampleupdate2.php>
 Firstname: <input type=text name=fn value = <?php echo $myrow["firstname"]; ?> ><br>
 Lastname: <input type=text name=ln value = '<?php echo $myrow["lastname"]; ?>' ><br>
 School: <input type=text name=sc value = '<?php  echo $myrow["school"]; ?>' ><br>
 <input type=submit>
</form>
</body>
</html>

