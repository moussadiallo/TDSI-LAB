<?php
		include "Connection_BD.php";
		$req = $con->query("SELECT * FROM eleve ");
?>

<html>
	<head>
		<title>Tableau de Formulaire</title>
		<meta charset="utf8" />
		<link rel="stylesheet" href="tableau.css" />
        <style type="text/css">
			body{
				background-image: url("hackeur.jpg"); 
			}
            h1{
                font-family: new romans;
                text-align: center;
                color: blue;
            }
            
            th,td{	
	            border:2px solid black;
	            width: 300px;
	            height: 10px;
	            border-color :red;
	
	            border-left-width :10px;
	            text-align: center;
	
	            font-family :times new romans;
	            color : white;
	
                }
           .test{
	            text-align: center ;
                }

            table{
	            border-collapse:collapse;
	
                 }
        </style>
		
	</head>
	<body>
		
		<h1><u>Liste des étudiants inscrits</u> :</h1>
		<table>
			<thead>
				<tr>
					<td colspan=6 class="test" ><h2>liste des etudiants de la L1 ltdsi </h2></td>
					
				</tr>
				<tr>
					<th>ID</th>
					<th>Prénom</th>
					<th>Nom</th>
                                        <th>Classe</th>
                                        <th>Identifiant</th>
                                        <th>Adresse</th>
				</tr>
			</thead>
			<?php
				while($reponse=$req->fetch()){
					
				
			?>
			<tbody>
				<tr>
				
				     <td><?php echo $reponse['id']; ?></td>
				     <td><?php echo $reponse['Prenom']; ?></td>
				     <td><?php echo $reponse['Nom']; ?></td>
                                     <td><?php echo $reponse['Classe']; ?></td>
                                     <td><?php echo $reponse['ID_Etudiant']; ?></td>
                                     <td><?php echo $reponse['Adresse']; ?></td>
				</tr>
				<?php
				}
				
				?>
			</tbody>
				<tfoot>
					
				</tfoot>
		</table>
	
	
	
	</body>

</html>