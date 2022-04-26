<?php
$image = $_FILES['image']['name'];
$uploaddir = '../images/blogs/';
$uploadfile = $uploaddir . basename($image);
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo basename($image);
} else {
    echo "Unable to Upload";
}
