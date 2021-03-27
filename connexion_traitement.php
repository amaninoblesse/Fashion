<?php 
    session_start();
    require_once 'config.php';

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT  username, password FROM utilisateur WHERE username = ?');
    
        $check->execute(array($username));
        $data = $check->fetch();
        echo $data;
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($username, FILTER_VALIDATE_username))
            {
                
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['user'] = $data['username'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location: connexion.php?login_err=password'); die(); }
            }else{ header('Location: connexion.php?login_err=username'); die(); }
        }else{ header('Location: connexion.php?login_err=already'); die(); }
    }