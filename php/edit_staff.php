<?php
   require 'connect.php' ;
   if (isset($_POST['edits'])) {


     $staff_firstname = $_POST['staff_firstname'] ;
     $staff_lastname = $_POST['staff_lastname'] ;
     $staff_email = $_POST['staff_email'] ;
     $staff_phone = $_POST['staff_phone'] ;
     $staff_address = $_POST['staff_address'] ;
     $staff_password = $_POST['staff_password'] ;
     $staff_id = $_POST['staff_id'] ;

     $qedit_s =  "UPDATE staffs SET staff_firstname='$staff_firstname' , staff_lastname = '$staff_lastname', staff_email = '$staff_email'  , staff_phone = '$staff_phone' , staff_address ='$staff_address'  , staff_password ='$staff_password' WHERE staff_id LIKE $staff_id" ;

     $resultE = mysqli_query($db,$qedit_s) ;

     if ($resultE) {
        header('location: ../staffmanagement.php') ;
     }else {
        echo "ไม่สามารถ Update ข้อมูล";
     }

   }





 ?>
