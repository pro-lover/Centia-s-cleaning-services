<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Centia's Cleaning Services</title>
    <link rel="icon" type="image/x-icon" href="./images/LOGO/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loader.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.scss" />

    <style type="text/css">
    .scrollax-performance,
    .scrollax-performance *,
    .scrollax-performance *:before,
    .scrollax-performance *:after {
        pointer-events: none !important;
        -webkit-animation-play-state: paused !important;
        animation-play-state: paused !important;
    }
    </style>

</head>

<body>
    <?php 
      if(!empty($_POST["send"])){
        $firstName = $_POST["firstName"];
        $toEmail = "centiascleaningservices@gmail.com";
        
        $mailHeaders = $_POST["Name is ". $firstName];
        
        if(mail($toEmail,$firstName,$mailHeaders))
        {
          $message = "Your information is received successfully";
        }
        
      }
    ?>
    <div class="loader">
    </div>
    <i class="fa-brands fa-whatsapp"></i>
    <header>
        <div class="wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md d-flex align-items-center">
                        <p class="mb-0 phone">
                            <span class="mailus">Phone no:</span>
                            <a href="#"> +27 66 400 6884 </a>
                            or
                            <span class="mailus"> email us:</span>
                            <a href="#"> info@centiascleaningservices.co.za</a>
                        </p>
                    </div>
                    <div class="col-12 col-md d-flex justify-content-md-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex">
                                <a href="https://www.facebook.com/share/A2uPbihBMK53uUMT/?mibextid=qi2Omg"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa-brands fa-facebook-f"><i class="sr-only">Facebook</i></span></a>
                                <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span
                    class="fa-brands fa-x-twitter"><i class="sr-only">Twitter</i></span></a> -->
                                <a href="https://www.instagram.com/centiascleaningservices_"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa-brands fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span
                    class="fa-brands fa-tiktok"><i class="sr-only">Dribbble</i></span></a> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img srcset="" src="./images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <!-- carousel -->
        <div class="carousel">
            <!-- time running -->
            <div class="time"></div>
            <!-- list item -->
            <div class="list">
                <div class="item">
                    <img srcset="./images/residentialCleaning.jpg , ./images/mobile/mobile_Residential_cleaning.jpg 500w"
                        src="images/residentialCleaning.jpg" alt="">
                    <div class="content">
                        <div class="author">
                            <h5>CENTIA'S</h5>
                        </div>
                        <div class="title">RESIDENTIAL CLEANING</div>
                        <div class="topic">Services</div>
                        <div class="des">
                            <!-- lorem 50 -->
                            Experience the nurturing touch of our meticulous residential cleaning services.
                            <span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas
                                nisl
                                est, ultrices
                                nec congue eget,
                                auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum
                                nisi,
                                sed ullamcorper
                                ipsum dignissim
                                ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui
                                eget
                                tellus gravida
                                venenatis. Integer
                                fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.
                            </span>
                        </div>
                        <div class="buttons">
                            <button onclick="bookNow(this)" class="booking-box btn btn-primary 1" id="myBtn">BOOK
                                NOW!</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="./images/officeCleaning.jpg , ./images/mobile/mobile_Office_cleaning.jpg 500w"
                        src="images/OfficeCleaning.jpg" alt="">
                    <div class="content">
                        <div class="author">
                            <h5>CENTIA'S</h5>
                        </div>
                        <div class="title">OFFICE SPACE CLEANING</div>
                        <div class="topic">Services</div>
                        <div class="des">
                            Elevate your workspace with our personalized office cleaning solutions.
                            <span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas
                                nisl
                                est, ultrices
                                nec congue eget,
                                auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum
                                nisi,
                                sed ullamcorper
                                ipsum dignissim
                                ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui
                                eget
                                tellus gravida
                                venenatis. Integer
                                fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.
                            </span>
                        </div>
                        <div class="buttons">
                            <button onclick="bookNow(this)" class="booking-box btn btn-primary 1" id="myBtn">BOOK
                                NOW!</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="./images/partyAndWedding.jpg , ./images/mobile/mobile_Party_and_wedding-1.jpg 500w"
                        src="images/partyAndWedding.jpg" alt="">
                    <div class="content">
                        <div class="author">
                            <h5>CENTIA'S</h>
                        </div>
                        <div class="title">BEFORE AND AFTER EVENT CLEANING</div>
                        <div class="topic">Services</div>
                        <div class="des">
                            Leave the details to us and focus on creating cherished memories with loved ones.
                            <span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas
                                nisl
                                est, ultrices
                                nec congue eget,
                                auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum
                                nisi,
                                sed ullamcorper
                                ipsum dignissim
                                ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui
                                eget
                                tellus gravida
                                venenatis. Integer
                                fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.
                            </span>
                        </div>
                        <div class="buttons">
                            <button onclick="bookNow(this)" class="booking-box btn btn-primary 1" id="myBtn">BOOK
                                NOW!</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="./images/furnitureRemoval.jpg, ./images/mobile/mobile_Furniture_removal.jpg 500w"
                        src="images/furnitureRemoval.jpg" alt="">
                    <div class="content">
                        <div class="author">
                            <h5>CENTIA'S</h5>
                        </div>
                        <div class="title">FURNITURE REMOVAL</div>
                        <div class="topic">Services</div>
                        <div class="des">
                            Welcome guests with the warmth and hospitality of a cherished host.
                            <span id="dots">...</span><span class="read-more-target" id="more">erisque enim ligula
                                venenatis dolor.
                                Maecenas nisl est, ultrices nec congue eget,
                                auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum
                                nisi,
                                sed ullamcorper
                                ipsum dignissim
                                ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui
                                eget
                                tellus gravida
                                venenatis. Integer
                                fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.
                            </span>
                        </div>

                        <div class="buttons">
                            <button onclick="bookNow(this)" class="booking-box btn btn-primary 1" id="myBtn">BOOK
                                NOW!</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="./images/gardenServices.jpg , ./images/mobile/mobile_Garden_services-1.jpg 500w"
                        src="images/gardenServices.jpg" alt="">
                    <div class="content">
                        <div class="author">
                            <h5>CENTIA'S</h5>
                        </div>
                        <div class="title">GARDEN</div>
                        <div class="topic">Services</div>
                        <div class="des">
                            Welcome guests with the warmth and hospitality of a cherished host.
                            <span id="dots">...</span><span id="more">
                                Garden content
                            </span>
                        </div>
                        <div class="buttons">
                            <button onclick="bookNow(this)" class="booking-box btn btn-primary 1" id="myBtn">BOOK
                                NOW!</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img srcset="" src="images/residentialCleaning.jpg">
                    <div class="content">
                        <div class="title">
                            RESIDENTIAL CLEANING
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="" src="images/officeCleaning.jpg">
                    <div class="content">
                        <div class="title">
                            OFFICE SPACE CLEANING
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="" src="images/partyAndWedding.jpg">
                    <div class="content">
                        <div class="title">
                            BEFORE AND AFTER EVENT CLEANING
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="" src="images/furnitureRemoval.jpg">
                    <div class="content">
                        <div class="title">
                            FURNITURE REMOVAL
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img srcset="" src="images/gardenServices.jpg">
                    <div class="content">
                        <div class="title">
                            GARDEN SERVICES
                        </div>
                    </div>
                </div>
            </div>
            <!-- next prev -->

            <div class="arrows">
                <button id="prev"> </button>
                <button id="next"> </button>
            </div>

        </div>
    </div>
    <div class="whatsapp-button">
        <a href="https://wa.me/0664006884" target="_blank"> <i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <div class="bookNow-button">
        <i onclick="bookNow(this)">BOOK NOW!</i>
    </div>
    <div class="form-container">
        <form id="contact" action="./connect.php" method="post">
            <h1>BOOKING </h1>
            <h4>Contact us today, and get reply with in 24 hours!</h4>
            <div class=" justify-content-center">
                <div class="row">
                    <div class="col">
                        <label for="First name">First name</label>
                        <input type="text" class="form-control" name="firstName" required placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="Last name">Last name</label>
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col">
                        <label for="Phone No">Phone No</label>
                        <input type="text" class="form-control" placeholder="Phone No">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="Select Services">Select Services</label>
                            <div class="form-field">
                                <div class="select-wrap">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Services</option>
                                        <option value="">Residential Cleaning </option>
                                        <option value="">Office space Cleaning </option>
                                        <option value="">Before and After event cleaning (weddings+ birthday
                                            parties+conferences+etc)
                                        </option>
                                        <option value="">Air bnb Cleaning </option>
                                        <option value="">Garden Cleaning</option>
                                        <option value="">Tree felling Cleaning</option>
                                        <option value="">Building maintenance</option>
                                        <option value="">Rubble removal</option>
                                        <option value="">Furniture removal (short and long distance + cross-border)
                                        </option>
                                        <option value="">Moving In/Out Cleaning</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label for="name">Select Operational Places</label>
                            <div class="form-field">
                                <div class="select-wrap">
                                    <select name="" id="Operational" class="form-control">
                                        <option value="">None Selected</option>
                                        <option class="Gauteng-op" value="">Gauteng</option>
                                        <option class="Mpumalanga-op" value="">Mpumalanga</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Gauteng">
                    <label for="name">Select Operational Places</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Centurion
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Sandton
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                            value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Midrand
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4"
                            value="option4">
                        <label class="form-check-label" for="exampleRadios4">
                            Pretoria
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5"
                            value="option5">
                        <label class="form-check-label" for="exampleRadios5">
                            Johannesburg
                        </label>
                    </div>
                </div>
                <div class="Mpumalanga">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Piet Retief (Mkhondo)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Ermelo
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                            value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Nelspruit
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4"
                            value="option4">
                        <label class="form-check-label" for="exampleRadios4">
                            Malelane
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="message">additional information</label>
                        <textarea class="form-control" id="message" rows="6"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input style="float: right;" type="submit" name="send" value="Book Now"
                            class="btn-form btn btn-primary">
                    </div>
                    <div class="col">
                        <input style="float: left;" value="Cancel" class="btn-form btn btn-secondary form-close">
                    </div>
                    <?php if(!empty($message)){?>
                    <?php echo $message; ?>
                    <?php } ?>
                </div>
            </div>

        </form>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-items-center justify-content-center py-5 py-md-0"
                        style="background-image:url(images/about.jpg);">
                        <div class="time-open-wrap">
                            <div class="desc p-4">
                                <h2>Business Hours</h2>
                                <div class="opening-hours">
                                    <h4>Opening Days:</h4>
                                    <p class="pl-3">
                                        <span><strong>Monday – Friday:</strong> 08:00 - 17:00</span>
                                        <span><strong>Saturday :</strong> 09:00 - 16:00</span>

                                    </p>
                                    <h4>Vacations:</h4>
                                    <p class="pl-3">
                                        <span>All Sunday Days</span>
                                        <span>All Official Holidays</span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc p-4 bg-secondary">
                                <h3 class="heading">For Emergency Cases</h3>
                                <span class="phone">+27 66 400 6884</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 pt-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome to Centia's Cleaning Services</span>
                            <h2 class="mb-4">Where Grandma's Wisdom meets spotless cleanliness!</h2>
                            <p>We are the grandmother figure of cleaning services, embodying the nurturing care and
                                support of a
                                beloved matriarch. Like a grandmother, we go above and beyond to ensure the
                                well-being
                                and happiness of
                                our clients, fulfilling various roles beyond cleaning to create a comforting and
                                nurturing home
                                environment.</p>
                        </div>
                    </div>
                    <div class="row ftco-counter py-5" id="section-counter">
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="5">0</strong>
                                </div>
                                <div class="text">
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                </div>
                                <div class="text">
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                </div>
                                <div class="text">
                                    <span>Building Cleaned</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-dark">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Services</span>
                    <h2 style="color: white;">How We Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa-solid fa-person-digging"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Residential Cleaning </h3>
                            <p> Experience the nurturing touch of our meticulous residential cleaning services.</p>
                            <p><a href="services.html" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa-solid fa-shower"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Office space Cleaning </h3>
                            <p> Elevate your workspace with our personalized office cleaning solutions. </p>
                            <p><a href="services.html" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa-solid fa-broom-ball"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Furniture Removal</h3>
                            <p>Welcome guests with the warmth and hospitality of a cherished host.</p>
                            <p><a href="services.html" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa-solid fa-person-walking-luggage"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Before and After event Cleaning (wedding)</h3>
                            <p>Leave the details to us and focus on creating cherished memories with loved ones.
                            </p>
                            <p><a href="services.html" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa-solid fa-seedling"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Garden Cleaning</h3>
                            <p>Welcome guests with the warmth and hospitality of a cherished host.</p>
                            <p><a href="services.html" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa-solid fa-hand-sparkles"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Window Cleaning</h3>
                            <p> Experience the nurturing touch of our meticulous residential cleaning services.</p>
                            <p><a href="services.html" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Cleaning Tips</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 px-4">
                            <div class="posted mb-3 d-flex">
                                <h3 class="heading"><a href="#">Zap Germs Away: The Power of Disinfecting High-Touch
                                        Surfaces</a></h3>
                            </div>
                            <p>Areas like doorknobs, light switches, and countertops are touched frequently and can
                                harbor germs and
                                bacteria. Regularly disinfecting these surfaces can help prevent the spread of
                                illnesses, especially in
                                shared spaces like offices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 px-4">
                            <div class="posted mb-3 d-flex">
                                <h3 class="heading"><a href="#">Declutter Your Space, Breathe Easier: The Secret to
                                        a
                                        Dust-Free </a>
                                </h3>
                            </div>
                            <p>Clutter not only makes a space look untidy but also collects dust, which can trigger
                                allergies.
                                Encourage your clients to keep surfaces clear and to store items in cabinets or
                                drawers
                                to minimize dust
                                accumulation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 px-4">
                            <div class="posted mb-3 d-flex">
                                <h3 class="heading"><a href="#">Go Green, Stay Clean: The Benefits of Eco-Friendly
                                        Cleaning Products</a>
                                </h3>
                            </div>
                            <p>Harsh chemicals can leave behind harmful residues and affect indoor air quality.
                                Suggest
                                using
                                eco-friendly
                                cleaning products that are both effective and safe for the environment and the
                                health of
                                everyone in the
                                space.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="ftco-section ftco-intro"
        style="background-image: url(&quot;images/bg_3.jpg&quot;); background-position: 50% 0%;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Together we will explore new things</h2>
                    <a href="" class="icon-video d-flex align-items-center justify-content-center"><span
                            class="fa fa-play"></span></a>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-0">
                    <h2 class="footer-heading sign"><span class="fast-flicker">Centia's</span> <span
                            class="flicker">Cleaning</span> <span class="fast-flicker">Services</span></h2>
                    <p>Grandma always said, 'A clean home is a happy home!' Let Centia's Cleaning Services make your
                        home shine
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                        <!-- <li class="ftco-animate"><a href="#"><span class="fa-brands fa-x-twitter"></span></a></li> -->
                        <li class="ftco-animate"><a
                                href="https://www.facebook.com/share/A2uPbihBMK53uUMT/?mibextid=qi2Omg"><span
                                    class="fa-brands fa-facebook-f"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/centiascleaningservices_/"><span
                                    class="fa-brands fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block">Home</a></li>
                        <li><a href="about.html" class="py-1 d-block">About</a></li>
                        <li><a href="services.html" class="py-1 d-block">Services</a></li>
                        <li><a href="contact.html" class="py-1 d-block">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4 mb-4 mb-md-0">
                    <h2 class="footer-heading">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">11 Silwer-Eiker
                                    avenue,
                                    Heuweloord,
                                    Centurion, 0157</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+27 66 400
                                        6884</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                        class="text">info@centiascleaningservices.co.za</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        Copyright ©
                        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js">
                        </script>
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | Developed By <a href="https://putitdigital.co.za"
                            target="_blank">putitdigital.co.za</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery-migrate-3.0.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.1.3.js"></script>
    <script src="./js/jquery.waypoints.min.js"></script>
    <script src="./js/jquery.stellar.min.js"></script>
    <script src="./js/jquery.animateNumber.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <script src="./js/scrollax.min.js"></script>

    <script src="./js/main.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/loader.js"></script>

    <script>
    function bookNow() {
        document.querySelector('.form-container').style.display = 'flex';
        document.querySelector('.form-container').style.position = 'fixed';
    }

    document.querySelector('.form-close').addEventListener('click', function() {
        document.querySelector('.form-container').style.display = 'none';

    });


    console.log(document.querySelector('#Operational').options);
    document.querySelector('#Operational').addEventListener('change', function() {



        console.log(document.querySelector('#Operational'));

        if (document.querySelector('#Operational').options.selectedIndex === 1) {
            document.querySelector('.Gauteng').style.display = 'block';
            document.querySelector('.Mpumalanga').style.display = 'none';
        } else if (document.querySelector('#Operational').options.selectedIndex === 2) {
            document.querySelector('.Gauteng').style.display = 'none';
            document.querySelector('.Mpumalanga').style.display = 'block';
        } else {
            document.querySelector('.Gauteng').style.display = 'none';
            document.querySelector('.Mpumalanga').style.display = 'none';
        }
    });
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>