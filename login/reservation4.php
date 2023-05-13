<?php session_start();
$from = $_SESSION['Source'];
$to = $_SESSION['Destination'];
$dest_id = $_SESSION['dest_id'];
?>
<?php include '../connection/connection.php'; ?>
<?php
$Username = $_SESSION['Username'];
$query = "SELECT*FROM user_info where Username like '$Username";
$user_id = $_POST['user_id'] = $Username;

$Username = $_SESSION['Username'];
$sql = "SELECT dest_id FROM to2 where Destination like '$to'";
$res = mysqli_query($connection, $sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $dest_id = $row['dest_id'];
    }
}


if (isset($_POST['submit'])) {
    $pass_name = $_POST['Passenger_Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Contact = $_POST['Contact'];
    $Address = $_POST['Address'];
    $Accomodation = $_POST['Accomodation'];
    $Date = $_POST['Date'];
    $Preference = $_POST['Preference'];

    // Attempt insert query execution
    $insert = "INSERT INTO passenger_info (sr,user_id,Source,Destination,Passenger_Name,Age,Gender,Contact,Address,Accomodation,Date,Preference) VALUES ('$dest_id','$user_id','$from','$to','$pass_name','$Age','$Gender','$Contact','$Address','$Accomodation','$Date','$Preference')";
    if (mysqli_query($connection, $insert)) {
        $_SESSION['sr'] = $dest_id;
        $_SESSION['PNR_num'] = $pnr_num;
        header("Location:reservation5.php");
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // Close connection
    mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Available_Train_for_reservation</title>
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
    <link rel="stylesheet" href="../css/index.css">

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
        h4 {
            color: #FFFFFF;
            font-family: "Montserrat";
            font-size: 3rem;
            line-height: 1.5;

        }

        .space {
            padding: 5px;
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
            box-shadow: rgb(175, 175, 177);
            border: rgb(175, 175, 177);
        }

        .card-header {
            background-color: #FFC947;
            padding: 0.75%;
        }

        .bg-dark {
            background-color: #171717;
        }

        .spacing {
            padding: 5%;
        }

        #myTable-party {
            border: 2px solid grey;
        }
    </style>
</head>

<body>
    <div class=" preloader">
        <div class="loader">RailPatri</div>
    </div>
    <!--Navbar Customised-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" style="font-family: Montserrat" href="registered.php"><img src="../img/railpatri.png" width="30" height="30" alt=""> RailPatri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"></li>
                <a class="nav-link" href="registered.php"><i class="fas fa-ticket-alt"></i> Train Tickets</a>
                <li class="nav-item"></li>
                <a class="nav-link" href="reservation2.php"><i class="fas fa-bus"></i> Reservation</a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info"></i> More</a>
                    <div class="dropdown-menu text-primary bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#con"><i class="fab fa-blogger"></i> Blog</a>
                        <a class="dropdown-item" href="about.php"><i class="fas fa-address-card"></i> About Us</a>
                        <a class="dropdown-item" href="contact.php"><i class="fas fa-phone-volume"></i> Contact Us</a>
                    </div>
                </li>
                <a class="navbar-brand" style="font-family: Montserrat" href="user_info.php" alt=""><i class="fas fa-user-circle"></i><?php echo ($_SESSION['Username']); ?></a>

            </ul>


        </div>
    </nav>
    <div class="container-fluid"></div>

    <!--LOOP M CHLANA H ISSE-->
    <!--Reservation-->
    <center>
        <form class="form-horizontal" method="post">
            <div class="card" id="reservation">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    <div class="container-fluid" style="float:center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>
                                        <center>ACCOMODATION</center>
                                    </h2>
                                    <div class="container-fluid">
                                        <table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th> <span class="glyphicon glyphicon-record" aria-hidden="true"></span>
                                                        Accomodation
                                                    </th>
                                                    <th>
                                                        <center>
                                                            Slots
                                                        </center>
                                                    </th>
                                                    <th>
                                                        <center>
                                                            Fare
                                                        </center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input value="Sitting" type="radio" name="Accomodation">
                                                        Sitting
                                                    </td>
                                                    <td align="center">
                                                        29
                                                    </td>
                                                    <td align="center">
                                                        350
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input value="Economy A" type="radio" name="Accomodation">
                                                        Economy A
                                                    </td>
                                                    <td align="center">
                                                        30
                                                    </td>
                                                    <td align="center">390</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input value="Economy B" type="radio" name="Accomodation">
                                                        Economy B
                                                    </td>
                                                    <td align="center">
                                                        30
                                                    </td>
                                                    <td align="center">390</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input value="Tourist" type="radio" name="Accomodation">
                                                        Tourist
                                                    </td>
                                                    <td align="center">
                                                        30
                                                    </td>
                                                    <td align="center">490</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input value="Cabin" type="radio" name="Accomodation">
                                                        Cabin
                                                    </td>
                                                    <td align="center">
                                                        30
                                                    </td>
                                                    <td align="center">600</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input value="Deluxe" type="radio" name="Accomodation">
                                                        Deluxe
                                                    </td>
                                                    <td align="center">
                                                        30
                                                    </td>
                                                    <td align="center">700</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
    </center>

    <!-----Personal Details----->

    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <center>
                <h3 class="card-title">Passenger Details</h3>
            </center>
            <div class="form-group row">
                <label for="inputUsername3" class="col-sm-2 col-form-label">Passenger Name<b style="color:red;">*</b></label>
                <div class="col-sm-10">
                    <input type="text" name="Passenger_Name" class="form-control" id="inputUsername3" placeholder="Passenger Name" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Age<b style="color:red;">*</b></label>
                <div class="col-sm-10">
                    <input type="number" name="Age" class="form-control" id="inputEmail3" placeholder="Age" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Gender<b style="color:red;">*</b></label>
                <div class="col-sm-10">
                    <select class="form-control" name="Gender" required>
                        <option value="Male" name="Male">Male</option>
                        <option value="Female" name="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Contact<b style="color:red;">*</b></label>
                <div class="col-sm-10">
                    <input type="number" name="Contact" class="form-control" id="inputPassword3" placeholder="Contact" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" name="Address" class="form-control" id="inputPassword3" placeholder="Address">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Date<b style="color:red;">*</b></label>
                <div class="col-sm-10">
                    <input type="date" name="Date" class="form-control" id="inputPassword3" placeholder="Date" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Preference</label>
                <div class="col-sm-10">
                    <select class="form-control" name="Preference" valye="Preference">
                        <option value="" name="">Select Preference Berth</option>
                        <option value="Lower Berth" name="Lower Berth">Lower Berth</option>
                        <option value="Middle Berth" name="Middle Berth">Middle Berth</option>
                        <option value="Upper Berth" name="Upper Berth">Upper Berth</option>
                        <option value="Side Upper Berth" name="Side Upper Berth">Side Upper Berth</option>
                        <option value="Side Lower Berth" name="Side Lower Berth">Side Lower Berth</option>
                    </select>
                </div>
            </div>

            <hr><br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" required>
                        <label class="form-check-label" for="gridCheck1">
                            Above Details are correct.</u><b style="color:red;">*</b>
                        </label>
                    </div>
                </div>
            </div>
            <center><button type="submit" name="submit" class="col-6 btn btn-primary btn-sm">Next</button></center>
        </div>
    </div>
    </form>

    <!-----More----->
    <div class="featu" style="width:95%; margin:0 auto;">
        <div class="card-deck" id="card-deck_info">
            <div class="feature">
                <img class="feature_img" src="../img/maharajas-express.jpg">
                <div class="feature_info">
                    <p class="feature_top">Maharaja"s Express</p><br>
                    <p class="feature_bottom">Redefining Royalty, Luxury and Comfort, <br>Maharaja’s express takes you on a
                        sojourn <br>to the era of bygone stately splendour <br>of princely states.</p>
                </div>
            </div>
            <hr>
            <div class="feature">
                <img class="feature_img" src="../img/tour.jpg">
                <div class="feature_info">
                    <p class="feature_top">Rail Tour Packages</p><br>
                    <p class="feature_bottom">IRCTC offers Exclusive<br> Rail tour packages <br>with confirmed train tickets.
                    </p>
                </div>
            </div>
            <hr>
            <div class="feature">
                <img class="feature_img" src="../img/buddha.jpg">
                <div class="feature_info">
                    <p class="feature_top">Buddhist Circuit Tourist Train</p><br>
                    <p class="feature_bottom">India, the country where Buddhism<br>has originated rich memories of<br>the
                        Buddhist legacy. </p>
                </div>
            </div>
        </div>
    </div>
    <br>
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