<?php 
    require_once 'config.php';

    //GESTION DES utilisateurs

    if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthdate']) && !empty($_POST['birthplace']) && !empty($_POST['genre']) && !empty($_POST['contact']) && !empty($_POST['mail']))
    {
        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $birthdate = htmlspecialchars($_POST['birthdate']);
        $birthplace = htmlspecialchars($_POST['birthplace']);
        $genre = htmlspecialchars($_POST['genre']);
        $contact = htmlspecialchars($_POST['contact']);
        $mail= htmlspecialchars($_POST['mail']);
        // $birthdate_retype = htmlspecialchars($_POST['birthdate_retype']);

        $check = $bdd->prepare('SELECT name, surname, birthdate FROM client WHERE surname = ?');
        $check->execute(array($surname));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($name) <= 100){
                if(strlen($surname) <= 100){
                  
                            
                            $insert = $bdd->prepare('INSERT INTO client(name, surname, birthdate,birthplace,genre,contact, mail) VALUES(:name, :surname, :birthdate, :birthplace, :genre, :contact, :mail)');
                            $insert->execute(array(
                                'name' => $name,
                                'surname' => $surname,
                                'birthdate' => $birthdate,
                                'birthplace' => $birthplace,
                                'genre' => $genre,
                                'contact' => $contact,
                                'mail' => $mail,
                               
                            ));

                            header('Location:inscription.php?reg_err=success');
                            die();
                       
                    }
                }else{ header('Location: inscription.php?reg_err=surname_length'); die();}
            }else{ header('Location: inscription.php?reg_err=name_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    


