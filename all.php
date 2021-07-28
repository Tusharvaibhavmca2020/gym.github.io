<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Query</title>
    <?php 
        require_once("db.php"); 
        require_once("js.php");
    ?>
</head>
<body>
    <!---- Admin Login ---->
    <?php
					
                    session_start();
					if(isset($_POST['sign_in']))
					{
						include('db.php');
						$query="select * from login where email = '$_POST[email]' and password='$_POST[password]'";
						$query_run = mysqli_query($conn, $query);
                        $cnt=mysqli_num_rows($query_run);
                       
						if($cnt!=1)
						{
							?>
                                        <script>
                                                alert("wrong email id or password");
                                                window.location.href = "admin_login.php";

                                            </script>
                              <?php          
								
						}
							else
								{
                                    $_SESSION['email']=$row['email'];
									header("Location:admin_dashboard.php");
								}
                               
					}
					
	?>
     <!-- Admin Sign up --->
     <?php
        if(isset($_POST["sign_up"]))
        {
            include('db.php');
			$query = "insert into login (email, password, name, mob, address) values( '$_POST[email]' ,'$_POST[password]', '$_POST[name]', '$_POST[mob]', '$_POST[address]')";
			$query_run = mysqli_query($conn, $query);?>
            <script>
                alert("Sign Up successfully.");
                window.location.href = "admin_dashboard.php";

            </script><?php
			//header("location:admin_dashboard.php");
        }
    ?>
    <!--- Traine Login ---->
    <?php
            
            
            if(isset($_POST['submit']))
            {
                
                include('db.php');
                $query="select * from trainee where add_id = '$_POST[add_id]' and mob='$_POST[mob]'";
                
                $query_run = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($query_run))
                {
                $cnt=mysqli_num_rows($query_run);
                if($cnt!=1)
                {
                    ?>
                                <script>
                                        alert("wrong adimission id id or mobile");
                                        window.location.href = "trainee_login.php";

                                    </script>
                      <?php          
                        
                }
                    else
                        {
                            $_SESSION['add_id']=$row['add_id'];
                            header("Location:trainee_dashboard.php");
                        }
                    }
            }
        ?>

   
    <!---Show fee----->
        <?php
            if(isset($_POST["show_fee"]))
            {
                $date=$_POST["date"];
                $query = "select * from fee_records where date = '$date'";
                $query_run = mysqli_query($conn, $query);
                $counter=0;
                ?>
                <link rel="stylesheet" href="1.css">
                <div class="topnav">
                    <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
                    <div class="topnav-right">
                        <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
                    </div>
                </div>
                <div class="container">
                   
                </div>
                <div class="panel panel-default">
                <h2><div class="well text-center">Fee Details</div></h2>
                    <div class="panel panel-heading">
                            <h2>
                                <a href="fee_view.php" class="btn btn-info pull-right">Back</a>
                            </h2>
                            
                        <div class="panel panel-body">
                            
                                <table class="table table-striped">
                                    <tr>
                                    <th>Fee ID</th>
                                    <th>Adimission No.</th>
                                    <th>Name</th>
                                    <th>Fee</th>
                                    <!--<th>Date</th>-->
                                    </tr>
                                        <?php while($row=mysqli_fetch_array($query_run))
                                            {
                                                ?>
                                                
                                                    <tr>
                                                        <td><?php echo $row['fee_id']; ?> 
                                                        <td><?php echo $row['add_id']; ?>                            
                                                        <td><?php echo $row['name']; ?>                            
                                                        <td><?php echo $row['fee'];?></td>
                                                        <td><?php // echo $row['date'];?></td>
                                                    </tr>
                                                <?php
                                            }
                                        }?>
                                </table>
                            
                        </div>
                    </div>
                </div>
    <!---Show fee end--->
    <!----Trainee Fee --->
    <?php
            if(isset($_POST["trainee_fee"]))
            {
                $query = "select * from fee_records where add_id = '$_SESSION[add_id]'";
                $query_run = mysqli_query($conn, $query);
                $counter=0;
                ?>
                <link rel="stylesheet" href="1.css">

                <div class="topnav">
                <a class="active"href="trainee_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
               
                <div class="topnav-right">
                    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
                </div>
                </div>
                <div class="panel panel-default">
                <h2><div class="well text-center">Fee Details</div></h2>
                    <div class="panel panel-heading">
                            <h2>
                                
                                <a href="trainee_dashboard.php" class="btn btn-info pull-right">Back</a>
                            </h2>
                            
                        <div class="panel panel-body">
                            
                                <table class="table table-striped">
                                    <tr>
                                    <th>Fee ID</th>
                                    <th>Adimission No.</th>
                                    <th>Name</th>
                                    <th>Fee</th>
                                    <th>Date</th>
                                    </tr>
                                        <?php while($row=mysqli_fetch_array($query_run))
                                            {
                                                ?>
                                                
                                                    <tr>
                                                        <td><?php echo $row['fee_id']; ?> 
                                                        <td><?php echo $row['add_id']; ?>                            
                                                        <td><?php echo $row['name']; ?>                            
                                                        <td><?php echo $row['fee'];?></td>
                                                        <td><?php echo $row['date'];?></td>
                                                    </tr>
                                                <?php
                                            }
                                        }?>
                                </table>
                            
                        </div>
                    </div>
                </div>

    <!-- Fee Entery -->
    <?php 
         
         if(isset($_POST['update_fee']))
         {
            //$date=$_POST["date"];
            $query="select * from fee_records ";
            $query_run=mysqli_query($conn, $query);
            /*$num=mysqli_num_rows($query_run);  
            if($num)
            {*/
                foreach($_POST['fee'] as $id=>$fee)
                {
                    
                    
                    $add_id=$_POST["add_id"][$id];
                    $name=$_POST["name"][$id];
                    $fee=$_POST["fee"][$id];
                    $date=$_POST["date"][$id];
                    $conn=mysqli_connect("localhost","root","","gym");
                    $db=mysqli_select_db($conn,"gym");
                    $query = "update fee_records set add_id='$add_id', name='$name',date='$date', fee='$fee'";
                    $query_run = mysqli_query($conn, $query);
                    header("location:fee.php");
                }
            }
            
            if(isset($_POST['submit_fee']))
                {
                    
                    foreach($_POST['fee'] as $id=>$fee)
                    {
                        $date=$_POST["date"];
                        
                        $add_id=$_POST["add_id"][$id];
                        $name=$_POST["name"][$id];
                        $fee=$_POST["fee"][$id];
                        $date=$_POST["date"][$id];
                        $query = "insert into fee_records(add_id, name,date,fee) values('$add_id','$name','$date','$fee' )";
                        $query_run = mysqli_query($conn, $query);
                        header("location:fee.php");
                    
                    }
                } 
         //}
    ?>
    <!--- End of Fee Submission--->

    <!---------Trainee Details ---->
    <?php 
        
        if($_REQUEST['flag']==1)
        {
                         include("db.php");
                         $query =" DELETE  from trainee where add_id = '$_REQUEST[name]'";
                         $query_run = mysqli_query($conn, $query);
                         header("location: trainee_details.php");
            
        }
    ?>    
