<?php

  require "connect.php" ;

   if (isset($_POST['submit_login'])) {

      $email = $_POST['customer_email'] ;
      $password =$_POST['customer_password'] ;


 $sqlche = "SELECT customer_firstname,customer_email,customer_password ,customer_id FROM customers WHERE customer_email=? AND customer_password=? " ;
 $stmt = mysqli_prepare($db,$sqlche) ;

 mysqli_stmt_bind_param($stmt,"ss",$email,$password) ;
 mysqli_execute($stmt) ;
 $result_user = mysqli_stmt_get_result($stmt) ;


  $sqlche_s = "SELECT *  FROM staffs WHERE staff_email=? AND staff_password=? " ;
  $stmts = mysqli_prepare($db,$sqlche_s) ;

  mysqli_stmt_bind_param($stmts,"ss",$email,$password) ;
  mysqli_execute($stmts) ;
  $result_staff = mysqli_stmt_get_result($stmts) ;


   $sqlchem = "SELECT *  FROM managers WHERE manager_email=? AND manager_password=? " ;
   $stmtm = mysqli_prepare($db,$sqlchem) ;

   mysqli_stmt_bind_param($stmtm,"ss",$email,$password) ;
   mysqli_execute($stmtm) ;
   $result_manager = mysqli_stmt_get_result($stmtm) ;




 if ($result_user -> num_rows == 1 OR $result_staff -> num_rows == 1 OR $result_manager -> num_rows == 1) {
     session_start();
     $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC) ;
     $row_staff = mysqli_fetch_array($result_staff,MYSQLI_ASSOC) ;
     $row_manager = mysqli_fetch_array($result_manager,MYSQLI_ASSOC) ;


     if ($row_user['customer_email'] == $email) {
       $_SESSION['id'] = $row_user['customer_id'] ;
       $_SESSION['firstname'] = $row_user['customer_firstname'] ;
       header('location: ../home.php') ;
     }else if ($row_staff['staff_email'] == $email) {
       $_SESSION['id'] = $row_staff['staff_id'] ;
       $_SESSION['firstname'] = $row_staff['staff_firstname'] ;
       header('location: ../staff.php') ;
     }else if ($row_manager['manager_email'] == $email) {
       $_SESSION['id'] = $row_manager['manager_id'] ;
       $_SESSION['firstname'] = $row_manager['manager_firstname'] ;
       header('location: ../manager.php') ;
     }

 } else{

   echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง" ;
 }

}

mysqli_close($db) ;


 ?>
