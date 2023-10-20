<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 
        <link rel="stylesheet" href="css/netflix.css">
    <link rel="icon" type="image/x-icon" href="/img/faviconV2.png">
-->
</head>

<body>

    <?php


    // Souvent on identifie cet objet par la variable $conn ou $db
    $db = new PDO(
        'mysql:host=localhost;dbname=netflix-demo;charset=utf8',
        'root',
        'root'
    );

    $videoStatement = $db->prepare('SELECT * FROM video');
    $videoStatement->execute();
    $allVideos = $videoStatement->fetchAll();
    ?> <ul>
        <?php
        foreach ($allVideos as $video) {
            echo '<li>' . $video['title'] . '</li>';
        }
        ?>
    </ul>


</body>