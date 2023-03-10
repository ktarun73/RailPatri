<?php
session_start();
?>
<?php include '../connection/connection.php'; ?>
<?php
if (isset($_POST['send'])) {
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Mobile_No = $_POST['Mobile_No'];
  $Subject = $_POST['Subject'];
  $Message = $_POST['Message'];

  $sql_query = "INSERT INTO contact_us (Name,Email,Mobile_No,Subject,Message)
VALUES ('$Name','$Email','$Mobile_No','$Subject','$Message')";
  $fire = mysqli_query($connection, $sql_query);
  if ($fire) {
    //if(mysqli_num_rows($fire) > 0){
    //  $_SESSION['is_login'] = true;
    echo "<script>alert('Data Saved.')</script";
  } else {
    echo "<script>alert('Error! Please Try Again.')</script>";
  }
  mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
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

  <!-------favicon-------->
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
  <!-------preloader-------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script type="text/javascript">
    $(window).on('load', function() {
      $('.preloader').addClass('complete')
    })
  </script>
  <!--------loader--------->
  <script>
    $(document).ready(function() {
      $(".loader").html(function(index, oldHtml) {
        var spilit = oldHtml.split("");
        var text = "";
        spilit.forEach(function(currentItem, currentIndex) {
          var content = "";
          for (var i = 0; i < 4; i++) {
            content += "<span class='side side-" + (i + 1) + "'>" + currentItem + "</span>";
          }
          text += "<span class='block'>" + content + "</span>";
        });
        return text;
      });
    });
  </script>

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
  </style>
</head>

<body>

  <!-----preloader/loader------>
  <div class="preloader">
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
            <a class="dropdown-item" href="About.php"><i class="fas fa-address-card"></i> About Us</a>
            <a class="dropdown-item" href="contact.php"><i class="fas fa-phone-volume"></i> Contact Us</a>
          </div>
        </li>
        <a class="navbar-brand" style="font-family: Montserrat" href="user_info.php" alt=""><i class="fas fa-user-circle"></i> <?php echo ($_SESSION['Username']); ?></a>
      </ul>

    </div>
  </nav>

  <!--Form For contact-->
  <form method="post">
    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
        <h5 class="card-title" style="font-family: Montserrat">Contact Us</h5>

        <div class="row py-3">
          <div class="col-md-6">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="Name" class="form-control" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>E-mail</label>
              <input type="email" name="Email" class="form-control" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Mobile no.</label>
              <input type="test" name="Mobile_No" class="form-control" maxlength="10">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Subject</label>
              <input type="text" name="Subject" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Message</label>
              <textarea name="Message" type="text" class="form-control" maxlength="100"></textarea>
              <small>In between 100 characters only</small>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <button name="send" value="send" type="submit" class="btn btn-outline-primary" style="margin-left:85%;"><i class="fas fa-paper-plane"></i> Sent it ! </button>
          </div>
        </div>


        <div class="container-fluid" style="margin-left: 5%;">
          <h5 style="font-family:Montserrat;"> NOTE :</h5>
          <ul>
            <li class="text-muted">For any refund related queries, please visit RSDP.com</li>
            <li class="text-muted">For any other queries, please write to us at care@rsdp.in or call us at 8010500300 (8AM - 9PM, 7 days a week) </li>
          </ul>
        </div>
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