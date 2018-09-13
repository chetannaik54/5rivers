<?php
session_start();
include('inc/procedure.php');

if(!empty($_POST["user_name"])) {
	if(!empty($_POST["pass_word"])) {
		$fetch = getnumrow("*" , "admin", "email='".$_POST['user_name']."'");
		if($fetch == 1){
			$data = select("password, profile" , "admin", "email='".$_POST['user_name']."'");

			foreach ($data as $pass) {

				if ($pass['password'] == $_POST["pass_word"]) {
						//check if string has .jpg word in it 
						if (strpos($pass['profile'], '.jpg') !== false || strpos($pass['profile'], '.png') !== false) {
							$cookie_name = 'profile';
							$cookie_value = 'dist/img/profile/'.$pass['profile'];
							//set cookie
							setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
							setcookie('username', ucfirst($_POST["user_name"]), time() + (86400 * 30), "/");
							$_SESSION['loggeduser'] = $_POST["user_name"];
							// return value matched
							echo "Matched";
						}
						else{
							echo $pass['profile'];
							echo "Error : Profile Pic not jpg";
						}
				}else{
					echo "Incorrect username/password";
				}

			}

		}
		else{
			echo "Incorrect username";
		}
	}
	else{
		echo "No password supplied";
	}
}