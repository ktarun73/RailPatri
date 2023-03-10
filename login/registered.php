<?php session_start(); ?>
<?php include '../connection/connection.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RailPatri</title>
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
    <link rel="stylesheet" href="../css/Homepage.css">
    <!--JS powered CDN-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!--JS powered Bootstrap 4-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--JS powered Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-----Favicon----->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

    <!------Preloader----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('.preloader').addClass('complete')
        })
    </script>

    <script src="../js/loader.js"></script>

    <style>
        body {
            background-color: #DDDDDD;
        }


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

        table {
            width: 100%;
            text-align: center;
        }

        th,
        td {
            border: 1px solid grey;
            padding: 5px;
        }

        td {
            color: blue;
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
    </style>
</head>

<body style="background-color: #DDDDDD;">

    <div class=" preloader">
        <div class="loader">RailPatri</div>
    </div>

    <!--Navbar Customised-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" style="font-family: Montserrat" href="registered.php"><img src="../img/railpatri.png" width="30" height="30" alt="RailPatri"> RailPatri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"></li>
                <a class="nav-link" href=""><i class="fas fa-ticket-alt"></i> Train Tickets</a>
                <li class="nav-item"></li>
                <a class="nav-link" href="reservation2.php"><i class="fas fa-bus"></i> Reservation</a>
                <li class="nav-item"></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#train" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info-circle"></i> Train Information</a>
                    <div class="dropdown-menu text-primary bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#pnr"><i class="fas fa-clipboard-list"></i> PNR Status</a>
                        <a class="dropdown-item" href="#table"><i class="fas fa-clipboard-check"></i> Timetable</a>
                        <a class="dropdown-item" href="#between"><i class="fab fa-periscope"></i> Trains between Stations</a>
                        <a class="dropdown-item" href="#between"><i class="fas fa-exchange-alt"></i> Arriving departure</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info"></i> More</a>
                    <div class="dropdown-menu text-primary bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#con"><i class="fab fa-blogger"></i> Blog</a>
                        <a class="dropdown-item" href="About.php"><i class="fas fa-address-card"></i> About Us</a>
                        <a class="dropdown-item" href="contact.php"><i class="fas fa-phone-volume"></i> Contact Us</a>
                    </div>
                </li>
                <a class="navbar-brand" style="font-family: Montserrat" href="user_info.php" alt=""><i class="fas fa-user-circle"></i><?php echo ($_SESSION['Username']); ?></a>

            </ul>


        </div>
    </nav>
    <div class="container-fluid">

    </div>
    <!-- Slideshare-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1500" data-pause="hover">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/t1 (1).png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/t1 (2).png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/t1 (3).png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/t1 (4).png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/t1 (5).png" alt="Third slide">
            </div>
            <!--  Carousel Arrow Controls-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--Train Enquiry Zone -->
    <div class="card" id="status">
        <h5 class="card-header"></h5>
        <div class="card-body">
            <h5 class="card-title">Train Status</h5>
            <form method="POST">
                <div class="form-group" method="post">
                    <label for="formGroupExampleInput">Enter Train No. </label>
                    <input type="number" class="form-control" id="formGroupExampleInput" name="Train_No" required placeholder="" required>
                </div>
                <button type="submit" value="submit" name="train_no" class="btn btn-outline-primary"><i class="fas fa-subway"></i> Go ! </button>
            </form>
            <?php
            if (isset($_POST['train_no'])) {
                $Train_No = mysqli_real_escape_string($connection, $_POST['Train_No']);
                $sql = "select*from train_info where Train_No like '%$Train_No%'";
                $res = mysqli_query($connection, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
            ?>
                        <center>
                            <br /><br /><br />
                            <table style="border:2px solid orange">
                                <tr>
                                    <th>Sr.</th>
                                    <th>Train No.</th>
                                    <th>Train Name</th>
                                    <th>Owing Rly</th>
                                    <th>Source</th>
                                    <th>Departure Time</th>
                                    <th>Destination</th>
                                    <th>Arrival Time</th>
                                </tr>
                                <tr>
                                    <td><?php echo $row['Sr'] ?></td>
                                    <td><?php echo $row['Train_No'] ?></td>
                                    <td><?php echo $row['Train_Name'] ?></td>
                                    <td><?php echo $row['Owing_Rly'] ?></td>
                                    <td><?php echo $row['Source'] ?></td>
                                    <td><?php echo $row['Departure_Time'] ?></td>
                                    <td><?php echo $row['Destination'] ?></td>
                                    <td><?php echo $row['Arrival_Time'] ?></td>
                                </tr>
                            </table>
                        </center>
            <?php
                    }
                } else {
                    echo "Data does not exist. Please enter correct number";
                }
            }
            ?>
        </div>
    </div>
    <div class="card" id="pnr">
        <h5 class="card-header"></h5>
        <div class="card-body">
            <h5 class="card-title">PNR Status</h5>
            <form method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">PNR No.</label>
                    <input type="text" name="PNR_num" class="form-control" id="" placeholder="">
                </div>
                <button name="PNR" type="submit" value="submit" class="btn btn-outline-primary"><i class="fas fa-ticket-alt"></i> Go ! </button>
            </form>
            <?php
            if (isset($_POST['PNR'])) {
                $PNR_num = mysqli_real_escape_string($connection, $_POST['PNR_num']);
                $sql = "select*from passenger_info where PNR_num like '%$PNR_num%'";
                $res = mysqli_query($connection, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
            ?>
                        <center>
                            <br /><br /><br />
                            <table style="border:2px solid orange">
                                <tr>
                                    <th>Sr.</th>
                                    <th>User ID</th>
                                    <th>Passenger Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Accomodation</th>
                                    <th>Date</th>
                                    <th>Preference</th>
                                    <th>PNR No</th>
                                </tr>
                                <tr>
                                    <td><?php echo $row['sr'] ?></td>
                                    <td><?php echo $row['user_id'] ?></td>
                                    <td><?php echo $row['Passenger_Name'] ?></td>
                                    <td><?php echo $row['Age'] ?></td>
                                    <td><?php echo $row['Gender'] ?></td>
                                    <td><?php echo $row['Contact'] ?></td>
                                    <td><?php echo $row['Address'] ?></td>
                                    <td><?php echo $row['Accomodation'] ?></td>
                                    <td><?php echo $row['Date'] ?></td>
                                    <td><?php echo $row['Preference'] ?></td>
                                    <td><?php echo $row['PNR_num'] ?></td>
                                </tr>
                            </table>
                        </center>
            <?php
                    }
                } else {
                    echo "Data does not exist. Please enter correct PNR No.";
                }
            }
            ?>
        </div>
    </div>
    <div class="card" id="table">
        <h5 class="card-header"></h5>
        <div class="card-body">
            <h5 class="card-title">Time Table</h5>
            <form method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Enter Train Name</label>
                    <input type="text" name="Train_Name" class="form-control" id="" placeholder="" required>
                </div>
                <button type="submit" name="train_name" class="btn btn-outline-primary"><i class="fas fa-table"></i> Go ! </button>
            </form>
            <?php
            if (isset($_POST['train_name'])) {
                $Train_Name = mysqli_real_escape_string($connection, $_POST['Train_Name']);
                $sql = "select*from train_info where Train_Name like '%$Train_Name%'";
                $res = mysqli_query($connection, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
            ?>
                        <center>
                            <br /><br /><br />
                            <table style="border:2px solid orange">
                                <tr>
                                    <th>Sr.</th>
                                    <th>Train No.</th>
                                    <th>Train Name</th>
                                    <th>Owing Rly</th>
                                    <th>Source</th>
                                    <th>Departure Time</th>
                                    <th>Destination</th>
                                    <th>Arrival Time</th>
                                </tr>
                                <tr>
                                    <td><?php echo $row['Sr'] ?></td>
                                    <td><?php echo $row['Train_No'] ?></td>
                                    <td><?php echo $row['Train_Name'] ?></td>
                                    <td><?php echo $row['Owing_Rly'] ?></td>
                                    <td><?php echo $row['Source'] ?></td>
                                    <td><?php echo $row['Departure_Time'] ?></td>
                                    <td><?php echo $row['Destination'] ?></td>
                                    <td><?php echo $row['Arrival_Time'] ?></td>
                                </tr>
                            </table>
                        </center>
            <?php
                    }
                } else {
                    echo "Data does not exist. Please enter correct name.";
                }
            }
            ?>
        </div>
    </div>
    <div class="card" id="between">
        <h5 class="card-header"></h5>
        <div class="card-body">
            <h5 class="card-title">Trains Between Stations</h5>
            <form method="POST">
                <div class="form-group">
                    <div class="col">
                        <input name="from" type="text" class="form-control" placeholder="From" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        <input type="text" name="to" class="form-control" placeholder="To" required>
                    </div>
                </div>
                <br>
                <button type="submit" value="stations" name="station" class="btn btn-outline-primary"><i class="fas fa-road"></i> Go ! </button>
            </form>
            <?php
            if (isset($_POST['station'])) {
                $to = mysqli_real_escape_string($connection, $_POST['to']);
                $from = mysqli_real_escape_string($connection, $_POST['from']);

                $sql = "select*from train_info where Source like '%$from%' AND Destination like '%$to%'";
                $res = mysqli_query($connection, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
            ?>
                        <center>
                            <br /><br /><br />
                            <table style="border:2px solid orange">
                                <tr>
                                    <th>Sr.</th>
                                    <th>Train No.</th>
                                    <th>Train Name</th>
                                    <th>Owning Rly</th>
                                    <th>Source</th>
                                    <th>Departure Time</th>
                                    <th>Destination</th>
                                    <th>Arrival Time</th>
                                </tr>
                                <tr>
                                    <td><?php echo $row['Sr'] ?></td>
                                    <td><?php echo $row['Train_No'] ?></td>
                                    <td><?php echo $row['Train_Name'] ?></td>
                                    <td><?php echo $row['Owing_Rly'] ?></td>
                                    <td><?php echo $row['Source'] ?></td>
                                    <td><?php echo $row['Departure_Time'] ?></td>
                                    <td><?php echo $row['Destination'] ?></td>
                                    <td><?php echo $row['Arrival_Time'] ?></td>
                                </tr>
                            </table>
                        </center>
            <?php
                    }
                } else {
                    echo "Data does not exist. Please enter correct station name";
                }
            }
            ?>
        </div>
    </div>




    <!--cards-->

    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="../img/cards1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Top 5 routes of Your Train</h5>
                <p class="card-text">Know where people are travelling to on your train. We tel...</p>
                <a class="card-text" href="">Check now ></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/cards2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">City Railway Network Coverage</h5>
                <p class="card-text">Ever wondered in which direction, near and far , are peopl...</p>
                <a class="card-text" href="">Check now ></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/cards3.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Frequently Visited Cities</h5>
                <p class="card-text">Take a station and we will tell you where are people trav...</p>
                <a class="card-text" href="">Check now ></a>
            </div>
        </div>

    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="../img/cards4.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Average Train Delays on Your Station</h5>
                <p class="card-text">What are the train delay patterns at your station ? Which...</p>
                <a class="card-text" href="">Check now ></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/cards5.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mobile Network Strength Enroute</h5>
                <p class="card-text">I shall quickly call hime before I lose network coverage...</p>
                <a class="card-text" href="">Check now ></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/cards6.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Rail History</h5>
                <p class="card-text"> Want to know about important historical events around Ra...</p>
                <a class="card-text" href="">Check now ></a>
            </div>
        </div>

    </div>
    <br>

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
            <section class="" id="con">
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

</body>

</html>