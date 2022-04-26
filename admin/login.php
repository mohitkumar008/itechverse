<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-techverse Dashboard</title>
    <?php include './includes/topcss.php'; ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h3"><small>Sign in</small></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="login_verify.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (isset($_GET['err'])) {
                        ?>
                            <div class="col-12">
                                <?php
                                if ($_GET['err'] == 1) {
                                    echo '<span class="text-danger">*Email not exists</span>';
                                } elseif ($_GET['err'] == 2) {
                                    echo '<span class="text-danger">*Incorrect password. Please try again!</span>';
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="col-4 mx-auto my-2">
                            <button type="submit" name="login_submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="">I forgot my password</a><br>
                    <a href="../">>> Go to Website <<</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- ./wrapper -->
    <?php include './includes/bottomjs.php'; ?>
</body>

</html>