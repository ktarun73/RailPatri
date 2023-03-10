<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RailPatri</title>
    <!-------favicon-------->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
    <!--------customized css--------->
    <link rel="stylesheet" href="css/index2.css">
</head>

<body>
    <!-----preloader/loader------>
    <div class="preloader">
        <div class="loader">RailPatri</div>
    </div>
    <section id="main">
        <!------background------->
        <div class="wrapper">
            <div class="background"></div>
            <div class="rocks_1"></div>
            <div class="rocks_2"></div>
            <div class="rails"></div>
            <div class="train"></div>
            <div class="ground"></div>
            <div class="lights"></div>
            <div class="moon"></div>
        </div>
        <!-------typing------>
        <div class="text">
            <strong>
                RailPatri <span class="type"></span>
            </strong>
            <p>WELCOME TO, RailPatri<br> ONLINE TICKET RESERVATION SYSTEM</p>
            <a href="homepage.php" class="btn">RailPatri</a>
        </div>
    </section>
    <!--------typing---------->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.type', {
            /// customize words and type-back speed
            strings: ['Online Reservation', 'E-Ticket Booking', 'Website.'],
            typeSpeed: 200,
            backSpeed: 70,
            loop: true,
        });
    </script>
</body>
</html>