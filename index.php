<?php
    $emailErr = '';
    if(isset($_POST['signup'])) {
        $emailErr = '';
       $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
           header("refresh: 5"); 
        }else{

            $user_mail = $email;
            $myfile = fopen("emaildoc.txt", "a") or die("Unable to open file!");
            $txt = $user_mail."\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            $emailErr = 'Yay! You’re now on our early access list. '.$user_mail;
            header("refresh: 5"); 
        }
         
    }
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo_x_icon.svg" type="image/x-icon">
    <meta name="description" content="">

    <title>Welcome to GoBarta | Home</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/styles/css/additional.css">
    <link rel="stylesheet" href="assets/styles/css/additional.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/css/responsiveness.css" type="text/css">
</head>

<body>
    <section class="menu cid-s48OLK6784" once="menu" id="menu1-h">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.php">
                            <img src="assets/images/logo.svg" alt="GoBarta Logo" style="height: 1.8rem;">
                        </a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span class="one"></span>
                        <span class="two"></span>
                        <span class="three"></span>
                        <span class="four"></span>
                    </div>
                </button>
                <form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true" sty>
                            <li class="nav-item"><a class="nav-link link text-black display-4"
                                    href="index.php">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link link text-black display-4" href="#info2-p">About</a>
                            </li>
                            <li class="nav-item"><a class="nav-link link text-black display-4" href="#content1-8">How it
                                    works</a>
                            </li>
                        </ul>

                        <div class="navbar-buttons mbr-section-btn">
                            <a class="btn btn-primary createBtn display-4" href="#social">Sign up for early access</a>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
    </section>

    <section class="header11 cid-sqNmh50pWP" id="header11-k">
        <div class="container-fluid contRes">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 image-wrapper">
                    <img class="mockBg" src="assets/images/iPhone-user.png" alt="GoBarta">
                </div>
                <div class="col-12 col-md-7 item-bg">
                    <div class="text-wrapper text-center" id="social">
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1 welcome-t">
                            We connect you to people around you to <b class="trans">barta items</b>
                            with&nbsp;
                            <img class="lineCurve1" src="./assets/images/curve-line.svg">
                        </h1>
                        <p class="mbr-text mbr-fonts-style feed">
                            Our feed is filled with listed items by various people all over the country.</p>
                        <form name="myForm" action=""  method="post">
                            <div class="mailWrap">
                                <img src="./assets/images/success-icon.png">
                                <span id="error-email" class="mailCss"> <?php echo($emailErr); ?></span>
                            </div>
                            <div class="input-group mb-3 searchWrap">
                                <input type="text" placeholder="Input your email address" class="form-control emails"
                                    name='email'>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btnEdit" type="submit" name="signup">Sign up for early
                                        access</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll down button -->
    <section>
        <div class="btn-dwn">
            <a href="#content1-8">
                <img class="scroll-down" src="./assets/images/btn-down.svg">
            </a>
        </div>
    </section>
    <!-- Scroll down button end-->

    <section class="info2 cid-sqNtayQGa5 mbr-parallax-background" id="info2-p">

        <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(33, 43, 75);"></div>
        <div class="align-center container-fluid">
            <div class="row justify-content-center contStack">
                <div class="card col-12 col-lg-6">
                    <div class="title-rack">
                        <div class="textLeft">
                            <h3>INTRODUCTION</h3>
                            <p>Why GoBarta?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="textRight">
                        <p>Everyone has something to offer. It could be of little value to them, yet valuable to
                            someone else. Our platform helps match people who see value in the exchange. An item for an
                            item - used or new, an item for a service, or a service for a service. <br>
                            Our purpose is to help reduce waste, through a non cash digital marketplace where everyone
                            has something to offer. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="content1 cid-s48udlf8KU mbr-fullscreen mbr-parallax-background" id="content1-8">

        <div class="container workCont">
            <div class="worksCss">
                <div class="title">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2 workStyle">
                        How it <b>works</b>
                        <img class="lineCurve" src="./assets/images/Line Vector.svg">
                    </h3>

                    <p class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7 pStyle">GoBarta uses your
                        interest, preferences and proximity to offer matches to items you have listed to trade off. A
                        user is able to review from a list of items matched to their offered item, chat with Barta
                        options and then select most preferred item. Offline exchange is then initiated to complete the
                        transaction. </p>
                </div>
            </div>

            <div class="workNum">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-6 work-rw">
                        <div class="row">
                            <div class="col-2 pad-img"><img src="./assets/images/no1.svg"></div>
                            <div class="col-10">
                                <h2>List an item</h2>
                                <h4>Got a used item that you’re no longer using? Don’t let it lie wasting away.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-6 work-rw">
                        <div class="row">
                            <div class="col-2 pad-img"><img src="./assets/images/no2.svg"></div>
                            <div class="col-10">
                                <h2>Find something else <br> you like</h2>
                                <h4>Check our feed of listed items by various people all over the country.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-6 work-rw">
                        <div class="row">
                            <div class="col-2 pad-img"><img src="./assets/images/no3.svg"></div>
                            <div class="col-10">
                                <h2>Trade it by barter</h2>
                                <h4>Easily trade it by barter with someone around you, for another thing of value to
                                    you.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- How it works end-->

    <!-- Rectangle -->
    <section>
        <div class="rec">
            <img src="./assets/images/rectangle.png">
        </div>
    </section>
    <!-- Rectangle end -->

    <!-- Sign Up Form -->
    <section class="info3 cid-sqNAm61Huu mbr-parallax-background" id="info3-r">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <h5 class="wh">Get notified when we launch</h5>
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-1 dwn">
                                Be among the first to use it
                            </h4>
                            <form name="myForm" action=""  method="post">
                            <div class="mailWrap-1">
                                <img src="./assets/images/success-icon.png">
                                <span id="error-email" class="mailCss"> <?php echo($emailErr); ?></span>
                            </div>
                                <div class="input-group mb-3 search-btm">
                                    <input type="text" placeholder="Input your email address"
                                        class="form-control emails">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btnEdit" type="submit">Sign up for
                                            early
                                            access</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Sign Up Form End-->

    <!-- Footer -->
    <section class="footer4 cid-sqNrJQ83lt" once="footers" id="footer4-o">

        <div class="container-fluid">
            <div class="row mbr-white">
                <div class="col-6 col-lg-3">
                    <div class="media-wrap col-md-8 col-12">
                        <a href="index.php">
                            <img src="assets/images/logo.svg" alt="GoBarta" style="width: 80%">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 edit">
                    <p class="mbr-text mbr-fonts-style mb-4 display-4">
                        Easily trade it by barter with someone around you, for another thing of value to you. Check our
                        feed of listed items by various people all over the country. Check our feed of listed items by
                        various.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 edit">
                        <strong>Quicklinks</strong>
                    </h5>
                    <ul class="list mbr-fonts-style display-4 edit">
                        <li class="mbr-text item-wrap "><span><a href="#info3-r">Download App</a></span></li>
                        <li class="mbr-text item-wrap"><span><a href="#">Create an account</a></span>
                        </li>
                        <li class="mbr-text item-wrap"><span><a href="#">How it works</a></span></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3 edit">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Contact</strong>
                    </h5>
                    <ul class="list mbr-fonts-style display-4 edit">
                        <li class="mbr-text item-wrap"><span>30 Alhaja Sinu Close, Yaba, Lagos</span></li>
                    </ul>

                    <div class="social-row display-7">
                        <div class="soc-item edit">
                            <a href="https://www.facebook.com/go.barta" target="_blank">
                                <img src="./assets/images/facebook.svg">
                            </a>
                        </div>
                        <div class="soc-item edit">
                            <a href="https://twitter.com/gobarta1" target="_blank">
                                <img src="./assets/images/twitter.svg">
                            </a>
                        </div>
                        <div class="soc-item edit">
                            <a href="https://www.instagram.com/gobarta_" target="_blank">
                                <img src="./assets/images/instragram.svg">
                            </a>
                        </div>
                        <!-- <div class="soc-item">
                            <a href="#" target="_blank">
                                <img src="./assets/images/linkdIn.svg">
                            </a>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer end -->

    <!-- Scripts -->
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
    <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <!-- Scripts end -->

    <!-- Cookies -->
    <input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d'
        data-cookie-colorBg='rgba(234, 239, 241, 0.99)' data-cookie-textButton='Agree' data-cookie-colorButton=''
        data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true'
        data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
    <!-- Cookies end -->
</body>

</html>