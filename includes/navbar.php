<header class="clearfix" id="header">
    <!-- Static navbar -->
    <nav class="navbar navbar-default shift">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="./">
                    <img src="<?php echo ASSET_URL; ?>images/Itcehverse-logo.png" alt="Itcehverse-logo">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="" id="home"><a class="nav-link" href="<?php echo ASSET_URL; ?>">Home</a></li>
                    <li id="about"><a href="<?php echo ASSET_URL; ?>about" class="nav-link">About</a></li>
                    <li class="drop" id="services"><a href="#" class="nav-link">Services<i class="fa fa-angle-down ml5"></i></a>
                        <ul class="drop-down">
                            <li><a href="<?php echo ASSET_URL; ?>services/web-development">Web Development</a></li>
                            <li><a href="<?php echo ASSET_URL; ?>services/digital-marketing">Digital Marketing</a></li>
                            <li><a href="<?php echo ASSET_URL; ?>services/graphic-designing">Graphic Designing</a></li>
                            <li><a href="<?php echo ASSET_URL; ?>services/content-writing">Content Writing</a></li>
                        </ul>
                    </li>
                    <li class="drop" id="tally"><a href="#" class="nav-link">Tally<i class="fa fa-angle-down ml5"></i></a>
                        <ul class="drop-down">
                            <li><a href="<?php echo ASSET_URL; ?>tally/tally-products">Tally Product</a></li>
                            <li><a href="<?php echo ASSET_URL; ?>tally/tally-services">Tally Services</a></li>
                        </ul>
                    </li>
                    <!-- <li class="drop"><a href="<?php echo ASSET_URL; ?>bloglist">Blog</a></li> -->
                    <li class="drop" id="contact"><a href="<?php echo ASSET_URL; ?>contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->
<div class="popup">
    <div class="popup-close" onclick="closeLoginForm()">&times;</div>
    <div class="form">
        <div class="header ">
            <h4 class="text-orange">Quick Enquiry</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                <p class="text-center text-white">Contact us quickly and easily using the following form and we will get back to you ASAP!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="element">
                    <span id="field_error" class="text-danger"></span>
                    <input type="text" id="e_name" placeholder="Full Name*">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="element">
                    <input type="email" id="e_email" placeholder="Email*">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="element">
                    <input type="tel" id="e_phone" placeholder="Phone*">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="element">
                    <textarea name="" id="enquiry_msg" id="" cols="30" rows="10" placeholder="Enquiry Message"></textarea>
                </div>
            </div>
        </div>
        <div class="element text-center">
            <button onclick="submitEnquiry();">Send Enquiry</button>
        </div>
    </div>
</div>