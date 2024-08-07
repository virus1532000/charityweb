<?php
include 'admin_header.php'
?>
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4 text-white">Donation list</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment method</th>
                        <th scope="col">Full details</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = "select * from donation  where donation_type='Money'";
                    $res = mysqli_query($con, $q);
                    $count = 1;
                    while ($row = mysqli_fetch_array($res)) {

                        echo '<tr class="text-center">
                        <th scope="row">' . $count . '</th>
                        <td>' . $row['first_name'] . '</td>
                        <td>' . $row['last_name'] . '</td>  
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['city'] . '</td>
                        <td>' . $row['state'] . '</td>
                        <td>' . $row['amount'] . '</td>
                        <td>' . $row['payment_method'] . '</td>
                        <td><a href="404_pagenotfound.php?id=' . $row['id'] . '" class="btn btn-red rounded-1">View</a>
                    </tr>';



                        $count++;
                    } ?>




                </tbody>
            </table>
        </div>
    </div>
</div>




<?php
include 'admin_footer.php'
?>