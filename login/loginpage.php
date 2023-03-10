<?php include '../connection/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql_query = "SELECT*FROM user_details where Username='" . $Username . "'AND Password='" . $Password . "'limit 1";
    $fire = mysqli_query($connection, $sql_query);
    $rowcount = mysqli_num_rows($fire);
    if ($rowcount == true) {
        session_start();
        $_SESSION['is_login'] = true;
        $_SESSION['Username'] = $Username;
        header("Location: registered.php");
    } else {
        echo '<script>alert("Enter correct Username/Password.")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RailPatri || Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cca0635c76.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Personal.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-----Favicon----->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/Homepage.css">
    <!------Preloader----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('.preloader').addClass('complete')
        })
    </script>
    <script src="../js/loader.js"></script>
    <style>
        .card {
            margin: 5%;
            box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
                0 0 0 2px rgb(155, 151, 151),
                0.3em 0.3em 1em rgba(0, 0, 0, 0.3)
        }
        .card-header {
            background-color: #FFC947;
            padding: 0.75%;
        }
        .form-row {
            padding: 5%;
        }
        .but-space {
            margin: 5%;
        }
        body {
            background-color: #DDDDDD;
        }
    </style>
</head>
<body>
    <div class="preloader">
        <div class="loader">RailPatri</div>
    </div>
    <!--Navbar Customised-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" style="font-family: Montserrat" href="../homepage.php"><img src="../img/railpatri.png" width="30" height="30" alt="RailPatri"> RailPatri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"></li>
                <a class="nav-link" href="../homepage.php"><i class="fas fa-ticket-alt"></i> Train Tickets</a>
                <li class="nav-item"></li>
                <a class="nav-link" href="loginpage.php"><i class="fas fa-bus"></i> Reservation</a>
                <li class="nav-item"></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info-circle"></i> Train Information</a>
                    <div class="dropdown-menu text-primary bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../homepage.php"><i class="fas fa-clipboard-list"></i> PNR Status</a>
                        <a class="dropdown-item" href="../homepage.php"><i class="fas fa-clipboard-check"></i> Timetable</a>
                        <a class="dropdown-item" href="../homepage.php"><i class="fab fa-periscope"></i> Trains between Stations</a>
                        <a class="dropdown-item" href="../homepage.php"><i class="fas fa-exchange-alt"></i> Arriving departure</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info"></i> More</a>
                    <div class="dropdown-menu text-primary bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#con"><i class="fab fa-blogger"></i> Blog</a>
                        <a class="dropdown-item" href="../About.php"><i class="fas fa-address-card"></i> About Us</a>
                        <a class="dropdown-item" href="../contact.php"><i class="fas fa-phone-volume"></i> Contact Us</a>
                    </div>
                </li>
                <a class="navbar-brand" style="font-family: Montserrat" href="loginpage.php" alt=""><i class="fas fa-user-circle"></i> Login</a>
            </ul>
        </div>
    </nav>
    <form method="POST">
        <div class="card">
            <h5 class="card-header">
                <h1 class="text-center" style="color: #185ADB;"><i class="fas fa-user-circle"></i>Login</h1>
            </h5>
            <div class="card-body"></div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" name="Username" class="form-control" id="inputEmail4" placeholder="Username" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="Password" class="form-control" id="inputPassword4" placeholder="Password" required>
                </div>
            </div><button type="submit" name="submit" value="submit" class="btn btn-outline-primary but-space"><i class="fas fa-sign-in-alt"></i> Login</button>
    </form>
    <hr>
    <a href="register.php" class="btn btn-outline-primary but-space"><i class="far fa-registered"></i> Register</a>
    <div class="form-check but-space">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Remember me
        </label>
        <a href="" style="color:#185ADB ;"> Forgot password ?</a>
    </div>
    </div>
    </div>
</body>
<!--Footer-->
<footer class=" text-center text-white" style="background-color: #171717;" id="con">
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
        <section class="">
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
                            <input type="email" name="email" id="form5Example2" class="form-control" placeholder="Email address" />
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
            <p>
            This website is created by Tarun Kumar, Himanshu Aggarwal, Akansha Soni and Bharti Chaudhary
            </p>
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