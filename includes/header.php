<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Placement Management Systems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
  
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"> </script>
  
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>

</head>
<body>
<!-- header-section-starts -->
<div class="h-top" id="home">
    <div class="top-header">
        <ul class="top-nag">
            <?php
            if(isset($_SESSION['admin'])){
                echo '<li><a class="active" href="dashboard.php" data-hover="Dashboard">Dashboard</a></li>';
                echo '<li><a href="logout.php" data-hover="LOGOUT">Logout</a></li>';
            }else {
                if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "home.php")
                        echo '<li><a class="active" href="home.php" data-hover="Home">Home</a></li>';
                    else
                        echo '<li><a href="home.php" data-hover="Home">Home</a></li>';

                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "profile.php")
                        echo '<li><a class="active" href="profile.php" data-hover="Profile">Profile</a></li>';
                    else
                        echo '<li><a href="profile.php" data-hover="Profile">Profile</a></li>';
                } else {
                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "registration.php")
                        echo '<li><a class="active" href="registration.php" data-hover="Registration">Registration</a></li>';
                    else
                        echo '<li><a href="registration.php" data-hover="registration">registration</a></li>';

                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "login.php")
                        echo '<li><a class="active" href="login.php" data-hover="Login">Login</a></li>';
                    else
                        echo '<li><a href="login.php" data-hover="Login">Login</a></li>';
                }
                echo '<li><a href="about.php" data-hover="ABOUT">About</a></li>';
                if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
                    echo '<li><a href="logout.php" data-hover="LOGOUT">Logout</a></li>';
                }
            }
            ?>
        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<div class="full">
    <div class="col-md-3 top-nav register" style="background-color: #0BE0FD">
        <div class="logo">
            <style>
                .btn-social {
                    width: 100px;
                    position: relative;
                    opacity: 1.0;
                    transition: 0.3s ease;
                    cursor: pointer;
                }

                .btn-social:hover {
                    transform: scale(1.1, 1.2); 
                    opacity: 1;
                }
            </style>
           
        </div>
        <div class="top-menu">
            <span class="menu"> </span>

            
            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-menu ul" ).slideToggle(300, function() {
                        
                    });
                });
            </script>
            <!-- script-for-nav -->
            <ul class="side-icons">
                <li><a class="fb" href="#"></a></li>
                <li><a class="twitt" href="#"></a></li>
                <li><a class="goog" href="#"></a></li>
                <li><a class="drib" href="#"></a></li>
            </ul>
        </div>
    </div>
