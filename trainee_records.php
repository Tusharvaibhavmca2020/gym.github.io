<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traine Records</title>
    <?php
        include('js.php');
    ?>
</head>
<body>
<div class="well text-center"><h4>Trainee Details : </h4></div>
		
		<div class="panel panel-body">
		<a href="trainee_dashboard.php" class="btn btn-info pull-right">Go to Dashboard</a>
		<div class="panel panel-body">
			<table class="table">
				<tr>
					<th><b>Adimission ID</b></th>
					<th><b>Name</b></th>
					<th><b>Mobile</b></th>
					<th><b>Address</b></th>
					<th><b>Fee</b></th>
					<th><b>Date of Join</b></th>
				</tr>
				<?php
                session_start();
				 include('db.php');
				$query = "select * from trainee where add_id='$_SESSION[add_id]'";
				$query_run = mysqli_query($conn, $query);
				while ($row = mysqli_fetch_array($query_run)) 
				{
				?>
				<tr>
					<td><?php echo $row['add_id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['mob'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['fee'];?></td>
					<td><?php echo $row['Date'];?></td>
				</tr>
				<?php 
				}?>
			</table>
			</div>
</div>
</body>
</html>