<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Echarpes Homme</title>
</head>

<body>
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
                        <a href="../index.php" class="nav-link">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="../galerie.php" class="nav-link scroll-link">Galerie</a>
                      </li>
                    <li class="nav-item">
                        <a href="../product.php" class="nav-link">Nos Produits</a>
                    </li>
                    <li class="nav-item">
                    <div class="ok">

<div class="dropdown">
<button class="dropbtn" onclick="myFunction()" style="color:black;">Nos Domaines d'activités
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content" id="myDropdown" >
   <a href="../service.php">Livraison</a>
   <a href="../service.php">Vente en ligne</a>
   <a href="../service.php">Prestation</a>
                    </li>
                    <li class="nav-item">
                        <a href="../inscription_visiteur.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="../presentation.php" class="nav-link">Qui sommes-nous ?</a>
                    </li>
                    <li class="nav-item">
                        <a href="../cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                    </li>
                </ul>
            </div>

            <a href="../cart.php" class="cart-icon">
                <i class="bx bx-shopping-bag"></i>
            </a>

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>Tous nos Produits</h1>
            <form>
                <div class="wrapper">
                    <div class="navbar">
                        <ul>
                            <li><a href="survetement_veste.php" class="a_parent">
                                <div class="wrap">
                                    <span class="icon">
                                        <i class="fas fa-home" aria-hidden="true"></i>
                                    </span>
                                    <span class="text" style="margin-right: 30px;">Vestes</span>
                                </div>
                            </a></li>
                            <li><a href="#" class="a_parent">
                                <div class="wrap">
                                    <span class="icon">
                                        <i class="fas fa-volleyball-ball" aria-hidden="true"></i>
                                    </span>
                                    <span class="text" style="margin-right: 30px;">Accessoires</span>
                                </div>
                                </a>
                                <div class="dd_menu">
                                    <ul>
                                        <li>
                                            <a href="echarpe.php" class="dd_menu_a">
                                                <div class="wrap">
                                                    <span class="icon">
                                                    <i class="fas fa-running" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="text">
                                                    Echarpes
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"  class="dd_menu_a">
                                                <div class="wrap">
                                                    <span class="icon">
                                                    <i class="fas fa-biking" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="text">Chapeaux</span>
                                                </div>
                                            </a>
                                            <div class="dd_submenu">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <div class="wrap">
                                                                <span class="icon">
                                                                <i class="fas fa-running" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="text">
                                                                Chapeaux 1
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="accessoires.php">
                                                            <div class="wrap">
                                                                <span class="icon">
                                                                <i class="fas fa-biking" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="text">Chapeaux 2</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="accessoires.php">
                                                            <div class="wrap">
                                                            <span class="icon">
                                                            <i class="far fa-futbol" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="text">Chapeaux 3</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="accessoires.php">
                                                            <div class="wrap">
                                                            <span class="icon">
                                                            <i class="fas fa-swimmer" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="text">Chapeaux 4</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"  class="dd_menu_a">
                                                <div class="wrap">
                                                <span class="icon">
                                                <i class="far fa-futbol" aria-hidden="true"></i>
                                                </span>
                                                <span class="text">Lunettes</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"  class="dd_menu_a">
                                                <div class="wrap">
                                                <span class="icon">
                                                <i class="fas fa-swimmer" aria-hidden="true"></i>
                                                </span>
                                                <span class="text">Ceintures</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#" class="a_parent">
                                <div class="wrap">
                                    <span class="icon">
                                    <i class="fas fa-utensils" aria-hidden="true"></i>
                                    </span>
                                    <span class="text">Sousvêtement</span>
                                </div>
                                </a>
                                <div class="dd_menu">
                                    <ul>
                                        <li>
                                            <a href="#" class="dd_menu_a">
                                                <div class="wrap">
                                                    <span class="icon">
                                                    <i class="fas fa-running" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="text">
                                                    Caleçons
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dd_menu_a">
                                                <div class="wrap">
                                                    <span class="icon">
                                                    <i class="fas fa-biking" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="text">Slips</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dd_menu_a">
                                                <div class="wrap">
                                                <span class="icon">
                                                <i class="fas fa-swimmer" aria-hidden="true"></i>
                                                </span>
                                                <span class="text">Swimmer</span>
                                                </div>
                                            </a>
                                            <div class="dd_submenu">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <div class="wrap">
                                                                <span class="icon">
                                                                <i class="fas fa-running" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="text">
                                                                Running
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="wrap">
                                                                <span class="icon">
                                                                <i class="fas fa-biking" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="text">Biking</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="wrap">
                                                            <span class="icon">
                                                            <i class="far fa-futbol" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="text">Football</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="wrap">
                                                            <span class="icon">
                                                            <i class="fas fa-swimmer" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="text">Swimmer</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#" class="a_parent">
                                <div class="wrap">
                                    <span class="icon">
                                    <i class="fas fa-paper-plane" aria-hidden="true"></i>
                                    </span>
                                    <span class="text">Survêtement</span>
                                </div>
                            </a></li>
                            <li><a href="t_shirt.php" class="a_parent">
                                <div class="wrap">
                                    <span class="icon">
                                    <i class="fas fa-cog" aria-hidden="true"></i>
                                    </span>
                                    <span class="text" style="margin-right:50px;">T-shirts</span>
                                </div>
                            </a></li>
                            </ul>
                    </div>
                </div>
                
    
    
                    <!-- <select>
                        <option value="1"><a href="Categorie_habit/Bas.php">Bas</a></option>
                        <option value="2"><a href="Categorie_habit/survetement_veste.php">Survêtement et vestes</a></option>
                        <option value="3"><a href="Categorie_habit/sous_vetement_detente.php">Sous-vêtement et détente</a></option>
                        <option value="4"><a href="Categorie_habit/accessoires.php">Accessoires</a></option>
                        <option value="5"><a href="Categorie_habit/t_shirt.php">T-shirt</a></option>
                    </select> -->
                    <span><i class='bx bx-chevron-down'></i></span>
                </div>
            </form>
        </div>

        <div class="product-center container">
            <div class="product">
                <div class="product-header">
                    <img src="../images/ech1.jpg" alt="">
                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <a href="cart.php"> <span><i class="bx bx-shopping-bag"></i></span>
                        </a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.php">
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
                    <img src="../images/ech3.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>T-Shirt Homme</h3>
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
                    <img src="../images/ech5.jpeg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>T-Shirt Homme</h3>
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
                    <img src="../images/ech6.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>T-Shirt Homme</h3>
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
                    <img src="../images/ech7.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>T-Shirt Homme</h3>
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
                    <img src="../images/ech8.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>T-Shirt Homme</h3>
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
                    <img src="../images/echp4.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>T-Shirt Homme</h3>
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
                    <img src="../images/ech1.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>T-Shirt Homme</h3>
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

    <section class="pagination">
        <div class=" container">
            <span><a href="#">1</a></span>
            <span><a href="#">2</a></span>
            <span><a href="#">3</a></span>
            <span><a href="#">4</a></span>
            <span><i class='bx bx-right-arrow-alt'></i></span>
        </div>
    </section>



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
    <script src="../js/index.js"></script>
</body>

</html>