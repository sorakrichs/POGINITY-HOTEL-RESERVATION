<?php

  require 'connect.php' ;
  session_start();

  if (isset($_POST['booking'])) {


      $idcus = $_POST['customer_id'] ;
      $pen = $_POST['pen'] ;
      $penw = $_POST['penw'] ;
      $por = $_POST['por'] ;
      $puk = $_POST['puk'] ;
      $checkin = $_POST['checkin'] ;
      $time_s = $_POST['time_s'] ;
      $fh_name = $_POST['fh_name'];
      $fh_number_guest = $_POST['fh_number_guest'] ;
      $fh_count = $_POST['fh_count'] ;
      $fh_price = $_POST['fh_price'] ;

      $count = $fh_count-1 ;
      $qcount = "UPDATE food_and_hall SET fh_count='$count' WHERE fh_name LIKE '$fh_name' " ;
      $rescount = mysqli_query($db,$qcount) ;


      $queryh = "INSERT INTO bookings(Price_r,number_of_guest,room_t,special_req1,special_req2,special_req3,special_req4,checkin,time1,customer_id) VALUES('$fh_price','$fh_number_guest','$fh_name','$pen','$penw','$por','$puk','$checkin','$time_s','$idcus')" ;

      $resulth = mysqli_query($db,$queryh) ;




      if ($resulth) {

               header('location: ../home.php') ;

      } else {

         echo "เกิดข้อผิดพลาดโดยไม่ทราบ".mysqli_error($db);
      }

    }
