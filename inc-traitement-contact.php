<?php
    $reponse = "";
    $errorDetection = 0;

    // Tester si la checkbox est cochée
    if($_GET['checkbox'] == 1){
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
                        echo "<span class='errorContact'>Cet email est déjà inscrit</span>";
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
                    echo "<span class='errorContact'>Vous êtes inscrit !</span>";
                }
            }
            else{
                //echo "<span class='errorContact'>Le format de l'email est invalide</span>";
            }
        }
        else{
            //echo "<span class='errorContact'>L'email est obligatoire</span>";
        }
    }
    else{
       // echo "<span class='errorContact'>La checkbox est obligatoire</span><br>";
    }
?>