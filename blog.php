<?php
include "header.php";
include "connection.php"
?>



<div class="row container-fluid">
  <div class="col-md-12">
    <H2 class="text-white pb-5" id="contact">Blog</H2>
  </div>
</div>
</div>

<div class="row container-fluid">
  <div class="col-md-8 pt-5 ps-5 pb-5">
    <?php
    $q = "SELECT * FROM blog";
    $res = mysqli_query($con, $q);
    while ($row = mysqli_fetch_array($res)) {
    ?>

      <div class="col-md-12 p-5">
        <div class="card rounded-0" style="width: 55rem;">
          <img src="./uploads/<?= $row['image'] ?>" class="card-img-top rounded-0" height="430px" width="100%" alt="...">
          <a href="#" class="mb-4" id="blogimg">
            <h3><?= date("d", strtotime($row['postdate'])) ?></h3>
            <p><?= date("M", strtotime($row['postdate'])) ?></p>
          </a>
          <div class="card-body px-5">
            <h5 class="card-title fs-4 mt-5"><?= $row['title'] ?></h5>
            <p class="card-text my-3"><?= substr($row['description1'], 0, 220) ?>......</p>
            <div class=" d-flex mt-4">
              <a href="#" id="udline" class="pe-3  d-flex text-center"><i class="bi bi-person fs-5 pt-1 px-1"></i>
                <p class="fs-6"><?= $row['postby'] ?></p>
              </a> |
              <a href="javascript:void(0);" id="udline" class="pe-3  d-flex text-center"><i class="bi bi-bookmark-check text-dark fs-5 pt-1 px-1"></i>
                <p class="fs-6"> <?= $row['category'] ?></p>
              </a> |
              <a href="#" id="udline" class=" ps-3 d-flex text-center"><i class="bi bi-chat fs-6 pt-1 px-1"></i>
                <p class="fs-6">03 Comments</p>
              </a>
              <div class="  PS-5">
                <a href="blog_2.php" class=" readmore">
                  Read more
                </a>
              </div>
            </div>
          </div>  
        </div>
      </div>
    <?php  } ?>




  </div>
  <div class="col-md-4 pt-5 pb-5">
    <div class="col-md-12 pt-5">
      <aside style="width: 26rem;" class="d-flex" id="blogright"> <input type="text" class="form-control rounded-0 " placeholder="Search Keyword"><button id="btnbg" class="btn rounded-0 text-white py-2 px-3" type="submit">Search</button> </aside>
      <aside style="width: 26rem;" id="blogright">
        <ul class="list-group list-group-flush">
          <li class="list-group-item fs-5">
            <p id="grouptitle">Category</p>
          </li>
          <li class="list-group-item"><a href="#" class="d-flex mt-5 fs-6" id="groupitem">
              <p>Resaurant food</p>
              <p class="px-1">(37)</p>
            </a></li>
          <li class="list-group-item"><a href="#" class="d-flex fs-6" id="groupitem">
              <p>Travel news</p>
              <p class="px-1">(10)</p>
            </a></li>
          <li class="list-group-item"><a href="#" class="d-flex fs-6" id="groupitem">
              <p>Modern technology</p>
              <p class="px-1">(03)</p>
            </a></li>
          <li class="list-group-item"><a href="#" class="d-flex fs-6" id="groupitem">
              <p>Product</p>
              <p class="px-1">(11)</p>
            </a></li>
          <li class="list-group-item"><a href="#" class="d-flex fs-6" id="groupitem">
              <p>Inspiration</p>
              <p class="px-1">(21)</p>
            </a></li>
          <li class="list-group-item"><a href="#" class="d-flex fs-6" id="groupitem">
              <p>Health care</p>
              <p class="px-1">(19)</p>
            </a></li>
        </ul>
      </aside>
      <aside style="width: 26rem;" id="blogright">
        <ul class="list-group list-group-flush">
          <li class="list-group-item fs-5">
            <p id="grouptitle">Recent Post</p>
          </li>
          <?php
          $q = "SELECT * FROM blog";
          $res = mysqli_query($con, $q);
          while ($row = mysqli_fetch_array($res)) {
          ?>
            <div class="row fs-6 ps-3 mt-4">
              <div class="col-md-3"><img src="./uploads/<?= $row['image'] ?>" height="80px" width="90"></div>
              <div class="col-md-9 ps-3 mt-3 "><a id="groupitem1" href="#">
                  <h4 class=" fs-6"><?= substr($row['title'], 0, 20) ?>...</h4>
                </a>
                <p id="groupitem2"><?= date("d-M-Y", strtotime($row['postdate'])) ?></p>
              </div>
            </div>
          <?php  } ?>




        </ul>
      </aside>

      <aside style="width: 26rem;" id="blogright">
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item fs-5">
            <p id="grouptitle">Tag Clouds</p>
          </li>
          <li class="list-group-item"></li>
        </ul>
        <div>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Project</a>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Love</a>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Technology</a>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Travel</a>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Resaurant</a>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Life Style</a>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Design</a>
          <a href="#" class="tagclouds" class="btn bg-white rounded-0 text-dark btn-sm">Illustration</a>
        </div>
      </aside>
      <aside style="width: 26rem;" id="blogright">
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item fs-5">
            <p id="grouptitle">Instagram Feeds</p>
          </li>
          <li class="list-group-item"></li>
        </ul>
        <img class="mb-3" src="img/charity/post_1.jpg.webp" height="110px" width="110px">
        <img class="mb-3 ms-2" src="img/charity/post_2.jpg.webp" height="110px " width="110px">
        <img class="mb-3 ms-2" src="img/charity/post_7.jpg.webp" height="110px" width="110px">
        <img class="mb-3 " src="img/charity/post_4.jpg.webp" height="110px" width="110px">
        <img class="mb-3 ms-2" src="img/charity/post_5.jpg" height="110px" width="110px">
        <img class="mb-3 ms-2" src="img/charity/post_6.jpg" height="110px" width="110px">
      </aside>
      <aside style="width: 26rem;" id="blogright">
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item fs-5">
            <p id="grouptitle">Newsletter</p>
          </li>
          <li class="list-group-item"></li>
        </ul>
        <input type="text" class="form-control rounded-0 fs-6 py-2 " placeholder="Enter email">
        <button type="submit" class="form-control rounded-0 fs-6 mt-3 py-3 px-3" id="Sendbtn">SUSCRIBE</button>

      </aside>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>