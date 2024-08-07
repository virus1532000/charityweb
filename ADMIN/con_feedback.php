<?php
include 'admin_header.php'
?>
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4 text-white">Donation List</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">NAme</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = "select * from feedback";
                    $res = mysqli_query($con, $q);
                    $count = 1;
                    while ($row = mysqli_fetch_array($res)) {


                        echo '<tr class="text-center">
                        <th scope="row">' . $count . '</th>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['subject'] . '</td>
                        <td>' . $row['message'] . '</td>
                        <td>' . $row['curdate'] . '</td>

                    </tr>';



                        $count++;
                    } ?>
<?php
include 'admin_footer.php'
?>