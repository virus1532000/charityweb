<?php
include 'user_header.php';
?>
<div class=" container-fluid row">

    <?php
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $q = "select * from donation where id not in(select donation_id from request where status='Approved') and donation_type='Item' and donation_item LIKE '%" . $search . "%'";
    } else {
        $q = "select * from donation where id not in(select donation_id from request where status='Approved') and donation_type='Item' ";
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

                    </table>
                    <a class="product-title d-block btn rounded-0 btn-red my-3" href="tel:<?php echo $row['number'] ?>">Call Now </a>
                    <form action="#" method="post">
                        <input type="hidden" name="donation_id" value="<?php echo $row['id'] ?>">
                        
                        <div class="d-flex ">
                            <button  class="btn btn-red rounded-0 flex-fill me-2" type="submit" name="request">Request</button>
                            <button  class="btn btn-red rounded-0 flex-fill me-2" type="button">Show map</button>
                            <button  class="btn btn-red rounded-0 flex-fill" type="button">Feedback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php } ?>

  <?php
    if (isset($_POST['request'])) {
        $donation_id = mysqli_real_escape_string($con, $_POST['donation_id']);

      $query = "select * from request where (donation_id='$donation_id'  and status='Approved') or (donation_id='$donation_id'  and  login_id='".$_SESSION['login_user']."' and  status!='Approved') ";
      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) == 0) {

            

          $q = "insert into request(donation_id,login_id,curdate) values('$donation_id','" . $_SESSION['login_user']."',now())";
          if (mysqli_query($con, $q)) {
              echo "<script>alert('Your request has been submitted')</script>";
          } else {
              echo "<script>alert('Item already requested')</script>";
          }
      }
      else {
          echo "<script>alert('Item already requested')</script>";
      }
     }
    ?>

</div>

<?php
include 'admin_footer.php'
?>