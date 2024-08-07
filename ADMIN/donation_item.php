<?php
include 'admin_header.php'
?>
<div class="container-fluid row">

    <?php
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $q = "select * from donation where id not in(select donation_id from request where status='Approved') and donation_type='Item' and donation_item LIKE '%" . $search . "%'";
    } else {
        $q = "select * from donation where id not in(select donation_id from request where status='Approved') and donation_type='Item'";
    }
    $res = mysqli_query($con, $q);
    while ($row = mysqli_fetch_array($res)) {
    ?>
        <div class=col-lg-6>
            <div class="card mx-5  my-5 card-background rounded-0">
                <div>
                    <img src="../uploads/<?php echo $row['item_image'] ?>" alt=" <?php echo $row['donation_item']; ?>" class="card-img-top rounded-0 px-4 pt-4 text-white" height="250px" width="100%">

                </div>
                <div class="card-body">
                    <table class="table">
                        <tr class="text-start">
                            <td>Item :</td>
                            <td class="pe-5"><?php echo $row['donation_item'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td style="width: 9rem;">Item Description :</td>
                            <td class=" pe-5"  ><?php echo $row['item_description'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td>Quantity :</td>
                            <td class="pe-5"><?php echo $row['quantity'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td>Address :</td>
                            <td class="pe-5"><?php echo $row['street'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td>City :</td>
                            <td class="pe-5"><?php echo $row['city'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td>State :</td>
                            <td class="pe-5"><?php echo $row['state'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td>Pincode :</td>
                            <td class="pe-5"><?php echo $row['postalcode'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td>Mobile :</td>
                            <td class="pe-5"><?php echo $row['number'] ?></td>
                        </tr>
                        <tr class="text-start">
                            <td>email :</td>
                            <td class="pe-5"><?php echo $row['email'] ?></td>
                        </tr>
                    </table>

                    <div class="d-grid ">
                        <button class=" btn rounded-0 btn-red mt-3" data-bs-toggle="modal" data-bs-target="#deletemodal" type="button">Delete </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="deletemodal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-danger">You want to delete this donation ?
                        </h4>
                        <button type="button" class=" bt-close" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>

                    </div>
                    <div class="modal-footer">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                            <button type="submit" name="delete" class="btnn btn-red rounded-0">Approve</button>
                            <button type="button" class="btnn text-white rounded-0" data-bs-dismiss="modal">Reject</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <?php } ?>

</div>


<?php
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $q = "DELETE FROM donation WHERE id = '$id'";
    if (mysqli_query($con, $q)) {
        echo "<script>alert('Donation deleted successfully')
        window.location.href='donation_item.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>

<?php
if (isset($_POST['delete'])) {
    $donation_id = $_POST['id'];
    $q = "DELETE FROM request WHERE donation_id = '$id'";
    if (mysqli_query($con, $q)) {
        echo "";
    } else {
        echo mysqli_error($con);
    }
}
?>

<?php
include 'admin_footer.php'
?>