<?php
  

  $server="localhost";
  $login ="root";
  $passwd = "";
  
  // Création d'un objet de connexion à la base de données

  	$con = new PDO('mysql:host='.$server.';dbname=client;charset=utf8',$login,$passwd);


?>