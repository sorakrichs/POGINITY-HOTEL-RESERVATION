<?php
  require 'php/connect.php' ;

  $qstaff = " SELECT  * FROM staffs  " ; //สามารถ SELECT room.roomid,roomtype.roomtype

  $results = mysqli_query($db,$qstaff) ;

 ?>
<?php
require 'php/loginB.php' ;
session_start() ;
?>

﻿<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
    <title>Staff Management | POGINITY HOTEL</title>

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
            background-image: url("image/mang01.jpg");
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
            width: 250px;
            height: 100px;
            background-color: green;
        }

        .topic_title{
            width: 250px;
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
        .menu-flex{
            display: flex;
            flex-wrap: wrap;
            width:100%;
            padding-right:20px;
            text-align:center;
        }
        .padd{
           width:300px;
           height:200px;
           align-items:left;
        }
        .staff-tab{
           width:1000px;
           height:auto;
            margin:auto;
            border-radius:6px;
            border:1px solid gray;
            background-color: white;
        }
        .staff-tab thead{
            background: #E1FAFE;

        }
        .staff-tab table {

            font-family: arial, sans-serif;
            margin: auto;
            border-radius:5px;
            border-collapse: collapse;

            width:1000px;
            }

        .staff-tab table tr{

            text-align: left;
            padding: 8px;
            }
        .staff-tab table th{
            font-size:20px;
            font-weight: normal;
            text-align:center;
            height: 50px;
        }
        .staff-tab table td{
            font-size:20px;
            border-top:1px solid gray;
            font-family:'Cordia New';
            padding-left : 30px;
            padding-right : 30px;
            padding-top: 3px;
            padding-bottom: 3px;
            text-align:center;
        }



        .staff-tab table td:nth-child(2),.staff-tab table td:nth-child(2){
            text-align:center;
            width: 80px;
        }

        .staff-tab thead tr th:first-child {
            -moz-border-top-left-radius: 5px;
            -webkit-border-top-left-radius: 5px;
            border-top-left-radius: 5px;
            }

         .staff-tab thead tr th:last-child {
            -moz-border-top-right-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            border-top-right-radius: 5px;
            }

        .red-but{
            text-align:center;
            width:60px;
            background-color:red;
            color: white;
            font-size: 20px;
            border-radius: .6rem;
            border:0px
        }

        .red-but:hover{
            background-color:#CA0000;
        }

        .blue-but{
            text-align:center;
            width:60px;
            background-color:white;
            color: #051535;
            border: 1px solid #051535;
            font-size: 20px;
            border-radius: .6rem;
        }
        .blue-but:hover{
            background-color:#051535;
            color: white;
        }
        .newstaff{
             z-index:2;
            position: absolute;
            top: 370px;
            right: 220px;

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


    </style>

  </head>
  <body>
    <div class="container-fluid">
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
                <a href="#" class="nav-link color"><b>POGINITY HOTEL</b></a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">About Us</a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Contact Us</a>
            </div>
            <div class="col top_and_bottom">
              <form  method="post">


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
    <div class="newstaff">
            <a href="staffregister.php">
               <div class="newbut">
                     <i class="fas fa-plus pt-3" style="width:30px;height:auto;"></i>
               </div>

            </a>
    </div>
    <div class="container-fluid staffhead" style="text-align: center;" >
        <div class="topicbox">
            <a href="#" class="nolinkline">
                <div class="p">Manager</div>
            </a>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="tabmenu">
            <span class="menubutt">
                <span class="linkgray" >
                    <a href="manager.php">
                        Home
                    </a>
                </span>
                <span class="linkblue" >
                    <a href="#">
                        Staff Management
                    </a>
                </span>
            </span>
        </div>
    </div>
    <div style="background-color: #E5E7E9;text-align:center;margin:auto;">
        <div class="menubody">
            <div class="staff-tab">
                <table>
                    <thead>
                        <tr >
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Delete</th>
                            <th>Edit</th>

                        </tr>
                    </thead>
                    <?php
                    while ($row_staff=mysqli_fetch_array($results,MYSQLI_ASSOC)) {


                     ?>
                    <tbody>
                        <tr class="text-center">
                            <td ><?php echo $row_staff['staff_firstname'];  ?></td>
                            <td ><?php echo $row_staff['staff_lastname'];  ?></td>
                            <td><?php echo $row_staff['staff_address']; ?></td>
                            <td><?php echo $row_staff['staff_phone']; ?></td>
                            <td ><a href="php/delete3.php?staff_id=<?php echo $row_staff['staff_id'] ; ?>" class="center btn btn-light">Delete</a></td>
                            <td ><a href="editstaff.php?staff_id=<?php echo $row_staff['staff_id'] ; ?>" class="center btn btn-light">Edit</a></td>
                        </tr>

                    </tbody>

                  <?php } ?>
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
