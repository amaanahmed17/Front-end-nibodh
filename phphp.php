<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="phphp.php">

		Username &nbsp;&nbsp;<input type="text" name="username" required><br><br>
		Password &nbsp;&nbsp;<input type="password" name="password" required><br><br>
		email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"><br><br>
		<input type="submit" name="submit">
	</form>
	
	<?php
	session_start();
	if(filter_has_var(INPUT_POST,'submit'))
	{
		$email=$_POST['email'];
		$_SESSION['email']=$email;
		echo $_SESSION['email'];
		unset($_SESSION['email']);
		$em=filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $em;echo "<br>";
		if(filter_var($em, FILTER_VALIDATE_EMAIL))
		{
			echo 'email is valid';
		}
		else
		{
			echo 'email is not valid';
		}
	}
		

	?>

</body>
</html>