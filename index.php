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
    <nav class="nav" style="margin-top:-2%">
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
              <a href="#" class="nav-link">
                
              <div class="ok">

                  <div class="dropdown">
                  <button class="dropbtn" onclick="myFunction()" style="color:black; padding-bottom:30px;">Nos Domaines d'activités
                  <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content" id="myDropdown" style="margin-top:40px;">
                     <a href="service.php">Livraison</a>
                     <a href="service.php">Vente en ligne</a>
                     <a href="service.php">Prestation</a>
              </div>
               </div>  
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
    <img src="./images/second.jpg" alt="" class="hero-img" />

    <div class="hero-content">
      <h2><span class="discount">80% </span> DE VENTE</h2>
      <h1>
        <span>STYLISTE HOMME</span>
        <span>MODE D'ACTUALITE</span>
      </h1>
      <a class="btn" href="cart.php">Acheter maintenant</a>
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
                Achète <br />
                pour lui
              </h2>
              <h4>Comme un cadeau</h4>
            </div>
          </div>
          <img src="./images/advert1.png" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Tout <br />
                Style
              </h2>
              <h4>pour homme</h4>
            </div>
          </div>
          <img src="./images/advert2.png" alt="">
        </div>

        <div class="advert-box">
          <div class="dotted">
            <div class="content">
              <h2>
                Surprise <br />
                Copain
              </h2>
              <h4>Surprends le</h4>
            </div>
          </div>
          <img src="./images/advert3.png" alt="">
        </div>
      </div>
    </section>

    <!-- Featured -->
    <section class="section featured">
      <div class="title">
        <h1>Produits populaires</h1>
      </div>

      <div class="product-center container">
        <div class="product">
          <div class="product-header">
            <img src="./images/tshirt3.png" alt="">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#">
              <h3>T-Shirt Homme</h3>
            </a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/tshirt4.jpg" alt="">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/tshirt5.jpg" alt="">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/veste5.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
      </div>
    </section>

    <!--Latest -->
    <section class="section featured">
      <div class="title">
        <h1>Nouveautés</h1>
      </div>

      <div class="product-center container">
        <div class="product">
          <div class="product-header">
            <img src="./images/veste6.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/veste7.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/ech6.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/ech7.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/ech8.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/tshirt3.png" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/tshirt2.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/ech3.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>T-Shirt Homme</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">5000 Frs</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Banner -->
    <section class="section">
      <div class="product-banner">
        <div class="left">
          <img src="./images/collection.jpg" alt="" />
        </div>
        <div class="right">
          <div class="content">
            <h2><span class="discount">80% </span> DE VENTE</h2>
            <h1>
              <span>Collectez vos</span>
              <span>Produits</span>
            </h1>
            <a class="btn" href="cart.php">Acheter maintenant</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
      <div class="testimonial-center container">
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Vraiment vos produits sont très bon.Je suggère une fidelisation pour nous encourager à rester.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile1.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Thank you so much for your initiative.amani and Kadja, you are the best.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile2.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
           J'aime vos styles de vêtement.Cela m'encourage à offrir comme cadeau.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile3.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
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