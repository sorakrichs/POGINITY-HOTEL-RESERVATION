<?php

  require 'connect.php' ;

  if (isset($_POST['staffcheck'])) {

  $staff_firstname= $_POST['staff_firstname'] ;
  $staff_lastname = $_POST['staff_lastname'] ;
  $staff_email = $_POST['staff_email'] ;
  $staff_phone = $_POST['staff_phone'] ;
  $staff_password = $_POST['staff_password'] ;
  $staff_address = $_POST['staff_address'] ;


  $sqlres = "SELECT * FROM staffs WHERE  staff_email=? " ;
  $stmtrs = mysqli_prepare($db,$sqlres) ;

  mysqli_stmt_bind_param($stmtrs,"s",$staff_email) ; //ss มาจาก string ถ้าเปน int จะเปน //
  mysqli_execute($stmtrs) ;
  $getresults = mysqli_stmt_get_result($stmtrs) ;

      session_start();
      $rows = mysqli_fetch_array($getresults,MYSQLI_ASSOC) ;
      if ($rows['staff_email'] == $staff_email) {

          $_SESSION["exists"] ="This Email is already exists." ;
          header('location: ../staffregister.php') ;
          // echo "Email is exists";
      }

     else {

      $query8 = "INSERT INTO staffs(staff_firstname,staff_lastname,staff_email,staff_password,staff_phone,staff_address) VALUES('$staff_firstname','$staff_lastname','$staff_email','$staff_password','$staff_phone','$staff_address')" ;
      $result8 = mysqli_query($db,$query8) ;


      if ($result8) {
         header('location: ../manager.php') ;
      } else {

         echo "เกิดข้อผิดพลาดโดยไม่ทราบ".mysqli_error($db);
      }

    }

  }



 mysqli_close($db) ;

 ?>
