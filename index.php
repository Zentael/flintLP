<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content=""> <!-- référencement-->
        <meta name="author" content="Handi-cape">
        <meta name="description" content="Description du site">  <!-- 140 char -->
        <title>Handi-cape</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="icon" href="assets/img/logo.ico">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <h1>Handi-cape</h1>
        </header>

        <div id="about-us" class="container">
            <div class="row">
                <div class="col-6">
                    <h2>Les héros de votre entreprise</h2>
                    <p> Handi-cape est une plateforme de mise en relation entre les recruteurs et les personnes handicapés…. se baser sur le texte de la vidéo typo. Parler d’accessibilité. teaser</p>
                    <button>M'informer de la sortie du site</button>
                </div>
                <div class="col-6"></div>
            </div>
        </div>

        <div id="test-quota" class="container">
            <h2>Est-ce que votre entreprise respecte les quotas ?</h2>
            <div class="row">
                <div class="col-6">
                    <label for="effectif">Nombre de personnes dans votre entreprise ?</label>
                    <input type="text" id="effectif">
                    <label for="handicap">Nombre de travailleurs handicapés dans votre entreprise ?</label>
                    <input type="text" id="handicap">
                    <button>Faire le test</button>
                </div>
                <div class="col-6">
                    <img src="assets/img/no.jpg" alt="Vous êtes en dessous des quotas">
                </div>
            </div>
        </div>

        <div id="conversion" class="container">
            <h2>Ne ratez pas la sortie de la plateforme handi-cape</h2>
            <p>Vous voulez jouer un rôle dans cette révolution ? Partagez le lien et rejoignez nous sur les réseaux sociaux.</p>
            <p>Politique d’utilisation des données : Votre email sera utilisé dans le seul but de vous informer de la sortie du site handi-cape. Il sera supprimé de nos bases de données par la suite.
            </p>
            <form action="" method="POST">
                <input type="email" placeholder="Votre adresse email">
                <input type="submit" value="Je souhaite être informé">
            </form>

            <h2>Vous croyez en nous ? Suivez-nous</h2>
            <div id="share-buttons">
                <?php //Lien de la page
                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                <!-- Facebook -->
                <a href="http://www.facebook.com/sharer.php?u=<?php echo $actual_link ?>" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
                <!-- LinkedIn -->
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $actual_link ?>" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" /></a>
                <!-- Twitter -->
                <a href="https://twitter.com/share?url=<?php echo $actual_link ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
            </div>
        </div>

        <div id="temoignages" class="container">
            <h2>Ils vous parlent de nous</h2>
            <div class="row">
                <div class="col-4">
                    <img src="assets/img/photo-profil.jpg" alt="Photo de Chat"><br>
                    <span class="nom">Pipou</span><br>
                    <span class="role">Chat professionnel</span><br>
                    <p>Pipou est un chat de compétition et il est super fan de notre service de mise en relation des recruteurs avec les personnes handicapés.</p>
                </div>
                <div class="col-4">
                    <img src="assets/img/photo-profil.jpg" alt="Photo de Chat"><br>
                    <span class="nom">Pipou</span><br>
                    <span class="role">Chat professionnel</span><br>
                    <p>Pipou est un chat de compétition et il est super fan de notre service de mise en relation des recruteurs avec les personnes handicapés.</p>
                </div>
                <div class="col-4">
                    <img src="assets/img/photo-profil.jpg" alt="Photo de Chat"><br>
                    <span class="nom">Pipou</span><br>
                    <span class="role">Chat professionnel</span><br>
                    <p>Pipou est un chat de compétition et il est super fan de notre service de mise en relation des recruteurs avec les personnes handicapés.</p>
                </div>
            </div>
        </div>

        <footer>
            ©Handi-cape 2018 - <a href="#" title="Mentions légales">Mentions légales</a>
        </footer>

        <script src="assets/js/script.js"></script>
    </body>
</html>
