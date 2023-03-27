<?php
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Check if both fields are filled
		if(empty($email) || empty($password)){
			echo "Both fields are required.";
		}
		else{
			// Check if user exists in CSV file
			$file = fopen("users.csv", "r");
			$isUserFound = false;
			while(($userData = fgetcsv($file)) !== false){
				if($userData[2] === $email && $userData[3] === $password){
					$isUserFound = true;
					$firstName = $userData[0];
					break;
				}
			}
			fclose($file);

			if($isUserFound){
				// Redirect to welcome page
				header("Location: welcome.php?firstName=$firstName");
			}
			else{
				// Display error message
				echo "Invalid email or password.";
			}
		}
	}
?>