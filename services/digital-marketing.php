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
                    <img src="<?php echo ASSET_IMG_URL; ?>banner/dm-banner.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <!-- About section -->
    <section class="pad40 bg-dark-grey service-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6" data-aos="fade-right">
                    <img src="<?php echo ASSET_IMG_URL; ?>digital-marketing.jpg" alt="digital-marketing.jpg">
                </div>
                <div class="col-md-6 col-sm-6 flex-align-center">
                    <div class="ml50 no-ml-xs" data-aos="fade-left">
                        <h2 class="pad-b10">Building Your Tribe With Clear, Insightful, & Inspiring Words</h2>
                        <p>For us it's more than just content writing, it's right and relevant content that speaks to your audience directly. A smart customer searches for value in everything, and that's exactly what we provide to them. Our secret is quality over quantity of words. We help you build your tribe with quality & relevant content rather than quantity. Of course, we write for search engines but we do not ignore the human value in our writing.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <section class="digital-markting-cards pad-t50 pad-b80">
        <div class="container-fluid">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3>Services</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card card_red text-center">
                            <div class="title">
                                <h2>SEO</h2>
                            </div>
                            <div class="card-body">
                                <p class="text-white">We help your business to be discovered by the right audience with our best SEO services. From in-depth analysis of user and keyword trends to drafting effective strategies for you according to your business needs. We follow specifically tailored strategies to meet your unique business needs to drive relevant traffic to your website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card card_violet text-center">
                            <div class="title">
                                <h2>SMM</h2>
                            </div>
                            <div class="card-body">
                                <p class="text-white">We provide you with everything your business needs to succeed on social media. We craft specific, custom social media services strategies relevant to your industry and help you to achieve your goals. We provide content that your audience is passionate about. We do it all to help your target audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card card_three text-center">
                            <div class="title">
                                <h2>PPC</h2>
                            </div>
                            <div class="card-body">
                                <p class="text-white">We manage all paid advertising platforms, and we use our tried, tested, and totally effective tactics to get you the most conversions at the lowest cost. Our PPC management team ensures that every ad used in the campaign brings out the best ROI by testing click-through rates and conversion rates. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card card_four text-center">
                            <div class="title">
                                <h2>Email Markting</h2>
                            </div>
                            <div class="card-body">
                                <p class="text-white">We start with understanding your business needs to use email marketing, and then we generate well-defined email marketing services that reach out to the customer inbox directly and boost customer engagement. Our ultimate goal is to help businesses improve customer engagement and conversion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script>
        window.onload = function() {
            $("#services").addClass("active");
        }
    </script>
    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bottomjs.php' ?>
</body>

</html>