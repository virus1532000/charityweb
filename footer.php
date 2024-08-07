    <div class="container-fluid px-5" id="bottom">
      <div class="row">
        <div class="col-md-3 mx-3">
          <img class=" my-3" src="img/charity/logo1.webp" height="50px" width="90%">
          <p class="text-white fs-6 fw-bold">When a child gets access to good food, it can change just about everything.</p>
        </div>
        <div class="col-md-2">
          <nav class="nav flex-column ">
            <a class="nav-link text-white fw-bold" aria-current="page" href="#">Home</a>
            <a class="nav-link text-white fw-bold" href="#">About</a>
            <a class="nav-link text-white fw-bold" href="#">Services</a>
            <a class="nav-link text-white fw-bold" href="#">Blog</a>
            <a class="nav-link text-white fw-bold" href="#">Contact</a>
          </nav>
        </div>
        <div class="col-md-3">
          <p class="fs-5 fw-bold text-white">Contact Us</p>
          <p class="fs-6 fw-bold text-white">4486 Richards Avenue, Modesto<br> CA - 95354
            <br>209-818-6041
          </p>
          <p class="fs-6 fw-bold text-white">Charity90@gmail.com</p>
        </div>
        <div class="col-md-3">
          <p class="fs-5 fw-bold text-white">Support</p>
          <p class="fs-6 fw-bold text-white">Join The Movement For Change</p>
          <a href="adminlogin.php" class="me-5 text-center" id="btnback1">
            <div class="btn btn-lg rounded-0 fs-6 " id="btnback1">Admin Login</div>
          </a>
          <a href="login_1.php" class="me-5 text-center mt-3" id="btnback1">
            <div class="btn btn-lg rounded-0 fs-6 " id="btnback1">Join us Today</div>
          </a>
        </div>
        <div class=" col-md-12 text-white text-center fs-6 fw-bold my-5 border-top" id="copyright">Copyright &copy; All rights reserved</div>
      </div>
    </div>


    </body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"> </script>
    <!-- <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"> </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="funfact.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      $(document).ready(function() {
        AOS.init();
        $("#Itemdiv").hide();
        $("#Amountdiv").hide();

        $("#selectdonationtype").change(function()
      {
        var donationtype = $(this).val();
        if(donationtype=='Item')
      {
        $("#Itemdiv").show();
        $("#Amountdiv").hide();
      }
      else if(donationtype=='Money')
      {
        $("#Amountdiv").show();
        $("#Itemdiv").hide();
      }
      });
      });
    </script>
    <script>
      let myCarousel = document.querySelectorAll('#featureContainer .carousel .carousel-item');
      myCarousel.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
          if (!next) {
            // wrap carousel by using first child
            next = myCarousel[0]
          }
          let cloneChild = next.cloneNode(true)
          el.appendChild(cloneChild.children[0])
          next = next.nextElementSibling
        }
      })
    </script>
    <script>
      function greyimg(b) {
        var c  = document.getElementById('changeimg');
        c.src = b;
        console.log(c);
      }

      function whiteimg( b) {
        var c  = document.getElementById('changeimg');
        c.src = b
        console.log(b);
      }
    </script>
    <script>
      function greyimg1(b) {
        var c  = document.getElementById('changeimg1');
        c.src = b;
        console.log(c);
      }

      function whiteimg1( b) {
        var c  = document.getElementById('changeimg1');
        c.src = b
        console.log(b);
      }
    </script>

    </html><!--  -->