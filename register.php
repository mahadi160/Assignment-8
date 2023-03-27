<?php
	if(isset($_POST['submit'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];

		// Check if all fields are filled
		if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)){
			echo "All fields are required.";
		}
		// Check if email address is valid
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "Invalid email address.";
		}
		// Check if password and confirm password match
		elseif($password !== $confirmPassword){
			echo "Password and Confirm Password must match.";
		}
		else{
			// Open the CSV file for writing
			$file = fopen('users.csv', 'a');

			// Add user data to the CSV file
			$data = array($firstName, $lastName, $email, $password);
			fputcsv($file, $data);

			// Close the CSV file
			fclose($file);

			// Display confirmation message
			echo "Registration successful!";
		}
	}
?>