<!-- Edit Data -->
    <?php
    if(isset($_POST['edit_data']))
    {
        require_once("db.php"); 
        $query4="UPDATE trainee set add_id=$_POST[add_id], name='$_POST[name]', mob=$_POST[mob], address='$_POST[address]', fee=$_POST[fee] 
        where add_id=$_POST[add_id]";
        $query_run4=mysqli_query($conn, $query4);
        header("location:trainee_details.php");
    }
    ?>

    <!-------Add Trainee ---------->
    <?php
        if(isset($_POST["add"]))
        {
			include('db.php');
			$query = "insert into trainee(add_id,name,mob,address,fee, date, gender) values( $_POST[add_id] ,
			 '$_POST[name]', $_POST[mob], '$_POST[address]', $_POST[fee], '$_POST[date]', '$_POST[gender]') ";
			$query_run = mysqli_query($conn, $query);
			header("location:admin_dashboard.php");
        }
    ?>
    <!-----Enqury form --->
    <?php 
        if(isset($_POST["submit_here"]))
        {
            include("db.php");
            $query = "insert into query (name, mob,date, address, query) values ('$_POST[name]', '$_POST[mob]','$_POST[date]','$_POST[address]','$_POST[query]' )";
            $query_run = mysqli_query($conn, $query);
            ?>
            <script>
                alert("Your query is successffully submitted.");
                window.location.href = "index.php";
            </script>
            <?php
            //header("location:index.php");
            
        }
    ?>
    <!-- Query Action -->
    <?php 
        
        if($_REQUEST['flag']==2)
        {
                         include("db.php");
                         $query =" DELETE  from query where mob = '$_REQUEST[name]'";
                         $query_run = mysqli_query($conn, $query);
                         header("location: query.php");
        }
    ?>   
    <!--- Attendance Submission -->
     
    
    		
</body>
</html>