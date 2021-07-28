<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data</title>
	

		<!-- Latest compiled JavaScript -->
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
	<?php  include('db.php'); 
	include('js.php');?>
</head>
<body>
<div class="topnav">
  <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
  <div class="topnav-right">
    <a href="trainee_details.php"> <i class="fa fa-fw fa-user"></i>Back</a>
  </div>
 
</div>
	
	<center>
	<div class="container">
	<h2><div class="well text-center">Trainee Details</div></h2>
</div>
		<?php 
			include('db.php');
				$name = $_REQUEST["name"];
				$query="select * from trainee where add_id = '$name' ";
				$query_run = mysqli_query($conn, $query);
				while($row=mysqli_fetch_array($query_run))
				{?>
					<form action="all.php" method="post" class="form-horizontal" role="form">
							<table class="table">
								<tr>
									<td><b>Adimission No : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="add_id" value="<?php echo $row['add_id']; ?>">
									</td>
								</tr>
								<tr>
									<td><b>Name : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="name" value="<?php echo $row['name']; ?>" >
									</td>
								</tr>
								<tr>
									<td><b>Mobile : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="mob" value="<?php echo $row['mob']; ?>">
									</td>
								</tr>
								<tr>
									<td><b>Address : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="address" value="<?php echo $row['address']; ?>">
									</td>
								</tr>
								<tr>
									<td><b>Fee : &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
									<td>
										<input type="text" name="fee" value="<?php echo $row['fee']; ?>">
									</td>
								</tr><br>
								<tr>
									
									<td><input type="submit" name="edit_data" class="btn btn-success" value=Submit></td>
								</tr>
							</table>
							</form>
							<?php	}	
			
		?>
		
	</center>

</body>
</html>