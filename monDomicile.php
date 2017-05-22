<?php
session_start();

$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['nom'] = $_POST['nom'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Styles/domotique1.css">
		<title>Domisep</title>
    </head>

<body>
<?php
	include'header2.php';

	if ($_SESSION['prenom']!='' AND $_SESSION['nom']!='')
	{
		echo htmlspecialchars("Bonjour " . ' ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom']);
	}

	else
	{
		echo "Veuillez entrer tous les paramètres nécessaires.";
	}

?>

	<section>
		<div id="domicile">
			<ul>
				<h2>Salon</h2>
				<div id="piece">
					<!--<ul>-->
						<div id="ligne">
							<div id="capteur">
								<ul>
									<h3>Température</h3>
									<img src="photoSite/temperature.png" alt="Température" class="temperature">
									<span class="description_capteur">30°C</span>
								</ul>									
							</div>

							<div id="capteur">
								<ul>
									<h3>Luminosité</h3>
									<img src="photoSite/luminosite.png" alt="Luminosité" class="luminosite">
									<form>
										<input type="range">
									</form>
								</ul>				
							</div>

							<div id="capteur">
								<ul>
									<h3>Humidité</h3>
									<img src="photoSite/humidite.png" alt="Humidité" class="humidite">
									<span class="description_capteur">20%</span>
								</ul>			
							</div>
						</div>

						<div id="ligne">
							<div id="capteur">
								<ul>
									<h3>Température</h3>
									<img src="photoSite/temperature.png" alt="Température" class="temperature">
									<span class="description_capteur">30°C</span>
								</ul>									
							</div>

							<div id="capteur">
								<ul>
									<h3>Luminosité</h3>
									<img src="photoSite/luminosite.png" alt="Luminosité" class="luminosite">
									<form>
										<input type="range">
									</form>
								</ul>				
							</div>

							<div id="capteur">
								<ul>
									<h3>Humidité</h3>
									<img src="photoSite/humidite.png" alt="Humidité" class="humidite">
									<span class="description_capteur">20%</span>
								</ul>			
							</div>
						</div>
					<!--</ul>-->					
				</div>

				<h2>Salle à manger</h2>
				<div id="piece">
					<div id="capteur">
						<ul>
							<h3>Température</h3>
							<img src="photoSite/temperature.png" alt="Température" class="temperature">
							<span class="description_capteur">30°C</span>
						</ul>									
					</div>

					<div id="capteur">
						<ul>
							<h3>Luminosité</h3>
							<img src="photoSite/luminosite.png" alt="Luminosité" class="luminosite">
							<form>
								<input type="range">
							</form>
						</ul>				
					</div>

					<div id="capteur">
						<ul>
							<h3>Humidité</h3>
							<img src="photoSite/humidite.png" alt="Humidité" class="humidite">
							<span class="description_capteur">20%</span>
						</ul>			
					</div>							
				</div>
			</ul>
		</div>
			




			<!--<div id="piece">
				<div id="capteur">
					<div class="description_capteur">
						<h3>Luminosité</h3>	
					</div>
				</div>

				<div id="capteur">
					<div class="description_capteur">
						<h3>Température</h3>	
					</div>				
				</div>

				<div id="capteur">
					<div class="description_capteur">
						<h3>Humidité</h3>	
					</div>				
				</div>
			</div>-->
	</section>

	<?php include 'footer.php' ?>
</body>

</html>
