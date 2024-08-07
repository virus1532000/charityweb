<?php
session_start();
unset($_SESSION['login_username']);
unset($_SESSION['username']);
header("location:../index.php");
?>