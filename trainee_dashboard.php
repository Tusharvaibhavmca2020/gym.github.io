<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="1.css">
	 <?php
		session_start();
	  include('db.php');
	  ?>
  </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i ></i>
      <span class="logo_name">Fitness Gym</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="trainee_dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
       
        <li>
          <a href="trainee_fee_view.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Fee</span>
          </a>
        </li>
        <li>
          <a href="trainee_view_attendence.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Attendence</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <form action="" method="post"><span class="admin_name">Adimission ID : <?php echo $_SESSION['add_id'];?></span></form>
      </div>
      <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Settings
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="trainee_records.php">Profile</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>
    </nav>
  </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() 
      {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active"))
        {
          sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }
        else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>
</body>
</html>