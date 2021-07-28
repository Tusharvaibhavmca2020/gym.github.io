<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainee Fee</title>
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="1.css">
        <?php  include('db.php'); ?>
</head>
<?php 
    /*$flag=0;
    $update=0;
    if(isset($_POST['submit']))
    {
            $date=date("d-m-Y");
            $conn=mysqli_connect("localhost","root","","gym");
            $db=mysqli_select_db($conn,"gym");
            $query="select * from trainee where date ='$date'";
            $query_run=mysqli_query($conn, $query);
            $num=mysqli_num_rows($query_run);  
            if($num)
            {
                foreach($_POST['fee'] as $id=>$fee)
                {
                    
                    $add_id=$_POST["add_id"][$id];
                    $name=$_POST["name"][$id];
                    $fee=$_POST["fee"][$id];
                    $date=date("Y-m-d H:i:s");
                    $conn=mysqli_connect("localhost","root","","gym");
                    $db=mysqli_select_db($conn,"gym");
                    $query = "update fee_records set (add_id=$add_id, name=$name,date=$date, fee=$fee)";
                    
                    $query_run = mysqli_query($conn, $query);
                    if($query_run)
                    {
                        $update=1;
                    }
                }
            }
        else
        {
            foreach($_POST['fee'] as $id=>$fee)
            {
                
                $add_id=$_POST["add_id"][$id];
                $name=$_POST["name"][$id];
                $fee=$_POST["fee"][$id];
                $date=date("Y-m-d H:i:s");
               
                $query = "insert into fee_records(add_id, name,date,fee) values('$add_id','$name','$date','$fee' )";
                //echo $query;
                $query_run = mysqli_query($conn, $query);
                if($query_run)
                {
                    $flag=1;
                }
            }
        } 
    }*/
?>
<body>
<div class="topnav">
  <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
  </div>
</div>
    <div class="container">
       
    </div>
    <div class="panel panel-default">
        <div class="panel panel-heading">
        <h2><div class="well text-center">Trainee Fee</div></h2>
            <h2>
                <!--<a href="add_fee.php" class="btn btn-success">Add Trainee</a>-->
                <a href="fee_view.php" class="btn btn-info pull-right">View All</a>
            </h2>
            
            <h2><div class="well text-center">Date :
                <?php echo date("d-m-Y"); ?>
            </div></h2>
            <div class="panel panel-body">
                <form action="all.php" method="post">
                    <table class="table table-striped">
                        <tr>
                        
                            <th>Adimission No.</th>
                            <th>Name</th>
                            <th>Fee Amount</th>
                            <th>Date</th>
                        <!--<th>Payment Details</th>-->
                        </tr>
                    <?php 
                       
                        $query = "select * from trainee";
                        $query_run = mysqli_query($conn, $query);
                        $counter=0;
                        while($row=mysqli_fetch_array($query_run))
                        {?>
                            <tr>
                            
                            <td><?php echo $row['add_id']; ?>
                            <input type="hidden" value="<?php echo $row['add_id']; ?>" name="add_id[]"></td>
                            
                            <td><?php echo $row['name']; ?>
                            <input type="hidden" value="<?php echo $row['name']; ?>" name="name[]"></td>
                            
                            <td><input type="number" name="fee[<?php echo $counter; ?>]">
                            <td><input type="date" name="date[<?php echo $counter; ?>]">
                            </tr>
                    <?php
                        $counter++;
                        }
                    ?>
                    </table>
                    
                        <input type="submit" name="submit_fee" class="btn btn-success" value="Submit">
                        <input type="submit" name="update_fee" class="btn btn-success" value="Update">
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>