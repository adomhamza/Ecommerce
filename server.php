<?php
session_start();
//session_destroy();

// variable declaration
$phone = "";
$guest_phone = "";
$guest_fname = "";
$guest_lname = "";
$guest_region = "";
$guest_city = "";

$name    = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";
$_SESSION['guest_fname'] = '';
$_SESSION['guest_lname'] = '';
$_SESSION['guest_email'] = '';
$_SESSION['guest_city'] = '';
$_SESSION['guest_region'] = '';
$_SESSION['guest_phone'] = '';

// connect to database
$db = mysqli_connect('127.0.0.1', 'root', 'rootpass', 'ecomm');

// REGISTER USER
// if (isset($_POST['reg_user'])) {
// 	// receive all input values from the form
// 	$phone = mysqli_real_escape_string($db, $_POST['phone']);
// 	$name = mysqli_real_escape_string($db, $_POST['name']);
// 	$email = mysqli_real_escape_string($db, $_POST['email']);
// 	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
// 	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// 	// form validation: ensure that the form is correctly filled
// 	if (empty($phone)) {
// 		array_push($errors, "Phone Numner is required");
// 	}
// 	if (empty($name)) {
// 		array_push($errors, "Name is required");
// 	}
// 	if (empty($email)) {
// 		array_push($errors, "Email is required");
// 	}
// 	if (empty($password_1)) {
// 		array_push($errors, "Password is required");
// 	}

// 	if ($password_1 != $password_2) {
// 		array_push($errors, "The two passwords do not match");
// 	}

// 	// register user if there are no errors in the form
// 	if (count($errors) == 0) {
// 		$password = md5($password_1); //encrypt the password before saving in the database
// 		$query = "INSERT INTO customer (phone, fname,lname,email, pin) 
// 					  VALUES('$phone', '$name', '$email', '$password')";
// 		mysqli_query($db, $query);

// 		$_SESSION['name'] = $name;
// 		$_SESSION['success'] = "You are now logged in";
// 		$_SESSION['loggedIn'] = true;

// 		header('location:' . $_SESSION['redirectUrl']);
// 	}
// }
//END OF REGISTER USER
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
	//receive all inputs from 🌟 LOGIN_USER.php 🌟 form
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($phone)) {
		array_push($errors, "Phone Number is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM customer WHERE phone='$phone' AND pin='$password'";
		$results = mysqli_query($db, $query);

	

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['acc-firstname'] = $phone;
			
			$_SESSION['success'] = "You are now logged in";
			$_SESSION['loggedIn'] = true;

			header('location: my-account.php');
		} else {
			array_push($errors, "Wrong phone/password combination");
		}
	}
}
//END OF LOGIN USER

//checkout


