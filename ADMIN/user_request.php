<?php
include 'user_header.php'
?>

<div class=" container-fluid row">
    <?php
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $q = "select * from donation where id not in(select donation_id from request where status='Approved') and donation_type='Item' and donation_item LIKE '%" . $search . "%'";
    } else {
        $q = "select r.id as rid,r.status as status, r.curdate as rdate,d.* from donation as d join request as r on r.donation_id=d.id where r.login_id='" . $_SESSION['login_user'] . "'";
    }
    $res = mysqli_query($con, $q);
    while ($row = mysqli_fetch_array($res)) {
    ?>


        <div class=col-md-6>
            <div class="card mx-5  my-5 card-background rounded-0">
                <div>
                    <img src="../uploads/<?php echo $row['item_image'] ?>" alt=" <?php echo $row['donation_item']; ?>" class="card-img-top rounded-0 px-4 pt-4 text-white" height="250px" width="100%">

                </div>
                <div class="card-body">
                    <table class="table text-start">
                        <tr>
                            <td>Item :</td>
                            <td class="pe-5"><?php echo $row['donation_item'] ?></td>
                        </tr>
                        <tr">
                            <td>Item Description :</td>
                            <td class="pe-5 text-wrap" style="width: 20rem;"><?php echo $row['item_description'] ?> </td>
                            </tr>
                            <tr>
                                <td>Quantity :</td>
                                <td class=" pe-5"><?php echo $row['quantity'] ?></td>
                            </tr>
                            <tr>
                                <td>City :</td>
                                <td class="pe-5"><?php echo $row['city'] ?></td>
                            </tr>

                            <tr>
                                <td>Pincode :</td>
                                <td class="pe-5"><?php echo $row['postalcode'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-white fw-bold">Status :</td>
                                <td class="pe-5 text-white fw-bold"><?php echo $row['status'] ?></td>

                            </tr>

                    </table>
                    <a class="product-title d-block btn rounded-0 btn-red my-3" href="tel:<?php echo $row['number'] ?>">Call Now </a>
                    <div class="d-flex">
                        <a href="#" class="btn btn-red rounded-0 flex-fill me-2">Show map</a>
                        <a href="#" class="btn btn-red rounded-0 flex-fill">Feedback</a>

                    </div>
                </div>
            </div>
        </div>



    <?php } ?>


</div>







<?php
include 'admin_footer.php'
?>