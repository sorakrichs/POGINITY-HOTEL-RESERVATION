<?php
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

    <title>Hello, world!</title>

    <style>
        .top_and_bottom {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .border_right {
            border-right: 2px solid #d1d1d1;
        }
        .color {
            color: #747474;
        }
        .top_height {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .no-padding {
            padding-left: 0;
            padding-right: 0;
        }
        .bottom_height {
            margin-bottom: 50px;
        }
        .empty {
            padding: 30px;
            background-color: #eeeeee;
            border-radius: 30px;
        }
        .bottom_page {
            background-color: rgb(70, 70, 70);
            color: cornsilk;
        }
        .padding_top {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <form  method="post">
    <div class="container">
        <div class="row text-center align-items-center">

            <div class="col top_and_bottom border_right ">
               <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id']; ?>">
               <button type="submit" class="color btn btn_light" formaction="reservation.php" name="button">Room</button>
            </div>

        <div class="col top_and_bottom border_right">
          <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id']; ?>">
          <button type="submit" class="color btn btn_light" formaction="food.php"  name="button">Restaurant</button>
        </div>

          <div class="col top_and_bottom">
             <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id']; ?>">
             <button type="submit" class="color btn btn_light" formaction="hallreservation.php" name="button">Hall</button>
          </div>

            <div class="col top_and_bottom">
                <a href="#" class="nav-link color"><b>POGINITY HOTEL</b></a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">About Us</a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Contact Us</a>
            </div>

            <div class="col top_and_bottom">
              <?php if (empty($_SESSION['firstname'])){ ?>
                      <?php  $_SESSION['id'] = 0 ; ?>
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
      </form>

    <div class="container-fluid no-padding">
        <img src="image/brand.png" width="100%">

    </div>

    <div class="container">
        <div class="row text-center top_height">
            <div class="col">
                <img src="icon/high-value.png" width="100px">
            </div>
            <div class="col">
                <img src="icon/beach.png" width="100px">
            </div>
            <div class="col">
                <img src="icon/dish.png" width="100px">
            </div>
            <div class="col">
                <img src="icon/room.png" width="100px">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center color top_height">
            <h2>OUR SERVICE</h2>
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="#"><img src="image/room.png" ></a>
            </div>
            <div class="col">
                <a href=""><img src="image/restaurant.png"></a>
            </div>
            <div class="col">
                <a href=""><img src="image/hall.png"></a>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="color top_height">
            <h2>OUR FACILITIES</h2>
        </div>
        <img src="image/lobby.png" class="bottom_height">
        <img src="image/beach.png" class="bottom_height">
        <img src="image/pool.png">
    </div>

    <div class="container">
        <div class="text-center color top_height">
            <h2>OUR CUSTOMER OPINION</h2>
        </div>
        <div class="row g-2">
            <div class="col-6">
                <div class="border bd-light empty">
                    <div class="row">
                        <div class="col-3">
                            <img src="image/not.jpg" class="rounded-circle" width="100px" height="100px">
                        </div>
                        <div class="col">
                            <h3 class="color">Karit Eakbavornphak</h3>
                            <h6 class="color">ของดี</h6>
                            <h4 class="text-right color">4.2/5</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="border bd-light empty">
                    <div class="row">
                        <div class="col-3">
                            <img src="image/por.jpg" class="rounded-circle" width="100px" height="100px">
                        </div>
                        <div class="col">
                            <h3 class="color">Poramet Siriwattanacharoenchai</h3>
                            <h6 class="color">ชอบมากครับ</h6>
                            <h4 class="text-right color">4.2/5</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="border bd-light empty">
                    <div class="row">
                        <div class="col-3">
                            <img src="image/yok.jpg" class="rounded-circle" width="100px" height="100px">
                        </div>
                        <div class="col">
                            <h3 class="color">Papada Sudsainate</h3>
                            <h6 class="color">อยากมาพักอีก</h6>
                            <h4 class="text-right color">4.2/5</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="border bd-light empty">
                    <div class="row">
                        <div class="col-3">
                            <img src="image/dragon.jpg" class="rounded-circle" width="100px" height="100px">
                        </div>
                        <div class="col">
                            <h3 class="color">Sorakrich Sasithonsivilai</h3>
                            <h6 class="color">บรรยากาศดีมาก</h6>
                            <h4 class="text-right color">4.2/5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="container-fluid no-padding">
        <img src="image/View1.jpg" width="100%">
    </div>
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
