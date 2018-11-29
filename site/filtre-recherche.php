<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index,follow"> <!-- référencement-->
        <meta name="author" content="Handicape">
        <meta name="description" content="Handicape, la plateforme innovante pour recruter votre prochain collaborateur souffrant d'un handicape. Aucune chance de vous tromper dans votre choix.">  <!-- 140 char -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recherche</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <?php include 'includes/include-head.php'; ?>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#slider-range" ).slider({
                    range: true,
                    min: 18,
                    max: 60,
                    values: [ 18, 60 ],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( ui.values[ 0 ]+ "ans" + " à " + ui.values[ 1 ] + "ans" );
                    }
                });
                $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + "ans "  + $( "#slider-range" ).slider( "values", 1 ) +
                    "ans" );
            } );
        </script>
    </head>

    <body>
        <?php include 'includes/module-accessibilite.php'; ?>
        <?php include 'includes/header.php'; ?>

        <main>
            <div class="container">
                <h1>Recherche</h1>
                <div id="formResponse"></div>
                <form action="" method="post">
                    <input type="text" id="filtre-age">

                </form>
                <div>
                    <p>
                        <label for="amount">Age:</label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    </p>
                    <div id="slider-range"></div>
                </div>

            </div>
        </main>

        <?php include 'includes/footer.php'; ?>
        <script src="assets/js/filtre-travailleurs-ajax.js"></script>
    </body>
</html>
