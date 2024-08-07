<?php
include 'admin_header.php';
?>

<div class=" container-fluid row">
    <?php
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $q = "select * from donation where id not in(select donation_id from request where status='Approved') and donation_type='Item' and donation_item LIKE '%" . $search . "%'";
    } else {
        $q = "select r.id as rid,r.status as status,r.login_id as login_id, r.curdate as rdate,d.* from donation as d join request as r on r.donation_id=d.id where status !='Approved'";
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
                        <tr>
                            <td style="width: 7rem; ">Item Description :</td>
                            <td class="pe-5 text-wrap" style="width: 18rem;"><?php echo $row['item_description'] ?> </td>
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
                            <td class="text-white">User Requested :</td>
                            <td class="pe-5 text-white"><?php echo $row['login_id'] ?></td>


                        </tr>
                        <tr>
                            <td class="text-white fw-bold">Status :</td>
                            <td class="pe-5 text-white fw-bold"><?php echo $row['status'] ?></td>

                        </tr>

                    </table>

                    <div class="d-flex">
                        <input type="hidden" id="rid" value="<?php echo $row['rid'] ?>">
                        <button type="button" title="approve" class="btnstatus btn btn-red rounded-0 flex-fill me-2">Approved</button>
                        <button type="button" title="reject" class="btnstatus btn btn-red rounded-0 flex-fill">Rejected</button>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


</div>







<?php
include 'admin_footer.php'
?>

<script>
    $(document).ready(function() {
        $('.btnstatus').click(function() {
            var rid = $(this).closest('div').find('#rid').val();
            var status = $(this).text();
            $.ajax({
                url: 'updatestatus.php',
                method: 'post',
                data: {
                    rid: rid,
                    status: status
                },
                success: function(response) {
                    //alert(response);
                    location.reload();
                }
            });
        });
    });
 
</script>