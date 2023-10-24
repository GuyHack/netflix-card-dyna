<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARD LOOP avec des includes</title>
    <link rel="stylesheet" href="css/netflix.css">
    <link rel="icon" type="image/x-icon" href="/netflix-card/img/faviconV2.png">
</head>

<body>

    <?php
    include 'includes/connexion-base-netflix-demo.php';

    // Requete SQL pour récupérer toute la table video
    $videoStatement = $db->prepare('SELECT * FROM video');
    $videoStatement->execute();
    $allVideos = $videoStatement->fetchAll();

    // déclaration des CONSTANTES
    include 'includes/constantes.php';

    // CONSTANTES spécifiques à la page : 
    define('H1_TEXTE', 'Films et séries');
    define('INTRO_TEXTE', "Qu'il soit effrayant, comique, dramatique, romantique ou autre, le cinéma sait éveiller nos sens. Et avec autant de titres disponibles, il y a tellement de choses à découvrir !");


    // appel du header html
    include 'includes/header.php'; ?>

    <div class="main">
        <div class="bodyWidth">
            <div class="intro">
                <h1><?php echo H1_TEXTE; ?></h1>
                <p><?php echo INTRO_TEXTE; ?></p>
            </div>
        </div>

        <div class="bodyWidth">
            <?php
            // parcourir tout le tableau des film et générer une carte pour chaque film

            foreach ($allVideos as $video) {
            ?>

                <div class="videoCard">
                    <div class="cover">
                        <img src="<?php echo (COVER_IMAGE_PATH . $video['image_thumbnail']); ?>" alt="<?php echo ($video['title']); ?>">
                    </div>
                    <div class="details">
                        <h2><?php echo  $video['title']; ?></h2>
                        <p class="releaseDate"> <?php echo RELEASE_YEAR_TEXT; ?> : <span><?php echo $video['release_year'] ?></span></p>
                        <p class="seasonNumber"><?php echo SEASON_NUMBER_WORDING; ?> : <?php echo $video['season_number'] ?></p>
                        <p class="synopsis"><?php echo $video['synopsis'] ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>



    <?php include 'includes/footer.php'; ?>

</body>

</html>