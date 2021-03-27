<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
  </head>
  <body>
        <div class="gros">
            <div class="petit">

                <div class="moyen">
                        <h1 class="p-5">Bonjour ! <?php echo $_SESSION['user']; ?></h1>
                        <hr />
                        <a href="deconnexion.php" class="bouton">Déconnexion</a>
                 
                </div>
            </div>
        </div>    

       

  </body>
</html>
