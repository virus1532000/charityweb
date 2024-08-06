<?php
include "connection.php"
?>

<html>

<head>
  <title>NGO</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="charity boot.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid " id="contactbg">
    <div class="container-fluid p-3">
      <div class="row bg-transparent">
        <div class="col-md-2" id="topp">
        <a href="index.php" > 
        <img src="img/charity/logo1.webp" height="50px" width="90%">
        </a>
        </div>
        <div class="col-md-8" id="topnav">
          <nav class="navbar navbar-expand-lg navbar-dark fs-5 ">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="#">Who we are?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="programe.php">Programs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="contact.php">Contact us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-md-2">
          <a class="btn  fs-6 rounded-0 px-4 py-3  my-2" href="donation.php" id="btnback1">
            <div> &hearts; Make A Donation</div>
          </a>
        </div>
      </div>
    </div>