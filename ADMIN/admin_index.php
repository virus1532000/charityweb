<?php
include 'admin_header.php';
?>



<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-danger"></i>
                <div class="ms-3">
                    <p class="mb-2 text-light">People Helped</p>
                    <h6 class="mb-0 text-center text-white">
                        <?php
                        $query = "SELECT COUNT(status) FROM request where status= 'Approved'";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);
                        if (mysqli_query($con, $query)) {
                            echo $row['COUNT(status)'];
                        }
                        ?>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-danger"></i>
                <div class="ms-3">
                    <p class="mb-2 text-light">Today's Donation </p>
                    <h6 class="mb-0 text-white">
                        <?php
                        $query = "SELECT SUM(amount) FROM donation where donation_type = 'Money' and DATE(`curdate`)=CURDATE() ";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
                        if (mysqli_query($con, $query)) {
                            echo '₹' . $row[0];
                        }
                        ?>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-danger"></i>
                <div class="ms-3">
                    <p class="mb-2 text-light">Total Donars</p>
                    <h6 class="mb-0 text-center text-white">
                        <?php
                        $query = "SELECT COUNT(DISTINCT email) FROM donation ";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
                        if (mysqli_query($con, $query)) {
                            echo $row[0];
                        }
                        ?>

                    </h6>
                </div>
            </div>
        </div>





        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-danger"></i>
                <div class="ms-3">
                    <p class="mb-2 text-light">Total Donation</p>
                    <h6 class="mb-0 text-center text-white">
                        <?php
                        $query = "SELECT SUM(amount) FROM donation where donation_type = 'Money'";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
                        if (mysqli_query($con, $query)) {
                            echo '₹' . $row[0];
                        }
                        ?>
                    </h6>
                </div>
            </div>
        </div>




    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="mb-0 text-white">Messages</h6>
                    <a href="" class="text-danger">Show All</a>
                </div>
                <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $query   = "select * from donation where id not in(select donation_id from request where status='Approved') and donation_type='Item' and donation_item LIKE '%" . $search . "%'";
                } else {
                    $query = "SELECT * FROM donation ORDER BY id DESC LIMIT 0,4";
                }
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">

                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 text-white"><?= $row['first_name'] ?> <?= $row['last_name'] ?> </h6>
                                <small class="text-light">15 minutes ago</small>
                            </div>
                            <span class="text-light">Donate <?= $row['donation_item'] ?> <?= $row['amount'] ?></span>
                        </div>
                    </div><?php } ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between pb-5 ">
                    <h6 class="mb-0 text-white">Calender</h6>
                    <a href="" class="text-danger">Show All</a>
                </div>
                <div class="bg-secondary" id="calender"></div>
            </div>
        </div>
        <?php
        if (isset($_POST['add'])) {
            $task = mysqli_real_escape_string($con, $_POST['task']);
            $q = "insert into task(task,curdate) values('$task',now())";
            if (mysqli_query($con, $q)) {
                // echo "<script>alert('Task added')</script>";
            } else {
                echo "mysqli_error($con)";
            }
        }
        ?>


        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0 text-white">To Do List</h6>
                    <a href="" class="text-danger">Show All</a>
                </div>
                <div class="mb-2">
                    <form class="d-flex" action="" method="post">
                        <input class="form-control bg-dark border-0" type="text" name="task" placeholder="Enter task" id="searchbox" required>
                        <button type="submit" name="add" class="btn text-white bg-danger ms-2  rounded-0">Add</button>
                    </form>
                </div>



                <?php
                $q = " select * from task order by id desc limit 0,3";
                $res = mysqli_query($con, $q);
                while ($row = mysqli_fetch_array($res)) { ?>




                    <div class="d-flex align-items-center text-light border-bottom py-2">
                        <input class="form-check-input  m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span><?php echo $row['task'] ?></span>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                                    <button type="submit" name="task_delete" class="pt-4 btn btn-sm text-danger"><i class="bi bi-x-circle"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['task_delete'])) {
    $id = $_POST['id'];
    $q = "DELETE FROM task WHERE id = '$id'";
    if (mysqli_query($con, $q)) {
        echo "<script>alert('Task deleted successfully')
        window.location.href='admin_index.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>












<?php
include 'admin_footer.php';
?>