
<?php

  $fh_name = $_POST['fh_name'] ;
  $fh_price = $_POST['fh_price'] ;
  $fh_count = $_POST['fh_count'] ;
  $fh_number_guest = $_POST['fh_number_guest'] ;
  $fh_image = $_POST['fh_image'] ;
  $fh_image1 = $_POST['fh_image1'] ;
  $fh_image2 = $_POST['fh_image2'] ;
  $checkin = $_POST['checkin'] ;
  $time_s = $_POST['time_s'] ;
  $idcus= $_POST['customer_id'] ;


     if (!isset($idcus)) {
       header('location: login.php') ;
     }

     require 'php/loginB.php' ;
     session_start() ;



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

.img_10 {
    background-image: url(image/meetingroom.png);
    background-size: cover;
    height: 50vh;
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

.crop {
            width: 100%;
            height: 1250px;
            object-fit: cover;
        }

    </style>
  </head>
  <body>
  <form method="post">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Room</a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Restaurant</a>
            </div>
            <div class="col top_and_bottom back_select">
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

                                  <div class="dropdown-divider  "></div>
                                  <input type="submit" name="logout" class="btn btn_light" formaction="php/logout.php" value="Logout">
                                </div>
                            </div>
                      </div>
               <?php  }  ?>
            </div>
        </div>
    </div>

    <div class="container-fluid img_10">
        <div class="container text-center top_pad_1 back_color_blues">
            <form >
                <div class="row justify-content-md-center align-items-center">
                    <div class="col-auto">
                        <b><label for="checkin">CHECK IN</label></b>
                        <input type="date" id="checkin" value="<?php echo $checkin ; ?>">
                    </div>
                    <div class="col-auto">
                      <b><label for="time">TIME</label></b>
                      <select id="time" class="p-1">
                      <option><?php echo $time_s ?></option>
                      </select>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide pt-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/<?php echo $fh_image; ?>" class="d-block w-100 top_bottom">
          </div>
          <div class="carousel-item">
            <img src="image/<?php echo $fh_image1; ?>" class="d-block w-100 top_bottom" >
          </div>
          <div class="carousel-item">
            <img src="image/<?php echo $fh_image2; ?>" class="d-block w-100 top_bottom" >
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

<form action="php/booking_bhall.php" method="post">

      <div class="container text-center mt-5 mb-5 border p-5 set_width">
          <h1 class="text-left"><?php echo $fh_name ; ?></h1>
          <div class="row mt-3 p-1">
              <div class="col border-right text-left p-3">

                <h6>จำนวนห้องที่เหลือ : <?php echo $fh_count ; ?> </h6>
                <h6>สำหรับจำนวนคน : <?php echo $fh_number_guest ; ?></h6>
              </div>
              <div class="col text-left p-3">
                <h5>Special Request</h5>
                <div class="form-check">
                    <label class="form-check=label" for="check1">
                    <input class="form-check-input" name="pen" value="ปากกาดิจิตอล 1 แท่ง" type="checkbox" id="check1"></input>
                    ปากกาดิจิตอล 1 แท่ง
                   </label>
                </div>
                <div class="form-check">
                    <label class="form-check=label" for="check2">
                    <input class="form-check-input" name="puk" value="ปลั๊กราง 1 แผง" type="checkbox" id="check2"></input>
                    ปลั๊กราง 1 แผง
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check=label" for="check3">
                    <input class="form-check-input" name="penw" value="ปากกาไวท์บอร์ด 1 แท่ง" type="checkbox" id="check3"></input>
                    ปากกาไวท์บอร์ด 1 แท่ง
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check=label" for="check4">
                    <input class="form-check-input" name="por" value="ใช้โปรเจกเตอร์" type="checkbox" id="check4"></input>
                    ใช้โปรเจกเตอร์
                    </label>
                </div>
              </div>
          </div>
          <div class="row mt-3 text-right">
            <div class="col">
                     <h2><?php echo $fh_price ;  ?> THB</h2>
            </div>
                <div class="col">
                <input type="hidden" name="fh_count" value="<?php echo $fh_count ; ?>">
                <input type="hidden" name="fh_number_guest" value="<?php echo $fh_number_guest; ?>">
                <input type="hidden" name="fh_price" value="<?php echo $fh_price; ?>">
                  <input type="hidden" name="fh_name" value="<?php echo $fh_name ; ?>">
                  <input type="hidden" name="customer_id" value="<?php echo $idcus; ?>">
                    <input type="hidden" name="checkin" value="<?php echo $checkin ; ?>">
                  <input type="hidden" name="time_s"  class="form_field" value="<?php echo $time_s ; ?>">
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
                    <img src="image/<?php echo $fh_image; ?>" width="100%px">
                  </div>
                  <div class="col">
                    <h6>ประเภทห้อง: <?php echo $fh_name; ?></h6>
                    <h6>จำนวนห้องที่เหลือ: <?php echo $fh_count; ?> ห้อง</h6>
                    <h6>สำหรับจำนวนคน: <?php echo $fh_number_guest; ?> คน</h6>
                    <h6>จำนวนเงิน: <?php echo $fh_price; ?> THB</h6>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="booking">Confirm</button>
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
