<?php
    $reponse = "";
    $errorDetection = 0;
    // Tester si le mail est renseigné
    if(!empty($_GET['mail']))
    {
        // Tester si le mail est bien formaté
        if (filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)) {
            //Tester si le mail est déjà renseigné en base
            $doublon = 0;
            $bdd = new PDO('mysql:host=localhost;dbname=landing_handicape', 'root', 'root');
            $reponse = $bdd->query('SELECT * FROM emails');
            while($donnees = $reponse->fetch()):
                if($donnees['email'] == $_GET['mail'] ){
                    $doublon++;
                    echo "<h4 class='errorContact'>Cet email est déjà inscrit</h4>";
                    break;
                }
            endwhile;
            if($doublon == 0){
                $email = $_GET['mail'];
                //Crypter ?
                $req = $bdd->prepare('INSERT INTO emails(email) VALUES(:email)');
                $req->execute(array(
                    'email' => $email
                ));
                echo "<h4 class='validationContact'>Vous êtes inscrit !</h4>";
            }
        }
        else{
            echo "<h4 class='errorContact'>Le format de l'email est invalide</h4>";
        }
    }
    else{
        echo "<h4 class='errorContact'>L'email est obligatoire</h4>";
    }
?>