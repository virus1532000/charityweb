<?php
include "connection.php"
?>

<html>

<head>
  <title>NGO</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="charity boot.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <div id="background-1">
    <div class="container-fluid p-4 ">
      <div class="row bg-transparent">
        <div class="col-md-2" id="topp">
          <a href="index.php"> <img src="img/charity/logo1.webp" height="50px" width="90%"></a>
        </div>
        <div class="col-md-8" id="topnav">
          <nav class="navbar navbar-expand-lg navbar-dark fs-5 ">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="#">Who we are?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="programe.php">Programs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link" aria-current="page" href="contact.php">Contact us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-md-2">
          <a class="btn  fs-6 rounded-0 px-4 py-3  my-2" href="donation.php" id="btnback1">
            <div> &hearts; Make A Donation</div>
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="col-md-5 my-5 px-5">
        <div class="text-light" id="slogan" data-aos="fade-up" data-aos-duration="1500">
          <p>Give a helping<br> hand to those<br>who need it! </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-5 mx-5 my-3">
        <div class="text-white-50" id="slogantext" data-aos="fade-up" data-aos-duration="1500">
          <p>When a child get access to good food,it<br>can change just about everything.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-5 mx-5">
        <a href="#" class="btn rounded-0 btn-lg px-4 py-3" id="top" data-aos="fade-up" data-aos-duration="1500">Ongoing Programs</a>
      </div>
    </div>
  </div>

  <div id="background-2">
    <div class="row">
      <div class="col-md-6 bg-transparent">
        <div class="img mx-5 my-3"><img src="img/charity/img1.jpg" height="450px" width="100%">
        </div>
      </div>
      <div class="col-md-6">
        <div class="my-3 mx-5">
          <div class="fs-6 mb-3" id="h6text">Upcoming Programs</div>
          <div>
            <h2 id="header">Donate Vitamin B12 supply<br>program</h2>
          </div>
          <div class="text-secondary fs-5 py-2">When a child gets access to good food, it can change just about everything. Sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
          <div class="container-fluid">
            <a href="">
              <div class="btn  btn-lg my-2 rounded-0" id="btnback">Donate Now</div>
            </a>
            <a>
              <div class="btn btn-lg mx-2 rounded-0" id="btnback3">View program</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid " id="body">
    <div class="row">
      <div class="col-md-6">
        <div class="my-3 mx-5">
          <div class="fs-6 " id="body2">About Us</div>
          <div class=" my-3">
            <h2 id="header">We are tender heart<br>charity foundation.</h2>
          </div>
          <div class="text-secondary fs-5  my-4">When a child gets access to good food, it can change just about everything. Sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
          <a href="#">
            <div class="btn  btn-lg rounded-0 py-3 px-5" id="btnback">Discover more</div>
          </a>
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <img src="img/charity/pamplate 1.jpg" height="450" width="60%" />
        <img src="img/charity/pamplate 2.jpg" height="450" width="60%" id="positionimg" />
      </div>
    </div>
  </div>



  <!--Accordion-->
  <div class="row my-5 accordion" id="accordionExample">
    <div class="col-md-1"></div>
    <div class="col-md-3 ms-5 accordion-item">
      <div id="headingOne">
        <button class="button accordionbox " data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
          <div>
            <img class="mb-3" src="img/charity/accordion1 white.webp" height="60px" width="50px">
            <h3 class="text-white">Become a Volunteer</h3>
            <p class="fs-6 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam.</p>
          </div>
        </button>
        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 ms-4 accordion-item">
      <div id="headingTwo">
        <div class="button accordionbox1 " onmouseover="whiteimg('img/charity/accordion2 white.webp')" onmouseout="greyimg('img/charity/accordion2 grey.webp')" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
          <div>
            <img id="changeimg" class="mb-3 " src="img/charity/accordion2 grey.webp" height="60px" width="50px">


            <h3>Dance and music</h3>
            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam.</p>
          </div>
        </div>
        <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 ms-4 accordion-item">
      <div id="headingThree">
        <div class="button accordionbox1" onmouseover="whiteimg1('img/charity/accordion3 white.webp')" onmouseout="greyimg1('img/charity/accordion3 grey.webp')" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree">
          <div>
            <img class="mb-3" id="changeimg1" src="img/charity/accordion3 grey.webp" height="60px" width="50px">
            <h3>Online Conference</h3>
            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam.</p>
          </div>
        </div>
        <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=" row container-fluid">
    <div class="col-md-4">
      <div class="card mx-4 rounded-0" style="width:100%;">
        <img src="img/charity/card 1.png" height="245" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-4">Help the ecosystems</h5>
          <p class="card-text fs-5">We're WWF, the leading global environmental charity, and we're bringing our world back to life.</p>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p><span id="h6text">$60,000</span><br>Goal</p>
              </div>
              <div class="col-md-4">
                <p><span id="h6text">$45,000</span>
                  <br>Reached
                </p>
              </div>
              <div class="col-md-4">
                <a href="#">
                  <div class="btn btn-lg rounded-0 px-4" id="btnback">Donate</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mx-4 rounded-0" style="width:100%;">
        <img src="img/charity/card2.webp" height="245" alt="...">
        <div class="card-body">
          <h6 class="card-title fs-4">Donate Vitamin B12 Program</h6>
          <p class="card-text fs-5">Vitamin B12 is a water-soluble vitamin that is naturally present in some foods.</p>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p><span id="h6text">$80,000</span><br>Goal</p>
              </div>
              <div class="col-md-4">
                <p><span id="h6text">$72,000</span>
                  <br> Reached
                </p>
              </div>
              <div class="col-md-4">
                <a href="#">
                  <div class="btn btn-lg rounded-0 px-4" id="btnback">Donate</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mx-4 rounded-0 " style="width:100%;">
        <img src="img/charity/card 3.jpg" height="245" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-4">View Savers In Deworm Program</h5>
          <p class="card-text fs-5">It has recommended and funded Sightsavers for our deworming programmes since 2017.</p>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p><span id="h6text"> $60,000</span><br>Goal</p>
              </div>
              <div class="col-md-4">
                <p><span id="h6text">$45,000</span>
                  <br>Reached
                </p>
              </div>
              <div class="col-md-4">
                <a href="#">
                  <div class="btn btn-lg rounded-0 px-4" id="btnback">Donate</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--counter-->
  <div class="row">
    <div class="col-md-6">
      <h1 id="countertext">We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</h1>
      <p class="font font-s" id="countertext1">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="col-md-6 p-t-1">
      <div class="container mt-5">
        <div class="row 
            justify-content-center">
          <div class="col-md-4">
            <div class="card text-center border-none
                p-3">
              <div><img src="img/charity/counter1.webp" height="80px" width="80px"></div>
              <div class="card-body">
                <h3 class="card-text counter font-l pt-2 pb-3" data-target="120000">
                  0
                </h3>
                <p class="card-title font font-s">
                  Children helped
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center p-3 border-none">
              <div><img src="img/charity/counter2.webp" height="80px" width="80px"></div>
              <div class="card-body">
                <h3 class="card-text counter font-l pt-2 pb-3" data-target="79">
                  0
                </h3>
                <p class="card-title 
              font font-s">
                  Water wells
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center p-3 border-none">
              <div><img src="img/charity/counter3.webp" height="80px" width="80px"></div>
              <div class="card-body">
                <h3 class="card-text counter font-l pt-2 pb-3" data-target="789">
                  0
                </h3>
                <p class="card-title font font-s">
                  Volunteeres
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






  <div class="row container-fluid" id="work">
    <div class="col-md-6 my-5">
      <img src="img/charity/img2.jpg" height="450" width="80%" id="img2">
    </div>
    <div class="col-md-5" id="text">
      <h6 class="fs-6  my-2" id="h6text">Helping Today</h6>
      <H2 class="text-dark">What we are doing</H2>
      <p class="text-secondary fs-5 my-4">Volunteering is a great way to give back to your community and help where you can. It is a way of helping that feels very real, because you are personally there to help and often get to see the benefits with your own eyes.</p>
      <a href="#">
        <div class="btn  rounded-0 btn-lg px-5 py-3" id="btnback3">Join Us Today</div>
      </a>
    </div>
  </div>
  <div class="container-fluid mb-5" id="bg">
    <div class="text-white text-center fs-6">
      <h6>Helping Today</h6>
    </div>
    <div class="text-white text-center fs-2 fw-bold">How we help people</div>
    <div class="row container-fluid">
      <div class="col-md-4 px-5">
        <div id="services"><img src="img/charity/services1.svg" height="80px" width="30%"></div>
        <p class="text-center text-white fs-3 fw-bold MY-2">Pure Food & Water</p>
        <p class="text-center  text-white fs-6">The Pure Food and Drug Act was initially concerned with ensuring products were labeled correctly.</p>
      </div>
      <div class="col-md-4 px-5">
        <div id="services"><img src="img/charity/services2.svg" height="80px" width="30%"></div>
        <p class="text-center text-white fs-3 fw-bold MY-2">Health & Medicine</p>
        <p class="text-center  text-white fs-6">Medicines and health products are important for addressing health problems and improve quality of lives.</p>
      </div>
      <div class="col-md-4 px-5">
        <div id="services"><img src="img/charity/services3.svg" height="80px" width="30%"></div>
        <p class="text-center text-white fs-3 fw-bold ">Education</p>
        <p class="text-center  text-white fs-6">Education is what differentiates us from other living beings on earth. It makes man the smartest creature on earth.</p>
      </div>
    </div>
  </div>





  <div class="container-fluid my-5" id="featureContainer">
    <div class="justify-content-center">
      <div class="carousel slide" id="featureCarousel" data-bs-ride="carousel">
        <div class="row container-fluid">
          <div class="col-md-4">
            <div id="margin">
              <h6 class="fs-6" id="hh6">News</h6>
              <h2 class="fs-2  fw-bold" id="header">Latest Blog</h2>
              <div class="float-start  col-md-4">
                <a class="indicator btn rounded-0 p-4" href="#featurecarousel" role="button" data-bs-slide="prev">
                  <span class="fas fa-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="w-aut indicator btn rounded-0 p-4" href="#featurecarousel" role="button" data-bs-slide="next">
                  <span class="fas fa-chevron-right"></span>
                </a>
                <!--button toggle pending-->
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="carousel-inner " role="listbox">
              <div class="carousel-item active ">
                <div class="col-md-6 pe-5">
                  <div class="card rounded-0" style="height: 30rem;">
                    <img src="img/charity/blog1.webp" height="280" width="100%">

                    <div class="card-body ">
                      <h5 class="card-title fs-3" id="header">Help the ecosystem</h5>
                      <p class="card-text fs-6 text-secondary">We're WWF, the leading global environmental charity, and we're bringing our world back to life.</p>

                      <a href="#" class="card-link">
                        <div class="btn" id="btncolor">Read More</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item ">
                <div class="col-md-6 pe-5">
                  <div class="card rounded-0" style="height: 30rem;">
                    <img src="img/charity/blog.webp" height="280" width="100%">
                    <div class="card-body">
                      <h5 class="card-title fs-3" id="header">Help the ecosystem</h5>
                      <p class="card-text fs-6 text-secondary">We're WWF, the leading global environmental charity, and we're bringing our world back to life.</p>

                      <a href="#" class="card-link">
                        <div class="btn" id="btncolor">Read More</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item ">
                <div class="col-md-6 pe-5">
                  <div class="card rounded-0" style="height: 30rem;">
                    <img src="img/charity/blog img2.webp" height="280" width="100%">
                    <div class="card-body">
                      <h5 class="card-title fs-3" id="header">Help the ecosystem</h5>
                      <p class="card-text fs-6 text-secondary">We're WWF, the leading global environmental charity, and we're bringing our world back to life.</p>

                      <a href="#" class="card-link">
                        <div class="btn" id="btncolor">Read More</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="row container-fluid">
    <!--map pending-->
  </div>

  <?php
  include "footer.php";
  ?>