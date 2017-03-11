
 <?php
    //Rrquéte de connection à la base de données 
    $server="localhost";
    $login="root";
    $passwd="";
    try{
     $con=new PDO('mysql:host='.$server.';dbname=formulaire_eleve;charset=utf8',$login,$passwd);
     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
     echo 'Erreur !!!'.$e->getMessage();
     echo 'Echec connexion a la base de donnée';
    }
?>