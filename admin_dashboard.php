<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
          <a href="admin_dashboard.php" class="active">
            <i class='fa fa-fw fa-home' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="search.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Search</span>
          </a>
        </li>
        <li>
          <a href="add_trainee.php">
            <i class='fa fa-fw fa-user' ></i>
            <span class="links_name">Add Trainee</span>
          </a>
        </li>
        <li>
          <a href="trainee_details.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Display Records</span>
          </a>
        </li>
        <li>
          <a href="fee.php">
            <i class='fa fa-fw fa-rupee' ></i>
            <span class="links_name">Fee</span>
          </a>
        </li>
        <li>
          <a href="trainee_attendence.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Attendence</span>
          </a>
        </li>
        <li>
          <a href="query.php">
          <i class="bi-bell"></i>
            <span class="links_name">Queries</span>
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
        <form action="" method="post"><span class="admin_name">Email : <?php echo $_SESSION['email'];?></span></form>
      </div>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Settings
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a href="admin_profile.php">Profile</a></li>
          <li><a href="admin_sign_up.php">Add new Admin</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
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
<div class="right-sidebar">
</div>
</body>
</html>