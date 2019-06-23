<!DOCTYPE html>
<html lang="fr">
<head>

    <script>
        !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
            analytics.load("1L4DqShthlzQygEWwoEmE4youyRJxZfB");
            analytics.page();
        }}();
    </script>

    <meta charset="UTF-8">
    <meta name="robots" content="index,follow"> <!-- référencement-->
    <meta name="author" content="Flint">
    <meta name="description" content="Flint, un service novateur pour tout les amoureux du grand air. Fiez-vous à vos sens, laissez la nature résonner en vous.">  <!-- 140 char -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#EDB42C"/>
    <title>Flint</title>

    <meta name="twitter:card" content="summary" >
    <meta name="twitter:site" content="" > <!--url de notre site-->
    <meta name="twitter:title" content="Flint" >
    <meta name="twitter:description" content="Description du site" >
    <meta name="twitter:creator" content="@Flint" >
    <meta name="twitter:image:src" content="" > <!--Image carré du logo-->
    <meta property="og:title" content="Flint" >
    <meta property="og:type" content="website" >
    <meta property="og:url" content="" > <!--Notre url-->
    <meta property="og:image" content="" > <!--Image carré du logo-->
    <meta property="og:description" content="La nouvelle façon d'organiser vos sorties" >
    <meta property="og:site_name" content="Flint" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/logo.ico">

    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#f1d600"
                    }
                },
                "theme": "edgeless",
                "content": {
                    "message": "Flint utilise des cookies pour mieux vous connaître et toujours mieux vous aider.",
                    "dismiss": "Bien sûr",
                    "link": "Découvrez pourquoi ?"
                }
            })});
    </script>


</head>
<?php session_start(); // place it on the top of the script ?>
    <body>
        <header>
            <div class="logoContainer">
                <img alt="Logo de Flint" src=""/>
            </div>
            <div class="pageTitle">
                <h1>Organisez vos sorties</h1>
                <p>avec FLINT</p>
            </div>
        </header>
        <main>
            <section class="row explainerContainer">
                <div id="container-iframe">
                    <iframe id="ytplayer"
                            src="https://www.youtube.com/embed/7wGnlsvxfWM?autoplay=0&controls=0&showinfo=0&rel=0"
                    ></iframe>
                </div>
                <div>
                    <h3>COMMENT ÇA MARCHE ?</h3>
                    <p>Flint vous assiste dans l'organisation de vos activités à l'extérieur :</p>
                    <p>Réserver des livraisons de matériel et expérimentez une nouvelle manière de sortir avec la carte partagée et sa fonctionnalité de réalité augmentée.</p>
                </div>
            </section>
            <section class="threePartConcept">
                <article id="firstPart">
                    <h2>Découvrez</h2>
                    <p>Une nouvelle manière d'organiser vos sorties.</p>
                </article>
                <article id="secondPart">
                    <h2>Partagez</h2>
                    <p>Vos connaissances avec d'autres amoureux du plein air.</p>
                </article>
                <article id="thirdPart">
                    <h2>Profitez</h2>
                    <p>D'une expérience unique dans vos activités à l'extérieur</p>
                </article>
            </section>
            <section class="usagesContainer">
                <h2>Les différents usages</h2>
                <div>
                    <div id="usagePin">
                        <h4>PIN</h4>
                    </div>
                    <div id="usageTrail">
                        <h4>TRAIL</h4>
                    </div>
                    <div id="usageQuizz">
                        <h4>QUIZZ</h4>
                    </div>
                    <div id="usageBeacon">
                        <h4>BEACON</h4>
                    </div>
                </div>
                <div>
                    <article class="usageDesc shown" id="pinDesc">
                        <h3>PIN</h3>
                        <p>Un arbre particulier ?                         Un point de vue sur le soleil levant ? Un bon coin pour la pêche ? Marquez le coup en créant une pin descriptive sur la carte partagée en deux xlixs seulement !</p>

                    </article>
                    <article class="usageDesc" id="trailDesc">
                        <h3>Trail</h3>
                        <p>Vous pouvez trail des chemins</p>
                    </article>
                    <article class="usageDesc" id="quizzDesc">
                        <h3>Quizz</h3>
                        <p>Texte descriptif des quizz</p>
                    </article>
                    <article class="usageDesc" id="beaconDesc">
                        <h3>Beacon</h3>
                        <p>Texte descriptif des beacons</p>
                    </article>
                </div>
            </section>
            <section class="userContainer">
                <h2>Les differents usages</h2>
                <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
                    <li class="prev" data-controls="prev" aria-controls="customize-controls" tabindex="-1">
                        <i class="fas fa-angle-left fa-5x"></i>
                    </li>
                    <li class="next" data-controls="next" aria-controls="customize-controls" tabindex="-1">
                        <i class="fas fa-angle-right fa-5x"></i>
                    </li>
                </ul>
                <div class="userSlider">
                    <div>
                        <div class="usagesImages randonee"></div>
                        <article>
                            <h4>POUR LA RANDONEE</h4>
                            <p>Utilisez notre app en randonée pour faire des trucs !</p>
                        </article>
                    </div>
                    <div>
                        <div class="usagesImages escalade"></div>
                        <article>
                            <h4>Pour l'escalade</h4>
                            <p>Utilisez notre app en escalade pour faire des trucs !</p>
                        </article>
                    </div>
                    <div>
                        <div class="usagesImages cueillette"></div>
                        <article>
                            <h4>Pour la cueillette</h4>
                            <p>Utilisez notre app en cueillette pour faire des trucs !</p>
                        </article>
                    </div>
                    <div>
                        <div class="usagesImages peche"></div>
                        <article>
                            <h4>Pour la pêche</h4>
                            <p>Utilisez notre app en pêche pour faire des trucs !</p>
                        </article>
                    </div>
                </div>

            </section>

        </main>
        <footer>
            <div id="reseaux">
                <h5>Suivez nos réseaux !</h5>
                <div id="share-buttons">
                    <!-- Facebook -->
                    <a href="http://bit.ly/2Kuv36M" target="_blank" title="Voir notre Facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <!-- Twitter -->
                    <a href="http://bit.ly/2x4kZc2" target="_blank" title="Voir notre Twitter" rel="noopener">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                    <!-- LinkedIn -->
                    <a href="http://bit.ly/31KLu4d" target="_blank" title="Voir notre LinkedIn" rel="noopener">
                        <i class="fab fa-linkedin"></i>
                        <span>LinkedIn</span>
                    </a>
                    <!-- Insta -->
                    <a href="http://bit.ly/2WXozyY" target="_blank" title="Voir notre Instagram" rel="noopener">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                </div>
            </div>
            <div>
                ©Flint 2019 - <a class="link-blue" href="mentions_legales.php" target="_blank" title="Consulter les mentions légales">Mentions légales</a>
            </div>
        </footer>
        <aside>
                <h4>Inscrivez-vous !</h4>
                <?php
                $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
                unset($_SESSION['msg']);
                echo $statusMsg;
                ?>
                <form method="post" action="./includes/subscribeNL.php">
                    <label tabindex="0" class="label-checkbox">
                        <input type="checkbox" name="consent">
                        Mon adresse e-mail sera utilisée pour m'informer du lancement de Flint'n'Go.
                        <br>Elle ne sera pas partagée avec un tiers.
                    </label>
                    <div>
                        <label>
                            <input name="mail" type="email" placeholder="Votre adresse mail">
                        </label>
                        <input name="submit" type="submit" value="Envoyer"/>
                    </div>

                </form>
        </aside>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
