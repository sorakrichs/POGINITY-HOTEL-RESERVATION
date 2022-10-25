<?php
require 'php/connect.php' ;
$checkin = $_POST['checkin'] ;
$time_s = $_POST['time_s'] ;
$idcus =$_POST['customer_id'] ;


   if (!isset($idcus)) {
     header('location: login.php') ;
   }



$qroom1 = " SELECT * FROM food_and_hall  WHERE fh_type LIKE 2 " ; //สามารถ SELECT room.roomid,roomtype.roomtype

$result1 = mysqli_query($db,$qroom1) ;
require 'php/loginB.php';
session_start();



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
    <title>Restaurant Search Result</title>
    <style>
        .img_6 {
    background-image: url(image/restauranttop.png);
    background-size: cover;
    height: 60vh;
    background-position: center;
}

.img5{
    background-image: url(image/Room2.jpg);
}

.back_color_yellow {
    background-color:rgb(213, 226, 96);
    color: white;
    padding-top: 30px;
    padding-bottom: 30px;

}

.back_color_blues1 {
    background-color: rgb(59, 175, 241);
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

.img_7 {
    background-image: url(image/buff1.jpg);
    background-size: cover;
    height: 60vh;
    background-position: center;
}

.back_color_blues {
    background-color: rgb(129, 213, 228);
    color: white;
    padding-top: 30px;
    padding-bottom: 30px;

}

    .mix{
            border-style: solid;
             border-radius: 10px;
             border : solid green;
             background-color:rgb(207, 233, 156);
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
                <a href="#" class="nav-link color back_select">Restaurant</a>
            </div>
            <div class="col top_and_bottom">
                <a href="#" class="nav-link color ">Hall</a>
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

    <div class="container-fluid img_6" style="margin-bottom :50px">
        <div class="container text-center top_pad_1 back_color_blues">
            <form>
                <div class="row justify-content-md-center align-items-center">
                    <div class="col-auto">
                        <b><label for="checkin">CHECK IN</label></b>
                        <input type="date" value="<?php echo $checkin; ?>" id="checkin">
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

    <?php

     while ($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {

       if ($row1['fh_count'] == 0) {

       }else{


     ?>

    <div class="alert back_color_yellow">
        <h1><?php echo $row1['fh_name'] ?></h1>
    </div>

    <div class="container width_2 text-center align-items-center" style="margin-bottom :50px">
        <div class="row justify-content-md-center border">
            <div class="col-auto">
                <img src="image/<?php echo $row1['fh_image']; ?>" width="400px">
            </div>
            <div class="col-auto p-2 text-left">
                <h3><?php echo $row1['fh_name'] ?></h3>
                <h5>จำนวนนั่งคงเหลือ: <?php echo $row1['fh_count']; ?></h5>
                <h5>สำหรับผู้จอง: <?php echo $row1['fh_number_guest']; ?> คน</h5>

                <div class="row pt-5">
                    <div class="col">
                        <h2><?php echo $row1['fh_price']; ?> THB</h2>
                    </div>
                    <div class="col pt-1">
                    <form  action="restaurant_book.php" method="post">
                        <input type="hidden" name="fh_name" value="<?php echo $row1['fh_name']; ?>">
                        <input type="hidden" name="fh_price" value="<?php echo $row1['fh_price']; ?>">
                        <input type="hidden" name="fh_price1" value="<?php echo $row1['fh_price']*2; ?>">
                        <input type="hidden" name="fh_price2" value="<?php echo $row1['fh_price']*3; ?>">
                        <input type="hidden" name="fh_price3" value="<?php echo $row1['fh_price']*4; ?>">
                        <input type="hidden" name="fh_count" value="<?php echo $row1['fh_count']; ?>">
                        <input type="hidden" name="fh_number_guest" value="<?php echo $row1['fh_number_guest']; ?>">
                        <input type="hidden" name="fh_image" value="<?php echo $row1['fh_image']; ?>">
                        <input type="hidden" name="fh_image1" value="<?php echo $row1['fh_image1']; ?>">
                        <input type="hidden" name="fh_image2" value="<?php echo $row1['fh_image2']; ?>">
                        <input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
                        <input type="hidden" name="time_s" value="<?php echo $time_s; ?>">
                        <input type="hidden" name="customer_id" value="<?php echo $idcus; ?>">
                        <button type="submit" class="btn btn-light rounded" style="width: 200px;border-radius: .9rem!important;">More Detail</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
  } }

  mysqli_free_result($result1) ;



     ?>



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
