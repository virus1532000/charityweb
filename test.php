<?php
include "header.php";
include "connection.php";

// Define the number of blogs to display per page
$blogs_per_page = 1;

// Get the current page number from the URL
if (isset($_GET['page'])) {
    $current_page = $_GET['page'];
} else {
    $current_page = 1;
}

// Calculate the offset for the SQL query
$offset = ($current_page - 1) * $blogs_per_page;

// Get the total number of blogs
$q = "SELECT COUNT(*) FROM blog";
$res = mysqli_query($con, $q);
$total_blogs = mysqli_fetch_array($res)[0];

// Get the blogs for the current page
$q = "SELECT * FROM blog LIMIT $offset, $blogs_per_page";
$res = mysqli_query($con, $q);

// Display the blogs
while ($row = mysqli_fetch_array($res)) {
    // Your existing code to display the blog
?>
    <div class="col-md-12  px-5">
        <div class="card  rounded-0"">
        <div class=" row">
            <div class=" col-lg-5">
                <img src="./uploads/<?= $row['image'] ?>" class="card-img-top  rounded-0" height="430px" width="" alt="...">
            </div>
            <div class="col-lg-7">
                <a href="#" class="mb-4" id="blogimg">
                    <h3><?= date("d", strtotime($row['postdate'])) ?></h3>
                    <p><?= date("M", strtotime($row['postdate'])) ?></p>
                </a>
                <div class="card-body px-5">
                    <h5 class="card-title fs-4 "><?= $row['title'] ?></h5>
                    <p class="card-text my-3"><?= $row['description1'] ?></p>
                    <div class=" d-flex mt-4">
                        <a href="#" id="udline" class="pe-3  d-flex text-center"><i class="bi bi-person fs-5 pt-1 px-1"></i>
                            <p class="fs-6"><?= $row['postby'] ?></p>
                        </a> |
                        <a href="javascript:void(0);" id="udline" class="pe-3  d-flex text-center"><i class="bi bi-bookmark-check text-dark fs-5 pt-1 px-1"></i>
                            <p class="fs-6"> <?= $row['category'] ?></p>
                        </a> |
                        <a href="#" id="udline" class=" ps-3 d-flex text-center"><i class="bi bi-chat fs-6 pt-1 px-1"></i>
                            <p class="fs-6">03 Comments</p>
                        </a>
                        <div class="  PS-5">
                            <a href="blog_2.php" class=" readmore">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
}

// Display the pagination links
?>
<div class="pagination">
    <ul class="pagination-list">
        <li>
            <a href="?page=1" class="pagination-link">First</a>
        </li>
        <?php if ($current_page > 1) { ?>
            <li>
                <a href="?page=<?php echo $current_page - 1; ?>" class="pagination-link">Previous</a>
            </li>
        <?php } ?>
        <?php for ($i = 1; $i <= ceil($total_blogs / $blogs_per_page); $i++) { ?>
            <li>
                <?php if ($i == $current_page) { ?>
                    <a href="#" class="pagination-link active"><?php echo $i; ?></a>
                <?php } else { ?>
                    <a href="?page=<?php echo $i; ?>" class="pagination-link"><?php echo $i; ?></a>
                <?php } ?>
            </li>
        <?php } ?>
        <?php if ($current_page < ceil($total_blogs / $blogs_per_page)) { ?>
            <li>
                <a href="?page=<?php echo $current_page + 1; ?>" class="pagination-link">Next</a>
            </li>
        <?php } ?>
        <li>
            <a href="?page=<?php echo ceil($total_blogs / $blogs_per_page); ?>" class="pagination-link">Last</a>
        </li>
    </ul>
</div>
<?php
include "footer.php";
?>
<style>
    .pagination {
        text-align: center;
        margin-top: 20px;
    }

    .pagination-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: inline-block;
    }

    .pagination-list li {
        display: inline-block;
        /* background-color: #ddd; */
        margin-right: 10px;
    }

    .pagination-link {
        text-decoration: none;
        color: #000;
        padding: 10px 15px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .pagination-link:hover {
        background-color: #f5f5f5;
    }

    .pagination-link.active {
        background-color: #337ab7;
        color: #fff;
    }

    .pagination-link {
        transition: background-color 0.2s ease-in-out;
    }

    .pagination-link:hover {
        background-color: #f5f5f5;
        transition: background-color 0.2s ease-in-out;
    }
</style>