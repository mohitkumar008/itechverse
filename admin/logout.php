<?php
include('./includes/connection.php');
if (!isset($_SESSION['userid']) || $_SESSION['userid'] == '') {
    header('Location:login');
}
session_destroy();
header('Location:login');
