<?php
require 'connect.php' ;
session_start();

 if (isset($_POST['logout'])) {

     unset($_SESSION['firstname']) ;

     header('location: ../home.php') ;

 }



 ?>
