<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Fee Details</title>
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
  <a class="active"href="trainee_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>

  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
</div>
    <div class="panel panel-default">
    <h2><div class="well text-center">Trainee Fee</div></h2>
        <div class="panel panel-heading">
            <h2>
                <a href="trainee_dashboard.php" class="btn btn-info pull-right">Back</a></h2>
            
            <div class="panel panel-body">
                <form action="all.php" method="post">
                    <table class="table table-striped">
                        <tr>
                            <th>Date</th>
                            <th>Show Fee Details</th>
                        </tr>
                    <?php 
                        session_start();
                        include("db.php");
                        $query = "select distinct date from fee_records where add_id= '$_SESSION[add_id]'";
                        $query_run = mysqli_query($conn, $query);
                        while($row=mysqli_fetch_array($query_run))
                        {?>
                            <tr>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
                                    <input type="submit" value="Show Fee" name="trainee_fee"  class="btn btn-primary">
                                </td> 
                            </tr>
                <?php   }
                        ?>
       
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>