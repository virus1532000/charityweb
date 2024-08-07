<?php
include "header.php"
?>

<div class="col-md-12">
  <H2 class="text-white pb-5" id="contact">Contact</H2>
</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center my-4 "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8939570226535!2d74.94973477436395!3d30.211573910635053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a43c41eed7%3A0xf1bc9286b47f5ea9!2sSoftwizz%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1716868573931!5m2!1sen!2sin" class="my-5 " width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </div>

  <div class="col-md-12  fs-2 px-5" id="header"> Get in Touch</div>

  <?php
  if (isset($_POST['submit'])) {
    $msg = mysqli_real_escape_string($con, $_POST['msg']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $sub = mysqli_real_escape_string($con, $_POST['sub']);
    $query = "insert into feedback(message,name,email,subject,curdate) values('$msg','$name','$email','$sub',now())";
    if (mysqli_query($con, $query)) {
      echo "<script>alert('Submitted')</script>";
    } else {
      echo mysqli_error($con);
    }
  }
  ?>
  <div class="row">
    <div class="col-md-8 p-5">
      <form id="contactform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row">
          <div class="col-md-12 mb-4">
            <textarea type="text" class="form-control rounded-0 fs-6 " name="msg" placeholder="Enter Message" rows="7"></textarea>
          </div>
          <div class="col-md-6 mb-4"><input type="text" name="name" class="form-control rounded-0   " placeholder="Enter your name"></input></div>
          <div class="col-md-6 mb-4">
            <input type="email" class="form-control rounded-0  " name="email" placeholder="Email"></input>
          </div>
          <div class="col-md-12 mb-5"><input type="text" class="form-control rounded-0" placeholder="Enter Subject" name="sub"></div>
          <div class="col-md-12"> <button class="btn  rounded-0 px-5 py-3 " name="submit" id="Sendbtn" type="submit">SEND</button> </div>
        </div>
      </form>
    </div>
    <div class="col-md-4 p-5">
      <div class="row">
        <div class="col-md-12 mb-4 d-flex"><i class="bi bi-house fs-1 px-2 mt-1"></i>
          <p id="addee"> Buttonwood, California.<br><span id="adde">Rosemead CA 91770</span></p>
        </div>
        <div class="col-md-12 mb-4 d-flex"><i class="bi bi-phone fs-1 px-2 mt-1"></i>
          <p id="addee">+1 253 565 2365<br><span id="adde">Mon to Fri 9am to 6pm</span></p>
        </div>
        <div class="col-md-12 mb-4 d-flex"><i class="bi bi-envelope fs-1 px-2 mt-1"></i>
          <p id="addee">support@colorlib.com<br><span id="adde">Send us your query anytime!</span></p>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "footer.php" ?>