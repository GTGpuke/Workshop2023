<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html lang="fr">
   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      
      <title>EcoProlo® - Accueil</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      
      <link rel="stylesheet" type="text/css" href="css/style.css">
      
      <link rel="stylesheet" href="css/responsive.css">
      
      <link rel="icon" href="images/akwakwa_logo.png" type="image/icon type">
      
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
       
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="landing.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="carte.php">Carte</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="calendrier.php">Calendrier Poubelle</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="actualite.php">Actualités</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="commentaire.php">Commentaires</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="account.php">👤</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="landing.php"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="landing.php">Accueil</a></li>
                     <li><a href="carte.php">Carte</a></li>
                     <li><a href="calendrier.php">Calendrier Poubelle</a></li>
                     <li><a href="actualite.php">Actualités</a></li>
                     <li><a href="commentaire.php">Commentaires</a></li>
                     <li><a href="account.php">👤 Compte</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Service exceptionnel</h1>
                        <p class="banner_text">EcoProlo® est reconnu nationalement pour la qualité de ses services, ainsi que de son service client, la carte est régulièrement mise à jour.</p>
                        <div class="read_bt"><a href="#">En savoir plus</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Une communauté écoutée</h1>
                        <p class="banner_text">EcoProlo® s'engage à écouter sa communauté, et de ne pas mettre de publicités sur son site.</p>
                        <div class="read_bt"><a href="#">En savoir plus</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Pour tout le monde!</h1>
                        <p class="banner_text">Le but d'EcoProlo® est de transmettre la passion des poubelles et du recyclage à tous, pour cela, elle s'engage depuis ça création à correspondre à tout utilisateurs.</p>
                        <div class="read_bt"><a href="#">En savoir plus</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Pourquoi EcoProlo?</h1>
            <p class="choose_text">EcoProlo est le numéro #1 dans le référencement, dans la plupart des villes de France! </p>
            <br><br>
            <div class="read_bt_1"><a href="#">En savoir plus</a></div>
            <div class="newsletter_box">
               <h1 class="let_text">Besoin de nous parler?</h1>
               <div class="getquote_bt"><a href="#">Contactez nous!</a></div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="input_btn_main">
               <input type="text" class="mail_text" placeholder="Entrez votre mail" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Abonnez-vous!</a></div>
            </div>
            <div class="location_main">
               <div class="call_text"><img src="images/call-icon.png"></div>
               <div class="call_text"><a href="#">Appelez 0478953514</a></div>
               <div class="call_text"><img src="images/mail-icon.png"></div>
               <div class="call_text"><a href="#">customer_service@ecoprolo.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by EcoProlo IT service.</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>