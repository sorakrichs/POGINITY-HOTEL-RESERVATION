<?php
require 'php/staff_register.php' ;
session_start();
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
    <title>Register Staff | POGINITY HOTEL</title>

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
            width: 1000px;

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
        .editbbox{
            width: 950px;
            background-color: white;
            border: 1px solid  #0F3A62;
            border-radius: 3rem;
            padding: 50px;
            margin: auto;
        }
        .al-left{
            text-align: left;
        }
        .al-right{
            text-align: right;
        }
        .headfont{
            font-size: 40px;
            font-weight: bolder;
            color: #0F3A62;
            line-height: 45px;
        }
        .descfont{
            font-size: 12px;
            font-weight: bolder;
            color: #0F3A62;
            line-height: 15px;

        }
        .formfont{
            font-size: 15px;
            color: gray;

        }
        .formfont input[type=text] , .formfont input[type=tel]{
            border: 0px;
            border-bottom: 1px solid gray;
            width: 300px;
        }
        .idfont{
            font-size: 25px;
            font-weight: bolder;
            color: gray;
            line-height: 15px;
            float: right;
        }
        .formal{
            margin:auto;
            width: 850px;
            border: 1px solid black;
        }
        .servicetab{
            width:850px;

        }
        .servicetab td{
            width:180px;
        }
        .servicetab label{
            border: 1px solid #0F3A62;
            width: 120px;
            border-radius: 2rem;
            padding-left: 15px;
            color: #0F3A62;
            font-weight: bold;
        }
        .servicetab label:hover{
            border: 1px solid #092947;
            color:#092947;
        }
        .servicetab select{
            border: 1px solid #0F3A62;
            width: 150px;
            border-radius: 2rem;
            padding-left: 15px;
            color: #0F3A62;
            font-weight: bold;
        }
        .servicetab input[type="button"]{
            border: 0px;
            width: 150px;
            border-radius: 2rem;
            text-align: center;
            color: white;
            font-weight: bold;
            background-color: #0F3A62;;
        }
        .servicetab input[type="button"]:hover{
            color: white;
            background-color: #092947;
        }
        .durationtab{
            width:500px;
        }
        .durationtab td:nth-child(1){
            width:80px;

        }
        .durationtab td:nth-child(2){
            width:50px;

        }
        .durationtab td:nth-child(3){
            width:100px;

        }
        .durationtab input{
            border: 1px solid #0F3A62;
            padding-left: 10px;
            border-radius: 2rem;
            color: #0F3A62 ;
            font-weight: bold;
        }
        input[type="radio"] { /* change "blue" browser chrome to yellow */
            filter: grayscale(1) ;
        }
        .savelayout{
            padding-top: 50px;
        }
        .savebut{
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: .5rem;
            font-size: 20px;
            color:white ;
            background-color: #0F3A62;
            border: 0px;
        }
        .savebut:hover{
            color:white ;
            background-color: #051f38;
        }
        .ccbut{
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: .5rem;
            font-size: 20px;
            color:white ;
            background-color: red;
            border: 0px;
        }
        .ccbut:hover{
            color:white ;
            background-color: rgb(173, 0, 0);
        }
        .closebut{
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: .5rem;
            font-size: 20px;
            color:#0F3A62 ;
            background-color:white;
            border: 1px solid  #0F3A62;
        }
        .closebut:hover{
            color: #051f38;
            background-color:white;
            border: 1px solid  #051f38;
        }
        .calc{
            width: 250px;
            text-align: right;
            color:#0F3A62 ;
            right:100px;
            bottom: 220px;
            position: absolute;
        }
        .calc hr{
            color:#0F3A62 ;

        }
        .calc button{
            color:#0F3A62 ;
            font-weight: bold;
            border-radius: 2rem;
            border: 1px solid #0F3A62 ;
            background-color: white;
            padding-left: 10px;
            padding-right: 10px;
        }
        .calc td:nth-child(1){
            width: 80px;
            color: gray;
            font-size: 15px;
            text-align: left;
        }
        .calc td:nth-child(2){
            width: 170px;
            color: #0F3A62 ;
            font-weight: bold;
            font-size: 40px;
        }
        .circle{
            width: 200px;
            height: 200px;
            border: 1px solid #0F3A62;
            border-radius: 7rem;
            float: right;

        }
        .small-cc{
            width: 50px;
            height: 50px;
            border: 1px solid #0F3A62;
            border-radius: 2rem;
            background-color: white;
            right: 570px;
            bottom: 160px;
            position: absolute;

        }
        .registerform{
            width: 415px;

            float: left;

        }
        .registerform input{
            background-color: #E5E7E9;
            border: 1px solid gray;
            color: gray;
            border-radius: .7rem;
            padding: 5px;
            margin: 3px;
            width: 400px;
        }
        .registerform input[type=checkbox]{
            background-color: #E5E7E9;
            border: 1px solid #0F3A62;
            color: gray;
            border-radius: .8rem;
            padding: 5px;
            margin: 3px;
            width: 15px;

        }
        .register-left{
            margin-right: 80px;
            align-items: top;
        }
        .imgupload{
            height:200px;
            width:200px;
            text-align:center;
            align-items:center;
            color: #0F3A62;
            margin: auto;
            border:0px;}
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
                <span class="linkgray" >
                    <a href="staffmanagement.php">
                        Staff Management
                    </a>
                </span>
                <span class="linkblue" >
                    <a href="#">
                        Register Staff
                    </a>
                </span>
            </span>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #E5E7E9;">
        <div class="menubody">
            <div class="editbbox">
                <table>
                <h1><?php  if (isset($_SESSION['exists'])) :
                  echo $_SESSION['exists'];
                  unset($_SESSION['exists']) ;
                   endif ?></h1>
                    <tr>
                        <td style="width:435px;">
                            <div class="al-right register-left">
                                <p class="headfont">Register Staff</p>
                                <span class="descfont ">by Maranee Imphilomlak, Manager position</span>


                                    </div>
                                </div>

                            </div>
                        </td>
                        <td class="registerform">
                            <br>

                                <input type="text" name="staff_firstname" placeholder="Name" style="width: 195px;"><input type="text" name="staff_lastname" placeholder="Lastname" style="width: 198px;"><br>
                                <input type="email" name="staff_email" placeholder="E-mail"><br>
                                <input type="password"  name="staff_password" placeholder="Password" pattern="(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])[A-Za-z0-9]{8,32}" title="Password length must be 8-32 and contain at least one 'A-Z', 'a-z' and 'number'. (exclude special characters.)" required><br>
                                <input type="tel" name="staff_phone" placeholder="Tel." pattern="[0-9]{1,}" title="Phone Number must be only number." required><br>
                                <input type="text" name="staff_address" placeholder="Address"><br>


                            <div class="al-right pt-3 text-center " style="margin-right: 10px;">
                                <button type="submit" name="staffcheck" class="savebut" formaction="php/staff_register.php">Register</button>
                            </div>
                        </td>
                    </tr>
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
