<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/cca0635c76.js" crossorigin="anonymous"></script>
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Customised CSS Sheet-->
    <link rel="stylesheet" href="css/Homepage.css">
    <!--JS powered CDN-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!--JS powered Bootstrap 4-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--JS powered Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-----Favicon----->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/Homepage.css">
    <!------Preloader----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('.preloader').addClass('complete')
        })
    </script>
    <script src="js/loader.js"></script>
    <style>
        .card {
            box-shadow: rgb(175, 175, 177);
            border: rgb(175, 175, 177);
        }
        h4 {
            color: #FFFFFF;
            font-family: "Montserrat";
            font-size: 3rem;
            line-height: 1.5;
        }
        .navbar {
            padding-bottom: 3 rem;
        }
        .nav-brand {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .nav-item {
            padding: 0 18px;
        }
        .nav-link {
            font-size: 1.2rem;
            font-family: "Montserrat";
        }
        .dropdown-menu {
            background-color: #09A8FA;
            font-family: "Montserrat";
        }
        body {
            background-color: #F9F9F9;
        }
        .card {
            margin: 5%;
        }
        .card-header {
            background-color: #FFC947;
            padding: 0.75%;
        }
        .bg-dark {
            background-color: #171717;
        }
        .mylist {
            list-style-type: square;
        }
    </style>
</head>

<body>
    <div class=" preloader">
        <div class="loader">RailPatri</div>
    </div>
    <!--Navbar Customised-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" style="font-family: Montserrat" href="homepage.php"><img src="img/railpatri.png" width="30" height="30" alt="RailPatri"> RailPatri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"></li>
                <a class="nav-link" href="homepage.php"><i class="fas fa-ticket-alt"></i> Train Tickets</a>
                <li class="nav-item"></li>
                <a class="nav-link" href="login/loginpage.php"><i class="fas fa-bus"></i> Reservation</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info"></i> More</a>
                    <div class="dropdown-menu text-primary bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#con"><i class="fab fa-blogger"></i> Blog</a>
                        <a class="dropdown-item" href="About.php"><i class="fas fa-address-card"></i> About Us</a>
                        <a class="dropdown-item" href="contact.php"><i class="fas fa-phone-volume"></i> Contact Us</a>
                    </div>
                </li>
                <a class="navbar-brand" style="font-family: Montserrat" href="login/loginpage.php" alt=""><i class="fas fa-user-circle"></i> Login</a>
            </ul>
        </div>
    </nav>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h5 class="card-title" style="font-family: Montserrat">About</h5>
            <hr>
            <div class="row"></div>
            <div class="col">
                <center>
                    <img src="img/railpatri.png" alt="RailPatri">
                    <center>
            </div><br>
            <div class="col">
                <div class="container-fluid">
                    <p> <a href="index.php">RailPatri</a> is created to demonstrate various services of Railway, that are connect with Database.</p>
                    <ul>
                        <li><i class="fas fa-square" color="orange"></i> Reservation</li>
                        <li><i class="fas fa-square" color="orange"></i> Timetable</li>
                        <li><i class="fas fa-square" color="orange"></i> PNR status</li>
                        <li><i class="fas fa-square" color="orange"></i> Railway News</li>
                        <li><i class="fas fa-square" color="orange"></i> Arriving Departure</li>
                        <li><i class="fas fa-square" color="orange"></i> Contact Us</li>
                    </ul>
                    <p>
                    This website is created by Tarun Kumar, Himanshu Aggarwal, Akansha Soni and Bharti Chaudhary
                    </p>
                    <p></p>
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
    
                    <div class="card-body">
                        <h5 class="card-title">Backend + Database</h5><br>
                        <hr>
                        <p class="card-text">UID: 21MCC2036</p>
                        <p class="card-text">Section / Group : 1 / A </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Backend + Database</h5>
                        <hr>
                        <p class="card-text">UID: 21MCC2037</p>
                        <p class="card-text">Section / Group :1 / A </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Frontend + Deployment + Documentation</h5><br>
                        <hr>
                        <p class="card-text">UID: 21MCC2007</p>
                        <p class="card-text">Section / Group : 1 / A </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Frontend + Deployment + Documentation </h5><br>
                        <hr>
                        <p class="card-text">UID: 21MCC2027</p>
                        <p class="card-text"> Section / Group : 1 / B </p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</body>
<footer class=" text-center text-white" style="background-color: #171717;">
    <!-- Grid container -->
    <div class="container p-4" style="background-color: #171717;">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Youtube -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-youtube"></i></a>
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/PatriRail" role="button"><i class="fab fa-facebook"></i></a>
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/PatriRail" role="button"><i class="fab fa-twitter"></i></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="" id="con">
            <form method="POST" action="email.php">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for daily railway news</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" name="email" id="form5Example2" class="form-control" placeholder="Email address" required />
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                            <i class="fas fa-bell"></i> Get Notified
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
            <p>This website is created by Tarun Kumar, Himanshu Aggarwal, Akansha Soni and Bharti Chaudhary</p>
        </section>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #171717;">
            © 2021 Copyright:
            <a class="text-white" href="Homepage.html">RailPatri</a>
        </div>
        <!-- Copyright -->
    </div>
</footer>
</html>