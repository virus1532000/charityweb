<?php
session_start();
include '../connection.php'
?>
<html>

<head>
    <title>USER PROFILE</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>
        * {
            box-sizing: border-box;
        }

        #body {
            background-color: #191c24;
            /* background: url(../img/charity/f-background.webp); */
            /* background-size: 100%; */
            /* background-position: fixed; */
            /* margin: 0px 180px 0px 180px; */
            display: flex;
            justify-content: center;
            align-items: end;
            flex-direction: column;
            font-family: "Montserrat", sans-serif !important;
            /* height: 100vh; */
        }

        .container-fluid {
            padding-left: 180px;
            padding-right: 180px;
        }


        .f-h2 {
            font-family: "Montserrat", sans-serif !important;
            color: #eb1616;
            font-size: 40px;
            word-spacing: 2px;
            letter-spacing: 1px;
            font-weight: bold;
            margin-top: 40px;
        }

        .f-content {
            background: #000;
            /* margin-top: 10px; */
        }

        input[type=email] {
            background-color: transparent;
            border: none;
            border: 2px solid #eb1616;
            border-radius: 0px;
            font-weight: bold;
            font-size: 14px;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 10px;
            color: #ECF0F5 !important;
        }

        input[type=tel] {
            background-color: transparent;
            border: none;
            border: 2px solid #eb1616;
            border-radius: 0px;
            font-weight: bold;
            font-size: 14px;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 10px;
            color: #ECF0F5 !important;
        }

        input[type=password] {
            background-color: transparent;
            /* border: none; */
            /* border-bottom: 2px solid #eb1616; */
            /* border-top: 2px solid #eb1616; */
            border: 2px solid #eb1616;
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
            /* border-radius: 0%; */
            border: 1px solid #171615;
            background-color: #eb1616;
            color: #ffffff;
            /* font-size: 12px; */
            font-weight: bold;
            padding: 8px 8px 8px 8px;
            margin: 6px 0px 20px 5px;
            letter-spacing: 1px;
            /* text-transform: uppercase; */
            /* transition: transform 80ms ease-in; */
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

        label {
            color: #eb1616;
            font-size: 16px;

        }

        .me-10 {
            padding: 15px 50px 15px 50px;
            margin-left: 50px;
            margin-top: 0%;
        }

        a {
            border: 1px solid #171615;
            background-color: #eb1616;
            color: #ffffff;
            font-weight: bold;
            padding: 8px 8px 8px 8px;
            margin: 10px 10px 20px 5px;
            letter-spacing: 1px;
            justify-content: end !important;
            align-items: end !important;

        }

        a:active {
            transform: scale(0.90);
        }
    </style>
</head>

<body id="body">


    <a href="../ADMIN/user_index.php"><i class="bi bi-x-lg"></i></a>

    <?php
    $q = "select * from user_signup where id = " . $_SESSION['login_user'] . "";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_array($res); {
    ?>

        <div class="container-fluid" id="container-fluid">

            <div class="row justify-content-center f-content">
                <div class="col-md-6 col-lg-6">
                    <img src="../img/charity/password.svg" />
                </div>
                <div class="col-md-6 col-lg-6 ">
                    <div class="card shadow-lg p-4">
                        <h2 class=" f-h2  mb-4 text-red "> Profile Details</h2>
                        <form method="post" action="#">
                            <div class="d-flex">
                                <label class="mt-3 pe-5  ps-4 ">Email</label>
                                <input type="email" class="form-control " name="u_email" placeholder="Email" value="<?= $row['signup_email'] ?>" disabled>
                                <!-- <button><i class="bi bi-pencil-square"></i></button> -->
                            </div>
                        </form>
                        <form method="post" action="#">
                            <div class="  form-group">
                                <div class="d-flex">
                                    <label class="mt-3 px-3">Username</label>
                                    <input type="email" class="form-control " name="u_username" placeholder="Username" value="<?= $row['signup_username'] ?>" required>
                                    <!-- <button><i class="bi bi-pencil-square"></i></button> -->
                                </div>
                            </div>
                        </form>

                        <form method="post" action="#">
                            <div class="d-flex">
                                <label class="mt-3 px-3 pe-4 ">Password</label>
                                <input type="password" class="form-control " name="u_password" placeholder="Password" value="<?= $row['signup_password'] ?>" required>
                                <!-- <button><i class="bi bi-pencil-square"></i></button> -->
                            </div>
                        </form>
                        <form method="post" action="#">
                            <div class="d-flex">
                                <label class="mt-3 ms-4 me-3 pe-4 ">Mobile</label>
                                <input type="tel" class="form-control " name="u_mobile" value="<?= $row['signup_mobile'] ?>" placeholder="Enter your Mobile Number" required>
                                <!-- <button><i class="bi bi-pencil-square"></i></button> -->
                            </div>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class=" me-10">SAVE</button>
                    </div>
                </div>


            </div>
        </div>
</body>
<?php   } ?>

</html>