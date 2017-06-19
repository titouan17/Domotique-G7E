<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="exam.css"  >
		<title>examen</title>
    </head>


  <body>

  	<form method="post" action="traitement.php">
  			<p><label for="nomi">Nom :</label>
   			<input type="text" name="nom" placeholder="pnl" id="nomi"/></p>
   			</div>
	</form>
  	

  	
  	<form method="post" action="traitement.php">
   	<p>
       <label for="genre">Style de groupe :</label><br />
       <select name="genre" id="genre">
           <option value="Rock an Roll">Rock an Roll</option>
           <option value="Disco">Disco</option>
           <option value="RnB">RnB</option>
           <option value="Afro">Afro</option>
           <option value="House">House</option>
           <option value="Jazz">Jazz</option>
       </select>
   	</p>
	</form>




<h1>Quelle requête ?</h1>

<form method="post" action="traitement.php" >

   <p>
       
       <input type="checkbox" name="Ajouter le groupe à la base de donnée" id="Ajouter le groupe à la base de donnée" /> <label for="Ajouter le groupe à la base de donnée">Ajouter le groupe à la base de donnée</label><br />
       <input type="checkbox" name="Lister les groupes appartenant au style selectionné" id="Lister les groupes appartenant au style selectionné" /> <label for="Lister les groupes appartenant au style selectionné">Lister les groupes appartenant au style selectionné</label><br />
       <input type="checkbox" name="Afficher, par date croissante, la liste des concerts du groupe indiqué (date, nom de salle et nom de la ville" id="Afficher, par date croissante, la liste des concerts du groupe indiqué (date, nom de salle et nom de la ville" /> <label for="Afficher, par date croissante, la liste des concerts du groupe indiqué (date, nom de salle et nom de la ville">Afficher, par date croissante, la liste des concerts du groupe indiqué (date, nom de salle et nom de la ville</label><br />
          </p>
</form>


<input type="submit" value="Envoyer" id="requete" />











<?php


$bdd = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT * FROM style')

?>


<body>

<p>Nom:</p>

<form method="post" action="traitement.php">
    <p><input type="text" name="groupe"/></p>
</form>


<p>Style de groupe:</p>

<form>

    <p>

        <label for="#"></label>

        <select name="style de groupe" id="style de groupe">
            <?php
            while ($donnees = $reponse ->fetch())?>

                {

                <option> <?php echo $donnees['style'];?> </option>

                }
            <?php   $reponse->closeCursor(); ?>

        </select>

    </p>

</form>

<h1> Quelle requête?</h1>

<form method="post" action="traitement.php">
    <p> </br>

    <input type="radio" name="Ajouter base de donnée" Value="Ajouter" id="Ajouter"/> <label for="Ajouter">
        Ajouter le grouupe à la base de données </label> </br>
        <input type="radio" name="Lister les groupes" Value="Lister" id="Lister"/> <label for="Lister">
            Lister les groupes appartenant au style sélectionné
        </label> </br>
        <input type="radio" name="Afficher par date croissante" Value="Afficher" id="Afficher"/> <label for="Afficher">
        Afficher, par date croissante, la liste des concerts du groupe indiqué (date, nom de salle et nom de la ville)
        </label> </br>

    </p>

</form>

<input class="Bouton" type="submit" value="Envoyer"

</body>

</html>
