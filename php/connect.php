<?php
   $db = mysqli_connect("localhost","root","","poginity_hotel") ;

   if (mysqli_connect_errno()) {
   echo "ไม่สามารถเชื่อมต่อได้".mysqli_connect_error() ;
      }
mysqli_set_charset($db,'utf8') ;



 ?>
