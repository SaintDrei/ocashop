<?php

	# gets path of application folder
	function getAppFolder()
	{
	    $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
	    $port      = $_SERVER['SERVER_PORT'];
	    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
	    $domain    = $_SERVER['SERVER_NAME'];

	    return "${protocol}://${domain}${disp_port}" . "/ocashop/";
	}



	

	function getPrice($con, $pid)
	{
		$sql_price = "SELECT price FROM products
			WHERE product_code='$pid'";
		$result_price = $con->query($sql_price);
		while ($row = mysqli_fetch_array($result_price))
		{
			$price = floatval($row['price']);
			# $price = (decimal) $row['price'];
		}
		return $price;
	}

	function isExisting($con, $pid)
	{
		$sql_check = "SELECT detailID FROM orderdetails
			WHERE orderNo=0 AND userID=1 AND pcode='$pid'";
		$result_check = $con->query($sql_check) or die(mysqli_error($con));
		/*if (mysqli_num_rows($result_check) > 0)
		{
			return true;
		}
		else
		{
			return false;
		}*/

		return mysqli_num_rows($result_check) > 0 ? true : false;
	}

	function addToCart($con, $pid, $qty)
	{
		if (isset($_SESSION['userid']))
		{
			$uid = $_SESSION['userid'];
		}
		else
		{
			$uid = 1;
		}

		$price = getPrice($con, $pid);
		$amount = intval($qty) * $price;

		$sql_insert = "INSERT INTO orderdetails
			VALUES('', 0, $uid, $pid, $qty, $price, $amount, NOW())";

		$sql_update = "UPDATE orderdetails
			SET quantity = quantity + $qty,
			amount = amount + $amount
			WHERE orderNo=0 AND userID=$uid AND
			pcode=$pid";

		if (isExisting($con, $pid))
		{
			$result_update = $con->query($sql_update) or die(mysqli_error($con));
		}
		else
		{
			$result_insert = $con->query($sql_insert) or die(mysqli_error($con));
		}
	}


?>