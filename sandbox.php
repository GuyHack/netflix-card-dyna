<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$recipesStatement = $db->prepare('SELECT * FROM recipes');

$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
