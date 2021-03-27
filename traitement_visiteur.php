

<?php 
    require_once 'config.php';


//GESTION DES VISITEUR
   
   if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['mail'])  && !empty($_POST['objet']))
   {
       $name = htmlspecialchars($_POST['name']);
       $surname = htmlspecialchars($_POST['surname']);
       $mail= htmlspecialchars($_POST['mail']);
       $objet = htmlspecialchars($_POST['objet']);
       

       $check = $bdd->prepare('SELECT name, surname, mail FROM visiteur WHERE surname = ?');
       $check->execute(array($surname));
       $data = $check->fetch();
       $row = $check->rowCount();

       if($row == 0){ 
           if(strlen($name) <= 100){
               if(strlen($surname) <= 100){
                 
                           
                           $insert = $bdd->prepare('INSERT INTO visiteur(name, surname, mail, objet) VALUES(:name, :surname, :mail, :objet)');
                           $insert->execute(array(
                               'name' => $name,
                               'surname' => $surname,
                               'objet' => $objet,
                               'mail' => $mail,
                              
                           ));

                           header('Location:inscription_visiteur.php?reg_err=success');
                           die();
                      
                   }
               }else{ header('Location: inscription_visiteur.php?reg_err=surname_length'); die();}
           }else{ header('Location: inscription_visiteur.php?reg_err=name_length'); die();}
       }else{ header('Location: inscription_visiteur.php?reg_err=already'); die();}
   

