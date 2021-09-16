<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body bgcolor="#f5f5f5">

	<p style="font-size: 25px; font-family: librebaskerville;" align="center"><b>Sign Up</b></p>
	<hr>

<form style="text-align: left;" action="sign_up_validation.php" method="post">
	<fieldset style="width: 600px; margin-left: 25%; margin-top: 30px;">
	<table width="500" border="0" cellspacing="1" cellpadding="10" align="center" style="font-size: 25px;">
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>
				<input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="Email" name="email">
			</td>
		</tr>
		<tr>
			<td>Age</td>
			<td>
				<input type="Number" name="age">
			</td>
		</tr>
		<tr>
			<td>Create Password</td>
			<td>
				<input type="Password" name="cr_password">
			</td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td>
				<input type="Password" name="cf_password">
			</td>
		</tr>
		<tr>
			<td>Student/Tutor</td>
			<td>
				Student<input type="radio" name="toggle" value="student">
				Tutor<input type="radio" name="toggle" value="tutor">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Register" style="font-size: 20px; font-family: timesnewroman; background-color: lightblue; color: black;">
			</td>
			<td>
				
			</td>
		</tr>
		
		
			
	</table>
	</fieldset>
</form>


</body>
</html>

