<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index,follow"> <!-- référencement-->
        <meta name="author" content="Handicape">
        <meta name="description" content="Handicape, la plateforme innovante pour recruter votre prochain collaborateur souffrant d'un handicape. Aucune chance de vous tromper dans votre choix.">  <!-- 140 char -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
        <?php include 'includes/include-head.php'; ?>
    </head>

    <body>
        <?php include 'includes/module-accessibilite.php'; ?>
        <?php include 'includes/header.php'; ?>

        <main>
            <div class="container">
                <h1>Inscription</h1>
                <div id="formResponse"></div>
                <form action="" method="POST">
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom"><br>
                    <span class="error-nom"></span>
                    <br><br>
                    <label for="prenom">Prenom</label><br>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom"><br>
                    <span class="error-prenom"></span>
                    <br><br>
                    <label for="email">Votre adresse email</label><br>
                    <input type="email" id="email" name="mail" placeholder="Votre adresse email"><br>
                    <span class="error-email"></span>
                    <br><br>

                    <input type="submit" id="validateContactForm" class="custom-btn-yellow" tabindex="0" value="Je m'inscrit">
                </form>
            </div>

        </main>

        <?php include 'includes/footer.php'; ?>

    </body>
</html>
