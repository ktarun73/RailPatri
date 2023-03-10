<?php
session_start();
?>
<?php include '../connection/connection.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RailPatri || User Info</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cca0635c76.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="Personal.css" />
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
            margin: 0% 5% 5% 0%;
            box-shadow:
                inset 0 -3em 3em rgba(0, 0, 0, 0.1),
                0 0 0 2px rgb(155, 151, 151),
                0.3em 0.3em 1em rgba(0, 0, 0, 0.3)
        }

        .card-header {
            background-color: #FFC947;
            padding: 0.75%;
        }

        body {
            background-color: #DDDDDD;
        }

        .spacing {
            margin: 5% 5% 5% 5%;
        }

        #user {
            color: blue;
        }
    </style>
</head>

<body>
    <div class=" preloader">
        <div class="loader">RailPatri</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" style="font-family: Montserrat" href="registered.php"><img src="../img/railpatri.png" width="30" height="30" alt="RailPatri"> RailPatri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"></li>
                <a class="nav-link" href="registered.php"><i class="fas fa-ticket-alt"></i> Train Tickets</a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info"></i> More</a>
                    <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fab fa-blogger"></i> Blog</a>
                        <a class="dropdown-item" href="About.php"><i class="fas fa-address-card"></i> About Us</a>
                        <a class="dropdown-item" href="contact.php"><i class="fas fa-phone-volume"></i> Contact Us</a>
                    </div>
                </li>
                <a class="navbar-brand " style="font-family: Montserrat" href="user_info.php" alt=""><i class="fas fa-user-circle"></i><?php echo ($_SESSION['Username']); ?></a>
            </ul>
        </div>
    </nav>
    <br>
    <!-----Basic Detail----->
    <form method="POST" style="padding-left:60px">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <h3 class="card-title">Basic Detail</h3>

                <div class="form-group row">
                    <label for="inputUsername3" class="col-sm-2 col-form-label">First Name:</label>
                    <div class="col-sm-10" id="user">
                        <?php
                        $Username = $_SESSION['Username'];
                        $sql = "SELECT First_Name FROM user_details where Username like '$Username'";
                        $res = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo $row['First_Name'];
                            }
                        } ?>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="inputUsername3" class="col-sm-2 col-form-label">Last Name:</label>
                    <div class="col-sm-10" id="user">
                        <?php
                        $Username = $_SESSION['Username'];
                        $sql = "SELECT Last_Name FROM user_details where Username like '$Username'";
                        $res = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo $row['Last_Name'];
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-----Personal Details----->

        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <h3 class="card-title">Personal Details</h3>
                <div class="form-group row">
                    <label for="inputUsername3" class="col-sm-2 col-form-label">Username:</label>
                    <div class="col-sm-10" id="user">
                        <?php echo ($_SESSION['Username']); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10" id="user">
                        <?php
                        $Username = $_SESSION['Username'];
                        $sql = "SELECT Email FROM user_details where Username like '$Username'";
                        $res = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo $row['Email'];
                            }
                        } ?>
                    </div>
                </div>


                <div class="form-group row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
                    <div class="col-sm-10" id="user">
                        <?php
                        $Username = $_SESSION['Username'];
                        $sql = "SELECT Gender FROM user_details where Username like '$Username'";
                        $res = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo $row['Gender'];
                            }
                        } ?>
                    </div>
                </div>
                <hr><br>
            </div>
        </div>

        <!-----Address----->

        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <h3 class="card-title">Address</h3>

                <div class="form-group">
                    <label for="inputAddress">Address:</label><br>
                    <div id="user">
                        <?php
                        $Username = $_SESSION['Username'];
                        $sql = "SELECT Address FROM user_details where Username like '$Username'";
                        $res = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo $row['Address'];
                            }
                        } ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Address 2 (Optional):</label><br>
                    <div id="user">
                        <?php
                        $Username = $_SESSION['Username'];
                        $sql = "SELECT Address2 FROM user_details where Username like '$Username'";
                        $res = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo $row['Address2'];
                            }
                        } ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City:</label><br>
                        <div id="user">
                            <?php
                            $Username = $_SESSION['Username'];
                            $sql = "SELECT City FROM user_details where Username like '$Username'";
                            $res = mysqli_query($connection, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo $row['City'];
                                }
                            } ?>
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip/Pincode:</label><br>
                        <div id="user">
                            <?php
                            $Username = $_SESSION['Username'];
                            $sql = "SELECT Pincode FROM user_details where Username like '$Username'";
                            $res = mysqli_query($connection, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo $row['Pincode'];
                                }
                            } ?>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">State:</label>
                        <br>
                        <div id="user">
                            <?php
                            $Username = $_SESSION['Username'];
                            $sql = "SELECT State FROM user_details where Username like '$Username'";
                            $res = mysqli_query($connection, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo $row['State'];
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <hr><br>
                <a type="submit" name="SignOut" href="logout.php" class="btn btn-primary">LogOut</a>
            </div>
        </div>
    </form>
</body>
<!--Footer-->

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
        <section class="">
            <form method="POST" action="../email.php">
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