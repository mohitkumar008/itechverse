<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4YTWY1E9G8"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-4YTWY1E9G8');
</script>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="author" content="Itechverse Solutions Private Limited">

<?php
// include './includes/connection.php';
$meta_stmt = "SELECT * FROM `meta_tags` where `page`='" . $page_name . "'";
$meta_query = mysqli_query($conn, $meta_stmt);
$meta_fetch = mysqli_fetch_assoc($meta_query);
?>

<meta name="title" content="<?= $meta_fetch['title']; ?>">
<meta name="description" content="<?= $meta_fetch['description']; ?>">
<meta name="keywords" content="<?= $meta_fetch['keywords']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="google-site-verification" content="JEFLAUu3Le4FjJW2Wd8KWsoluWz_gKpAVNFPkqR75CY" />

<!-- favicons -->
<link rel="shortcut icon" href="<?php echo ASSET_URL; ?>assets/favicon/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo ASSET_URL; ?>images/favicon-Itechverse.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo ASSET_URL; ?>assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo ASSET_URL; ?>assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo ASSET_URL; ?>assets/favicon/apple-icon-144x144.png">

<!-- load google font -->
<link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,700,700i" rel="stylesheet">

<!-- all stylesheets include start -->
<!-- Bootstrap css -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/bootstrap/css/bootstrap.min.css">
<!-- revolution slider css -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/rev_slider/settings.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/rev_slider/layers.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/rev_slider/navigation.css">
<!-- fontawesome css -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/font-awesome.min.css">
<!-- ET Lineicon CSS -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/lineicon.css">
<!-- Light Box CSS -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/lightbox.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/animations.css">

<!-- Accordions CSS -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/accordions.css">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/plugins/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/plugins/owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/plugins/bootstap-v4.6/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/plugins/toastr/toastr.min.css">

<!-- Tab and Accordian CSS -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/tabs.css">

<!-- Datepicker CSS -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/datepicker.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/popform.css">

<!-- xzoom CSS -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/xzoom.css">
<link type="text/css" rel="stylesheet" media="all" href="<?php echo ASSET_URL; ?>assets/css/jquery.fancybox.css" />

<!-- theme style css -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/custom.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/mediaquries.css">
<!-- responsive css -->
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/responsive.css">
<link rel="stylesheet" href="<?php echo ASSET_URL; ?>assets/css/aos.css">
<!-- all stylesheets include end -->

<!-- Color Scheme css -->
<link rel="alternate stylesheet" type="text/css" href="<?php echo ASSET_URL; ?>assets/css/switcher/color-nine.css" title="color-nine" media="screen" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- jquery latest version -->
<script src="<?php echo ASSET_URL; ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script defer src="https://widget.tochat.be/bundle.js?key=f4413b01-fa85-48b8-92e6-e4e24f994cf8"></script>



<!-- revolution slider js files end -->