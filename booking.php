<?php
require 'php/connect.php' ;


$qroom1 = " SELECT  * FROM bookings  " ; //สามารถ SELECT room.roomid,roomtype.roomtype

$result1 = mysqli_query($db,$qroom1) ;

 ?>

<?php
    require 'php/loginB.php' ;
    session_start() ;
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
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
    <title>Booking | POGINITY HOTEL</title>

    <style>

        .nolinkline{
            text-decoration: none;
        }

        .padding_top {
            padding-top: 10%;

        }
        .coolip{
            border-radius: .9rem;
            border-width: 0px;
            background-color: gray ;
        }

        .staffhead {
            background-image: url("image/staff01.jpg");
            margin: auto;
            padding-top: 80px;
            padding-bottom: 80px;
            background-size: cover;
            position: relative;
            background-position: center;

        }


        .topicbox {
            border-radius: .9rem;
            text-align: center;
            width: 250px;
            text-decoration: none;
            display: inline-block;
            border: 2px solid gray;
            background:rgba(255, 255, 255,0.7);
        }

        .p {
            font-weight: bold;
            font-family: 'Cordia New';
            color: rgb(66, 73, 73);
            font-size: 9vh;
        }

        .tabmenu {
            background-color: white;
            margin: auto;
            background-position: center;
            width: 80%;
        }
        .menubutt{
            width: 150px;
            height: 80px;
            background-color: white;
        }

        .linkgray{
            text-decoration: none;
            border-bottom: 2px solid rgb(117, 117, 117) ;
            color: rgb(117, 117, 117);
        }
        .linkgray a:link , .linkgray a:visited {
            padding-right: 30px;
            padding-left:30px;
            width: 150px;
            height: 80px;
            text-decoration: none;
            margin: auto;
            color: rgb(117, 117, 117);
            text-align: center;
            background-color:white;
            font-family: 'Cordia New';
            font-size: 45px;
        }

        .linkgray a:hover, .linkgray a:active {
            border-bottom: 2px solid rgb(36, 73, 110) ;
            color: rgb(36, 73, 110);
        }

        .linkblue{
            text-decoration: none;
            border-bottom: 2px solid rgb(33, 47, 61) ;
            color: rgb(33, 47, 61);
        }
        .linkblue a:link , .linkblue a:visited {
            padding-right: 30px;
            padding-left:30px;
            width: 150px;
            height: 80px;
            text-decoration: none;
            margin: auto;
            border-bottom: 2px solid rgb(33, 47, 61) ;
            color: rgb(33, 47, 61);
            text-align: center;
            background-color:white;
            font-family: 'Cordia New';
            font-size: 45px;
        }

        .linkblue a:hover, .linkblue a:active {
            border-bottom: 2px solid rgb(36, 73, 110) ;
            color: rgb(36, 73, 110);
        }

        .menubody {
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 100px;
            background-size: cover;
            position: relative;
            background-position: center;
            margin: auto;
            width: 80%;

        }

        .topic_head{
            font-family: 'Cordia New';
            font-size: 40px;
            font-weight: bold;
            color:rgb(66, 73, 73);

        }

        .topic_img{
            border-top-left-radius: .9rem;
            border-top-right-radius: .9rem;
            border-left: 1px solid gray;
            border-top: 1px solid gray;
            border-right: 1px solid gray;
            width: 25%;
            height: 100px;
            background-color: green;
        }

        .topic_title{
            width: 25%;
            height: 50px;
            text-align: center;
            background-color:white;
            font-family: 'Cordia New';
            font-size: 30px;
            color: gray;
            border: 1px solid gray;
            border-bottom-left-radius: .9rem;
            border-bottom-right-radius: .9rem;
        }

        .crop {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-top-left-radius: .9rem;
            border-top-right-radius: .9rem;
        }

        .searchbox{
            border-radius: .5rem;
            padding-left: 5px;
            padding-top: 5px;
            padding-right: 10px;
            padding-bottom: 5px;
            background-color: white;
        }
        .searchbox form {
            position: relative;
            width: 30rem;
            background: var(--color-brand);
            border-radius: var(--rad);
            }
        .searchbox form{
            width: 100%;
            border: 0;
            color: black;
            font-size: 20px;
            background-color: white;
        }
        .searchbox form input[type="search"] {
            outline: 0;
            width: 80%;
            padding-left: 20px;
            background: white;
            border: 0px;
            appearance: none;
            transition: width 2s;
            transition-property: width, border-radius;
            z-index: 1;
            position: relative;
        }

       .searchbt{
           background-color: transparent;
           color:gray;
           float: right;
           width: 30px;
           height: 30px;
           border: 0px;
           align-items: center;
       }
        .fl{
            background-color:#E5E7E9;
            overflow: visible;
        }

        .clear:after {
            clear: both;
            content: "";
            display: table;
        }

       .fl-left{
           float: left;
           text-align: right;
           width: 25%;
           padding: 20px;
           align-items: right;
           color:gray;
           background-color:#E5E7E9;
       }

       .filterbox{
           float: right;
           text-align: left;
           height: auto;
           background-color: white;
           border: 1px solid gray;
           border-radius: .5rem;
           padding-top: 10px;
           padding-left:20px;
           padding-right:20px;
           padding-bottom:20px;

       }

       .filterbox p{
           font-family: 'Cordia New';
           color: gray;

       }

       .fl-right{
           float: right;
           width: 75%;
           padding: 20px;
           background-color:#E5E7E9;
       }

       /* The container */
        .container {
            display: block;
            position: relative;
            padding-left: 20px;
            padding-right:0px;
            margin-bottom: 5px;
            cursor: pointer;
            font-size: 12px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

    /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 15px;
            width: 15px;
            background-color: white;
            border-radius: .1rem;
            border: 1px solid gray;
        }

        .datebox{
            background-color : white;
            border : 1px solid gray;
            border-radius: .3rem;
            width : 160px;
            padding-right:0px;
            color:gray;
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
        .editbut{
            text-align:center;
            width:60px;
            height: 25px;
            border:1px solid gray;
            border-radius:.9rem;
            background-color:white;
            color:gray;
        }
        .editbut:hover{
            border-radius:.9rem;
            background-color:gray;
            color:white;
        }

        .ft_tab{
            color:gray;
            font-size: 12px;

        }
        input[type="checkbox"] { /* change "blue" browser chrome to yellow */
            filter: grayscale(1) ;
        }
        .newbooking{
            z-index:2;
            position: fixed;
            bottom: 100px;
            left: 80px;

        }
        .newbut{

            height:80px;
            width:80px;
            background-color: #0F3A62;
            text-align:center;
            align-items:center;
            color:white;
            border-radius: 4rem;
            border:0px;

        }
        .newbut:hover{
            background-color: #04233F;
        }
        .center
        {

          margin: 0 auto;
          text-align: center;
          width: 100% ;

        }


    </style>

  </head>
  <body>
    <form method="post">
    <div class="container-fluid" >
        <div class="row text-center align-items-center" >
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
              <?php
              if (empty($_SESSION['firstname'])){ ?>
                       <a href="login.php" class="nav-link color">Login</a>
              <?php }
              else if($_SESSION['firstname']) { ?>

                      <div>
                        <div class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['firstname'] ; ?>
                              </a>
                                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">

                                    <input type="submit" name="logout" class="btn btn-light" formaction="php/logout.php" value="Logout">
                                </div>
                            </div>
                      </div>
               <?php  }  ?>
            </div>
        </div>
    </div>

    <div class="container-fluid staffhead" style="text-align: center;" >
        <div class="topicbox">
            <a href="#" class="nolinkline">
                <div class="p">Staff</div>
            </a>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="tabmenu">
            <span class="menubutt">
                <span class="linkgray" >
                    <a href="staff.php">
                        Home
                    </a>
                </span>
                <span class="linkblue">
                    <a href="#" >
                        Booking
                    </a>
                </span>
            </span>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="tabmenu">

        </div>
    </div>

    <div class="fl clear">

        <div class="fl-left" >
            <div class="filterbox">
                    <p>
                        <h3>
                            FILTER<br/>
                        </h3>
                        <h6>
                            Sort by
                        </h6>
                    </p>
                        <div class="ft_tab">
                            <form>
                                <table>
                                    <tr>
                                        <td><input type="checkbox" id="customer_name"></td>
                                        <td><label for="customer_name">Customer Name</label></td>
                                        <td><input type="checkbox" id="service"></td>
                                        <td><label for="service">Service Tyepe</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="room_no"></td>
                                        <td><label for="room_no">Room No.</label></td>
                                        <td><input type="checkbox" id="price"></td>
                                        <td><label for="price">Price</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="room_type"></td>
                                        <td><label for="room_type">Room Type</label></td>
                                        <td><input type="checkbox" id="tel"></td>
                                        <td><label for="tel">Tel.</label></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    <hr/>
                    <table>
                        <tr>
                            <td><label for="birthday">Fogrm :</td>
                            <td style="padding-left:10px;"><input  type="date" id="birthday" onfocus="(this.placeholder='')" class="datebox" style="padding-left:10px;">
                        </tr>
                        <tr>
                            <td><label for="birthday">To :</td>
                            <td style="padding-left:10px;"><input  type="date" id="birthday" onfocus="(this.placeholder='')" class="datebox" style="padding-left:10px" >
                        </tr>
                    </table>

            </div>
        </div>

        <div class="fl-right">
            <div  class="tab">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>customer_id</th>
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
                      <td><?php echo $row['customer_id']; ?></td>
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
                      <td ><a href="php/delete2.php?booking_id=<?php echo $row['booking_id'] ; ?>" class="center btn btn-light">ลบ</a></td>

                    </tr>
                  <?php

                   }
                   mysqli_free_result($result1) ;


                   ?>

                </table>

            </div>

        </div>
    </div>
    <div class="text-center bottom_page" style="padding-top: 20px;padding-bottom: 20px;">
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
