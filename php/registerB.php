<?php

  require 'connect.php' ;

  if (isset($_POST['submitregister'])) {

  $firstname = $_POST['customer_firstname'] ;
  $lastname = $_POST['customer_lastname'] ;
  $email = $_POST['customer_email'] ;
  $password = $_POST['customer_password'] ;
  $phone = $_POST['customer_phone'] ;



  $sqlre = "SELECT * FROM customers WHERE  customer_email=? " ;
  $stmtr = mysqli_prepare($db,$sqlre) ;

  mysqli_stmt_bind_param($stmtr,"s",$email) ; //ss มาจาก string ถ้าเปน int จะเปน //
  mysqli_execute($stmtr) ;
  $getresult = mysqli_stmt_get_result($stmtr) ;

      session_start();
      $row = mysqli_fetch_array($getresult,MYSQLI_ASSOC) ;
      if ($row['customer_email'] == $email) {

          $_SESSION["exists"] ="This Email is already exists." ;
          header('location: ../Register.php') ;
        // echo "Email is exists";
      }

     else {
      $query = "INSERT INTO customers(customer_firstname,customer_lastname,customer_email,customer_password,customer_phone) VALUES('$firstname','$lastname','$email','$password','$phone')" ;
      $result = mysqli_query($db,$query) ;
      
      if ($result) {
         header('location: ../login.php') ;
      } else {

         echo "เกิดข้อผิดพลาดโดยไม่ทราบ".mysqli_error($db);
      }

    }

  }



 mysqli_close($db) ;

 ?>
