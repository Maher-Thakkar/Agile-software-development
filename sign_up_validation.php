<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Validation</title>

	<style>
		.error {
		   color: red;
		}

	</style>
</head>
<body>

<?php
include 'ASD_DB.php';

$name = $username = $email = $age = $cr_password = $cf_password = $toggle = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		echo "<span class=\"error\">Error: Name Required.</span>";
	}

	//Validation - Name
	elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) 
	{
		echo "<span class=\"error\">Error: Name can only contain alphabets.</span>";
	}

	elseif (empty($_POST["username"])) 
	{
		echo "<span class=\"error\">Error: Username Required.</span>";
	}

	elseif (empty($_POST["email"])) 
	{
		echo "<span class=\"error\">Error: Email Required.</span>";
	}

	//Email Validation Filter
	elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
    	echo("$email is not a valid email address.");
	}


	elseif (empty($_POST["age"])) 
	{
		echo "<span class=\"error\">Error: Age Required.</span>";
	}

	// Validation - Age
	elseif(!preg_match("/^[0-9][0-9]$/",$_POST["age"])) 
	{
		echo "<span class=\"error\">Error: Wrong age format.</span>";
	}

	elseif (empty($_POST["cr_password"])) 
	{
		echo "<span class=\"error\">Error: Password Required.</span>";
	}
	

	elseif (empty($_POST["cf_password"])) 
	{
		echo "<span class=\"error\">Error: Must Confirm Password.</span>";
	}

	elseif (empty($_POST["toggle"])) 
	{
		echo "<span class=\"error\">Error: Must select either Student or Teacher.</span>";
	}

	else
	{
		$name = val($_POST["name"]);
		$username = val($_POST["username"]);
		$email = val($_POST["email"]);
		$age = val($_POST["age"]);
		$cr_password = val($_POST["cr_password"]);
		$cf_password = val($_POST["cf_password"]);
		$togg = val($_POST["toggle"]);
		

		echo "<h2>User Inputs</h2>";
		echo "<br>";
		echo "<b>Name -------- </b>" . $name . "<br>";
		echo "<b>Username -------- </b>" . $username . "<br>";
		echo "<b>Email -------- </b>" . $email . "<br>";
		echo "<b>Age -------- </b>" . $age . "<br>";
		echo "<b>Password -------- </b>" . $cf_password . "<br>";
		echo "<b>Type -------- </b>" . $togg . "<br>";

		if (isset($_REQUEST['username'])) {

			$query    = "INSERT INTO `signup` (`ID`, `Name`, `Username`, `Email`, `Age`, `Password`, `Stud_Teach`) VALUES ('$name', '$username', '$email', '$age', '$password', '$togg');";
        	$result   = mysqli_query($conn, $query);

        	if ($result) {
            	echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='sign_in_register.php'>Login</a></p>
                  </div>";
        	} 

        	else {
            	header("Location: sign_in_register.php");
        	}
        }

        /*$sql = "INSERT INTO `signup` (`ID`, `Name`, `Username`, `Email`, `Age`, `Password`, `Stud_Teach`) VALUES ('$name', '$username', '$email', '$age', '$password', '$togg');";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            #echo "The record has been inserted successfully!<br>";
        }
        else
        {
            echo "The record was not inserted successfully.<br>";
            echo mysqli_error($conn);
        }*/
	}
}

function val($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

</body>
</html>