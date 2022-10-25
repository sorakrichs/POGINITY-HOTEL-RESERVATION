
 <?php
   require 'connect.php' ;


   $booking_id = $_GET['booking_id'] ;



    $qb = "SELECT * FROM bookings WHERE booking_id LIKE $booking_id" ;
    $reb = mysqli_query($db,$qb) ;
    $rowb = mysqli_fetch_array($reb,MYSQLI_ASSOC) ;

    $room = $rowb['room_t'] ;
    $price =$rowb['Price_r'] ;


    $qcount = "SELECT * FROM room_type WHERE room LIKE '$room' " ;
    $recount = mysqli_query($db,$qcount) ;
    $rowcount = mysqli_fetch_array($recount,MYSQLI_ASSOC) ;

    $qcount1 = "SELECT * FROM food_and_hall WHERE fh_name LIKE '$room' " ;
    $recount1 = mysqli_query($db,$qcount1) ;
    $rowcount1 = mysqli_fetch_array($recount1,MYSQLI_ASSOC) ;

    if ($rowcount) {
        $count = $rowcount['count_room']+1 ;
        $qcountpls = "UPDATE room_type SET count_room='$count'  WHERE room LIKE '$room' " ;
        $recountplus = mysqli_query($db,$qcountpls) ;

    }else if($rowcount1)
    {
       if ($rowcount1['fh_price'] == 1599) {
             $price = $price/1599 ;
             $count = $rowcount1['fh_count']+$price ;
       }elseif ($rowcount1['fh_price'] == 999) {
            $price = $price/999 ;
            $count = $rowcount1['fh_count']+$price ;
       }else {
              $count = $rowcount1['fh_count']+1 ;
       }

       $qcountpls1 = "UPDATE food_and_hall SET fh_count='$count'  WHERE fh_name LIKE '$room' " ;
       $recountplus1 = mysqli_query($db,$qcountpls1) ;
    }


    $qcountpls = "UPDATE room_type SET count_room='$count'  WHERE room LIKE '$room' " ;
    $recountplus = mysqli_query($db,$qcountpls) ;


    $qdel =  "DELETE  FROM bookings  WHERE booking_id ='$booking_id' " ;
    $resultd = mysqli_query($db,$qdel) ;

    if ($resultd) {

      header('location: ../booking.php') ;

    }else {
      echo "ไม่่สามารถแก้ไขได้ได้";
    }


    mysqli_close($db) ;

  ?>
