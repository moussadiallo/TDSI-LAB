<?php
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $adresse=$_POST['adresse'];
            $ville=$_POST['ville'];
            $code=$_POST['code_postal'];
            
    
            $info = array($prenom,$nom,$adresse,$ville,$code_postal);
            echo"<strong>";
            echo "<u>Prénom</u> : ".$info[0]."<br><br>";
            echo "<u>Nom </u>: ".$info[1]."<br><br>";
            echo "<u>Adresse </u>: ".$info[2]."<br><br>";
            echo "<u>Ville /u> : ".$info[3]."<br><br>";
            echo "<u>Code Postal </u>: ".$info[4]."<br><br>";
            echo "</strong>";
try{
  require('Connexion.php');
  // requette d'insertion dans la base de donnée
  $requete=$con->prepare("INSERT INTO formulaire(Nom,Prenom,Adresse,Ville,Code_Postal)
                          VALUES(:nom,:prenom,:adresse,:ville,:code_postal)"
                          );
  $req->execute(array($nom,$prenom,$adresse,$ville,$code));
  // Minimum de "sécurité" avant de traiter les données du formulaire
 function securisation($info){
                $info = trim($info);
                $info = stripslashes($info);
                $info = strip_tags($info);
                return $info;
          }
          $nom = securisation($_POST['nom']);
          $prenom = securisation($_POST['prenom']);
          $adresse = securisation($_POST['adresse']);
          $ville = securisation($_POST['ville']);
          $code = securisation($_POST['code']);
  $requete->bindParam(':nom',$nom);
  $requete->bindParam(':prenom',$prenom);
  $requete->bindParam(':adresse',$adresse);
  $requete->bindParam(':ville',$ville);
  $requete->bindParam(':code',$code_postal);
  $resultat = $requete->execute();
  if($resultat){
     header('Location: TableauFormulaire.php');
  }else{
    echo 'Listes non définies !!!!!';
  }
         
}catch(PDOException $e){
  echo 'Erreur!!! '.$e->getMessage();
  echo 'Echec de la connexion avec la base de donnée';
}
?>