<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index,follow"> <!-- référencement-->
        <meta name="author" content="Handicape">
        <meta name="description" content="Handicape, la plateforme innovante pour recruter votre prochain collaborateur souffrant d'un handicape. Aucune chance de vous tromper dans votre choix.">  <!-- 140 char -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Handicape - Recrutez des handicapés en deux clics</title>

        <meta name="twitter:card" content="summary" >
        <meta name="twitter:site" content="" > <!--url de notre site-->
        <meta name="twitter:title" content="Handicape" >
        <meta name="twitter:description" content="Description du site" >
        <meta name="twitter:creator" content="@Handicape" >
        <meta name="twitter:image:src" content="" > <!--Image carré du logo-->
        <meta property="og:title" content="Handicape" >
        <meta property="og:type" content="website" >
        <meta property="og:url" content="" > <!--Notre url-->
        <meta property="og:image" content="" > <!--Image carré du logo-->
        <meta property="og:description" content="Handicape, la plateforme innovante pour recruter votre prochain collaborateur souffrant d'un handicape. Aucune chance de vous tromper dans votre choix." >
        <meta property="og:site_name" content="Handicape" >

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/logo.ico">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130181969-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-130181969-1');
        </script>
    </head>

    <body>
        <?php include 'includes/module-accessibilite.php'; ?>
        <?php include 'includes/header.php'; ?>

        <main>
            <section id="about-us" class="section-bleu">
                <div class="container">
                    <div class="row">
                        <div class="col-12"><h1>La plateforme dont vous rêviez</h1></div>
                        <div class="col-12 col-md-6">
                            <p>Handicape est <strong>une plateforme de mise en relation</strong> entre les recruteurs et les personnes handicapées.<br><strong>Elle est pensée pour vous et vos besoins.</strong><br>
                                <strong>Ne perdez plus de temps</strong> en sourcing intensif pour trouver <strong>la perle rare des candidats</strong>, car ils sont tous </br>sur <strong>Handicape.fr</strong>.
                            </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container-picto">
                                <img src="assets/img/device-jaune-fine.svg" alt="Pictogramme">
                            </div>
                        </div>
                    </div>
                    <a href="#video" class="cts">
                        <span>En savoir plus</span>
                       <img src="assets/img/arrow-down-white.svg" alt="Descendre pour voir le suite">
                    </a>
                </div>
            </section>

            <!--<section id="video" class="container">
                <h2>Quelques chiffres</h2>
                <div class="container-iframe">
                    <iframe id="video-iframe" width="560" height="315" src="https://www.youtube.com/embed/X8f5RgwY8CI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Vidéo de présentation de Handicape"></iframe>
                </div>
            </section>-->

            <section class="section-gris">
                <div id="test-quota" class="container">
                    <h2>Est-ce que mon entreprise respecte les quotas ?</h2>
                    <div class="row">
                        <article class="col-sm-6">
                            <label for="effectif">Nombre de personnes dans votre entreprise ?</label>
                            <input type="text" id="effectif" placeholder="ex: 300">
                            <label for="handicap">Nombre de travailleurs handicapés dans votre entreprise ?</label>
                            <input type="text" id="handicap" placeholder="ex: 25">
                        </article>
                        <article class="col-sm-6">
                            <p id="icon-incoherent"><i class="fas fa-exclamation"></i></p>
                            <p id="icon-valid"><i class="far fa-smile-beam"></i></p>
                            <p id="icon-wrong"><i class="far fa-frown"></i></p>
                            <p id="resultQuota">Faites le calcul pour connaître l'état de votre entreprise en matière de recrutement de travailleurs handicapés</p>
                        </article>
                        <button class="custom-btn-yellow" id="calculQuota">Je calcule</button>
                    </div>
                    <img src="assets/img/skyscraper-jaune.svg" alt="Gratte Ciels">
                </div>
            </section>

            <section class="section-bleu">
                <div id="steps" class="container">
                    <h2>En 3 étapes seulement</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="step row">
                                <div class="col-12 col-xs-6 col-md-12">
                                    <img class="number" src="assets/img/one.svg" alt="Première étape">
                                    <p class="title">Inscrivez-vous</p>
                                    <p>S’inscrire sur notre plateforme vous permettra de voir tous nos profils spécialement sélectionnés pour vous</p>
                                </div>
                                <div class="col-12 col-xs-6 col-md-12">
                                    <img class="ornement" src="assets/img/contract%20tricolor-v2.svg" alt="Inscription rapide">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="step row">
                                <div class="col-12 col-xs-6 col-md-12">
                                    <img class="number" src="assets/img/two.svg" alt="Deuxième étape">
                                    <p class="title">Trouvez le meilleur profil</p>
                                    <p>Grâce a notre sélection  ne perdez pas de temps pour trouver le profil qui vous correspond! Handicape se charge du reste</p>
                                </div>
                                <div class="col-12 col-xs-6 col-md-12">
                                    <img class="ornement" src="assets/img/people-tricolor-v2.svg" alt="Les meilleurs candidats">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="step row">
                                <div class="col-12 col-xs-6 col-md-12">
                                    <img class="number" src="assets/img/three.svg" alt="Dernière étape">
                                    <p class="title">Boostez votre entreprise</p>
                                    <p>Fini les pertes de temps, votre planning s’allège grâce à Handicape !</p>
                                </div>
                                <div class="col-12 col-xs-6 col-md-12">
                                    <img class="ornement" src="assets/img/increased-tricolor-v2.svg" alt="Boostez votre entreprise">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="conversion" class="section-gris">
                <div class="container">
                    <h2>Ne ratez pas la sortie de Handicape.fr</h2>
                    <p>Inscrivez-vous pour être informé de la sortie du site.</p>
                    <div id="formResponse"></div>
                    <form action="" method="POST">
                        <label for="email">Votre adresse email</label>
                        <span id="email-error-icon">
                            <input type="email" id="email" name="mail" placeholder="Votre adresse email">
                         </span>
                        <span class="error-email"></span>
                        <input type="checkbox" id="check-box" hidden>
                        <label tabindex="0" class="label-checkbox" for="check-box">Dans le cadre de la loi RGPD, nous vous informons que votre adresse mail sera utilisée dans le seul but de vous informer de la sortie du site : <strong>handicape.fr</strong>. Votre adresse mail sera supprimée automatiquement de notre base de données par la suite.</label>
                        <span class="error-checkbox"></span>
                        <input type="submit" id="validateContactForm" class="custom-btn-yellow" tabindex="0" value="Je souhaite être informé">
                    </form>
                </div>
            </section>

        </main>

        <?php include 'includes/footer.php'; ?>

        <script src="assets/js/script.js"></script>
        <script src="assets/js/module-accessibilite.js"></script>
    </body>
</html>
