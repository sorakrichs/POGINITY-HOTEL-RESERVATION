<?php
  require 'php/connect.php' ;
  $idcus = $_POST['customer_id'] ;
  $qroom1 = " SELECT  * FROM bookings WHERE customer_id LIKE $idcus  " ; //สามารถ SELECT room.roomid,roomtype.roomtype

  $result1 = mysqli_query($db,$qroom1) ;

session_start()
 ?>


 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
     <link rel="stylesheet" href="home.css">
     <title>Edit Profile</title>

     <style >
     table,th,td
     {
          border : 1px solid black ;
          border-collapse: collapse;

     }
     .center
     {

       margin: 0 auto;
       text-align: center;
       width: 100% ;

     }

            .fl-right{
                float: right;
                width: 75%;
                padding: 20px;
                background-color:#E5E7E9;
            }
            .tab{
                border-radius:.5rem;
                border:1px solid gray;
                color:gray;
            }
            .tab table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                background-color: white;
                border-radius:.5rem;
                }

            .tab table td, .tab table th {

                text-align: left;
                padding: 8px;
                }
            .tab table th{
                font-size:15px;
                font-weight: normal;
                text-align:center;
                height: 50px;
            }
            .tab table td{
                font-size:13px;
                border-top:1px solid gray;
                text-align:center;
            }
            .tab table td:nth-child(3),.tab table td:nth-child(5),.tab table td:nth-child(6){
                text-align:left;
            }
            .tab table td:nth-child(8){
                text-align:right;
            }
            .tab table tr:nth-child(even) {
                background-color: #dddddd;
                }

                        .ft_tab{
                            color:gray;
                            font-size: 12px;

                        }

  </style>
   </head>
   <form method="post">
   <div class="container">
     <div class="row text-center align-items-center">
         <div class="col top_and_bottom border_right">
             <a href="#" class="nav-link color">Room</a>
         </div>
         <div class="col top_and_bottom border_right">
             <a href="#" class="nav-link color">Restaurant</a>
         </div>
         <div class="col top_and_bottom">
             <a href="#" class="nav-link color">Hall</a>
         </div>
         <div class="col top_and_bottom">
             <a href="home.php" class="nav-link color"><b>POGINITY HOTEL</b></a>
         </div>
         <div class="col top_and_bottom border_right">
             <a href="#" class="nav-link color">About Us</a>
         </div>
         <div class="col top_and_bottom border_right">
             <a href="#" class="nav-link color">Contact Us</a>
         </div>
         <div class="col top_and_bottom">
              <?php if (empty($_SESSION['firstname'])){ ?>
                       <a href="login.php" class="nav-link color">Login</a>
              <?php }else if($_SESSION['firstname']) { ?>

                      <div >

                        <div class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['firstname'] ; ?>
                              </a>
                              <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">

                                <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id']; ?>">
                                <input type="submit" name="profile" formaction="php/profileB.php" value="Profile" class="btn btn_light">

                                  <div class="dropdown-divider  "></div>
                                  <input type="submit" name="logout" class="btn btn_light" formaction="php/logout.php" value="Logout">
                                </div>
                            </div>
                      </div>
               <?php  }  ?>
            </div>
     </div>
 </div>

     <div class="container-fluid img_1 top_pad" style="padding-bottom:50px;" >
         <div class=" container width_10"  style="width :100%">

                <div  class="tab ">
               <h1 class="center pb-3 pt-2">ข้อมูลการจอง</h1>

       <table  style="width:100%">
          <tr class="center">
             <th>ID</th>
             <th>ทำการจอง</th>
             <th>จำนวนเงิน</th>
             <th>สำหรับจำนวน</th>
             <th>เพิ่มเติม1</th>
             <th>เพิ่มเติม2</th>
             <th>เพิ่มเติม3</th>
             <th>เพิ่มเติม4</th>
             <th>Check IN</th>
             <th>Check OUT</th>
             <th>TIME</th>
             <th>DELETE</th>

          </tr>
          <?php


            while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {



           ?>
           <tr class="center">
             <td><?php echo $row['booking_id']; ?></td>
             <td><?php echo $row['room_t']; ?></td>
             <td><?php echo $row['Price_r']; ?></td>
             <td><?php echo $row['number_of_guest']; ?></td>
             <td><?php echo $row['special_req1']; ?></td>
             <td><?php echo $row['special_req2']; ?></td>
             <td><?php echo $row['special_req3']; ?></td>
             <td><?php echo $row['special_req4']; ?></td>
             <td><?php echo $row['checkin']; ?></td>
             <td><?php echo $row['checkout']; ?></td>
             <td><?php echo $row['time1']; ?></td>
             <td ><a href="php/delete.php?booking_id=<?php echo $row['booking_id'] ; ?>" class="center btn btn-light">ลบ</a></td>

           </tr>
            </form>
         <?php
         }

           mysqli_free_result($result1) ;

           mysqli_close($db) ;

          ?>
       </table>

   </div>
         </div>
     </div>
     <div class="container-fluid text-center bottom_page padding_top">
         <h6>Copyright 2020 Poginity Ltd. All Rights Reserved.</h6>
         <h6>POGINITY Hotel. นาจอมเทียน, พัทยา (คลิ๊กเพื่อดูแผนที่) 095-156-2654 Pogihotel@gmail.com</h6>
     </div>


     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper.js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

     <!-- Option 2: Separate Popper.js and Bootstrap JS
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
     -->
   </body>
 </html>
