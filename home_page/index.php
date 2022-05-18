<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');
$db_services_get_query = "SELECT * FROM services";
$db_services = mysqli_query($db_connect, $db_services_get_query);

//get activity from database
$activity_get_query = "SELECT * FROM activities";
$activities = mysqli_query($db_connect, $activity_get_query);

//get brand image from Database
$brand_image_get_query = "SELECT * FROM brand_image";
$brand_images = mysqli_query($db_connect, $brand_image_get_query);

//get project details from database
$project_get_query = "SELECT * FROM recent_projects";
$projects = mysqli_query($db_connect, $project_get_query);

//get skills from database
$db_skills_query = "SELECT * FROM skills";
$skills = mysqli_query($db_connect, $db_skills_query);

$db_reviews_query = "SELECT * FROM customer_reviews";
$reviews = mysqli_query($db_connect, $db_reviews_query);

//owner name from database
$db_owner_name_query = "SELECT `settings_value` FROM `settings` WHERE settings_name = 'owner_name'";
$owner_name = mysqli_fetch_assoc(mysqli_query($db_connect, $db_owner_name_query))['settings_value'];

//owner short info from database
$db_owner_short_info_query = "SELECT `settings_value` FROM `settings` WHERE settings_name = 'owner_short_info'";
$owner_short_info = mysqli_fetch_assoc(mysqli_query($db_connect, $db_owner_short_info_query))['settings_value'];

//about owner from database
$db_about_owner_query = "SELECT `settings_value` FROM `settings` WHERE settings_name = 'about_owner'";
$about_owner = mysqli_fetch_assoc(mysqli_query($db_connect, $db_about_owner_query))['settings_value'];

// owner_address
$db_owner_address_query = "SELECT `settings_value` FROM `settings` WHERE settings_name = 'owner_address'";
$owner_address = mysqli_fetch_assoc(mysqli_query($db_connect, $db_owner_address_query))['settings_value'];

// owner_phone
$db_owner_phone_query = "SELECT `settings_value` FROM `settings` WHERE settings_name = 'owner_phone'";
$owner_phone = mysqli_fetch_assoc(mysqli_query($db_connect, $db_owner_phone_query))['settings_value'];

// owner_email
$db_owner_email_query = "SELECT `settings_value` FROM `settings` WHERE settings_name = 'owner_email'";
$owner_email = mysqli_fetch_assoc(mysqli_query($db_connect, $db_owner_email_query))['settings_value'];
?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.php" class="navbar-brand logo-sticky-none"><img
                                        src="assets/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.php" class="navbar-brand s-logo-none"><img
                                        src="assets/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?=$owner_address?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?=$owner_phone?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?=$owner_email?></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$owner_name?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$owner_short_info?>.</p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="assets/img/banner/banner_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/img/banner/banner_img2.png" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p><?=$about_owner?></p>
                            <h3>SKILLS:</h3>
                        </div>
                        <!-- Education Item -->
                        <?php foreach ($skills as $skill) : ?>
                        <div class="education">
                            <div class="year"><?= $skill['skill_name'] ?></div>
                            <div class="line"></div>
                            <div class="location">
                                <span><?= $skill['skill_details'] ?></span>
                                <div class="progressWrapper">
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s"
                                            data-wow-duration="2s" role="progressbar"
                                            style="width: <?= $skill['skill_percentage'] ?>%;"
                                            aria-valuenow="<?= $skill['skill_percentage'] ?>" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- End Education Item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($db_services as $service) : ?>
                    <?php if ($service['status'] == 'active') : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                            <i class="<?= $service['icon'] ?>"></i>
                            <h3><?= $service['service_name'] ?></h3>
                            <p><?= $service['service_details'] ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($projects as $project) : ?>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img style="height: " src="../uploads/project_photo/<?= $project['project_image'] ?>"
                                    alt="<?= $project['project_image'] ?>">
                            </div>
                            <div class="speaker-overlay">
                                <span><?= $project['project_category'] ?></span>
                                <h4><a href="portfolio-single.html"><?= $project['project_name'] ?></a></h4>
                                <a href="portfolio-single.php?id=<?= $project['id'] ?>" class="arrow-btn">More
                                    information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php foreach ($activities as $activity) : ?>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="fact-box text-center mb-50">
                                <div class="fact-icon">
                                    <i class="<?= $activity['activity_icon'] ?>"></i>
                                </div>
                                <div class="fact-content">
                                    <h2><span class="count"><?= $activity['activity_count'] ?></span></h2>
                                    <span><?= $activity['activity_name'] ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">
                            <?php foreach ($reviews as $review) : ?>
                            <div class="single-testimonial text-center">
                                <div class="testi-avatar m-auto" style="width: 100px; height: 140px;">
                                    <img class="w-100" style="height: 100px; border-radius: 50px;"
                                        src="../uploads/customer_photo/<?= $review['customer_image'] ?>" alt="img">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span> <?= $review['review_details'] ?> <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5><?= $review['customer_name'] ?></h5>
                                        <span><?= $review['customer_position'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <?php foreach ($brand_images as $brand_image) : ?>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img class="" src="../uploads/brand_image/<?= $brand_image['brand_image_name'] ?>"
                                alt="img">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an
                                unknown printer took a galley.</p>
                            <h5>OFFICE IN <span>NEW YORK</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22
                                        New York</li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>info@exemple.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <?php if (isset($_SESSION['sms_sent'])) : ?>
                            <p class="text-success"><?= $_SESSION['sms_sent']; ?></p>
                            <?php
                                unset($_SESSION['sms_sent']);
                            endif
                            ?>
                            <form action="sms_post.php" method="POST">
                                <input type="text" placeholder="your name" name="customer_name">
                                <input type="text" placeholder="subject" name="subject">
                                <input type="email" placeholder="your email" name="customer_email">
                                <textarea id="message" name="customer_message" placeholder="your message"></textarea>
                                <button type="submit" class="btn" name="customer_sms_submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/one-page-nav-min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>