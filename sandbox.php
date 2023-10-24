<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
</head>

<body>

    <?php

    // CONNEXION a la base netflix-demo
    $db = new PDO(
        'mysql:host=localhost;dbname=netflix-demo;charset=utf8',
        'root',
        'root'
    );

    // creation de la requete SQL
    $videoStatement = $db->prepare('SELECT * FROM video');
    $videoStatement->execute();
    $allVideos = $videoStatement->fetchAll();

    // Affichage de données issues des résultats de la requete 
    echo $allVideos[1]['title'] . '<br>';
    echo $allVideos[1]['title'] . ' : ' . $allVideos[1]['release_year'];

    ?>

    <ul>
        <?php
        foreach ($allVideos as $video) {
            echo '<li>' . $video['title'] . '</li>';
        }
        ?>
    </ul>

</body>