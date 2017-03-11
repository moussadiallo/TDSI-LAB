<html>
<head>
<style>
body{
border-right:2px solid;
border-left:2px solid;
border-style:Encadrement;
background-color:green;
font-style:Italic;
background-size: 10% auto;
box-shadow: 10px 10px 2 #aaa;
font-family:Algerian;
border-color:blue;
border-top:1px solid green;
border-bottom: 15px solid red;
margin-bottom: 15px;
}
h2{
display:list-item;
list-style-position:inside;
color:red;
}
h1,h3,h4,h5,h6{
display:list-item;
list-style-position:inside;
color:yellow;
}
</style>
</head>
<body  >
<?php
$a=25;
if($a){
//	echo"la condition est satisfaite </br>";
}
for($i=1;$i<7;$i++){
echo "<h$i> $i:serigne touba rek $i </h$i>";
}
echo"<h2>est ce que vous pouvez expliquer cette calcul ?</h2>";
for($i=1,$j=9;$i<10,$j>0;$i++,$j--){
echo "<span style=\"border-style:double;border-width:5 background-color:green\"> $i+$j=10</span>";
}
echo "<h2>table de multiplication de 1...10 en une seule table </h2>";
echo "<table border=\"2\" style=\"background-color:gray\"><th>&nbsp;X&nbsp</th>";
//creation de la premiere ligne
for($i=1;$i<=10;$i++){
echo "<th>&nbsp;$i&nbsp;</th>";
}
//remplissage de la table
for($i=1;$i<=10;$i++){
echo "<tr><th>&nbsp;$i&nbsp;</th>";
for($j=1;$j<=10;$j++){
echo "<td style=\"background-color:red color:green\"> &nbsp;&nbsp;<b>".$i*$j."&nbsp;&nbsp;</td>";
}
echo "</b></tr>";
}
echo "</table>";
?>
<a href="formulaire.php" valign="center">pour s'inscrire veuillez cliquez ici svp...</a> 
</body>
</html>