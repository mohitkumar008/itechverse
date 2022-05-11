<?php
function email1($to1, $sub1, $msg1)
{
    $to      = $to1;
    $subject = $sub1;
    $message = $msg1;
    $headers = array(
        'From' => 'info@itechversesolutions.com',
        'Reply-To' => 'info@itechversesolutions.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );

    mail($to, $subject, $message, $headers);
}

function email2($to2, $sub2, $msg2)
{
    $to      = $to2;
    $subject = $sub2;
    $message = $msg2;
    $headers = array(
        'From' => 'info@itechversesolutions.com',
        'Reply-To' => 'info@itechversesolutions.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );

    mail($to, $subject, $message, $headers);
}
