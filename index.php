
<?php 
session_start();
require 'db.php';
// banner Conatnt Start
$select_bennar_contant = "SELECT * FROM banners_contants WHERE STATUS=1";
$select_bennar_contant_result = mysqli_query ($db_connection, $select_bennar_contant);
$after_assoc_banner_contant = mysqli_fetch_assoc($select_bennar_contant_result);
// banner Conatnt End

// Banner image
$select_bennar_image = "SELECT * FROM banner_image WHERE STATUS=1";
$select_bennar_image_result = mysqli_query ($db_connection, $select_bennar_image);
$after_assoc_banner_image = mysqli_fetch_assoc($select_bennar_image_result);
// Banner image

// icon_part
$select_social_icon = "SELECT * FROM social_icon WHERE STATUS = 1";
$select_social_icon_result = mysqli_query ($db_connection, $select_social_icon);

// icon_part

// Contact Info
$select_contact_info = "SELECT * FROM contact_info";
$select_contact_info_result = mysqli_query ($db_connection, $select_contact_info);
$after_assoc = mysqli_fetch_assoc($select_contact_info_result);

// Contact Info

// about info 
$select_about_contant = "SELECT * FROM about_contant";
$select_about_contant_result = mysqli_query ($db_connection, $select_about_contant);
$after_assoc_about_info = mysqli_fetch_assoc($select_about_contant_result);

// about info 

// Skill List
$select_skill = "SELECT * FROM skill WHERE STATUS = 1";
$select_skill_result = mysqli_query ($db_connection, $select_skill);
// Skill List


// service Part
$select_service = "SELECT * FROM service WHERE status = 1";
$select_service_result = mysqli_query ($db_connection, $select_service);
// service Part

// Logo Part
$select_social_logo = "SELECT * FROM logo";
$select_social_logo_result = mysqli_query ($db_connection, $select_social_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_social_logo_result);
// Logo Part


// clints part
$select_social_clints = "SELECT * FROM clints WHERE status = 1";
$select_social_clints_result = mysqli_query ($db_connection, $select_social_clints);
// clints part

// feedback part
$select_feedbacks = "SELECT * FROM feedbacks";
$select_feedbacks_result = mysqli_query ($db_connection, $select_feedbacks);
// feedback part

// protfolio part

$select_works = "SELECT * FROM works";
$select_works_result = mysqli_query ($db_connection, $select_works);
// protfolio part

// fact- aria

$select_fact = "SELECT * FROM fact  WHERE status = 1";
$select_fact_result = mysqli_query ($db_connection, $select_fact);
// fact- aria





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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
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
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img width="100px" src="uploads/logo/<?=$after_assoc_logo['logo']?>" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img width="100px" src="uploads/logo/<?=$after_assoc_logo['logo']?>" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
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
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$after_assoc['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$after_assoc['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$after_assoc['email']?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <?php foreach($select_social_icon_result as $icon){?>
                    <a href="<?=$icon['icon_class']?>"><i class="fab <?=$icon['icon_class']?>"></i></a>
                      <?php }?>
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
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?=$after_assoc_banner_contant['sub_title'];?></h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$after_assoc_banner_contant['title'];?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$after_assoc_banner_contant['desp'];?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php foreach($select_social_icon_result as $icon){?>
                                        <li><a href="<?=$icon['icon_class']?>"><i class="fab <?=$icon['icon_class']?>"></i></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img width="700" src="uploads/banner/<?=$after_assoc_banner_image['banner_image']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img width="380" src="uploads/about/<?=$after_assoc_about_info['image']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span><?=$after_assoc_about_info['sub_title']?></span>
                                <h2><?=$after_assoc_about_info['title']?></h2>
                            </div>
                            <div class="about-content">
                                <p><?=$after_assoc_about_info['desp']?></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->

                            <?php foreach($select_skill_result as $skill):?>

                            <div class="education">
                                <div class="year"><?=$skill['topic']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$skill['desp']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$skill['percentage']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>

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
                                <?php foreach($select_service_result as $service) : ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="fab <?=$service['service_icon']?>"></i>
								<h3>
                                    <?=$service['title']?>
                                </h3>
								<p>
								  <?=$service['desp']?>
								</p>
							</div>
						</div>

                        <?php endforeach?>

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
                        <?php foreach ($select_works_result as $work) {?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="uploads/protfolio/<?=$work['image']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$work['category']?></span>
									<h4><a href="portfolio-single.html"><?=$work['title']?></a></h4>
									<a href="portfolio-single.php?id=<?=$work['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                      <?php }?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">

                        <?php foreach ($select_fact_result as $fact) {?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fa <?=$fact['icon_class']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$fact['counter']?></span></h2>
                                        <span><?=$fact['title']?></span>
                                    </div>
                                </div>
                            </div>
                       <?php }?>
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
                              <?php foreach ($select_feedbacks_result as $feedback) {?>

                                    <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img width="200" height="200" style="border-radius: 50%;" src="uploads/feed/<?=$feedback['image']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span><?=$feedback['desp']?></span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$feedback['name']?></h5>
                                            <span><?=$feedback['dsignation']?></span>
                                        </div>
                                    </div>
                                </div>
                  
                              <?php }?>
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
                        <?php foreach($select_social_clints_result as $clints){?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img width="200px" height="200px" src="uploads/clints/<?=$clints['clints']?>" alt="img">
                            </div>
                        </div>
                        <?php }?>

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
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$after_assoc['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$after_assoc['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$after_assoc['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="message_post.php" method="POST">
                                    <input type="text" name = "name" placeholder="your name *">
                                    <input type="email" name = "email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button type="submit" class="btn">BUY TICKET</button>
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
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
zz