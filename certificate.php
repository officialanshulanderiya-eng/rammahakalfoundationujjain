<?php
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

// Display the dashboard page for the logged-in user
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/mycss.css">
    <link rel="stylesheet" href="dashboardstyle.css">
    <style>
    body {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
</style>
    <title>User Profile</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle">Menu</i></div>
        <div class="header_img"> <img src="img/hack.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
                <span class="nav_logo-name">Welcome,<?php echo $_SESSION['username']; ?></span> </a>
                <div class="nav_list"> 
                    <a href="courses.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="     nav_name">Users</span>
                    </a> 
                    <a href="https://chat.whatsapp.com/LqxwF2I1bqNAYsPWJvsdao" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'>      </i> <span class="nav_name">Join Whatsapp</span> 
                    </a> 
                    <a href="courses.php" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span         class="nav_name">Courses</span> 
                    </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class=    "nav_name">Files</span>
                     </a> 
                     <a href="certificate.html" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i>       <span class="nav_name">Certificate</span> 
                     </a> 
                </div>
            </div> 
            <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">SignOut</span> 
            </a>
        </nav>
    </div>
    <nav id="navbar ">
        <h1 class="mycls"> <marquee behavior=alternate>WELCOME TO R.A.M. MAHAKAL FOUNDATION</marquee></h1>
    </nav>
    <!--Container Main start-->
    <div class="height-100 bg-light mctnr">
        <h1 class="certificate">Coming Soon......</h1>
        <!--<a href="https://rammahakalfoundation.com/userprofile.php">Click to Main page</a>-->
        
    </div>
    <!--Container Main end-->

</body>
</html>