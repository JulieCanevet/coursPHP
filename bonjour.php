<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
	<body>
    <p>Bonjour<br />
<?php 
	// verifier si les variables ont des valeurs
	if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['repeter'])) {

			$_GET['repeter'] = (int) $_GET['repeter']; //transformation de la valeur de 'repeter' en int

		if (1<=$_GET['repeter'] && $_GET['repeter']<=100) {

			for($i=0; $i<$_GET['repeter']; $i++) {
					echo $_GET['prenom'] . ' ' . $_GET['nom'] . ' :)<br />' ;
			}
		}
		
		else {
		echo 'impossible d\'afficher les données';
		}
	}

	else {
		echo 'impossible d\'afficher les données';
	}

?> </p>

<a href="index.php">Retour à l'accueil</a>

</body>
</html>