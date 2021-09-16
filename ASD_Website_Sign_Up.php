<!DOCTYPE html>
<html>
<head>
	<title>Pleiades</title>
</head>
<body bgcolor="#f5f5f5">
<p style="font-size: 65px; font-family: librebaskerville; margin-top: 20px; margin-bottom: 20px;" align="center"><b>P &nbsp; L &nbsp; E &nbsp; I &nbsp; A &nbsp; D &nbsp; E &nbsp; S</b></p>
<hr>

<p style="font-size: 55px;" align="center">Welcome to Pleiades!</p> <!--Product Description-->
<p style="font-size: 25px;" align="center">Spend your time gaining knowledge and proficiency in subjects of your choice with E-Learning, and reading books that you love with Book Haven!</p>

<br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table align="center" width="200" border="0" cellspacing="1" cellpadding="10">
		<tr>
			<td>
				<input type="submit" name="sign_up" value="Sign Up" style="font-size: 20px;" formaction="sign_up_register.php">
			</td>
			<td>
				<input type="submit" name="sign_in" value="Sign In" style="font-size: 20px;" formaction="sign_in_register.php">
			</td>
		</tr>
	</table>
</form>

</body>
</html>