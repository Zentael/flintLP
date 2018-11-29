<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index,follow"> <!-- référencement-->
        <meta name="author" content="Handicape">
        <meta name="description" content="Handicape, la plateforme innovante pour recruter votre prochain collaborateur souffrant d'un handicape. Aucune chance de vous tromper dans votre choix.">  <!-- 140 char -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Handi-cape</title>
        <?php include 'includes/include-head.php'; ?>
    </head>

    <body>
    <?php include 'includes/module-accessibilite.php'; ?>
    <?php include 'includes/header.php'; ?>

    <main>
        <div class="search">
            <div class="container">
                <h1>Les meilleurs handicapés pour vous.</h1>
                <form action="" method="post">
                    <input type="text" placeholder='Essayez "paraplégique"'>
                    <input type="submit" value="Rechercher">
                </form>
            </div>
        </div>

        <div class="top-profils">
            <div class="container">
              <div class="row justify-content-between">
                  <h2>Top du moment</h2>
                  <a href="#">Plus de profils</a>
              </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    </body>
</html>
