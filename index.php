<?php
include './includes/define.php';
?>

<?php
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else $link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];

// Print the link
echo $link;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>I-techverse</title>
    <?php include './includes/topcss.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/navbar.php' ?>
    <!-- Navbar ends -->

    <!-- Banner -->
    <section class="" id="banner">
        <div class="container-fluid banner-text-wrapper" data-aos="fade-up">
            <div class="row py-5">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <h1 class="text-white">REBUILDING YOUR IMAGE</h1>
                    <h3 class="text-white">IN THE DIGITAL WORLD! </h3>
                    <p class="animated-text">We Provide <span style="color:#ff7b25;" class="typing"></span></p>
                    <p>
                        <a class="get-start-btn" onclick="openLoginForm()">Get Started with Us</a>
                    </p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <video src="<?php echo SITE_IMG_URL; ?>banner-video-2.mp4" muted="" loop="" autoplay="" class="banner-video"></video>
    </section>

    <div class="popup">
        <div class="popup-close" onclick="closeLoginForm()">&times;</div>
        <div class="form">
            <div class="avatar">
                <img src="<?php echo SITE_IMG_URL; ?>enquiry_image.jpg" alt="">
            </div>
            <div class="header">
                Enquiry Form
            </div>
            <div class="element">
                <span id="field_error" class="text-danger"></span>
                <input type="text" id="e_name" placeholder="Full Name*">
            </div>
            <div class="element">
                <input type="email" id="e_email" placeholder="Email*">
            </div>
            <div class="element">
                <input type="tel" id="e_phone" placeholder="Phone*">
            </div>
            <div class="element">
                <button onclick="submitEnquiry();">Submit</button>
            </div>
        </div>
    </div>
    <!-- Banner ends -->

    <!-- Services -->
    <section class="pad-t70 pad-b70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="feature-box-04">
                        <a href="./web-development-services">
                            <div class="pad-b20">
                                <!-- <i class="fa bi bi-tools"></i> -->
                                <img src="<?php echo SITE_IMG_URL; ?>icons/ux.png" width="20%" alt="">
                            </div>
                            <h4 class="pad-b10">Web Design & Development</h4>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="feature-box-04">
                        <a href="./digital-marketing-services">
                            <div class="pad-b20">
                                <!-- <i class="fa bi bi-layers-half"></i> -->
                                <img src="<?php echo SITE_IMG_URL; ?>icons/digital-marketing.png" width="20%" alt="">
                            </div>
                            <h4 class="pad-b10">Digital Marketing</h4>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="feature-box-04">
                        <a href="./graphic-designing-services">
                            <div class="pad-b20">
                                <!-- <i class="fa icon-gears"></i> -->
                                <img src="<?php echo SITE_IMG_URL; ?>icons/web-design.png" width="20%" alt="">
                            </div>
                            <h4 class="pad-b10">Graphic Designing</h4>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" data-aos="fade-down">
                    <div class="feature-box-04">
                        <a href="./content-writing-services">
                            <div class="pad-b20">
                                <!-- <i class="fa bi bi-newspaper"></i> -->
                                <img src="<?php echo SITE_IMG_URL; ?>icons/content-writing.png" width="20%" alt="">
                            </div>
                            <h4 class="pad-b10">Content Writing</h4>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" data-aos="fade-down">
                    <div class="feature-box-04">
                        <a href="./tally-services">
                            <div class="pad-b20">
                                <!-- <i class="fa  icon-document"></i> -->
                                <img src="<?php echo SITE_IMG_URL; ?>icons/vote.png" width="20%" alt="">
                            </div>
                            <h4 class="pad-b10">Tally Services</h4>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services ends -->

    <!-- About us -->
    <section class="pad-t100 pad-b50" id="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12 mb20" data-aos="flip-down" data-aos-easing="ease-in-sine">

                    <img src="<?php echo SITE_IMG_URL; ?>about-us-svg.png" alt="">

                </div>
                <div class="col-lg-7 col-md-7 col-12 mb30" data-aos="fade-left">
                    <div class="section-title left mb50">
                        <h3 class="size-34 white">About Us</h3>
                    </div>
                    <p>I-Techverse Solutions India Pvt Ltd is a Technology Company in India founded by Mr. Sanmati Jain and Mrs. Sakshi Jain. The company provides services in India to help business enterprises to rebuild their image in the Digital world and to simplify their required tasks. The Company's Technology services are built on the belief in Innovation and Creativity and a continuous focus on delivering strategically driven Solutions to the clients.The company works in partnership with Tally Solutions.</p>
                    <a href="<?php echo SITE_ROOT_URL; ?>about" class="btn btn-primary mt20">Read More</a>
                </div>

            </div>
        </div>
    </section>
    <!-- About us ends -->

    <!-- How we help you -->
    <section class="pad-t70 pad-b70" id="how-we-help">
        <div class="container-fluid">
            <div class="row mx-2">
                <div class="col-12">
                    <p class="display-4" data-aos="fade-in"><span class="text-blue">Here is how we help you</span> reach your goals with the right approach</p>
                </div>
            </div>
            <div class="row mx-2">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 pad-b20 pad-t20">
                    <div class="text-center" style="margin:0 auto;" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="<?php echo SITE_IMG_URL; ?>team-will-connect-with-you.png" class="" alt="team-will-connect-with-you.png" width="200">
                        <div class="card-body">
                            <h4 class="card-title">We Understand You First</h4>
                            <p class="card-text">We invest our sufficient time in understanding your business, your vision, and your objective.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 pad-b20 pad-t20">
                    <div class="text-center" style="margin:0 auto;" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="<?php echo SITE_IMG_URL; ?>research-&-analysis.png" class="" alt="research-&-analysis.png" width="200">
                        <div class="card-body">
                            <h4 class="card-title">Research & Analysis</h4>
                            <p class="card-text">Based on your objective, vision, and business needs, We do thorough research and analysis to drive desired results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 pad-b20 pad-t20">
                    <div class="text-center" style="margin:0 auto;" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="<?php echo SITE_IMG_URL; ?>well-trained-executive.png" class="" alt="well-trained-executive.png" width="200">
                        <div class="card-body">
                            <h4 class="card-title">Experienced Team</h4>
                            <p class="card-text">From developers, designers to digital Marketing specialists, we matchmake your needs with our in-house talent to deliver you the right work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 pad-b20 pad-t20">
                    <div class="text-center" style="margin:0 auto;" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="<?php echo SITE_IMG_URL; ?>testing-&-review.png" class="" alt="testing-&-review.png" width="200">
                        <div class="card-body">
                            <h4 class="card-title">Testing & Review</h4>
                            <p class="card-text">We test the functioning and take detailed client reviews because we strive to provide uncluttered services and meet client expectations to the best.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 pad-b20 pad-t20">
                    <div class="text-center" style="margin:0 auto;" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="<?php echo SITE_IMG_URL; ?>technical-support.png" class="" alt="technical-support.png" width="200">
                        <div class="card-body">
                            <h4 class="card-title">Regular Support</h4>
                            <p class="card-text">Our in-house technical team remains available for you on an immediate basis to provide you with complete support anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 pad-b20 pad-t20">
                    <div class="text-center" style="margin:0 auto;" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="<?php echo SITE_IMG_URL; ?>quick-&-quality.png" class="" alt="quick-&-quality.png" width="200">
                        <div class="card-body">
                            <h4 class="card-title">Quick & Quality service</h4>
                            <p class="card-text">Our approach is quality-focused and we believe in on-time delivery of service. It all creates a high satisfaction & better experience for the client.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How we help you ens -->

    <!-- Testimonials -->
    <section class="pad-t30 pad-b30" id="testimonials" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center white">
                    <h3 class="white">Testimonials</h3>
                </div>
            </div>
        </div>
        <div class="container pad-lr-40">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-item text-center white">
                                <img src="<?php echo SITE_IMG_URL; ?>dummy-pic.jpg" alt="" class="img-circle">
                                <p><span class="fa fa-quote-left mr10 size-20 v-top theme-color"></span> In Today's World making an online presence is very important for every business, but for that, every business needs some guidance and support which I got from the I-Techverse Team. I highly recommend their Web service to others to build a good website. <span class="fa fa-quote-right ml10 size-20 v-bottom theme-color"></span></p>
                                <div class="client">Rahul Pal</div>
                                <div class="separator mt20"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item text-center white">
                                <img src="<?php echo SITE_IMG_URL; ?>dummy-pic.jpg" alt="" class="img-circle">
                                <p><span class="fa fa-quote-left mr10 size-20 v-top theme-color"></span> I want to thank you for providing quality service by I-Techverse. We sincerely appreciate your efficient, gracious customer service. We will continue to recommend your services to other companies and contacts.<span class="fa fa-quote-right ml10 size-20 v-bottom theme-color"></span></p>
                                <div class="client">Kaushal Nishad</div>
                                <div class="separator mt20"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item text-center white">
                                <img src="<?php echo SITE_IMG_URL; ?>dummy-pic.jpg" alt="" class="img-circle">
                                <p><span class="fa fa-quote-left mr10 size-20 v-top theme-color"></span> My overall experience with I-Techverse is excellent. I-Techverse isn’t just building our website, they’re also working to enhance our digital presence. As Digital Marketing is a long theirconsultation showed me results in just two months, the ranking has gone up organically.<span class="fa fa-quote-right ml10 size-20 v-bottom theme-color"></span></p>
                                <div class="client">Dhanush</div>
                                <div class="separator mt20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="bg-overlay dark"></div> -->
    </section>
    <!-- Testimonials ends -->

    <!-- Latest Blogs -->
    <!-- <section class="pad-t80 pad-b50">
        <div class="container">
            <div class="section-title text-center">
                <h3>Latest Blogs </h3>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in-up">
                    <div class="col-md-6">
                        <div class="news-pic">
                            <img src="assets/images/blog/blog1.jpg" class="img-responsive" alt="blog-post">
                            <div class="bottom-left"><span>SEP</span><span>03</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-20">
                        <div class="mb20">
                            <h4 class="mb5 size-14"><a href="#">Passion for Promise</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" data-aos="zoom-in-up">
                    <div class="col-md-6">
                        <div class="news-pic">
                            <img src="assets/images/blog/blog4.jpg" class="img-responsive" alt="blog-post">
                            <div class="bottom-left"><span>SEP</span><span>03</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-20">
                        <div class="mb20">
                            <h4 class="mb5 size-14"><a href="#">Made by Investment</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pad-t30" data-aos="zoom-in-up">
                    <div class="col-md-6">
                        <div class="news-pic">
                            <img src="assets/images/blog/blog3.jpg" class="img-responsive" alt="blog-post">
                            <div class="bottom-left"><span>SEP</span><span>03</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-20">
                        <div class="mb20">
                            <h4 class="mb5 size-14"><a href="#">Special reportage</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 pad-t30" data-aos="zoom-in-up">
                    <div class="col-md-6">
                        <div class="news-pic">
                            <img src="assets/images/blog/blog2.jpg" class="img-responsive" alt="blog-post">
                            <div class="bottom-left"><span>SEP</span><span>03</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-20">
                        <div class="mb20">
                            <h4 class="mb5 size-14"><a href="#">Let's talk about every move count.</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </section> -->
    <!-- Latest Blogs ends -->

    <!-- Start Discussion Section -->
    <section id="discussion" class="pad80 call-to-action-2 parallax pos-relative" style="background-image: url(<?php echo SITE_IMG_URL; ?>Itech-2.png);">
        <div class="container pos-relative">
            <div class="row">
                <div class="col-md-8" data-aos="fade-right">
                    <h3 class="display-5">Let’s<span> start </span>a friendly <span>discussion</span> </h3>
                </div>
                <div class="col-md-4" data-aos="zoom-in">
                    <a href="<?php echo SITE_ROOT_URL; ?>contact" class="btn btn-primary">CONTACT US</a>
                </div>
            </div>
        </div>
        <div class="bg-overlay"></div>
    </section>
    <!-- Start Discussion Section ends -->

    <script>
        window.onload = function() {
            $("#home").addClass("active");
        }
    </script>
    <?php include './includes/footer.php' ?>
    <?php include './includes/bottomjs.php' ?>
</body>

</html>