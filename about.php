<?php
include './includes/define.php';
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
    <section class="pad50 call-to-action-2 parallax pos-relative" style="background-image: url(./images/about-banner.jpg);background-position: center;">
        <div class="container pos-relative">
            <div class="row">
                <div class="col-md-12 pad80" data-aos="fade-up">
                    <div class="text-end mr-10" data-aos="fade-up">
                        <h3>about us </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bg-overlay dark"></div> -->
    </section>

    <section class="about-page-section pad20" style="background-image: url(./images/circle.png);background-position: right;background-repeat: no-repeat;background-position-x: 120%;background-size: contain;">
        <div class="container">
            <div class="row pad50">
                <div class="col-md-6 col-sm-6 flex-align-center" data-aos="fade-right">
                    <div class="ml50 no-ml-xs">
                        <h1 class="pad-b10 text-blue underline mb10">Who we are ?</h1>
                        <p>
                            I-Techverse Solutions India Pvt. Ltd. is a Technology Company in India founded by Mrs. Sakshi Jain and Mr. Sanmati Jain. The company provides services in India to help business enterprises to rebuild their image in the digital world and to simplify their required tasks. The Company's Technology services are built on the belief in Innovation and Creativity and a continuous focus on delivering strategically driven solutions to the clients.
                            The company works in partnership with Tally Solutions.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-center" data-aos="zoom-in-left">
                    <img src="./images/1.png" class="card-img-top w-75" alt="handshake.jpg">
                </div>
            </div>
        </div>
    </section>
    <section class="about-page-section pad20" style="background-image: url(./images/circle.png);background-position: right;background-repeat: no-repeat;background-position-x: -20%;background-size: contain;">
        <div class="container">
            <div class="row pad50">
                <div class="col-md-6 col-sm-6 text-center" data-aos="zoom-in-right">
                    <img src="./images/2.png" class="card-img-top w-75" alt="what-we-do.jpg">
                </div>
                <div class="col-md-6 col-sm-6 flex-align-center" data-aos="fade-left">
                    <div class="ml50 no-ml-xs bounceInRight animated">
                        <h1 class="pad-b10 text-blue underline mb10">What We Do</h1>
                        <p>We offer Website Development & Designing Services, Digital Marketing Services including SEO, SEM, Social Media Marketing, Content Marketing, Affiliate Marketing, Email Marketing, and Software Services including Tally Services and Accounting Software Services, and Others.</p>
                        <p>We help our clients to survive in the Digital world by solving complicated business problems and overcoming Software challenges. We highlight and establish your business in the online market and help you connect with the people looking for your product and services online. We help our clients in improving their revenues with a set of tools and techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-page-section pad20" style="background-image: url(./images/circle.png);background-position: right;background-repeat: no-repeat;background-position-x: 120%;background-size: contain;">
        <div class="container">
            <div class="row pad50">
                <div class="col-md-6 col-sm-6 flex-align-center" data-aos="fade-right">
                    <div class="ml50 no-ml-xs bounceInLeft animated">
                        <h1 class="pad-b10 text-blue underline mb10">OUR MISSION</h1>
                        <p>While prominent companies have high budgets to grab top talents and high-quality software that delivers results, small and medium-sized businesses always lag. I-Techverse is here to change that. We provide services in India to Big as well as Small and Medium Businesses for affordable prices. We continuously strive to help your business stay ahead and grab an edge over the market. We create overall strategies for your brand and operate them for you. We are dedicated to meeting the growing requirements of your business in the highly competitive market and taking it to different heights. </p>
                        <p>Our motive is to provide each Business with excellent Creators and Technology. We believe in delivering you quality services at modest prices.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-center" data-aos="zoom-in-left">
                    <img src="./images/3.png" class="card-img-top w-75" alt="our-mission-about.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-orange pad20"></section>

    <script>
        window.onload = function() {
            $("#about").addClass("active");
        }
    </script>
    <?php include './includes/footer.php' ?>
    <?php include './includes/bottomjs.php' ?>
</body>

</html>