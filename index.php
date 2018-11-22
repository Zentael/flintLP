<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index,follow"> <!-- référencement-->
        <meta name="author" content="Handi-cape">
        <meta name="description" content="Description du site">  <!-- 140 char -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
        <title>Handi-cape</title>

        <meta name="twitter:card" content="summary" >
        <meta name="twitter:site" content="" > <!--url de notre site-->
        <meta name="twitter:title" content="Handi-cape" >
        <meta name="twitter:description" content="Description du site" >
        <meta name="twitter:creator" content="@Handi-cape" >
        <meta name="twitter:image:src" content="" > <!--Image carré du logo-->
        <meta property="og:title" content="Handi-cape" >
        <meta property="og:type" content="website" >
        <meta property="og:url" content="" > <!--Notre url-->
        <meta property="og:image" content="" > <!--Image carré du logo-->
        <meta property="og:description" content="Description du site" >
        <meta property="og:site_name" content="Handi-cape" >

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/logo.ico">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'includes/module-accessibilite.php'; ?>
        <?php include 'includes/header.php'; ?>

        <main>
            <section id="about-us" class="container">
                <h1>Handi-cape</h1>
                <div class="row">
                    <article class="col-12 col-lg-6">
                        <h2>Les héros de votre entreprise</h2>
                        <p>Nous constatons aujourd’hui que malgré les réformes mises en places encore 20% des personnes handicapés n’ont pas d’activité professionnelle soit deux fois plus que les personnes ne souffrant pas d'un handicap.
                            En créant Handi-cape nous voulons agir en mettant la technologie au service de ceux qui en ont besoin. Notre site internet sera la première plateforme qui met en relation les recruteurs et les travailleurs handicapés.
                            Grâce à Handi-cape, vous aurez enfin la possibilité de sélectionner les meilleurs profils en vous basant sur des critères spécifique en fonction des besoin de votre entreprise.
                            Handi-cape est une plateforme de mise en relation entre les recruteurs et les personnes handicapés. Elle est pensée pour vous et pour vos besoins.

                            Ne perdez plus de temps en sourcing intensif pour trouver la perle rare des candidats, car ils sont tous sur Handi-cape.fr.
                        </p>
                    </article>
                    <div class="col-12 col-lg-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/X8f5RgwY8CI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="#conversion" title="Lien vers le formulaire" class="btn-cta">M'informer de la sortie du site</a>
                </div>
            </section>

            <section id="test-quota" class="container">
                <h2>Est-ce que votre entreprise respecte les quotas ?</h2>
                <div class="row">
                    <article class="col-sm-6">
                        <p>En France, la loi oblige les entreprises a atteindre un quota de 6% de travailleurs handicapés. Les sanctions peuvent aller jusqu'à 600 fois le montant du S.M.I.C. Cependant en France, le taux moyen est de 3.6% dans le privé et 4.9% dans le public.</p>
                        <label for="effectif">Nombre de personnes dans votre entreprise ?</label>
                        <input type="text" id="effectif" placeholder="ex: 300">
                        <label for="handicap">Nombre de travailleurs handicapés dans votre entreprise ?</label>
                        <input type="text" id="handicap" placeholder="ex: 25">
                        <button id="calculQuota">Faire le test</button>
                    </article>
                    <article class="col-sm-6">
                        <!--<p id="resultQuota">Calculez votre nombre d'handicapés restant pour remplir votre quota !</p>-->
                        <img src="assets/img/try.png" id="resultQuota" alt="Vous êtes en dessous des quotas">
                    </article>
                </div>
            </section>

            <section id="conversion" class="container">
                <h2>Ne ratez pas la sortie de la plateforme handi-cape</h2>
                <p>Vous voulez jouer un rôle dans cette révolution ? Partagez le lien et rejoignez nous sur les réseaux sociaux.</p>
                <p>Politique d’utilisation des données : Votre email sera utilisé dans le seul but de vous informer de la sortie du site handi-cape. Il sera supprimé de nos bases de données dès que nous vous aurons informé du lancement de la plateforme.</p>
                <div id="formResponse"></div>
                <form action="" method="POST">
                    <label for="email">Votre adresse email</label>
                    <input type="email" id="email" name="mail" placeholder="Votre adresse email">
                    <span id="validateContactForm" class="btn-cta" tabindex="0">Je souhaite être informé</span>
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
                    <a href="https://twitter.com/share?url=<?php echo $actual_link ?>&amp;text=Découvrez%20Handi-cape&amp;hashtags=handicape" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
                </div>
            </section>

            <div id="temoignages" class="container">
                <h2>Ils vous parlent de nous</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <blockquote>
                            <img src="assets/img/photo-profil.jpg" alt="Photo de Chat"><br>
                            <p>Pipou est un chat de compétition et il est super fan de notre service de mise en relation des recruteurs avec les personnes handicapés.</p>
                        </blockquote>
                        <cite>
                            <span class="nom">Pipou</span><br>
                            <span class="role">Chat professionnel</span><br>
                        </cite>
                    </div>
                    <div class="col-lg-4">
                        <blockquote>
                            <img src="assets/img/photo-profil.jpg" alt="Photo de Chat"><br>
                            <p>Pipou est un chat de compétition et il est super fan de notre service de mise en relation des recruteurs avec les personnes handicapés.</p>
                        </blockquote>
                        <cite>
                            <span class="nom">Pipou</span><br>
                            <span class="role">Chat professionnel</span><br>
                        </cite>
                    </div>
                    <div class="col-lg-4">
                        <blockquote>
                            <img src="assets/img/photo-profil.jpg" alt="Photo de Chat"><br>
                            <p>Pipou est un chat de compétition et il est super fan de notre service de mise en relation des recruteurs avec les personnes handicapés.</p>
                        </blockquote>
                        <cite>
                            <span class="nom">Pipou</span><br>
                            <span class="role">Chat professionnel</span><br>
                        </cite>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'includes/footer.php'; ?>

        <script src="assets/js/script.js"></script>
        <script src="assets/js/module-accessibilite.js"></script>
    </body>
</html>
