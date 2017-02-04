<!DOCTYPE html>
<html>
<head> </head>
<body>
	<h1>Calcul sur les variables</h1>

<?php
//Test modif

    // Déclaration et initialisation des variables
	$TVA = 0.256;
	$prix = 150;
	$nombre = 10;

    // Calcul du prix HT et du TTC
	$prixht = $nombre*$prix;
	$prixttc = $prixht + ($prixht*$TVA);

	// Affichage et type des variables en utilisant la concatenation
	echo "<p>le prix HT est $prixht et est de type ".gettype($prixht)." </p>";
	echo "<p>le prix TTC est $prixttc et est de type ".gettype($prixttc)." </p>";

	// Affichons le type des autres variables en utilisant plusieurs echo
	echo "le type de TVA est: ";
	echo gettype($TVA);
	echo "<br>";
	echo "le type de prix est: ";
	echo gettype($prix);
	echo "<br> ";
	echo "le type de nombre est: ";
	echo gettype($nombre);
		
?>
</body>
</html>