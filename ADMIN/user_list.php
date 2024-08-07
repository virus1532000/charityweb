<?php
include 'admin_header.php'
?>

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4 text-white">User Details</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>    
                        <th scope="col">Join Time</th>

                    </tr>
                </thead>
            
                <tbody>
<?php
$q="select * from user_signup";
$res=mysqli_query($con,$q);
$count=1;
while($row=mysqli_fetch_array($res))
{


                 echo '<tr class="text-center">
                        <th scope="row">'.$count.'</th>
                        <td>'.$row['signup_username'].'</td>
                        <td>'.$row['signup_email'].'</td>
                        <td>'.$row['signup_password'].'</td>
                       <td>'.$row['curdate'].'</td>
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