<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="1.css">
	<style>
		body
		{
			margin: 0;
			padding: 0;
			background: url(https://images.unsplash.com/photo-1540497077202-7c8a3999166f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
			background-size: cover;
			font-family: sans-serif;
		}

		.box 
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 25rem;
			padding: 2.5rem;
			box-sizing: border-box;
			background: rgba(0, 0, 0, 0.6);
			border-radius: 0.625rem;
		}

		.box h2 
		{
			margin: 0 0 1.875rem;
			padding: 0;
			color: #fff;
			text-align: center;
		}

		.box input[type="submit"] 
		{
			border: none;
			outline: none;
			color: #fff;
			background-color: #03a9f4;
			padding: 0.625rem 1.25rem;
			cursor: pointer;
			border-radius: 0.312rem;
			font-size: 1rem;
		}

		.box input[type="submit"]:hover 
		{
			background-color: #1cb1f5;
		}
		
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active"href="index"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <div class="topnav-right">
    <a href="login.php"> <i class="fa fa-fw fa-user"></i>Login</a>
  </div>
</div>
<div class="box">
 	<h2>Fitness Club</h2>
 	<center>
		<form action="" method="post">
			<input type="submit" name="admin_login" value="Admin">
			<input type="submit" name="trainee_login" value="Trainee">
		</form>
  	</center>
 	<?php
		if(isset($_POST['admin_login']))
		{
			header("Location:admin_login.php");
		}

		if(isset($_POST['trainee_login']))
		{
			header("Location:trainee_login.php");
		}
	?>
</div>

</body>
</html>