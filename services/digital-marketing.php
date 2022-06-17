<?php
include '../includes/define.php';
include '../includes/connection.php';
$page_name = "digital-marketing";
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
                    <img src="<?php echo ASSET_IMG_URL; ?>banner/dm-banner-new.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <section class="bg-orange pad30">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white">Digital Marketing <br> EXPERT SOLUTIONS</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- About section -->
    <section class="pad50 dm-service-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 mx-auto flex-align-center">
                    <div class="text-center" data-aos="fade-up">
                        <p>Are you looking for a full-fledged digital marketing strategy, campaign, or other related solutions for your business?</p>
                        <p>We have adopted effective, innovative and relevant approach implement digital marketing plan.</p>
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
                            <h3 class="text-blue">DIGITAL MARKETING SERVICES</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card text-center">
                            <img src="<?php echo ASSET_IMG_URL; ?>icons/seo-icon.png" alt="">
                            <div class="title">
                                <h2>SEO</h2>
                            </div>
                            <div class="card-body">
                                <p class="">We help your business to be discovered by the right audience with our best SEO services. From in-depth analysis of user and keyword trends to drafting effective strategies for you according to your business needs. We follow specifically tailored strategies to meet your unique business needs to drive relevant traffic to your website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card text-center">
                            <img src="<?php echo ASSET_IMG_URL; ?>icons/smm-icon.png" alt="">
                            <div class="title">
                                <h2>SMM</h2>
                            </div>
                            <div class="card-body">
                                <p class="">We provide you with everything your business needs to succeed on social media. We craft specific, custom social media services strategies relevant to your industry and help you to achieve your goals. We provide content that your audience is passionate about. We do it all to help your target audience.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card text-center">
                            <img src="<?php echo ASSET_IMG_URL; ?>icons/ppc-icon.png" alt="">
                            <div class="title">
                                <h2>PPC</h2>
                            </div>
                            <div class="card-body">
                                <p class="">We manage all paid advertising platforms, and we use our tried, tested, and totally effective tactics to get you the most conversions at the lowest cost. Our PPC management team ensures that every ad used in the campaign brings out the best ROI by testing click-through rates and conversion rates. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12" data-aos="flip-right">
                        <div class="card text-center">
                            <img src="<?php echo ASSET_IMG_URL; ?>icons/em-icon.png" alt="">
                            <div class="title">
                                <h2>Email Markting</h2>
                            </div>
                            <div class="card-body">
                                <p class="">We start with understanding your business needs to use email marketing, and then we generate well-defined email marketing services that reach out to the customer inbox directly and boost customer engagement. Our ultimate goal is to help businesses improve customer engagement and conversion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation starts -->
    <section class="bg-blue pad-t50 pad-b50 consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 mx-auto text-center">
                    <h4 class="text-white mb-4">Get Free Consultation form our Digital Marketing Experts!</h4>
                    <p class="text-white mb-4" style="letter-spacing:1.5px;">Are you looking for a full-fledged digital marketing strategy, campaign, or other related solutions for your business? Regardless of your digital marketing needs, our award-winning company will create customised, result-oriented and industry-specific digital marketing solutions just for you.</p>
                    <div class="row justify-content-center">
                        <form>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                                <input type="text" id="c_name" placeholder="Full Name*">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                                <input type="email" id="c_email" placeholder="Email*">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                                <input type="tel" id="c_phone" placeholder="Phone*">
                                <input type="hidden" id="c_msg" value="FREE CONSULTATION">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                                <button type="button" class="btn btn-success" onclick="submitConsultationEnquiry('<?php echo ASSET_URL; ?>');">SUBMIT</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation ends -->

    <script>
        window.onload = function() {
            $("#services").addClass("active");
        }
    </script>
    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bottomjs.php' ?>
</body>

</html>