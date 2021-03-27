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
  <title>Votre panier</title>
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
              <a href="index.php" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item">
              <a href="galerie.php" class="nav-link">Galerie</a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">Nos Produits</a>
            </li>
            <li class="nav-item">
            <div class="ok">

<div class="dropdown">
<button class="dropbtn" onclick="myFunction()" style="color:black;">Nos Domaines d'activités
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

  <!-- Cart Items -->
  <div class="container-md cart">
    <table>
      <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Total partiel</th>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/veste6.jpg" alt="">
            <div>
              <p>T-Shirt Homme</p>
              <span>Prix: 8000 Frs</span>
              <br />
              <a href="#">Retirer</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>8000 Frs</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/ech3.jpg" alt="">
            <div>
              <p>T-Shirt Homme</p>
              <span>Prx: 9000 Frs</span>
              <br />
              <a href="#">Retirer</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>9000 Frs</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/tshirt3.png" alt="">
            <div>
              <p>T-Shirt Homme</p>
              <span>Prix: 6000 Frs</span>
              <br />
              <a href="#">Retirer</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>6000 Fr</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/veste7.jpg" alt="">
            <div>
              <p>T-Shirt Homme</p>
              <span>Prix: 6000 Frs</span>
              <br />
              <a href="#">Retirer</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>6000 Frs</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/ech1.jpg" alt="">
            <div>
              <p>Boy’s T-Shirt</p>
              <span>Price: 60000 Fr</span>
              <br />
              <a href="#">Retirer</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>6000 Fr</td>
      </tr>
    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Total partiel</td>
          <td>20000 Frs</td>
        </tr>
        <tr>
          <td>Taxe</td>
          <td>2500 Frs</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>22 500Frs</td>
        </tr>
      </table>
      <a href="#" class="checkout btn">Proceder à l'achat</a>

    </div>

  </div>



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