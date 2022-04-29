<?php
include '../includes/define.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>I-techverse</title>
    <?php include '../includes/topcss.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include '../includes/navbar.php' ?>

    <!-- Banner -->
    <section class="">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo ASSET_IMG_URL; ?>banner/Itech-banners.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <section class="pad-t20 bg-gray-light service-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 hidden-xs flex-align-center">
                    <img src="<?php echo ASSET_IMG_URL; ?>webd-about.png" alt="web-development-about.jpg" data-aos="zoom-in">
                </div>
                <div class="col-md-6 col-sm-6 flex-align-center">
                    <div class="ml50 no-ml-xs">
                        <h2 class="pad-b10" data-aos="fade-up">We Design And Develop Websites With A Focus On Innovation</h2>
                        <p data-aos="fade-up">We design and develop websites with a focus on positive user experience. We create individualized web strategies according to the niche market and deliver comprehensive web design & development solutions for every single client.
                            With the right design & development, we engage, inform, and connect our customers better with the brand.
                            We have a team of highly skilled and innovative developers & designers, who create website solutions that entice users to move further in.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <!-- Our Web Services -->
    <section class="web-serives pad-t50 pad20">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h3>Our Web Services </h3>
            </div>
            <div class="row pad30">
                <div class="col-md-6 col-sm-6 flex-align-center">
                    <div class="ml50 no-ml-xs">
                        <h2 class="pad-b10 text-blue underline mb10" data-aos="fade-up">E-commerce Website</h2>
                        <h4 class="pad-b10" data-aos="fade-up">Build Your Successful E-Stores With Us</h4>
                        <p data-aos="fade-up">With extensive knowledge and advanced tools & technologies, we design the best e-commerce websites with the smartest functionalities for you. With a core focus on creating a superior & effortless shopping experience, we develop & design high-performing e-commerce websites that users love.</p>
                        <p data-aos="fade-up">We provide a complete website solution based on brand loyalty and user engagement to help you manage & grow your online e-stores</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="<?php echo ASSET_IMG_URL; ?>ecomm.jpg" class="card-img-top" alt="ecomm.jpg" data-aos="zoom-in">
                </div>
            </div>
        </div>
    </section>
    <section class="web-serives pad20 bg-dark-grey">
        <div class="container">
            <div class="row pad30">
                <div class="col-md-6 col-sm-6">
                    <img src="<?php echo ASSET_IMG_URL; ?>inforamative.jpg" class="card-img-top" alt="inforamative.jpg" data-aos="zoom-in">
                </div>
                <div class="col-md-6 col-sm-6 flex-align-center">
                    <div class="ml50 no-ml-xs">
                        <h2 class="pad-b10 text-blue underline mb10" data-aos="fade-up">Informational Websites</h2>
                        <h4 class="pad-b10" data-aos="fade-up">We Design & Develop Websites That Compel Users To Explore More</h4>
                        <p data-aos="fade-up">We design simple, clean, and smart informational websites that do a great job of growing brand awareness and credibility of the brand and provide essential information without compromising the design of the website. </p>
                        <p data-aos="fade-up">We create insightful and wow experiences for every person who lands on your website with appealing designs & a clear value statement.
                            Our informational website solutions always entice the user to scroll for more and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="web-serives pad20">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-sm-6 flex-align-center">
                    <div class="ml50 no-ml-xs">
                        <h2 class="pad-b10 text-blue underline mb10" data-aos="fade-up">Customization</h2>
                        <h4 class="pad-b10" data-aos="fade-up">We Customize To Create An Improved And More Relevant User Experience</h4>
                        <p data-aos="fade-up">Every business has different priorities & unique requirements and thus needs customized functionalities.
                            Our development team with smart tactics balances your unique business needs with available technology to create custom web solutions that complement the value of your offerings. We design customized solutions for our clients to create an improved, enhanced, and more engaging experience for the users.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="<?php echo ASSET_IMG_URL; ?>customization.jpg" class="card-img-top" alt="customization.jpg" data-aos="zoom-in">
                </div>
            </div>
        </div>
    </section>
    <!-- Our Web Services ends -->

    <section class="pad50 call-to-action-2 parallax pos-relative" style="background-image: url(<?php echo ASSET_IMG_URL; ?>itech-2.png);">
        <div class="container pos-relative">
            <div class="row text-left">
                <div class="col-md-12 text-center" data-aos="zoom-in">
                    <h3 class="pad-b20">LET’S WORK <span>TOGETHER</span> ON YOUR PROJECT</h3>
                    <div class="col-md-12 no-padding mb-md-20">
                        <a href="<?php echo SITE_ROOT_URL; ?>contact" class="btn btn-primary mt20">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-overlay dark"></div>
    </section>


    <section class="why-choose-us pad-t50 pad-b50 bg-grey">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Our Process</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo ASSET_IMG_URL; ?>services.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Technology we use section -->
    <section class="technology-use-section pad-b50 pad-t50 bg-blue">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3 class="text-white">Technology we use</h3>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <i class="fa-brands fa-php"></i>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <i class="fa-brands fa-html5"></i>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <i class="fa-brands fa-wordpress"></i>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <i class="fa-brands fa-bootstrap"></i>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <i class="fa-brands fa-js"></i>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <i class="fa-brands fa-laravel"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Technology we use section ends -->
    <script>
        window.onload = function() {
            $("#services").addClass("active");
        }
    </script>
    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bottomjs.php' ?>
</body>

</html>