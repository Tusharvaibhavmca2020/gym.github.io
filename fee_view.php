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
       
        
        <!-- Latest compiled JavaScript -->
        
        <link rel="stylesheet" href="1.css">
        <?php  include('db.php'); ?>
</head>

<body>
<div class="topnav">
  <a class="active" href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  <div class="topnav-right">
    <a href="fee.php"> <i class="fa fa-fw fa-user"></i>Back</a>
  </div>
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
</div>
    <div class="container">
        
    </div>
    <div class="panel panel-default">
        <div class="panel panel-heading">
            <div class="panel panel-body">
                <form action="all.php" method="post">
                    <table class="table table-striped">
                        <tr>
                        <h2><div class="well text-center">Trainee Fee</div></h2>
                            <th>Date</th>
                            <th>Show Fee Details</th>
                        </tr>
                    <?php 
                        include("db.php");
                        $query = "select distinct date from fee_records";
                        $query_run = mysqli_query($conn, $query);
                        while($row=mysqli_fetch_array($query_run))
                        {?>
                            <tr>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
                                    <input type="submit" value="Show Fee" name="show_fee"  class="btn btn-primary">
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