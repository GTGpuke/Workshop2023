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
      
      <title>Akwakwa® - Accueil</title>
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
                        <h1 class="banner_taital">Aquariums exceptionnels</h1>
                        <p class="banner_text">Akwakwa® est reconnu mondialement pour la qualité, le niveau de détails, de finitions et d'efforts misent en place pour chaque commandes.</p>
                        <div class="read_bt"><a href="#">En savoir plus</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Une qualité supérieure</h1>
                        <p class="banner_text">Akwakwa® s'engage à livrer à ses clients des produits avec des matériaux de qualité, d'origine renouvelable et suivant les normes européens.</p>
                        <div class="read_bt"><a href="#">En savoir plus</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Pour tous les budgets</h1>
                        <p class="banner_text">Le but d'Akwakwa® est de transmettre la passion de l'aquariophilie à tous, pour cela, elle s'engage depuis ça création à correspondre à tous les budgets.</p>
                        <div class="read_bt"><a href="#">En savoir plus</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Nos services</h1>
            <p class="services_text">Nous proposons de nombreux services, allant de la commande de produits standards jusqu'à la réalisations de vos aquariums les plus fous</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="images/img-1.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Entretiens</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-2.png" class="services_img"></div>
                     <div class="btn_main active"><a href="#">Petits aquariums</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-3.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Grands aquariums</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">À propos de nous</h1>
                     <p class="about_text">Créé en 2007 par un groupe d'étudiant, Akwakwa® a voulu s'imposer dans le marché de l'aquarium en proposant à ses clients des services personnalisés et abordables, en respectant l'environnement et le bien être des poissons au maximum, 15ans plus tard, l'entreprise compte une grande équipe d'artisans spécialisé dans la frabrication d'aquarium pour répondre le mieux à tous types de projets...  </p>
                     <div class="readmore_bt"><a href="#">En savoir plus</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="images/about-img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">Notre savoir-faire</h1>
            <p class="blog_text">Dans la vidéo si dessous, vous verrez nos méthodes de fabrications d'aquariums, ainsi vous pourrez admirrer tout le soin et l'attention que nous portons à nos produits.</p>
            <div class="play_icon_main">
               <div class="play_icon"><a href="https://www.youtube.com/watch?v=KVW-OjaHwj4"><img src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">Témoignages</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">David</h4>
                                 <p class="customer_text">Client</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">David</h4>
                                 <p class="customer_text">Client</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">David</h4>
                                 <p class="customer_text">Client</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section start -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Pourquoi Akwakwa?</h1>
            <p class="choose_text">Akwakwa est le numéro #1 dans la confection d'aquarium personnalisés, pour toutes les tailles et tous les budgets! Nous travaillons aussi bien avec des particuliers ou des professionnels.</p>
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
               <div class="call_text"><a href="#">customer_service@akwakwa.com</a></div>
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
            <p class="copyright_text">2022 All Rights Reserved. Design by Akwakwa IT service.</p>
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