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
    <meta name="author" content="FlintnGo">
    <meta name="description" content="Flint, un service novateur pour tout les amoureux du grand air. Fiez-vous à vos sens, laissez la nature résonner en vous.">  <!-- 140 char -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#EDB42C"/>
    <title>Flint</title>

    <meta name="twitter:card" content="summary" >
    <meta name="twitter:site" content="flintngo.fr" > <!--url de notre site-->
    <meta name="twitter:title" content="FlintnGo" >
    <meta name="twitter:description" content="Description du site" >
    <meta name="twitter:creator" content="@Flintngo" >
    <meta name="twitter:image:src" content="assets/img/logo.png" > <!--Image carré du logo-->
    <meta property="og:title" content="Flint'n'Go" >
    <meta property="og:type" content="website" >
    <meta property="og:url" content="flintngo.fr" > <!--Notre url-->
    <meta property="og:image" content="assets/img/logo.png" > <!--Image carré du logo-->
    <meta property="og:description" content="La nouvelle façon d'organiser vos sorties" >
    <meta property="og:site_name" content="Flint" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet preload">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico.png">

    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#9fd6e5"
                    }
                },
                "theme": "edgeless",
                "position": "top",
                "content": {
                    "message": "Flint utilise des cookies pour mieux vous connaître et vous aider.",
                    "dismiss": "Bien sûr",
                    "link": "Découvrez pourquoi ?"
                }
            })});
    </script>
</head>
<?php session_start(); // place it on the top of the script ?>
    <body class="rectangleBleu">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.3&appId=445197319373471&autoLogAppEvents=1"></script>
        <header>
            <div class="logoContainer">
                <img alt="Logo de Flint" src="./assets/img/logo.png"/>
            </div>
            <div class="punchText">
                <div>
                    <p><span>20 000</span> PHOTOS</p>
                    <p>DE CETTE MONTAGNE</p>
                    <p>SONT POSTEES CHAQUE JOUR</p>
                    <p>SUR LES RESEAUX SOCIAUX</p>
                </div>
                <span></span>
                <p>Vous voulez ajouter la vôtre ?</p>
            </div>
            <span class="triangleRose"></span>
            <div class="downArrow">
                <i class="fas fa-arrow-down"></i>
            </div>
        </header>
        <main>

            <section class="intro triangleRose2">
                <div></div>
                <h1><span>Chez</span><span><span class="blueText">FLINT</span><span class="purpleText">n</span><span class="pinkText">GO</span>,</span>
                    nous vous proposons une aventure plus <span class="pinkText">authentique</span></h1>
                <p>C’est l’occasion pour vous de pratiquer des activités loin de la foule en adoptant un comportement <span class="blueText">responsable</span></p>
                <div></div>
                <a id="scrollToCta" href="#socialNetworks">Découvrir</a>
            </section>
            <section class="threePartConcept">
                <article>
                    <div class="card">
                        <div id="firstPart" class="recto">
                            <h2>RESSOURCEZ VOUS LOIN DE LA FOULE</h2>
                            <p>Découvrez de nombreuses activités de plein air dans des lieux naturels méconnus des touristes</p>
                        </div>
                        <div id="flip1" class="verso">
                            <p>Découvrez de nombreuses activités de plein air dans des lieux naturels méconnus des touristes</p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="card">
                        <div id="secondPart" class="recto">
                            <h2>UN SERVICE PERSONNALISÉ ET RESPONSABLE</h2>
                            <p>Profitez d’une offre complète pour organiser votre sorties dans les valeurs de l’éco-responsabilité</p>
                        </div>
                        <div id="flip2" class="verso">
                            <p>Profitez d’une offre complète pour organiser votre sorties dans les valeurs de l’éco-responsabilité</p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="card">
                        <div id="thirdPart" class="recto">
                            <h2>CONSTRUISONS ENSEMBLE</h2>
                            <p>Partagez vos connaissances et vos endroits favoris avec la communauté du grand air</p>
                        </div>
                        <div id="flip3" class="verso">
                            <p>Partagez vos connaissances et vos endroits favoris avec la communauté du grand air</p>
                        </div>
                    </div>

                </article>
            </section>
            <section id="inscritpion" class="triangleBleu">
                <h4>ENVIE D'EN SAVOIR PLUS ?</h4>
                <div>
                    <p>Abonnez-vous à la newletter et nous vous tiendront informés de la sortie et des nouveautés de</p>
                    <p><span class="blueText">FLINT</span><span class="purpleText">n</span><span class="pinkText">GO</span>.</p>
                </div>
                <p id="errorMessage"></p>
                <p id="validMessage"></p>
                <form method="post" action="./includes/subscribeNL.php" id="formmailchimp">
                    <input id="checkboxConsent" type="checkbox" name="consent">
                    <label id="customCB" for="checkboxConsent" tabindex="0" class="label-checkbox">
                        <span></span>
                        <span>
                            Mon adresse e-mail sera utilisée pour m'informer du lancement de Flint'n'Go.
                            <br>Elle ne sera pas partagée avec un tiers.
                        </span>
                    </label>
                    <input id="email" name="mail" type="email" placeholder="Votre adresse mail">
                    <label for="email" class="screen-reader-text">
                        Votre e-mail
                    </label>
                    <input name="submit" type="submit" value="Envoyer">

                </form>
            </section>
            <section id="socialNetworks">
                <p>
                    Rejoignez-nous ici !
                </p>
                <div>
                    <!-- Facebook -->
                    <a href="http://bit.ly/2Kuv36M" target="_blank" title="Voir notre Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="http://bit.ly/2x4kZc2" target="_blank" title="Voir notre Twitter" rel="noopener">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <!-- LinkedIn -->
                    <a href="http://bit.ly/31KLu4d" target="_blank" title="Voir notre LinkedIn" rel="noopener">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </section>
        </main>
        <footer id="footer">
            <div>
                <div>
                    <div>
                        <a class="link-blue" href="mentions_legales.php" target="_blank" title="Consulter les mentions légales">Mentions légales</a>
                        <a id="pressBtn" href="" class="link-blue" title="Télécharger le dossier de presse">Dossier presse</a>
                    </div>
                    <span>©Flint'n'Go 2019 - tout droits réservés</span>
                </div>
            </div>
            <div id='modal-wrapper'>
                <div id='modal-box'>
                    <div class='modal-content'>
                        <button id='close-modal'>
                            <i class="fas fa-times-circle"></i>
                        </button>
                        <form method="post" action="./includes/subscribeNL.php" id="formmailchimp">
                            <input id="checkboxConsent" type="checkbox" name="consent">
                            <label id="customCB" for="checkboxConsent" tabindex="0" class="label-checkbox">
                                <span></span>
                                <span>
                            Mon adresse e-mail sera utilisée pour m'informer du lancement de Flint'n'Go.
                            <br>Elle ne sera pas partagée avec un tiers.
                        </span>
                            </label>
                            <input id="email" name="mail" type="email" placeholder="Votre adresse mail">
                            <label for="email" class="screen-reader-text">
                                Votre e-mail
                            </label>
                            <input name="submit" type="submit" value="Envoyer">
                        </form>
                    </div>
                </div>
            </div>
        </footer>

       <script src="assets/js/script.js"></script>
       <script src="assets/js/ajax.js"></script>
    </body>
</html>
