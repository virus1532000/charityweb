<?php
session_start();
include "connection.php";
?>
<html>

<head>
    <title>ADMIN LOGIN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="adminlogin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <d iv class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="bi bi-shield-lock" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
                <?php
                if (isset($_POST['btnlogin'])) {
                    $username = mysqli_real_escape_string($con, $_POST['username']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);
                    $q = "select * from admin where username='$username' and password='$password'";
                    $res = mysqli_query($con, $q);
                    if (mysqli_num_rows($res) > 0) {
                        $_SESSION['username'] = $username;
                        echo "<script> window.location.href='ADMIN/admin_index.php'</script>";
                    } else {
                        echo "<p class='text-danger'>Invalid Username or Password</p>";
                    }
                }
                ?>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="col-lg-12 text-center  login-button">
                                <button type="submit" class="btn btn-outline-danger" name="btnlogin">LOGIN</button>
                            </div>
                    </div>
                    </form>
                </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>
        </d>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>