if (isset($_POST['acc-submit'])) {
	// receive all input values from the 🌟 PLACE_ORDER.php 🌟 form
	$acc_firstname = mysqli_real_escape_string($db, $_POST['acc-firstname']);
	$acc_lastname = mysqli_real_escape_string($db, $_POST['acc-lastname']);
	$acc_email = mysqli_real_escape_string($db, $_POST['acc-email']);
	$acc_region = mysqli_real_escape_string($db, $_POST['acc-region']);
	$acc_city = mysqli_real_escape_string($db, $_POST['acc-city']);
	$acc_phone = mysqli_real_escape_string($db, $_POST['acc-phone']);
	$acc_password = mysqli_real_escape_string($db, $_POST['acc-password']);
	$acc_password_2 = mysqli_real_escape_string($db, $_POST['acc-password_2']);


	// form validation: ensure that the form is correctly filled
	/* if (empty($guest_phone)) {
		array_push($errors, "Phone Numner is required");
	}
	if (empty($acc_firstname)) {
		array_push($errors, "First Name is required");
	}
	if (empty($guest_email)) {
		array_push($errors, "Email is required");
	}
	if (empty($guest_region)) {
		array_push($errors, "Region is required");
	}

	if (empty($guest_city)) {
		array_push($errors, "City is required");
	} */
	if ($acc_password != $acc_password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {

		$password = md5($acc_password); //encrypt the password before saving in the database
		$query1 = "INSERT INTO customer (phone, fname, lname, email, region, city, pin) 
					  VALUES('$acc_phone', '$acc_firstname', '$acc_lastname', '$acc_email'
					  , '$acc_region', '$acc_city', '$password')";
		mysqli_query($db, $query1);


		header('location: success.php');

		/* $_SESSION['guest_name'] = $guest_name;
		$_SESSION['guest_city'] = $guest_city;
		$_SESSION['guest_region'] = $guest_region;
		$_SESSION['guest_phone'] = $guest_phone;
		$_SESSION['success'] = "You are now logged in";
		$_SESSION['loggedIn'] = true;

		header('location:' . $_SESSION['redirectUrl']); */
	}


	if (isset($_SESSION["products"]) && count($_SESSION["products"]) > 0) {
		$total = 0;
		$subtotals = 0;


		foreach ($_SESSION["products"] as $product) {

			$product_name = $product["product_name"];
			$product_price = $product["product_price"];
			//$product_code = $product["product_id"];
			$product_qty = $product["product_qty"];
			//$product_color = $product["product_color"];
			$subtotal = ($product_price * $product_qty);
			$subtotals = ($subtotals + $subtotal);
			$total = ($total + $subtotal);


			$acc_prod = mysqli_real_escape_string($db, $product_name);
			$acc_price = mysqli_real_escape_string($db, $product_price);
			$acc_total = mysqli_real_escape_string($db, $total);
			$acc_qty = mysqli_real_escape_string($db, $product_qty);

			$query = "INSERT INTO order_table (product_name, product_price,product_qty,phone) 
					  VALUES('$acc_prod', '$acc_price', '$acc_qty',$acc_phone)";
			mysqli_query($db, $query);
		}
	}
}

// REGISTER USER
if (isset($_POST['register_user'])) {
	// receive all input values from the 🌟 REGISTER.php 🌟 form
	$acc_firstname = mysqli_real_escape_string($db, $_POST['acc-firstname']);
	$acc_lastname = mysqli_real_escape_string($db, $_POST['acc-lastname']);
	$acc_email = mysqli_real_escape_string($db, $_POST['acc-email']);
	$acc_region = mysqli_real_escape_string($db, $_POST['acc-region']);
	$acc_city = mysqli_real_escape_string($db, $_POST['acc-city']);
	$acc_phone = mysqli_real_escape_string($db, $_POST['acc-phone']);
	$acc_password = mysqli_real_escape_string($db, $_POST['acc-password']);
	$acc_password_2 = mysqli_real_escape_string($db, $_POST['acc-password_2']);


	
	if ($acc_password != $acc_password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {

		$password = md5($acc_password); //encrypt the password before saving in the database
		$query1 = "INSERT INTO customer (phone, fname, lname, email, region, city, pin) 
					  VALUES('$acc_phone', '$acc_firstname', '$acc_lastname', '$acc_email'
					  , '$acc_region', '$acc_city', '$password')";
		mysqli_query($db, $query1);


		$_SESSION['loggedIn'] = true;

		header('location:' . $_SESSION['redirectUrl']);

		/* $_SESSION['guest_name'] = $guest_name;
		$_SESSION['guest_city'] = $guest_city;
		$_SESSION['guest_region'] = $guest_region;
		$_SESSION['guest_phone'] = $guest_phone;
		$_SESSION['success'] = "You are now logged in";
		$_SESSION['loggedIn'] = true;

		header('location:' . $_SESSION['redirectUrl']); */
	}
}
// END OF REGISTER USER


//GUEST CHECKOUT
if (isset($_POST['guest-submit'])) {
	// receive all input values from the 🌟 GUEST_CHECKOUT.php 🌟 form
	$guest_firstname = mysqli_real_escape_string($db, $_POST['guest-firstname']);
	$guest_lastname = mysqli_real_escape_string($db, $_POST['guest-lastname']);
	$guest_email = mysqli_real_escape_string($db, $_POST['guest-email']);
	$guest_region = mysqli_real_escape_string($db, $_POST['guest-region']);
	$guest_city = mysqli_real_escape_string($db, $_POST['guest-city']);
	$guest_phone = mysqli_real_escape_string($db, $_POST['guest-phone']);
	#$guest_password = mysqli_real_escape_string($db, $_POST['guest-password']);
	#$guest_password_2 = mysqli_real_escape_string($db, $_POST['guest-password_2']);


	// form validation: ensure that the form is correctly filled
	 if (empty($guest_phone)) {
		array_push($errors, "Phone Number is required");
	}
	if (empty($guest_firstname)) {
		array_push($errors, "First Name is required");
	}
	if (empty($guest_email)) {
		array_push($errors, "Email is required");
	}
	if (empty($guest_region)) {
		array_push($errors, "Region is required");
	}

	if (empty($guest_city)) {
		array_push($errors, "City is required");
	} 
	

	// register user if there are no errors in the form
	if (count($errors) == 0) {

		$_SESSION['guest_fname'] = $guest_firstname;
		$_SESSION['guest_lname'] = $guest_lastname;
		$_SESSION['guest_email'] = $guest_email;
		$_SESSION['guest_city'] = $guest_city;
		$_SESSION['guest_region'] = $guest_region;
		$_SESSION['guest_phone'] = $guest_phone;
		$_SESSION['success'] = "You are now logged in";
		$_SESSION['loggedIn'] = true;
		
		$query1 = "INSERT INTO customer (phone, fname, lname, email, region, city, pin) 
					  VALUES('$guest_phone', '$guest_firstname', '$guest_lastname', '$guest_email'
					  , '$guest_region', '$guest_city', '')";
		mysqli_query($db, $query1);


		

		

		
	}


	if (isset($_SESSION["products"]) && count($_SESSION["products"]) > 0) {
		$total = 0;
		$subtotals = 0;


		foreach ($_SESSION["products"] as $product) {

			$product_name = $product["product_name"];
			$product_price = $product["product_price"];
			//$product_code = $product["product_id"];
			$product_qty = $product["product_qty"];
			//$product_color = $product["product_color"];
			$subtotal = ($product_price * $product_qty);
			$subtotals = ($subtotals + $subtotal);
			$total = ($total + $subtotal);


			$acc_prod = mysqli_real_escape_string($db, $product_name);
			$acc_price = mysqli_real_escape_string($db, $product_price);
			$acc_total = mysqli_real_escape_string($db, $total);
			$acc_qty = mysqli_real_escape_string($db, $product_qty);

			$query = "INSERT INTO order_table (product_name, product_price,product_qty,phone) 
					  VALUES('$acc_prod', '$acc_price', '$acc_qty',$acc_phone)";
			mysqli_query($db, $query);
		}

		header('location: success.php');

	}
}
//END OF GUEST CHECKOUT