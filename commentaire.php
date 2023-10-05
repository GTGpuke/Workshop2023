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
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>EcoProlo® - Commentaires</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/akwakwa_logo.png" type="image/icon type">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
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
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Demander à être rappelé</h1>
          <div class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Nom" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Numéro de téléphone" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Email" name="Email">
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Massage"></textarea>
             </div>
             <div class="send_btn"><a href="#">Envoyer</a></div>
          </div>
        </div>
      </div>
      <!-- contact section end -->
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