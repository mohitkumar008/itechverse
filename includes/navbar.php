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
                    <img src="<?php echo SITE_ROOT_URL; ?>images/Itcehverse-logo.png" alt="Itcehverse-logo">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="" id="home"><a class="nav-link" href="<?php echo SITE_ROOT_URL; ?>">Home</a></li>
                    <li id="about"><a href="<?php echo SITE_ROOT_URL; ?>about" class="nav-link">About</a></li>
                    <li class="drop" id="services"><a href="#" class="nav-link">Services<i class="fa fa-angle-down ml5"></i></a>
                        <ul class="drop-down">
                            <li><a href="<?php echo SITE_ROOT_URL; ?>services/web-development">Web Development</a></li>
                            <li><a href="<?php echo SITE_ROOT_URL; ?>services/digital-marketing">Digital Marketing</a></li>
                            <li><a href="<?php echo SITE_ROOT_URL; ?>services/graphic-designing">Graphic Designing</a></li>
                            <li><a href="<?php echo SITE_ROOT_URL; ?>services/content-writing">Content Writing</a></li>
                        </ul>
                    </li>
                    <li class="drop" id="tally"><a href="#" class="nav-link">Tally<i class="fa fa-angle-down ml5"></i></a>
                        <ul class="drop-down">
                            <li><a href="<?php echo SITE_ROOT_URL; ?>tally/tally-products">Tally Product</a></li>
                            <li><a href="<?php echo SITE_ROOT_URL; ?>tally/tally-services">Tally Services</a></li>
                        </ul>
                    </li>
                    <!-- <li class="drop"><a href="<?php echo SITE_ROOT_URL; ?>bloglist">Blog</a></li> -->
                    <li class="drop" id="contact"><a href="<?php echo SITE_ROOT_URL; ?>contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->