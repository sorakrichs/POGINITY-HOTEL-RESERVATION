<?php
 require 'connect.php' ;
 session_start();
 if (isset($_POST['edit_cus'])) {

   $id = $_POST['customer_id'] ;
   $firstname = $_POST['customer_firstname'] ;
   $lastname = $_POST['customer_lastname'] ;
   $password = $_POST['customer_password'] ;
   $phone_number = $_POST['customer_phone'] ;

   $qupdate =  "UPDATE customers SET customer_firstname='$firstname' , customer_lastname='$lastname' ,  customer_password = '$password' ,  customer_phone ='$phone_number' WHERE customer_id='$id' ";
   $resultup = mysqli_query($db,$qupdate) ;

   if ($resultup) {

     header('location: ../login.php') ;

   }
   else {
      echo "ไม่สามารถแก้ไขได้" ;
   }

 }
mysqli_close($db) ;

?>
