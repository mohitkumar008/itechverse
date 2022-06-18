<?php
include '../includes/define.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/topcss.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/navbar.php' ?>

    <!-- Banner -->
    <section class="parallax" style="background-image: url(images/web-content-.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="banner white">
                        <h1>We Provides best<br><span class="theme-color">Tally Products </span></h1>

                        <a href="#about-section" class="btn btn-primary page-scroll">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <section class="pad40 bg-gray-light service-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 flex-align-center">
                    <div class="ml50 no-ml-xs" data-aos="fade-right">
                        <h1 class="pad-b10 text-blue mb10">What is Tally Prime ?</h1>
                        <p>TallyPrime is a complete business management software for small and medium businesses. TallyPrime helps you manage accounting, inventory, banking, taxation, payroll, and much more to get rid of complexities, and in turn, focus on business growth. </p>
                        <h4 class="text-blue mt-1">Versions of TallyPrime :-</h4>
                        <ul class="mt-1">
                            <li><b>TallyPrime Silver Edition is specifically designed for a single user</b> to provide simplified and faster account management</li>
                            <li><b>TallyPrime Gold</b> is designed for an unlimited number of users on the same LAN connection at the same time.</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 text-center" data-aos="flip-left">
                    <div class="row">
                        <div class="col-lg-6"><img src="./images/Tally-Prime-Silver.png" class="img-fluid" alt="graphic-design-svg-image.png"></div>
                        <div class="col-lg-6"><img src="./images/Tally-Prime-Gold.png" class="img-fluid" alt="graphic-design-svg-image.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tally-products pad-b50 pad-t50">
        <div class="container-fluid">
            <div class="section-title text-center" data-aos="fade-up">
                <h3>Why go for tally prime ? </h3>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <ul class="tab">
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-1')" id="defaultOpen">Invoicing & Accounting</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-2')">Inventory Management</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-3')">Taxation</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-4')">Banking</button>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 tally-prod-content">
                    <div class="row bg-grey pad50 pad-lr-60 tabcontent" id="product-1">
                        <div class="col-lg-6 col-md-12 ">
                            <div class="no-ml-xs" data-aos="fade-up">
                                <h1 class="pad-b10 text-blue mb10">Invoicing & Accounting</h1>
                                <p>We tell your story and get you recognized with powerful, wow graphics. We provide creative graphic design solutions by experimenting with words, symbols, and images. Our designers are masters of the latest trends, and they will create the perfect designs for you that folks will always remember. They spend time intensely understanding the business, identifying key speaking points, and finally creating powerful, “wow” graphics around them.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 ">
                            <img src="./images/gst-compliant-invoice-in-secs.jpg" class="img-fluid" alt="graphic-design-svg-image.png">
                        </div>
                    </div>
                    <div class="row bg-grey pad50 pad-lr-60 tabcontent" id="product-2">
                        <div class="col-lg-6 col-md-12 ">
                            <div class="no-ml-xs" data-aos="fade-up">
                                <h1 class="pad-b10 text-blue mb10">Inventory Management</h1>
                                <p>We tell your story and get you recognized with powerful, wow graphics. We provide creative graphic design solutions byanding the business, identifying key speaking points, and finally creating powerful, “wow” graphics around them.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 ">
                            <img src="./images/gst-compliant-invoice-in-secs.jpg" class="img-fluid" alt="graphic-design-svg-image.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="pad50 call-to-action-2 parallax pos-relative" style="background-image: url(./images/itech-2.png);">
        <div class="container pos-relative">
            <div class="row text-left">
                <div class="col-md-8" data-aos="fade-left">
                    <h3 class="pad-b20">LET’S WORK <span>TOGETHER</span> ON YOUR PROJECT</h3>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    <div class="col-md-12 no-padding mb-md-20">
                        <a href="#" class="btn btn-primary mt20">CONTACT US</a>
                    </div>
                </div>
                <div class="col-md-4 pull-right text-center-sm float-none-md" data-aos="fade-right"><img src="./images/Customisation.png"></div>
            </div>
        </div>
        <div class="bg-overlay dark"></div>
    </section>

    <script>
        function openTab(evt, Services) {
            console.log("openTab");
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // document.getElementById(arrows).style.display = "block";
            document.getElementById(Services).style.display = "block";
            evt.currentTarget.className += " active";

        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <script>
        window.onload = function() {
            $("#tally").addClass("active");
        }
    </script>
    <?php include './includes/footer.php' ?>
    <?php include './includes/bottomjs.php' ?>
</body>

</html>