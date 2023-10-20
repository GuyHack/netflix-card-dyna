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

    // Requete SQL pour récupérer toute la table video
    $videoStatement = $db->prepare('SELECT * FROM video WHERE season_number=0 ');
    $videoStatement->execute();
    $allVideos = $videoStatement->fetchAll();

    // afficher un champ de la base 
    // echo $allVideos[0]['title']; 


    /* parcourir le tableau des résultats de la requette 
    foreach ($allVideos as $video) {
        echo $video['title'];
    }
    */

    // déclaration des CONSTANTES
    define('RELEASE_YEAR_TEXT', 'Année de sortie');
    define('COVER_IMAGE_PATH', '/netflix-card-dyna/img/');
    define('SEASON_NUMBER_WORDING', 'Saison');
    define('HEADER_BASELINE', 'Accès illimité aux films et séries');
    define('H1_TEXTE', 'Films');
    define('INTRO_TEXTE', "Qu'il soit effrayant, comique, dramatique, romantique ou autre, le cinéma sait éveiller nos sens. Et avec autant de titres disponibles, il y a tellement de choses à découvrir !");
    define('BTN_ABO_TEXTE', "Abonnez-vous");
    define('BTN_LOGIN_TEXTE', "S'identifier");
    ?>


    <header>
        <div class="bodyWidth">
            <div class="logo">
                <a href="/" class="svg-nfLogo">
                    <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" aria-hidden="true" focusable="false">
                        <g id="netflix-logo">
                            <path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path>
                        </g>
                    </svg><span class="screen-reader-text">Accueil Netflix</span></a>
            </div>
            <div class="header-right">
                <p><?php echo (HEADER_BASELINE); ?></p>
                <button class="btn" type="submit" autocomplete="off" tabindex="0" role="link"><?php echo BTN_ABO_TEXTE; ?></button>
                <a href="#" class="authLinks"><?php echo BTN_LOGIN_TEXTE; ?></a>
            </div>
        </div>
    </header>


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

    <footer>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit iaculis ultrices pulvinar, sollicitudin lacinia dui ac euismod leo ullamcorper potenti accumsan dapibus, class nostra rhoncus ad tristique congue bibendum diam nisl</p>
        </div>
    </footer>

</body>

</html>