<?php
include './includes/connection.php';
include './includes/define.php';

$blogurl = $_GET['url'];
$stmt = "select * from `blogs` where `blog_url`='" . $blogurl . "'";
$query = mysqli_query($conn, $stmt);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>I-techverse</title>
    <?php include './includes/topcss.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/navbar.php' ?>
    <!-- Navbar ends -->

    <!-- Banner -->
    <section class="pad100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Blog Post -->
                    <div class="single-blog-post">
                        <div class="blog-img fadeInDown animated">
                            <img src="./images/blogs/<?php echo $row['blog_img']; ?>" class="img-responsive" alt="Blog Image">
                        </div>
                        <div class="blog-post-content">
                            <div class="post-format fadeInDown animated">
                                <span class="day bg-theme block pad10 size-14"><?php echo date("d", strtotime($row['created_at'])); ?></span><span class="month bg-gray-dark block pad10 upper size-14"><?php echo date("M", strtotime($row['created_at'])); ?></span>
                            </div>
                            <div class="post-description fadeInDown animated">
                                <h1><?php echo $row['blog_title']; ?></h1>
                                <ul class="post-meta">
                                    <!-- <li><i class="fa fa-user"></i>User</li> -->
                                    <li><i class="fa fa-calendar-o"></i><?php echo date("d M Y", strtotime($row['created_at'])); ?></li>
                                </ul>
                            </div>
                            <div class="post-text fadeInDown animated">
                                <?php echo $row['blog_content']; ?>
                            </div>
                            <ul class="post-tag fadeInDown animated">
                                Tags:
                                <li><a href="#">HTML</a>,</li>
                                <li><a href="#">Bootstrap</a>,</li>
                                <li><a href="#">CSS</a>,</li>
                                <li><a href="#">jQuery</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Blog Post -->
                </div>
            </div>
        </div>
    </section>



    <?php include './includes/footer.php' ?>
    <?php include './includes/bottomjs.php' ?>
</body>

</html>