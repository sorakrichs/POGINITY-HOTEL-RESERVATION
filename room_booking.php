<?php
require 'php/loginB.php' ;
session_start() ;



  $summaryprice1 = $_POST['summary1'] ;
  $checkin = $_POST['checkin1'] ;
  $checkout = $_POST['checkout1'] ;
  $idcus = $_POST['customer_id']  ;
  $room = $_POST['room_t'];
  $number_of_guest = $_POST['number_of_guest'] ;
  $count = $_POST['count'] ;
  $image =$_POST['image'] ;
  $image1 = $_POST['image1'] ;
  $image2 = $_POST['image2'] ;

     if (!isset($idcus)) {
       header('location: login.php') ;
     }



 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Result</title>
    <style>
        .img_4 {
    background-image: url(image/View4.jpg);
    background-size: cover;
    height: 30vh;
    background-position: center;
}

.img5{
    background-image: url(image/Room2.jpg);
}

.back_color_blues {
    background-color: rgba(129, 213, 228, 0.658);
    color: white;
    padding-top: 30px;
    padding-bottom: 30px;

}
.width_20 {
    width: 75%;
    background-color: #ffffffde;
    border-radius: 30px;
    padding: 25px;
}
.top_bottom {
    margin:-15% 0;
}
.set_width {
    width: 60%;
    background-color: hsl(217, 100%, 97%);
}
    </style>
  </head>
  <body>
    <form method="post">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col top_and_bottom border_right back_select">
                <a href="#" class="nav-link color">Room</a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Restaurant</a>
            </div>
            <div class="col top_and_bottom">
                <a href="#" class="nav-link color">Hall</a>
            </div>
            <div class="col top_and_bottom">
                <a href="home.php" class="nav-link color"><b>POGINITY HOTEL</b></a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">About Us</a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Contact Us</a>
            </div>
            <div class="col top_and_bottom">
              <?php if (empty($_SESSION['firstname'])){ ?>
                       <a href="login.php" class="nav-link color">Login</a>
              <?php }else if($_SESSION['firstname']) { ?>

                      <div >

                        <div class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['firstname'] ; ?>
                              </a>
                              <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">

                                <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id']; ?>">
                                <input type="submit" name="profile" formaction="php/profileB.php" value="Profile" class="btn btn_light">


                                  <div class="dropdown-divider"></div>
                                  <input type="submit" name="logout" class="btn btn_light" formaction="php/logout.php" value="Logout">

                                </div>



                            </div>


                      </div>
               <?php  }  ?>

            </div>
        </div>
    </div>

    <div class="container-fluid img_4">
        <div class="container text-center top_pad_1 back_color_blues">
            <form >
                <div class="row justify-content-md-center align-items-center">
                    <div class="col-auto">
                        <b><label for="checkin">CHECK IN</label></b>
                        <input type="date" id="checkin" value="<?php echo $checkin ; ?>">
                    </div>
                    <div class="col-auto">
                        <b><label for="checkout">CHECK OUT</label></b>
                        <input type="date" id="checkout" class="form_field" value="<?php echo $checkout ; ?>">
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide pt-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/<?php echo $image; ?>" class="d-block w-100 top_bottom">
          </div>
          <div class="carousel-item">
            <img  src="image/<?php echo $image1; ?>" class="d-block w-100 top_bottom " >
          </div>
          <div class="carousel-item">
            <img src="image/<?php echo $image2; ?>" class="d-block w-100 top_bottom" >
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>

<form action="php/booking_B.php" method="post">

      <div class="container text-center mt-5 mb-5 border p-5 set_width">
          <h1 class="text-left"><?php echo $room; ?></h1>
          <div class="row mt-3 p-1">
              <div class="col border-right text-left p-3">

                <h6>จำนวนห้องที่เหลือ : <?php echo $count ; ?> </h6>
                <h6>สำหรับผู้เข้าพัก : <?php echo $number_of_guest; ?></h6>
              </div>
              <div class="col text-left p-3">
                <h5>Special Request</h5>
                <div class="form-check">
                    <label class="form-check=label" for="check1">
                    <input class="form-check-input" name="mon" value="หมอนเพิ่ม 1 ใบ" type="checkbox" id="check1"></input>
                    หมอนเพิ่ม 1 ใบ
                   </label>
                </div>
                <div class="form-check">
                    <label class="form-check=label" for="check2">
                    <input class="form-check-input" name="pahom" value="ผ้าห่มเพิ่ม 1 ใบ" type="checkbox" id="check2"></input>
                    ผ้าห่มเพิ่ม 1 ผืน
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check=label" for="check3">
                    <input class="form-check-input" name="food" value="อาหารมื้อเช้า" type="checkbox" id="check3"></input>
                    อาหารมื้อเช้า
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check=label" for="check4">
                    <input class="form-check-input" name="car" value="รถรับส่ง" type="checkbox" id="check4"></input>
                    รถรับส่ง
                    </label>
                </div>
              </div>
          </div>
          <div class="row mt-3 text-right">
            <div class="col">
                <h2><?php echo $summaryprice1; ?> THB</h2>

            </div>
            <div class="col">
                <input type="hidden" name="customer_id" value="<?php echo $idcus; ?>">
                  <input type="hidden" name="checkin" value="<?php echo $checkin ; ?>">
                  <input type="hidden" name="checkout" id="checkout" class="form_field" value="<?php echo $checkout ; ?>">
                  <input type="hidden" name="room_t" value="<?php echo $room; ?>">
                   <input type="hidden" name="number_of_guest" value="<?php echo $number_of_guest; ?>">
                    <input type="hidden" name="count" value="<?php echo $count; ?>">
                    <input type="hidden" name="summaryprice1" value="<?php echo $summaryprice1; ?>">


                <button type="button" class="btn btn-light rounded border" data-toggle="modal" data-target="#example1" name="booking" style="width: 200px;border-radius: .9rem!important;">Book Now</button>
            </div>
        </div>
      </div>
      <div class="modal fade" id="example1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" >CONFIRMATION</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row align-items-center">
                  <div class="col">
                    <img src="image/<?php echo $image; ?>" width="100%px">
                  </div>
                  <div class="col">
                    <h6>ประเภทห้อง: <?php echo $room; ?></h6>
                    <h6>จำนวนห้องที่เหลือ: <?php echo $count; ?> ห้อง</h6>
                    <h6>สำหรับผู้เข้าพัก: <?php echo $number_of_guest; ?> คน</h6>
                    <h6>จำนวนเงิน: <?php echo $summaryprice1 ;?> THB</h6>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="booking" >Confirm</button>
            </div>
          </div>
        </div>
      </div>
      </form>

    <div class="container-fluid text-center bottom_page padding_top">
        <h6>Copyright 2020 Poginity Ltd. All Rights Reserved.</h6>
        <h6>POGINITY Hotel. นาจอมเทียน, พัทยา (คลิ๊กเพื่อดูแผนที่) 095-156-2654 Pogihotel@gmail.com</h6>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
