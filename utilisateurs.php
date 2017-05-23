<?php
    require("connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($db,$email){
        $reponse = $db->prepare('SELECT * FROM personnes WHERE AdresseMail=?');
        $reponse->execute(array($email));
        return $reponse;
    }
    
    function domicile($db){
        $valeur = $db->query('SELECT * FROM domiciles');
        return $valeur;
    }
    
?>
