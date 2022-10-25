<?php
if (empty($_POST['customer_id'])) {


}else {
  $idcus = $_POST['customer_id']  ;

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
    <title>reservation</title>
  </head>
  <body>
    <form  method="post">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col top_and_bottom border_right back_select">
                <a href="reservation.php" class="nav-link color">Room</a>
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

    <div class="container-fluid img_2">
        <div class="container text-center top_pad_1">

                <div class="row justify-content-md-center align-items-center">
                    <div class="col-auto">
                        <b><label for="checkin">CHECK IN</label></b>
                        <input type="date" name="checkin" id="checkin">
                    </div>
                    <div class="col-auto">
                        <b><label for="checkout">CHECK OUT</label></b>
                        <input type="date" name="checkout" id="checkout" class="form_field">
                       <input type="hidden" name="customer_id" value="<?php echo $idcus; ?>">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-light" formaction="roomsearch.php">SEARCH</button>
                    </div>
                </div>
        </div>
    </div>

    <div class="alert back_color_blue">
        <h1>Ocean View</h1>
    </div>

    <div class="container-fluid no-padding">
        <img src="image/ocean_1.png" alt="" width="100%">
    </div>

    <div class="alert back_color_brown">
        <h1>Town View</h1>
    </div>

    <div class="container-fluid no-padding bottom_height">
        <img src="image/town_1.png" alt="" width="100%">
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
