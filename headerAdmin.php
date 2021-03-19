<?php
   require 'php/verificaLogin.php';
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>RealTech Automação</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="" />
      <script>
         addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
            window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!-- //For clients slider -->
      <link href="css/lsb.css" rel="stylesheet" type="text/css">
      <!--gallery lsb lightbox-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <link href="css/estilo.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="images/logo/danger.ico">
   </head>
   <body>
      <div class="header-outs" id="home">
         <div class="header-bar">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                  <ul class="navbar-nav ">
                     <li class="logo">
                        <a href="indexAdmin.php"><img src="images/logo/logofinal.png"/></a>
                     </li>
                     <li class="nav-item">
                        <a href="php/sair.php" class="nav-link">Sair</a>
                     </li>
                  </ul>
            </nav>
         </div>