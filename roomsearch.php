<?php
   require 'php/connect.php' ;
   $checkin = $_POST['checkin'] ;
   $checkout = $_POST['checkout'] ;
   $idcus =$_POST['customer_id'] ;




   $qroom1 = " SELECT room_type.room , type.typename , room_type.person_amount , room_type.count_room , room_type.image , room_type.price_room, room_type.image1, room_type.image2 FROM room_type  INNER JOIN type ON room_type.type_id11 = type.type_id11 WHERE room_type.type_id11 LIKE 1 " ; //สามารถ SELECT room.roomid,roomtype.roomtype

   $result1 = mysqli_query($db,$qroom1) ;

   $qroom2 = " SELECT room_type.room , type.typename , room_type.person_amount , room_type.count_room , room_type.image , room_type.price_room, room_type.image1, room_type.image2 FROM room_type  INNER JOIN type ON room_type.type_id11 = type.type_id11 WHERE room_type.type_id11 LIKE 2 " ; //สามารถ SELECT room.roomid,roomtype.roomtype

   $result2 = mysqli_query($db,$qroom2) ;


   $calculate =strtotime("$checkin")-strtotime("$checkout");
   $summary=floor($calculate / 86400);

   $summarytest = $summary ;
   if ($summarytest>=0) {
         header('location: login.php') ;
   } else {
       $summaryre = abs($summary) ;
   }


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
        .img_4 {
    background-image: url(image/View4.jpg);
    background-size: cover;
    height: 60vh;
    background-position: center;
}

.img5{
    background-image: url(image/Room2.jpg);
}

.back_color_blues {
    background-color: rgb(129, 213, 228);
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
    </style>
  </head>
  <body>
  <form  method="post">
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
                        <input type="date" id="checkin" name="checkin1" value="<?php echo $checkin ; ?>">
                        <input type="hidden" id="checkin"name="checkout1" value="<?php echo $summary ; ?>">
                    </div>
                    <div class="col-auto">
                        <b><label for="checkout">CHECK OUT</label></b>
                        <input type="date" id="checkout" class="form_field" value="<?php echo $checkout ; ?>">
                    </div>

            </form>
        </div>
    </div>

    </div>

    <div class="alert back_color_blue">
       <h1>Ocean view</h1>
    </div>

  <?php

   while ($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {

          $summary1 = $summaryre*$row1['price_room'] ;
          if ($row1['count_room'] == 0) {

          }else{
   ?>






    <div class="container width_2 text-center align-items-center " style="margin-bottom :50px">
        <div class="row justify-content-md-center align-items-center border ">
            <div class="col-auto">
                <img src="image/<?php echo $row1['image']; ?>" width="400px">

            </div>
            <div class="col-auto p-2 text-left align-items-center">
              <h3><?php echo $row1['room']  ; ?></h3>
                <h5>จำนวนห้องที่เหลือ: <?php echo $row1['count_room']; ?></h5>
                <h5>สำหรับผู้เข้าพัก: <?php echo $row1['person_amount']; ?> คน</h5>


                <div class="row pt-5">
                    <div class="col">
                      <h2><?php echo $row1['price_room']; ?>THB</h2>
                    </div>


                    <div class="col pt-1">
                       <form action="room_booking.php" method="post">
                        <input type="hidden" name="summary1"  value="<?php echo $summary1 ; ?>">
                        <input type="hidden" id="checkin" name="checkin1" value="<?php echo $checkin ; ?>">
                        <input type="hidden" id="checkout" class="form_field" name="checkout1" value="<?php echo $checkout ; ?>">
                        <input type="hidden" name="customer_id" value="<?php echo $idcus; ?>">
                        <input type="hidden" name="room_t" value="<?php echo $row1['room']; ?>">
                        <input type="hidden" name="number_of_guest" value="<?php echo $row1['person_amount']; ?>">
                        <input type="hidden" name="count" value="<?php echo $row1['count_room']; ?>">
                        <input type="hidden" name="image" value="<?php echo $row1['image']; ?>">
                        <input type="hidden" name="image1" value="<?php echo $row1['image1']; ?>">
                        <input type="hidden" name="image2" value="<?php echo $row1['image2']; ?>">
                        <button type="submit" name="more1" class="btn btn-light rounded" style="width: 200px;border-radius: .9rem!important;">More Detail</button>
                          </form>
                    </div>



                </div>
            </div>
        </div>
    </div>


    <?php
  }  }

    mysqli_free_result($result1) ;


     ?>

     <div class="alert back_color_blue">
        <h1>Town view</h1>
     </div>
   <?php

    while ($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {

      $summary1 = $summaryre*$row2['price_room'] ;

      if ($row2['count_room'] == 0) {

      }else{

    ?>






     <div class="container width_2 text-center align-items-center" style="margin-bottom :50px">
         <div class="row justify-content-md-center align-items-center border">
             <div class="col-auto">
              <img src="image/<?php echo $row2['image']; ?>" width="400px">
             </div>
             <div class="col-auto p-2 text-left justify-content-center align-items-center">
               <h3><?php echo $row2['room'] ; ?></h3>
               <h5>จำนวนห้องที่เหลือ: <?php echo $row2['count_room']; ?></h5>
               <h5>สำหรับผู้เข้าพัก: <?php echo $row2['person_amount']; ?> คน</h5>

                 <div class="row pt-5">
                     <div class="col">
                       <h2><?php echo $row2['price_room']; ?> THB</h2>
                     </div>


                     <div class="col pt-1">
                           <form action="room_booking.php" method="post">
                          <input type="hidden" id="checkin" name="summary1"  value="<?php echo $summary1 ; ?>">
                          <input type="hidden" id="checkin"name="checkin1" value="<?php echo $checkin ; ?>">
                          <input type="hidden" id="checkout" class="form_field"name="checkout1" value="<?php echo $checkout ; ?>">
                          <input type="hidden" name="customer_id" value="<?php echo $idcus; ?>">
                          <input type="hidden" name="room_t" value="<?php echo $row2['room']; ?>">
                          <input type="hidden" name="number_of_guest" value="<?php echo $row2['person_amount']; ?>">
                          <input type="hidden" name="count" value="<?php echo $row2['count_room']; ?>">
                          <input type="hidden" name="image" value="<?php echo $row2['image']; ?>">
                          <input type="hidden" name="image1" value="<?php echo $row2['image1']; ?>">
                          <input type="hidden" name="image2" value="<?php echo $row2['image2']; ?>">
                         <button type="submit" name="more1" class="btn btn-light rounded" style="width: 200px;border-radius: .9rem!important;">More Detail</button>
                            </form>
                     </div>



                 </div>
             </div>
         </div>
     </div>



     <?php
  }   }

     mysqli_free_result($result2) ;


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
