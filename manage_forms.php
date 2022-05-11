<?php
include './includes/connection.php';
include './includes/function.php';

if (isset($_POST['submit'])) {
    //Contact From
    if ($_POST['formtype'] == 'contactusform') {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $stmt = "INSERT INTO `contactus_leads`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $subject . "','" . $message . "')";
        $query = mysqli_query($conn, $stmt);
        if ($query) {
            echo 'submit';
        }
    }

    //Enquiry From
    if ($_POST['formtype'] == 'enquiryform') {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $msg = mysqli_real_escape_string($conn, $_POST['msg']);

        $stmt = "INSERT INTO `enquiry`(`name`, `email`, `phone`, `msg`) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $msg . "')";
        $query = mysqli_query($conn, $stmt);
        if ($query) {
            $to1 = 'info@itechversesolutions.com';
            $sub1 = 'New Enquiry';
            $msg1 = "
            Name: " . $name . "
            <br>
            Email: " . $email . "
            <br>
            Phone: " . $phone . "
            <br>
            Message: " . $msg . "
            <br>
            ";
            echo 'submit';
            email1($to1, $sub1, $msg1);
        }
    }
}
