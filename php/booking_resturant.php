<?php

  require 'connect.php' ;
  session_start();

  if (isset($_POST['bookingres'])) {


      $idcus = $_POST['customer_id'] ;
      $optradio = $_POST['optradio'] ;
      $checkin = $_POST['checkin'] ;
      $time_s = $_POST['time_s'] ;
      $fh_name = $_POST['fh_name'];
      $fh_number_guest = $_POST['fh_number_guest'] ;
      $fh_count = $_POST['fh_count'] ;
      $fh_price = $_POST['fh_price'] ;

      if ($fh_price == 1599) {
          $count = $optradio/1599 ;
      } elseif ($fh_price == 999) {
          $count = $optradio/999 ;
      }
      $count = $fh_count-$count ;
      $qcount = "UPDATE food_and_hall SET fh_count='$count' WHERE fh_name LIKE '$fh_name' " ;
      $rescount = mysqli_query($db,$qcount) ;


      $queryf = "INSERT INTO bookings(Price_r,room_t,number_of_guest,checkin,time1,customer_id) VALUES('$optradio','$fh_name','$fh_number_guest','$checkin','$time_s','$idcus')" ;

      $resultf = mysqli_query($db,$queryf) ;




      if ($resultf) {

               header('location: ../home.php') ;

      } else {

         echo "เกิดข้อผิดพลาดโดยไม่ทราบ".mysqli_error($db);
      }

    }
