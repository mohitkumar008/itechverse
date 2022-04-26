<?php
include('./includes/connection.php');
if (!isset($_SESSION['userid']) || $_SESSION['userid'] == '') {
    header('Location:login');
}

if (isset($_GET['deleteblog'])) {
    $blogid = $_GET['deleteblog'];
    $stmt = "DELETE FROM `blogs` WHERE id='" . $blogid . "'";
    $query = mysqli_query($conn, $stmt);
    if ($query) {
        echo '<script>alert("Blog deleted successfully");</script>';
        echo '<script>window.location.href="bloglist"</script>';
        exit();
    }
}

if (isset($_GET['blogid']) && isset($_GET['status'])) {
    $blogid = $_GET['blogid'];
    $status = $_GET['status'];
    if ($status == 1) {
        $changestatus = 0;
        $msg = 'Blog deactivated successfully!';
    } elseif ($status == 0) {
        $changestatus = 1;
        $msg = 'Blog activated successfully!';
    }
    $stmt = "UPDATE `blogs` SET `status`='" . $changestatus . "' where id='" . $blogid . "'";
    $query = mysqli_query($conn, $stmt);
    if ($query) {
        echo '<script>alert("' . $msg . '");</script>';
        echo '<script>window.location.href="bloglist"</script>';
        exit();
    }
}

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
                            <h1 class="m-0">Blog List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active">Blog List</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="card card-success">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                $stmt = "SELECT * FROM `blogs`";
                                $query = mysqli_query($conn, $stmt);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-md-12 col-lg-6 col-xl-4">
                                        <div class="card mb-2 bg-gradient-dark">
                                            <img class="card-img-top img-fluid" src="../images/blogs/<?php echo $row['blog_img']; ?>" alt="<?php echo $row['blog_img']; ?>">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end" style="background-color: #0000006e;">
                                                <h4 class="card-title text-primary text-white"><b><?php echo $row['blog_title']; ?></b></h4>
                                                <p class="card-text text-white pb-2 pt-1"><?php echo substr($row['short_desc'], 0, 30); ?>...</p>
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-warning text-lg">
                                                        <a href="./editblog?blogurl=<?php echo $row['blog_url']; ?>"><i title="Edit Blog" class="fa fa-pen nav-icon text-primary"></i></a>
                                                        <?php
                                                        if ($row['status'] == 1) {
                                                        ?>
                                                            <a href="?blogid=<?php echo $row['id']; ?>&status=<?php echo $row['status']; ?>"><i title="" class="fa fa-ban nav-icon text-success mx-3"></i></a>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a href="?blogid=<?php echo $row['id']; ?>&status=<?php echo $row['status']; ?>"><i title="" class="fa fa-rocket nav-icon text-success mx-3"></i></a>
                                                        <?php
                                                        }
                                                        ?>

                                                        <a href="?deleteblog=<?php echo $row['id']; ?>"><i title="Delete Blog" class="fa fa-trash-alt nav-icon text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include './includes/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include './includes/bottomjs.php'; ?>
</body>

</html>