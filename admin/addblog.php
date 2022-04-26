<?php
include('./includes/connection.php');
if (!isset($_SESSION['userid']) || $_SESSION['userid'] == '') {
    header('Location:login');
}


if (isset($_POST['add_blog'])) {
    $title = $_POST['blog_title'];
    $blog_url = strtolower(str_replace(' ', '-', $title));
    $short_desc = $_POST['short_desc'];
    $blog_content = $_POST['blog_content'];

    $stmt = "SELECT * FROM `blogs` where `blog_url`='" . $blog_url . "'";
    $query = mysqli_query($conn, $stmt);
    if (mysqli_num_rows($query) > 0) {
        echo '<script>alert("Blog already exists. Please try with a different title");</script>';
        echo '<script>window.location.href="addblog.php"</script>';
        exit();
    }
    //adding a new blog
    else {
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["blog_image"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];

        $allowed_image_extension = array("png", "jpg", "jpeg");

        // Get image file extension
        $file_extension = pathinfo($_FILES["blog_image"]["name"], PATHINFO_EXTENSION);

        // Validate file input to check if is not empty
        if (!file_exists($_FILES["blog_image"]["tmp_name"])) {
            echo '<script>alert("Choose image file to upload")</script>';
        }
        // Validate file input to check if is with valid extension
        else if (!in_array($file_extension, $allowed_image_extension)) {
            echo '<script>alert("Upload valiid images. Only PNG and JPEG are allowed.")</script>';
            // echo $result;
        }
        // Validate image file size
        else if (($_FILES["blog_image"]["size"] > 2000000)) {
            echo '<script>alert("Image size exceeds 2MB")</script>';
        }
        // Validate image file dimension
        else if ($width < "300" || $height < "200") {
            echo '<script>alert("Image dimension should be more 300X200")</script>';
        }
        // No error
        else {
            // die('sss');
            $newbgname = $blog_url . '.' . $file_extension;
            $target = "../images/blogs/" . $newbgname;
            if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], $target)) {
                $stmt1 = "INSERT INTO `blogs`(`blog_title`, `blog_url`, `short_desc`, `blog_content`, `blog_img`, `created_at`, `updated_at`, `status`) VALUES ('" . $title . "','" . $blog_url . "','" . $short_desc . "','" . $blog_content . "','" . $newbgname . "','" . $currdatetime . "','" . $currdatetime . "','1')";
                $query1 = mysqli_query($conn, $stmt1);
                if ($query1) {
                    echo '<script>alert("Blog added successfully");</script>';
                    echo '<script>window.location.href="bloglist.php"</script>';
                    exit();
                }
            } else {
                echo '<script>alert("Problem in uploading image files.")</script>';
            }
        }
    }
}
// die($currdatetime);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-techverse Dashboard</title>
    <?php include './includes/topcss.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <?php include './includes/header_dashboard.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Blog</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active">Add Blog</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Add</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="blog-title">Blog Title</label>
                                            <input type="text" class="form-control" name="blog_title" id="blog-title" placeholder="Enter Blog Title" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="short-description">Short Description</label>
                                            <input type="text" class="form-control" name="short_desc" id="short-description" placeholder="Enter short description" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Blog Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="blog_image" class="custom-file-input" id="exampleInputFile" required="true">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Content</label>
                                            <textarea id="summernote" name="blog_content" required="true">
                                                Place <em>some</em> <u>text</u> <strong>here</strong>
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="add_blog" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
        </div>


        <?php include './includes/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include './includes/bottomjs.php'; ?>
    <script>
        $(function() {
            // Summernote
            // $('#summernote').summernote();
            //bsCustomfile
            bsCustomFileInput.init();
        })
    </script>
    <script>
        $(document).ready(function() {

            var IMAGE_PATH = 'http://localhost/techverse/images/blogs/';

            $('#summernote').summernote({
                height: 300,
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    }
                }
            });

            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: "uploader.php",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        var image = IMAGE_PATH + url;
                        $('#summernote').summernote('insertImage', image);
                        console.log(image);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

        });
    </script>
</body>

</html>