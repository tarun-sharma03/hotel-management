<?php include "assets/fxn.php";
if (isset($_SESSION["UID"]) == NULL) {
?>
    <script>
        alert("You Need To Login!!!");
        window.location = "index.php";
    </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



    <title>Awesome Rooms</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/styles/A.main_styles.css%2bresponsive.css%2cMcc.p_HEf5oLt-.css.pagespeed.cf.BYY-BVgrvU.css" />



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


</head>


<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo">
                                <a href="../index.php">
                                    <div>Awesome Rooms</div>
                                    <div>Hotels Anytime, Anywhere</div>
                                </a>
                            </div>
                            <!-- <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="user.php">User Area</a></li>
                                    <li><a href="hotel.php">Hotel Area</a></li>
                                    <li><a href="admin.php">Admin Area</a></li>
                                </ul>
                            </nav> -->
                            <div class="header_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                <div class="phone d-flex flex-row align-items-center justify-content-start"><i class="fa fa-phone" aria-hidden="true"></i><span>1800-100-100</span></div>
                                <div class="book_button trans_200"><a href="logout.php">Logout</a></div>
                            </div>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="menu">
            <div class="background_image" style="background-image:url(assets/images/menu.jpg)"></div>
            <div class="menu_content d-flex flex-column align-items-center justify-content-center">
                <!-- <ul class="menu_nav_list text-center">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="user.php">User Area</a></li>
                    <li><a href="hotel.php">Hotel Area</a></li>
                    <li><a href="admin.php">Admin Area</a></li>
                </ul> -->
                <div class="menu_review"><a href="logout.php">Book Now</a></div>
            </div>
        </div>