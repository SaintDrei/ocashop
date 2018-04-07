<html>
<body>
<h1>Sample Database</h1>
<p>Database name: sample<p>
<p>Table name: person</p>
<?php 
$pdo = new PDO("mysql:host=localhost;dbname=sample",'root', '');
$query = "SELECT  lastname, firstname,school FROM person;";
$result = $pdo->query($query);

while ($myrow = $result->fetch(PDO::FETCH_ASSOC)) {
 echo "firstname: " . $myrow["firstname"] . "<br>";
 echo "lastname: " . $myrow["lastname"]."<br>";
 echo "school: " . $myrow["school"]."<br>";
 }
?>
<br><a href="dbsample.php">Main</a>

</body>


</html>