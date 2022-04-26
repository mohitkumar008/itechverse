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
    <section class="pad50 call-to-action-2 parallax pos-relative" style="background-image: url(./images/about.jpg);">
        <div class="container pos-relative">
            <div class="row text-center">
                <div class="col-md-12 pad80" data-aos="fade-up">
                    <div class="section-title text-center m-0" data-aos="fade-up">
                        <h3>contact us </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-overlay dark"></div>
    </section>

    <section class="pad100 pad-b40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title text-center fadeInDown animated">
                    <h3>HOW TO REACH US</h3>
                </div>
            </div>
            <div class="row med-container">
                <div class="col-md-4 text-center pad-b40">
                    <div class="media">
                        <div class="media-body fadeInDown animated">
                            <i class="fa fa-map-marker size-34 pad-b15 theme-color"></i>
                            <h4 class="mb5">Address</h4>
                            <div class="feature-text">
                                <p>E-46, Sector-3,<br> Noida, UP, India
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center pad-b40">
                    <div class="media">
                        <div class="media-body fadeInDown animated">
                            <i class="fa fa-envelope size-34 pad-b15 theme-color"></i>
                            <h4 class="mb5">E-mail</h4>
                            <div class="feature-text">
                                <p>info@itechversesolutions.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center pad-b40">
                    <div class="media">

                        <div class="media-body fadeInDown animated">
                            <i class="fa fa-phone size-34 pad-b15 theme-color"></i>
                            <h4 class="mb5">Phone</h4>
                            <div class="feature-text">
                                <p> +0120-457-2786
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="contactForm" class="contact-form" method="post" role="form">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-12">
                                    <span id="field_error" class="text-danger"></span>
                                    <div class="form-group fadeInDown animated">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Name *" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group fadeInDown animated">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group fadeInDown animated">
                                        <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group fadeInDown animated">
                                        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject *" required="required" data-error="Subject is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group fadeInDown animated">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message *" required="required" data-error="Please,leave us a message." style="min-height: 175px;"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <input type="button" onclick="submitContactForm();" class="btn btn-primary mb30" value="Send message">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 fadeInDown animated">
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </div>

                    </form>
                    <img src="./images/thank-you.jpg" class="img-responsive w-70 m-auto" id="thankyou-image" alt="">
                </div>
                <!-- Start Map Section -->
                <div class="col-md-6 fadeInDown animated">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.923098114672!2d77.31651719127927!3d28.581331892415093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a9b56a6415%3A0x296cc6df1c0e868c!2sI%20Techverse%20Solutions%20India%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1639986330123!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <!-- End Map Section -->
            </div>
        </div>
    </section>


    <script>
        window.onload = function() {
            $("#contact").addClass("active");
        }
    </script>
    <?php include './includes/footer.php' ?>
    <?php include './includes/bottomjs.php' ?>
</body>

</html>