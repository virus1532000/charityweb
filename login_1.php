<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin_1.css" />
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" />

</head>

<body id="body">
    <?php
    if (isset($_POST['btn_signup'])) {
        $signup_username = mysqli_real_escape_string($con, $_POST['signup_username']);
        $signup_email = mysqli_real_escape_string($con, $_POST['signup_email']);
        $signup_password = mysqli_real_escape_string($con, $_POST['signup_password']);

        $q = "select * from user_signup where signup_username='$signup_username' or signup_email='$signup_email'";
        $res = mysqli_query($con, $q);
        $count = mysqli_num_rows($res);
        if ($count == 0) {

            $pas = password_hash($signup_password, PASSWORD_DEFAULT);

            $query = "insert into user_signup(signup_username,signup_email,signup_password,curdate) values('$signup_username','$signup_email','$pas',now())";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Welcome, Please login using login page')</script>";
            } else {
                echo mysqli_error($con);
            }
        } else {
            echo "<script>alert('Username or Email already exists')</script>";
        }
    }
    ?>


    <div class="container" id="container">

        <div class="form-container  sign-up-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h1 class="text-white">Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="signup_username" placeholder="Username" required />
                <input type="email" name="signup_email" placeholder="Email" required />
                <input type="password" name="signup_password" placeholder="Password" required />
                <button type="submit" name="btn_signup">Sign Up</button>
            </form>
        </div>




        <div class="form-container sign-in-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <h1 class="text-white">Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                </div>
                <span>or use your account</span>
                <?php
                if (isset($_POST['btn_login'])) {
                    $login_username = mysqli_real_escape_string($con, $_POST['login_username']);
                    $login_password = mysqli_real_escape_string($con, $_POST['login_password']);
                    $query = "select * from user_signup where signup_username= '$login_username'";
                    $res = mysqli_query($con, $query);
                    if (mysqli_num_rows($res) > 0) {
                        $row = mysqli_fetch_array($res);
                        $hashed_password = $row['signup_password'];
                        if (password_verify($login_password, $hashed_password)) {
                            $_SESSION['login_user'] = $row['id'];
                            $_SESSION['login_username'] = $login_username;
                            echo "<script> window.location.href='ADMIN/user_index.php'</script>";
                        } else {
                            echo "<h2 class='text-red fs-2'>Invalid Password </h2>";
                        }
                    } else {
                        echo "<h2 class='text-red text-left fs-2'>Invalid Username </h2>";
                    }
                }
                ?>
                <input type="text" name="login_username" placeholder="Username" required />
                <input type="password" name="login_password" placeholder="Password" required />
                <a href="ADMIN/forget_password.php">Forgot your password?</a>
                <button type="submit" name="btn_login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>
                        To keep connected with us please login with your personal info
                    </p>
                    <button class="ghost " id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById("signUp");
        const signInButton = document.getElementById("signIn");
        const container = document.getElementById("container");

        signUpButton.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>