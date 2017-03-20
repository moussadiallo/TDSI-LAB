<?php
    $mysql_host = 'localhost';//reseau local
    $mysql_login = 'root';  //l'utilisateur
    $mysql_pass = ''; //mot de passe
    $mysql_db = 'etude'; // nom de la base de donnée
    /*try{
    $db=new PDO('msql:localhost;dbname="etudiant";charset=utf8_decode','root','');
    }catch(Exeption $e){
    die("Erreur : " $e=>getMessage());
    echo "Erreur lors de la connection";
  }*/

    $link = mysqli_connect($mysql_host, $mysql_login, $mysql_pass,$mysql_db);
    if(!$link){
     die("pas de connection à localhost : ".mysql_error());
    }

    /*$db_select=mysql_select_db('etude',$link);
     if(!$db_select){
     die("pas de connection à la base de donné  : ".mysql_error());
    } */ 

?>