<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainee Attendence</title>
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="1.css">
        <?php  include('db.php'); ?>
</head>

    
<body>
<div class="topnav">
  <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
 
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
</div>
    <div class="panel panel-default">
    <h2><div class="well text-center">Trainee Attendence</div></h2>
        <div class="panel panel-heading">
            <h2>
                <a href="view.php" class="btn btn-info pull-right">Back</a>
            </h2>
            
            <div class="panel panel-body">
                <form action="" method="post">
                    <table class="table table-striped">
                        <tr>
                        
                        <th>Date</th>
                        <th>Adimission No.</th>
                        <th>Name</th>
                        <th>Attendence</th>
                        </tr>
                    <?php 
                        
                        $query = "select * from attendence_records where date = '$_REQUEST[name]'";
                        $query_run = mysqli_query($conn, $query);
                        $counter=0;
                        while($row=mysqli_fetch_array($query_run))
                        {?>
                            <tr>
                            <td><?php echo $row['date']; ?>
                            <td><?php echo $row['add_id']; ?>                            
                            <td><?php echo $row['name']; ?>                            
                            <td><input type="radio" name="status[<?php echo $counter; ?>]"
                            <?php if($row['status']=="Present") echo "checked=checked";?>
                             value="Present">Present
                                <input type="radio" name="status[<?php echo $counter; ?>]" 
                                <?php if($row['status']=="Absent") echo "checked=checked";?>
                                value="Absent">Absent</td>
                            </tr>
                    <?php
                        $counter++;
                        }
                    ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>