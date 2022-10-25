
 <?php
   require 'connect.php' ;


   $staff_id = $_GET['staff_id'] ;


    $qdel =  "DELETE  FROM staffs  WHERE staff_id ='$staff_id' " ;
    $resultd = mysqli_query($db,$qdel) ;

    if ($resultd) {

      header('location: ../manager.php') ;

    }else {
      echo "ไม่่สามารถแก้ไขได้ได้";
    }


    mysqli_close($db) ;

  ?>
