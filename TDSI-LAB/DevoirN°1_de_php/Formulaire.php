<!DOCTYPE html>
    <html>
        <head>
            <title>Mon Formulaire</title>
            <meta charset="utf-8"/>
            <style type="text/css">
                body{ 
                    background-image: url("hackeur.jpg"); /*<!--#ffbbaa; -->*/
                }
                marquee{
                    z-index: 2;
                
                    left: 46%;
                    top: 27%;
                    font-family:cursive;
                    font-size:14pt;
                    right: 100px;
                    left:  500px;
                    
                     
                }
                h1{
                    font-family: times new romans;
                    text-align: center;
                    color: blue;
                }
                h2{
                    font-family: times new romans;
                    text-align: center;
                    color: red;
                }
                form{
                    margin-left: 200px;
                    margin-right:200px;
                    color: #ff0000;
                    background-color: #ABC13E;
                    max-height: 900px;
                }
            </style>
        </head>
        <body>
        
            <marquee behavior="slide" scrlolamount="50"><h1><u><center><legend>Devoir Traitement d'un formulaire</legend></center></u></h1></marquee> 
            <form method="post" action="Traitement.php" >
                <center>
                    <div>
                        <fieldset>
                            <legend><h2><u>Entrer vos informations</u> !!!</h2></legend><br>
                            <label for="prenom" ><strong>Prénom :</strong></label>
                            <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" size="25" maxlength="200" style="margin-left:72px"><br><br>
                            <label for="nom" > <strong>Nom : </strong>   </label>
                            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" size="25" maxlength="200" style="margin-left:94px"><br><br>
                            <label for="classe" ></label><strong> Ville :</strong> </label>
                            <label for="adreese" > <strong>Adresse :</strong></label>
                            <input type="text" name="adresse" id="adresse" placeholder="Entrez votre Adresse" size="25" maxlength="200" style="margin-left: 72px"><br><br>
                            <input type="text" name="ville" id="ville" placeholder="Entrez votre Ville" size="25" maxlength="200" style="margin-left: 84px"><br><br>
                            <label for="code_postale" ></label><strong> Code Postal :</strong></label>
                            <input type="text" name="code_postal" id="code_postal" placeholder="Entrez votre code postal" size="25" maxlength="200" style="margin-left: 44px"><br><br>
                            <center><input type="submit" name="envoyer" value="Enregistrer"></center>
                        </fieldset>
                    </div>
                </center>
                
            </form>
        </body>
    </html>