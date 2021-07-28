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
<?php 
    $flag=0;
    $update=0;
    if(isset($_POST['submit']))
    {
           $date=date("d-m-Y");
           
            $query="select * from attendence_records where date ='$date'";
            $query_run=mysqli_query($conn, $query);
            $num=mysqli_num_rows($query_run);  
            if($num!=1)
            {
                foreach($_POST['status'] as $id=>$status)
                {
                
                $add_id=$_POST["add_id"][$id];
                $name=$_POST["name"][$id];
                $date=date("Y-m-d H:i:s");
               
                $query = "insert into attendence_records(add_id, name,status,date) values('$add_id','$name', '$status' ,'$date')";
                //echo $query;
                $query_run = mysqli_query($conn, $query);
                if($query_run)
                {
                    $flag=1;
                }
                }
            }
            else{?>
                <script>
                    alert("Duplicate");
                    window.location.href = "trainee_attendence.php";
                </script><?php
            }
       
    }
?>
<body>
<div class="topnav">
  <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Home</a>
 
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
</div>
    <div class="panel panel-default">
    <h2><div class="well text-center">Trainee Attendence</div></h2>
        <div class="panel panel-heading">
            <h2>
               <!-- <a href="add.php" class="btn btn-success">Add Trainee</a>-->
                <a href="view.php" class="btn btn-info pull-right">View All</a>
            </h2>
            <?php if($flag)
            {?>
             <div class="aletr alert-success">Attendence Data is successfully entered.</div>
            <?php
            }?>
             <?php if($update)
            {?>
             <div class="aletr alert-success">Attendence Data is successfully updated.</div>
            <?php
            }?>
            <h2><div class="well text-center">Date :
                <?php echo date("d-m-Y"); ?>
            </div></h2>
            <div class="panel panel-body">
                <form action="trainee_attendence.php" method="post">
                    <table class="table table-striped">
                        <tr>
                        <th>Adimission No.</th>
                        <th>Name</th>
                        <th>Attendence</th>
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
                            
                            <td><input type="radio" name="status[<?php echo $counter; ?>]" value="Present">Present
                                <input type="radio" name="status[<?php echo $counter; ?>]" value="Absent">Absent</td>
                            </tr>
                    <?php
                        $counter++;
                        }
                    ?>
                    </table>
                    <table>
                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>