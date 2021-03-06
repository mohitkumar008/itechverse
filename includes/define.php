<?php
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else $link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

if ($link == 'http://localhost') {
    $asseturl = $link . '/techverse';
} else {
    $asseturl = $link;
}

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];

// Print the link
// echo $link;

define('SITE_ROOT_URL', $link);
define('SITE_IMG_URL', $link . 'images/');

define('ASSET_URL', $asseturl . '/');
define('ASSET_IMG_URL', $asseturl . '/images/');
// echo ASSET_URL;
