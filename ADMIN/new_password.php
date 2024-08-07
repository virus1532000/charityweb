<?php
include '../connection.php';
session_start();
if (empty($_SESSION['email'])) {
    echo "<script>window.location.href='../ADMIN/forget_password.php'</script>";
}
?>
<html>

<head>
    <title>New password</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        #body {
            background-color: #191c24;
            /* background: url(../img/charity/f-background.webp); */
            /* background-size: 100%; */
            /* background-position: fixed; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: "Montserrat", sans-serif !important;
            height: 100vh;
            margin: 0px 180px 0px 180px;
        }



        .f-h2 {
            font-family: "Montserrat", sans-serif !important;
            color: #eb1616;
            font-size: 40px;
            word-spacing: 2px;
            letter-spacing: 1px;
            font-weight: bold;
            margin-top: 100px;
        }

        .f-content {
            background: #000;
            margin-top: 10px;
        }

        input[type=text] {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #eb1616;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            font-size: 14px;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 10px;
            color: #ECF0F5 !important;
        }

        .fs-7 {
            font-size: 10px !important;
        }

        button {
            border-radius: 0%;
            border: 1px solid #171615;
            background-color: #eb1616;
            color: #ffffff;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        input {
            background-color: #191c24;
            border: none;
            padding: 5px 10px;
            margin: 8px 0;
            width: 100%;
        }

        button:active {
            transform: scale(0.90);
        }
        .text-red{
            color: #eb1616;
        }
    </style>
</head>
<?php
if (isset($_POST['confirm'])) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    if ($new_password == $confirm_password) {
        $q = "UPDATE user_signup SET signup_password='$new_password' WHERE signup_email= '" . $_SESSION['email'] . "'";
        $res = mysqli_query($con, $q);
        if ($res) {
            echo " <h1 class='text-red'>Password updated successfully.</h1>";
            session_destroy();
            header("Location:../login_1.php");
        }

        } else {
        echo " <h1 class='text-red'>Passwords do not match.</h1>";
    }
}
?>

<body id="body">

    <div class="container-fluid">
        <div class="row justify-content-center f-content">
            <div class="col-md-6 col-lg-6">
                <img src="../img/charity/forgot-password.svg" />
            </div>
            <div class="col-md-6 col-lg-6 ">
                <div class="card shadow-lg p-4">
                    <h2 class=" f-h2  mb-4 text-red ">Setup <br> Your new password</h2>
                    <form method="POST" action="#">
                        <div class="form-group">

                            <input type="text" class="form-control rounded-0 mb-3" name="new_password" placeholder="New password" required>
                            <input type="text" inputmode="numeric" class="form-control rounded-0 mb-3" name="confirm_password" placeholder="Confirm your password" required>
                            <button  name="confirm" class="rounded-0 d-block btn-red">Confirm</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>