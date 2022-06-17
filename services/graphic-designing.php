<?php
include '../includes/define.php';
include '../includes/connection.php';
$page_name = "graphic-designing";
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
                    <img src="<?php echo ASSET_IMG_URL; ?>banner/gd-banner-new.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <section class="bg-orange pad50">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white mb-3">Graphic Designing SOLUTIONS</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- About section -->
    <section class="pad50 gd-service-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 mx-auto flex-align-center">
                    <div class="text-center" data-aos="fade-up">
                        <p>We tell your story and get you recognized with powerful, wow graphics. We provide creative graphic design solutions by experimenting with words, symbols, and images. Our designers are masters of the latest trends, and they will create the perfect designs for you that folks will always remember. They spend time intensely understanding the business, identifying key speaking points, and finally creating powerful, “wow” graphics around them.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <!-- Our Web Services -->
    <section class="graphic-serives pad-b50 pad-t50">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h3>Our Proficiency </h3>
            </div>
            <div class="row pad-b50 justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 mb-5" data-aos="flip-up">
                    <div class='card card-1'>
                        <div class='info'>
                            <h1 class=''>Identity Design</h1>
                            <p class='description'>Through identity design, we create an identity for your business that illustrates your brand and reflects the values your brand holds. Our designers blend together visual elements including logo, color palette, typography, & others to create a personality for your business and make a unique perception of you among your audience. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 mb-5" data-aos="flip-up">
                    <div class='card card-2'>
                        <div class='info'>
                            <h1 class='title'>Corporate Design</h1>
                            <p class='description'>We create corporate designs that express your brand personality. We build a recognizable and distinct brand experience through different brand elements from logo, color, fonts, and images to tonality. Every visual asset of your company designed by us is aimed at reflecting the unique value proposition of your company with inspiring and intuitive designs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 mb-5" data-aos="flip-up">
                    <div class='card card-3'>
                        <div class='info'>
                            <h1 class='title'>Social Media Design</h1>
                            <p class='description'>Through our creative and tailored social media designs, we help you leverage the power of social media to grow your brand awareness, engagements, and website traffic. Every social media design we create tells a story and contributes to your brand image. We make sure that the design conveys your overall message and builds a connection with your audience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 mb-5" data-aos="flip-up">
                    <div class='card card-4'>
                        <div class='info'>
                            <h1 class='title'>Publication Design</h1>
                            <p class='description'>Our innovative designers create insightful and impressive visuals for banners, brochures, flyers, books, magazines, and many more. With an amazing mix of professionalism and remarkable creativity skills, our graphic designers make a great impact on viewers’ minds and help you build a bright reputation for your business</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 mb-5" data-aos="flip-up">
                    <div class='card card-5'>
                        <div class='info'>
                            <h1 class='title'>Packaging Design</h1>
                            <p class='description'>With a complete analysis of what your product or brand stands for, our designers make your product stand out among all the others. By solidly analyzing what your brand stands for, we create packaging that fits your brand language and clearly communicates the product information to the consumer.All we do through packaging design is to enhance the product.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Web Services ends -->

    <!-- Start Discussion start -->
    <section class="start-discussion">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 flex-align-center">
                    <h3 class="text-white text-center">let's start a friendly discussion</h3>
                </div>
                <div class="col-lg-6 text-center">
                    <button class="btn" type="button" onclick="openEnquiryForm()">contact us</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Discussion ends -->

    <script>
        window.onload = function() {
            $("#services").addClass("active");
        }
    </script>
    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bottomjs.php' ?>
</body>

</html>