<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion
        if(!empty($_POST['email']) && !empty($_POST['pass'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("Modele/utilisateurs.php");     

            $reponse = mdp($bdd,$_POST['email']);
            
            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                include("Vue/Accueil_non_connecte.php");
            } else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                //$ligne2 = $valeur->fetch();
                if(crypt($_POST['pass'],$salt)!=$ligne['MotDePasse']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vue/Accueil_non_connecte.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["nom"] = $ligne['Nom'];
                    $_SESSION["prenom"] = $ligne['Prenom'];
                    $_SESSION['email']=$_POST['email'];
                    $_SESSION['pass']=$ligne['MotDePasse'];
                    $_SESSION['telephone']=$ligne['NumeroDeTelephone'];
                    $_SESSION['date']=$ligne['DateDeNaissance'];

                    $_SESSION['rue'] = $ligne2['Rue'];
                    $_SESSION['codePostal'] = $ligne2['CodePostal'];
                    $_SESSION['ville'] = $ligne2['Ville'];
                    $_SESSION['pays'] = $ligne2['Pays'];

                    include("Vue/monDomicile.php");
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            include("Vue/Accueil_non_connecte.php");
        }
    

    } else if(isset($_GET['cible']) && $_GET['cible']=='inscrire'){
        if(!empty($_POST['email']) && !empty($_POST['pass'])){
            $bdd->exec('INSERT INTO Personnes(Nom,Prenom,DateDeNaissance,MotDePasse,AdresseMail,NumeroDeTelephone) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['date'].'","'.crypt($_POST['pass'],$salt).'","'.$_POST['email'].'","'.$_POST['telephone'].'") ');

            $bdd->exec('INSERT INTO Domiciles(Rue,CodePostal,Ville,Pays) VALUES("'.$_POST['rue'].'","'.$_POST['codePostal'].'","'.$_POST['ville'].'","'.$_POST['pays'].'") ');

            include 'Vue/Accueil_connecte.php';
        }
    } else { // La page de connexion par défaut
        include("Vue/Accueil_non_connecte.php");
    }
?>