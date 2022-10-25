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
    <title>Staff | POGINITY HOTEL</title>

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
           width:320px;
           height:200px;
           align-items:left;
        }

    </style>

  </head>
  <body>
    <form method="post">
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
                <span class="linkblue" >
                    <a href="#" target="_blank">
                        Home
                    </a>
                </span>

            </span>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #E5E7E9;">
        <div class="menubody">
            <p class="topic_head">Management</p>

            <div class="menu-flex">
                 <div class="padd">
                        <a href="booking.php" class="nolinkline">
                            <div class="topic_img">
                                <image src="image/staff02.jpg" class="crop">
                            </div>
                            <div class="topic_title">
                                Booking
                            </div>
                        </a>
                </div>


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
