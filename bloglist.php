<?php
include './includes/connection.php';
include './includes/define.php';
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
    <section class="pad50 call-to-action-2 parallax pos-relative" style="background-image: url(./images/about.jpg);">
        <div class="container pos-relative">
            <div class="row text-center">
                <div class="col-md-12 pad80" data-aos="fade-up">
                    <div class="section-title text-center m-0" data-aos="fade-up">
                        <h3>Our Blogs </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-overlay dark"></div>
    </section>

    <section class="pad100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $stmt = "SELECT * FROM `blogs` where status=1 order by id desc";
                    $query = mysqli_query($conn, $stmt);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <!-- Start Blog Post -->
                        <div class="blog-post">
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
                                    <?php echo $row['short_desc']; ?>
                                </div>
                                <a href="./bloginfo.php?url=<?php echo $row['blog_url']; ?>" class="btn btn-primary read-more fadeInDown animated">Read More</a>
                                <ul class="post-tag pull-right fadeInDown animated">
                                    Tags:
                                    <li><a href="#">HTML</a>,</li>
                                    <li><a href="#">Bootstrap</a>,</li>
                                    <li><a href="#">CSS</a>,</li>
                                    <li><a href="#">jQuery</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Blog Post -->
                    <?php
                    }
                    ?>

                    <ul class="pagination animatable fadeInDown">
                        <li class="disabled"><a href="#">Start</a></li>
                        <li class="disabled"><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                        <li><a href="#">End</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>



    <?php include './includes/footer.php' ?>
    <?php include './includes/bottomjs.php' ?>
</body>

</html>