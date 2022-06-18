<?php
include '../includes/define.php';
include '../includes/connection.php';
$page_name = "web-development";
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
                    <img src="<?php echo ASSET_IMG_URL; ?>banner/wd-banner-new.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <section class="bg-orange pad50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 text-center">
                    <h1 class="text-white mb-3">WE DESIGN AND DEVELOP WEBSITES WITH A FOCUS ON INNOVATION</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pad50 wd-service-about">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-10 col-sm-12 mx-auto flex-align-center">
                    <div class="text-center" data-aos="fade-up">
                        <p>We design and develop websites with a focus on positive user experience. We create individualized web strategies according to the niche market and deliver comprehensive web design & development solutions for every single client.
                            With the right design & development, we engage, inform, and connect our customers better with the brand.
                            We have a team of highly skilled and innovative developers & designers, who create website solutions that entice users to move further in.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <!-- Our Web Services -->
    <section class="web-serives pad-t50">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h3 class="text-blue">Our Web Services </h3>
            </div>
            <div class="row pad30 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="card pad20" data-aos="flip-right">
                        <div class="card-body">
                            <h3 class="text-blue mb-3">Ecommerce websites</h3>
                            <h4 class="text-orange mb-3">Build your successfull e-stores with us</h4>
                            <p class="card-text">With extensive knowledge and advanced tools & technologies, we design the best e-commerce websites with the smartest functionalities for you. With a core focus on creating a superior & effortlesss hopping experience, we develop & design high-performing e-commerce websites that users love.</p>
                            <p class="card-text">We provide a complete website solution based on brand loyalty and user engagement to help you manage & grow your online e-stores.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="card pad20" data-aos="flip-right">
                        <div class="card-body">
                            <h3 class="text-blue mb-3">INFORMATIONAL WEBSITES</h3>
                            <h4 class="text-orange mb-3">WE DESIGN & DEVELOP WEBSITES THAT COMPEL USERS TO EXPLORE MORE</h4>
                            <p class="card-text">We design simple clean andsmart informational websites that do a great job of growing brand awareness and credibility of the brandand provide essential information without compromising the design of the website.</p>
                            <p class="card-text">We create insightful and,wow experiences for every person who lands on your website with appealing designs & a clear value statement. Our informational website solutions always entice the user to scroll for more and more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="card pad20" data-aos="flip-right">
                        <div class="card-body">
                            <h3 class="text-blue mb-3">CUSTOMIZATION</h3>
                            <h4 class="text-orange mb-3">WE CUSTOMIZE TO CREATE AN IMPROVED AND MORE RELEVANT US EREXPERIENCE</h4>
                            <p class="card-text">Every business has different priorities & unique requirements and thus needs customized functionalities. Our development team with smart tactics balances your unique business needs with available technology to create custom web solutions that complement the value of your offerings.</p>
                            <p class="card-text">We design customized solutions for our clients to create an improved, enhanced, and more engaging experience for the users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Web Services ends -->

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

    <section class="pricing-plan">

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
    <section class="bg-orange pad20"></section>

    <script>
        window.onload = function() {
            $("#services").addClass("active");
        }
    </script>
    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bottomjs.php' ?>
</body>

</html>