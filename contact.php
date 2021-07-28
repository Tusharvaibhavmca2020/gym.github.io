<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
   

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-right {
  float: right;
	}
    
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
		#b
		{
			position: absolute;
			top: 55%;
			left: 80%;
			transform: translate(-50%, -50%);
			width: 25rem;
			padding: .5rem;
			box-sizing: border-box;
			background: rgba(0, 0, 0, 0.6);
			border-radius: 0.625rem;
		}
		/* Style inputs with type="text", select elements and textareas */
		input[type=text], select, textarea 
		{
			width: 100%; /* Full width */
			padding: 12px; /* Some padding */ 
			border: 1px solid #ccc; /* Gray border */
			border-radius: 4px; /* Rounded borders */
			box-sizing: border-box; /* Make sure that padding and width stays in place */
			margin-top: 6px; /* Add a top margin */
			margin-bottom: 16px; /* Bottom margin */
			resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
		}
		input[type=text-area], select, textarea 
		{
			width: 100%; /* Full width */
			padding: 12px; /* Some padding */ 
			border: 1px solid #ccc; /* Gray border */
			border-radius: 4px; /* Rounded borders */
			box-sizing: border-box; /* Make sure that padding and width stays in place */
			margin-top: 6px; /* Add a top margin */
			margin-bottom: 16px; /* Bottom margin */
			resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
		}

        /* Style the submit button with a specific background color etc */
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
        border-radius: 2px;
        background-color: #f2f2f2;
        padding: 10px;
        }

    </style>
</head>
<body>
<div class="topnav">
  <a class="active"href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <div class="topnav-right">
    <a href="login.php"> <i class="fa fa-fw fa-user"></i>Login</a>
  </div>
</div>
<div class="box" id="b">
<div class="container">
	<h3>Enquriy Form</h3>
	<form action="all.php" method="post">
		<label for="name">Name*</label>
		<input type="text" name="name" placeholder="write your name" require>
		<label for="mob">Mobile*</label>
		<input type="text" name="mob" placeholder="mobile number" require>
		<label for="address">Address*</label>
		<input type="text" name="address" placeholder="address" require>
		<label for="query">Query* </label>
		<textarea name="query" id="" cols="30" rows="10" placeholder="write your queries here"></textarea>
		<input type="submit" class="btn btn-primary" name="submit_here" value="Submit Here">
	</form>
</div>
</div>
</body>
</html>