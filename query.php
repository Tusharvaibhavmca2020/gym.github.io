<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
	<link rel="stylesheet" href="1.css">
    <?php 
        include("db.php");
        include("js.php");
        ?>
</head>
<body>
<div class="topnav">
  <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
</div>
    <div class="well text-center"><h2>Queries</h2></div>
    <div class="panel panel-body">
		<div class="panel panel-body">
			<table class="table">
				<tr>
					
					<th><b>Name</b></th>
					<th><b>Mobile</b></th>
					<th><b>Date</b></th>
					<th><b>Address</b></th>
                    <th><b>Queries</b></th>
					<th><b>Action</b></th>
				</tr>
				<?php
				 include('db.php');
				$query = "select * from query";
				$query_run = mysqli_query($conn, $query);
				while ($row = mysqli_fetch_array($query_run)) 
				{
				?>
				<tr>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['mob'];?></td>
					<td><?php echo $row['date'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['query'];?></td>
					<td><a href="all.php?name=<?php echo $row['mob'];?>&flag=2">DELETE</a></td>
				</tr>
				<?php 
				}?>
			</table>
			</div>
</body>
</html>