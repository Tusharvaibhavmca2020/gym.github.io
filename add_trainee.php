<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Trainee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" href="1.css">
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
        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            border-radius: 0.3em;
            background-color: #f2f2f2;
        }
        *[role="form"] h2 { 
            font-family: 'Open Sans' , sans-serif;
            font-size: 40px;
            font-weight: 600;
            color: #000000;
            margin-top: 5%;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 4px;
        }
	</style>
	<?php 
        include('js.php');
        include('db.php'); 
    ?>
</head>
<body>
<div class="topnav">
  <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
</div>
	<div class="container">
    <h2><div class="well text-center">Enter Trainee Details</div></h2>
        <form action="all.php" method="post" class="form-horizontal" role="form">
        <table class="table">
								<tr>
									<td><b>Adimission No : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="add_id">
									</td>
								</tr>
								<tr>
									<td><b>Name : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="name"  >
									</td>
								</tr>
								<tr>
									<td><b>Mobile : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="mob">
									</td>
								</tr>
								<tr>
									<td><b>Address : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="address" >
									</td>
								</tr>
								<tr>
									<td><b>Fee : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="number" name="fee">
									</td>
								</tr>
                                <tr>
									<td><b>Date of Join : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="date" name="date">
									</td>
								</tr>
                                <tr>
									<td><b>Gender : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
                                    <input type="radio"  name="gender" value="Female" required>Female
                                    <input type="radio"  name="gender" value="Male" required>Male
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="add" class="btn btn-success" value=Submit></td>
								</tr>
							</table>
							</form>
        </form> 
    </div>
</body>
</html>