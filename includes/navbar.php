<?php
  session_start();
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HidalSoft - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
 <!--- <link rel="stylesheet" href="yarleny/css/style.css">
  <link rel="stylesheet" href="yarleny/css/fontawesome.css">
 -->
  <script src="contactanos//js/jquery-3.4.1.js"></script>
  <script src="contactanos//js/script.js"></script>
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#">Caracteristicas</a></li> 
              <li class="nav-item"><a class="nav-link" href="#modalContactForm">Contactanos</a></li>
            </ul>

            <ul class="navbar-right">
                <?php

                    if ($_SESSION['usuario']) {
                        
                        echo(' <li class="nav-item"> <a href="#"> '.$_SESSION['usuario'].' </a> </li> ');

                        if ($_SESSION['esAdmin']){
                            echo(' <li class="nav-item"> <a href="admim/index.php"> <button class="button button-header bg">  '.$_SESSION['esAdmin'].' </button> </a> </li> ');
                        }
                        
                        echo( <li class="nav-item"> <a href="#"> Cerrar Sesion </a> </li> );

                    }else{
                        
                        echo(' <li class="nav-item"> <a href="login.html"> <button class="button button-header bg"> Iniciar Sesión </button> </a> </li> ');
                        
                    }
        
                ?>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->