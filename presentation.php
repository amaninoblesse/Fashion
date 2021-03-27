<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Site Vitrine Fashion Boy</title>
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <h1>Fashion Boy</h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>Fashion Boy</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="index.php" class="nav-link scroll-link">Acceuil</a>
            </li>
             <li class="nav-item">
              <a href="galerie.php" class="nav-link scroll-link">Galerie</a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">Nos Produits</a>
            </li>
            <li class="nav-item">
            <div class="ok">

<div class="dropdown">
<button class="dropbtn" onclick="myFunction()" style="color:black; ">Nos Domaines d'activités
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content" id="myDropdown" >
   <a href="service.php">Livraison</a>
   <a href="service.php">Vente en ligne</a>
   <a href="service.php">Prestation</a>
</div>
            </li>
            <li class="nav-item">
              <a href="inscription_visiteur.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="presentation.php" class="nav-link">Qui sommes-nous ?</a>
            </li>
            <li class="nav-item">
              <a href="connexion.php" class="nav-link">Inscription/Connexion</a>
            </li>
            <li class="nav-item">
              <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
            </li>
          </ul>
        </div>

        <a href="cart.php" class="cart-icon">
          <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <img src="./images/entreprise1.jpg" alt="" class="hero-img" />

    <div class="hero-content">
      <h2 style="color: black;"><span class="discount">FASHON BOY </span>EST UNE</h2>
      <h1>
        <span>ENTREPRISE DIRIGEE PAR</span>
        <span>AMANI ET KADJA</span>
      </h1>
    </div>
  </header>

  <!-- Main -->
  <main>
    <section class="advert section">
      <div class="advert-center container">
        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Siège <br />
                social
              </h2>
             
            </div>
          </div>
          <img src="./images/pose1.jpg" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                LE<br />
                BUREAU
              </h2>
            </div>
          </div>
          <img src="./images/pose1.jpg" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                SIEGE <br />
                COMMERCIAL
              </h2>
            </div>
          </div>
          <img src="./images/pose1.jpg" alt="">
        </div>
      </div>
    </section>

    <!-- Featured -->
    <section class="section featured">
     
        <div style=" margin: 100px;">
            <p>Nous sommes une entreprise commerciale basée à abidjan avec des branches dans 6 pays africains et européens.Elle est dirigée par amani kouakou Noé et kadja Blin ayant fait leur études à l'ESaTIC.</p>
        </div>
        
    </section>

    <!-- Brands -->
    <section class="section">
      <div class="brands-center container">
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
      </div>
    </section>
  </main>

   <!-- Footer -->
   <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Modèle</a>
          <a href="#">Don Certificat</a>
          <a href="#">Affiliation</a>
          <a href="#">Speciales</a>
          <a href="#">Carte Site</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">Sur nous</a>
          <a href="#">stratégie privée</a>
          <a href="#">Termes & Conditions</a>
          <a href="#">Contactez Nous</a>
          <a href="#">Carte Site</a>
        </div>
        <div class="footer-center">
          <h3>MON COMPTE</h3>
          <a href="#">MON COMPTE</a>
          <a href="#">Autre Histoire</a>
          <a href="#">Liste souhaitée</a>
          <a href="#">lettre</a>
          <a href="#">Retour</a>
        </div>
        <div class="footer-center">
          <h3>CONTACTEZ NOUS</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            avenue 42 , rue 44, Treichville, CI
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            fashionboy@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            01 42 66 27 16
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
           Trichville,CI
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
</body>

</html>