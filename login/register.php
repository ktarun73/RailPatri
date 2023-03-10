<?php include '../connection/connection.php'; ?>
<?php
if (isset($_POST['SignUp'])) {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Address2 = $_POST['Address2'];
    $City = $_POST['City'];
    $Pincode = $_POST['Pincode'];
    $State = $_POST['State'];
    $sql_query = "INSERT INTO user_details (First_Name,Last_Name,Username,Email,Password,Gender,Address,Address2,City,Pincode,State)
VALUES ('$First_Name','$Last_Name','$Username','$Email','$Password','$Gender','$Address','$Address2','$City','$Pincode','$State')";
    $fire = mysqli_query($connection, $sql_query);
    if ($fire) {
        //if(mysqli_num_rows($fire) > 0){
        session_start();
        //  $_SESSION['is_login'] = true;
        $_SESSION['Username'] = $Username;
        header("Location: registered.php");
    } else {
        echo "Email ID or Username already exists. Please try another Email ID or Username.";
    }
    mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RailPatri || Register</title>
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
            box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
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
    </style>
</head>
<body>
    <div class=" preloader">
        <div class="loader">RailPatri</div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" style="font-family: Montserrat" href="../homepage.php"><img src="../img/railpatri.png" width="30" height="30" alt="RailPatri"> RailPatri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"></li>
                <a class="nav-link" href="../homepage.php"><i class="fas fa-ticket-alt"></i> Train Tickets</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-info"></i> More</a>
                    <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#con"><i class="fab fa-blogger"></i> Blog</a>
                        <a class="dropdown-item" href="../About.php"><i class="fas fa-address-card"></i> About Us</a>
                        <a class="dropdown-item" href="../contact.php"><i class="fas fa-phone-volume"></i> Contact Us</a>
                    </div>
                </li>
                <a class="navbar-brand " style="font-family: Montserrat" href="login/loginpage.php" alt=""><i class="fas fa-user-circle"></i> Login</a>
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
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="First_Name" class="form-control" placeholder="First name" required>
                    </div><br>
                    <div class="col">
                        <input type="text" name="Last_Name" class="form-control" placeholder="Last name">
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
                    <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="Username" class="form-control" id="inputUsername3" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="Email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="Password" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <input class="radio" type="radio" name="Gender" value="Male">Male
                        <input class="radio" type="radio" name="Gender" value="Female">Female
                        <input class="radio" type="radio" name="Gender" value="Other">Other
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
            </div>
        </div>
        <!-----Address----->
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <h3 class="card-title">Address</h3>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2 (Optional)</label>
                    <input type="text" name="Address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" name="City" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip/Pincode</label>
                        <input type="text" name="Pincode" class="form-control" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" name="State" class="form-control">
                            <option selected>Choose...</option>
                            <option name="State" value="Andhra Pradesh"> Andhra Pradesh </option>
                            <option name="State" value="Arunachal Pradesh"> Arunachal Pradesh </option>
                            <option name="State" value="Assam"> Assam </option>
                            <option name="State" value="Bihar"> Bihar </option>
                            <option name="State" value="Chandigarh"> Chandigarh </option>
                            <option name="State" value="Chhattisgarh	"> Chhattisgarh </option>
                            <option name="State" value="Delhi"> Delhi </option>
                            <option name="State" value="Goa"> Goa </option>
                            <option name="State" value="Gujarat"> Gujarat </option>
                            <option name="State" value="Haryana"> Haryana </option>
                            <option name="State" value="Himachal Pradesh"> Himachal Pradesh </option>
                            <option name="State" value="Jammu and Kashmir"> Jammu and Kashmir </option>
                            <option name="State" value="Jharkhand"> Jharkhand </option>
                            <option name="State" value="Karnataka"> Karnataka </option>
                            <option name="State" value="Kerala"> Kerala </option>
                            <option name="State" value="Ladakh"> Ladakh </option>
                            <option name="State" value="Lakshadweep"> Lakshadweep </option>
                            <option name="State" value="Madhya Pradesh"> Madhya Pradesh </option>
                            <option name="State" value="Maharashtra"> Maharashtra </option>
                            <option name="State" value="Manipur"> Manipur </option>
                            <option name="State" value="Meghalaya"> Meghalaya </option>
                            <option name="State" value="Mizoram"> Mizoram </option>
                            <option name="State" value="Nagaland"> Nagaland </option>
                            <option name="State" value="Odisha"> Odisha </option>
                            <option name="State" value="Puducherry"> Puducherry </option>
                            <option name="State" value="Punjab"> Punjab </option>
                            <option name="State" value="Rajasthan"> Rajasthan </option>
                            <option name="State" value="Sikkim"> Sikkim </option>
                            <option name="State" value="Tamil Nadu"> Tamil Nadu </option>
                            <option name="State" value="Telangana"> Telangana </option>
                            <option name="State" value="Tripura"> Tripura </option>
                            <option name="State" value="Uttar Pradesh"> Uttar Pradesh </option>
                            <option name="State" value="Uttarakhand"> Uttarakhand </option>
                            <option name="State" value="West Bengal"> West Bengal </option>
                        </select>
                    </div>
                </div>
                <hr><br>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            Above Details are correct And I agree to <u style="color:blue;">RailPatri's Terms and Services.</u><b style="color:red;">*</b>
                        </label>
                    </div>
                </div>
                <button type="submit" name="SignUp" class="btn btn-primary">Sign Up/Register</button>
            </div>
        </div>
    </form>
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
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" name="email" id="form5Example2" class="form-control" placeholder="Email address" />
                        </div>
                    </div>
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
        <section class="mb-4"><p>This website is created by Tarun Kumar, Himanshu Aggarwal, Akansha Soni and Bharti Chaudhary</p></section>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #171717;">
            © 2021 Copyright:
            <a class="text-white" href="Homepage.html">RailPatri</a>
        </div>
        <!-- Copyright -->
    </div>
</footer>
</html>