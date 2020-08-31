<?php 
	session_start();
	//session_destroy();

	// variable declaration
	$phone = "";
	$name    = "";
	$email = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ecomm');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($phone)) { array_push($errors, "Phone Numner is required"); }
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customer (phone, name,email, password) 
					  VALUES('$phone', '$name', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['name'] = $name;
			$_SESSION['success'] = "You are now logged in";
			header('location: checkout-review.php');
           
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($phone)) {
			array_push($errors, "phone is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM customer WHERE phone='$phone' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['name'] = $name;
				$_SESSION['success'] = "You are now logged in";
				header('location: checkout-review.php');
			}else {
				array_push($errors, "Wrong phone/password combination");
			}
		}
	}

?>