<?php

// $conn = mysqli_connect('localhost', 'root', '', 'itechverse_mohit');
$conn = mysqli_connect('localhost', 'id17590481_root', 'ItechVerse@748159', 'itechverse');
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
