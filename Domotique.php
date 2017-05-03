<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Styles/domotique.css">
		<title>G7Entreprise</title>
    </head>

<body>
	<?php include'header1.php';?>

	<section>
		<aside class="box">
			<div id="box_connexion">
				<h1>Se connecter</h1>
				<div class="formulaire_connexion">
					<br/>
					<form method="post" action="monDomicile.php">
						<p>
							<label for="email">E-mail :</label>
							<input type="email" name="email" id="email" />

							<br />
							<br />
							<label for="pass">Mot de passe :</label>
							<input type="password" name="pass" id="pass" />

							<br />
							<br />
							<input type="submit" value="Se connecter" />
						</p>
					</form>
				</div>
				<div class="inscription">
					<a href="#" class="inscription">S'inscrire</a>
				</div>
			</div>
		</aside>
	</section>

	<?php include 'footer.php' ?>

</body>

</html>