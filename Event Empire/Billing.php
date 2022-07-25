<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="checkout";
$con = mysqli_connect($servername,$username,$password,$db);

	if ($con)
	{
		echo "Connection Successful";
	}
	else
	{
		echo "No Connection";
	}
    if(isset($_POST['Book']))
	{
	$select_event = strval($_POST['billing_country']);
	$first_name =strval($_POST['billing_first_name']);
	$last_name = strval($_POST['billing_last_name']);
	$address = strval($_POST['billing_address_1']);
	$city = strval($_POST['billing_city']);
	$state = strval($_POST['billing_state']);
	$pincode = intval($_POST['billing_postcode']);
    $email = strval($_POST['billing_email']);
    $phone_no = intval($_POST['billing_phone']);
    $your_order = $_POST['payment_method'];
    $insertquery = "INSERT INTO billing('select_event','first_name','last_name','address','city','state','pin_code','email','phone_no','your_order')VALUES($select_event,$first_name,$last_name,$address,$city,$state,$pincode,$email,$phone_no,$your_order)";
	$res = mysqli_query($con,$insertquery);
			if($res)
			{ 
				echo "Inserted Successfully";
			}
			else
			{
				echo "Not Inserted ";
			}
	}	
?>