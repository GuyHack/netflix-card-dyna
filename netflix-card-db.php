<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/netflix.css">
    <link rel="icon" type="image/x-icon" href="/netflix-card/img/faviconV2.png">
</head>

<body>

    <?php

    // Connexion a la base de donnees netflix-demo
    $db = new PDO(
        'mysql:host=localhost;dbname=netflix-demo;charset=utf8',
        'root',
        'root'
    );

    //  Création de la requete SQL
    $videoStatement = $db->prepare('SELECT * FROM video');
    $videoStatement->execute();
    $allVideos = $videoStatement->fetchAll();

    // echo $allVideos[0]['title'];

    /*
    foreach ($allVideos as $video) {
        echo $video['title'];
    }
*/

    // déclaration des constantes
    define('RELEASE_YEAR_TEXT', 'Année de sortie');
    define('COVER_IMAGE_PATH', "/netflix-card/img/");
    define('SEASON_NUMBER_WORDING', "Saison");

    ?>


    <div class="main">
        <div class="bodyWidth">
            <div class="videoCard">
                <div class="cover">
                    <img src="<?php echo (COVER_IMAGE_PATH . $allVideos[0]['image_thumbnail']); ?>" alt="<?php echo ($allVideos[0]['title'] . " : " . SEASON_NUMBER_WORDING . $allVideos[0]['season_number']); ?>">
                </div>
                <div class="details">
                    <h2><?php echo $allVideos[0]['title']; ?></h2>
                    <p class="releaseDate"> <?php echo RELEASE_YEAR_TEXT; ?> : <span><?php echo $allVideos[0]['release_year'] ?></span></p>
                    <p class="seasonNumber"><?php echo (SEASON_NUMBER_WORDING); ?> : <?php echo $allVideos[0]['season_number'] ?></p>
                    <p class="synopsis"><?php echo $allVideos[0]['synopsis'] ?></p>
                </div>
            </div>
        </div>
    </div>



</body>

</html>