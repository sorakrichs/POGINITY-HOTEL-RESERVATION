<?php

  require 'connect.php' ;
  session_start();

  if (isset($_POST['booking'])) {

      $summaryprice =$_POST['summaryprice1'] ;
      $idcus = $_POST['customer_id'] ;
      $car = $_POST['car'] ;
      $food = $_POST['food'] ;
      $pahom = $_POST['pahom'] ;
      $mon = $_POST['mon'] ;
      $checkin = $_POST['checkin'] ;
      $checkout = $_POST['checkout'] ;
      $room = $_POST['room_t'];
      $number_of_guest = $_POST['number_of_guest'] ;
      $count = $_POST['count'] ;

      $count = $count-1 ;
      $qcount = "UPDATE room_type SET count_room='$count' WHERE room LIKE '$room' " ;
      $rescount = mysqli_query($db,$qcount) ;



      $query = "INSERT INTO bookings(Price_r,number_of_guest,room_t,special_req1,special_req2,special_req3,special_req4,checkin,checkout,customer_id) VALUES('$summaryprice','$number_of_guest','$room','$car','$food','$pahom','$mon','$checkin','$checkout','$idcus')" ;

      $result = mysqli_query($db,$query) ;




      if ($result) {

                  header('location: ../home.php') ;



      } else {

         echo "เกิดข้อผิดพลาดโดยไม่ทราบ".mysqli_error($db);
      }

    }
