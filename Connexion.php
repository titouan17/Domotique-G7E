<?php 

	$bdd = new PDO('mysql:host=localhost;dbname=Domotique;charset=utf8', 'root', '');
	$salt="domotique";

	
	if ($_GET['cible']=='deconnexion'){
		session_unset();
		header ('location: /php/App/Matthieu/Git/Controleur/Domotique.php?cible=deconnecter');
	}
	
	if ($_GET['cible']=='verif'){
		$reponse = $bdd->query('SELECT * FROM Personnes WHERE MotDePasse="'.crypt($_POST["pass"],$salt).'"');
		$max_row = $reponse->fetch(PDO::FETCH_ASSOC);
		if (crypt($_POST['pass'],$salt)==$max_row['MotDePasse'] AND $_POST['email']==$max_row['AdresseMail']){
			session_start ();
			$_SESSION['email']=$_POST['email'];
			$_SESSION['pass']=$max_row['MotDePasse'];
			$_SESSION['prenom']=$max_row['Nom'];
			$_SESSION['nom']=$max_row['Prenom'];

			header ('location: /php/App/Matthieu/Git/Vue/MonDomicile.php');

		}else {
			header ('location: Domotique.php?cible=echoue');
		}
	}
	
	if ($_GET['cible']=='inscrire'){
		 $bdd->exec('INSERT INTO Personnes(Nom,Prenom,DateDeNaissance,MotDePasse,AdresseMail) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['date'].'","'.crypt($_POST['pass'],$salt).'","'.$_POST['email'].'")');
		 echo "inscription validée";
	}

?>