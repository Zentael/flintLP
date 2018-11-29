<?php
    $bdd = new PDO('mysql:host=localhost;dbname=site_handicape', 'root', 'root');
    //$bdd = new PDO('mysql:host=localhost;dbname=sc2arwen_landing_handicape', 'sc2arwen_landing_handicape', '4V7FUiV1XUhv');
    $reponse = $bdd->query('SELECT * FROM travailleurs ');
    while($donnees = $reponse->fetch()):
        if(($donnees['age'] >= $_GET['ageMin'])&&($donnees['age'] <= $_GET['ageMax'])){
           echo "<br>Nom: " . $donnees['nom'] . " " . $donnees['prenom'];
        }
    endwhile;
