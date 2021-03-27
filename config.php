<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=site_vitrine;charset=utf8", "root", "123456789");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>