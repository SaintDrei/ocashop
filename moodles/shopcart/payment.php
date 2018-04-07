
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>
<link rel="stylesheet" href="style/stylelog.css" />
</head>
<body>
<?php
	session_start();
	require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['last_name'])){
		$last_name = stripslashes($_REQUEST['last_name']); // removes backslashes
		$last_name = mysqli_real_escape_string($mysqli,$last_name); //escapes special characters in a string
		$first_name = stripslashes($_REQUEST['first_name']);
		$first_name = mysqli_real_escape_string($mysqli,$first_name);
		$middle_name = stripslashes($_REQUEST['middle_name']);
		$middle_name = mysqli_real_escape_string($mysqli,$middle_name);
		$birthday = stripslashes($_REQUEST['birthday']);
		$birthday= mysqli_real_escape_string($mysqli,$birthday);
		$address = stripslashes($_REQUEST['address']);
		$address = mysqli_real_escape_string($mysqli,$address);
		$town = stripslashes($_REQUEST['town']);
		$town = mysqli_real_escape_string($mysqli,$town);
		$province = stripslashes($_REQUEST['province']);
		$province = mysqli_real_escape_string($mysqli,$province);
		$zip = stripslashes($_REQUEST['zip']);
		$zip = mysqli_real_escape_string($mysqli,$zip);
		$telephone = stripslashes($_REQUEST['telephone']);
		$telephone = mysqli_real_escape_string($mysqli,$telephone);
		$mobile = stripslashes($_REQUEST['mobile']);
		$mobile = mysqli_real_escape_string($mysqli,$mobile);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($mysqli,$email);
		$trans_date = date("Y-m-d H:i:s");
		
        $query = 
		"INSERT INTO `customers`
		(last_name, first_name, middle_name, birthday, address, town, province, zip, telephone, mobile, email,trans_date) 
		VALUES 
		('$last_name','$first_name', '$middle_name','$birthday','$address','$town','$province','$zip','$telephone','$mobile','$email','$trans_date')";
        
		$result = mysqli_query($mysqli,$query);
        if($result){
            echo "<div class='form'><h3>Your Transaction has been submitted for processing.</h3><br/>Click here to <a href='logout.php'>Logout</a></div>";
        }
    }
	else{
?>
<h2 align="center">You are logged in as <?php echo $_SESSION['username']; ?></h2>
<p align="center">Payment Mode: CASH-ON-DELIVERY</p>
<p align="center">Only Metro Manila orders will be processed</p>
<br>

<div class="form">
<h1>Delivery Details</h1>
<form name="delivery" action="" method="post">
Customer Name:
<br>
<input type="text" name="last_name"  placeholder="Last Name" required />
<input type="text" name="first_name" placeholder="First Name" required />
<input type="text" name="middle_name" placeholder="Middle Name" required />
<br><br>
Birthday:
<br>
<input type="date" name="birthday" placeholder="Birthday mm/dd/yyyy" required />
<br><br>
Delivery Address:
<br>
<input type="text" name="address" size="76" placeholder="Street / Village / Barangay" required />
<input type="text" name="town" placeholder="Municipality" required />
<input type="text" name="province" placeholder="Province / City" required />
<input type="text" name="zip" maxlength="4" placeholder="Zip Code" required />
<br><br>
Contact Details:
<br>
<input type="text" name="telephone" maxlength="7" placeholder="Telephone Number" required />
<input type="text" name="mobile" maxlength="11" placeholder="Mobile Number" required />
<input type="text" name="email" placeholder="email" required />
<input type="submit" name="process" value="Process Delivery" />
</form>
</div>
<?php } ?>
</body>
</html>
