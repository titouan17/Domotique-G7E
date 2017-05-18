<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="Style/monProfil1.css"/>
		<link rel="stylesheet" href="Style/domotique.css"/>
		<title>G7Entreprise</title>
	</head>

	<body>
	<?php include('header2.php'); ?>

		<section>
			<aside>
				<div id="profil">
					<div class="description_profil">
						<img src="	" alt="Photo de profil" >
						<h1><?php echo ($_SESSION['prenom'] . ' ' . $_SESSION['nom']); ?><h1>
						<p>Adresse domicile 1: <?php echo($_SESSION['rue'] . ' ' . $_SESSION['codePostal'] . ' ' . $_SESSION['ville']); ?> <br/>
						Téléphone portable: <?php echo ($_SESSION['telephone']); ?> <br/>
						Date de Naissance: <?php echo ($_SESSION['date']); ?> 
						</p>
						<a href="monDomicile.php?cible=monDomicile" class="equiper">Ajouter un domicile</a>
						<a href="#" class="equiper">Ajouter un utilisateur à votre domicile</a>
						<a href="#" class="equiper">Ajouter un capteur</a>
					</div>	
				</div>
			</aside>

			<div id="informations">
				<div class="description_informations">
					<h2>Domiciles enregistrés</h2>
					<p>Adresse : <?php echo ($_SESSION['rue'] . ' ' . $_SESSION['codePostal'] . ' ' . $_SESSION['ville']);	?></p>
					<p>Surface : </p>
					<p>Nombre de capteurs : </p>
					<button class="equiper">Modifier</button>
				</div>
				
				<div class="description_informations">
					<h2>Utilisateurs</h2>
					<p>Utilisateurs enregistrés sur votre domicile et ayant le contrôle des capteurs</p>
					<ul>
						<li>Utilisateur1</li>
						<li>Utilisateur2</li>
						<li>Utilisateur3</li>
						<li>Utilisateur4</li>
					</ul>
					<button class="equiper">Modifier</button>
				</div>
			</div>
		</section>

		<?php include('footer.php'); ?>
	</body>
</html>
