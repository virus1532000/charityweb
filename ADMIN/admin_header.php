<?php
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>window.location.href='../adminlogin.php'</script>";
} ?>

<?php
include "../connection.php";
?>
<html>

<head>

    <title>ADMIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">
    
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-danger"><i class="fa fa-user-edit me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-danger">Sunny Verma
                            <br>
                            <span class="text-white"> Admin</span>
                        </h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin_index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="con_feedback.php" class="dropdown-item">Feedback</a>
                            <a href="doner_details.php" class="dropdown-item">Doners</a>
                            <a href="donation_table.php" class="dropdown-item">Donation details</a>
                        </div>
                    </div>
                    <a href="admin_request.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>User Requests</a>
                    <a href="admin_blog.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Blogs</a>
                    <a href="donation_item.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Item Recived</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="user_list.php" class="dropdown-item">User list</a>
                            <a href="#" class="dropdown-item">Sign Up</a>
                            <a href="404_pagenotfound.php" class="dropdown-item">404 Error</a>
                            <a href="blank.php" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>




        <div class="content">

            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class=" mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class=" text-danger sidebar-toggler flex-shrink-0">


                    <i class="fa fa-database"></i>
                </a>
                <form class="d-none d-md-flex ms-4" action="" method="get">
                    <input class="form-control bg-dark border-0 mt-3" type="search" name="search" placeholder="Search" id="searchbox">
                    <button type="submit" class="btn btn-red ms-2 mt-3"><i class="fa fa-search"></i></button>
                </form>

                <!-- <?php
                        // if(isset($_GET['search']))
                        //     {
                        //         $search = $_GET['search'];
                        //         $q = "SELECT * FROM donation WHERE donation_item LIKE '%".$search."%'";
                        //         $result = mysqli_query($con, $q);
                        //         if(mysqli_num_rows($result) > 0){           
                        //             echo '<h6 class="text-white mb-0">Search Results: '.mysqli_num_rows($result).'</h6>';
                        //             while($row = mysqli_fetch_assoc($result)){
                        //                 echo '<div class="dropdown-item"><a href="donation_item.php?id='.$row['id'].'">'.$row['donation_item'].'</a></div>';
                        //             }
                        //         }   else{    
                        //             echo '<h6 class="text-white mb-0">No Results Found</h6>';
                        //         }     

                        //     }
                        ?> -->






                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <?php
                            $query = "SELECT * FROM donation ORDER BY id DESC LIMIT 0,3";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <a href="#" class="dropdown-item">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                        <div class="ms-2">
                                            <h6 class="fw-normal text-white mb-0"><?= $row['first_name'] ?> donate <?= $row['donation_item'] ?><?= $row['amount'] ?></h6>
                                            <small>15 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                            <!-- <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal text-white mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal text-white mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a> -->
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal text-white mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal text-white mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal text-white mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Sunny Verma</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>