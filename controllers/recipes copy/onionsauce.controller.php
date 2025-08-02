<?php

$pageTitle = 'Onion Sauce | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
this is my onion sauce, the perfect partner to roast chicken that transforms your Sunday roast to the next level. I hope you enjoy this!
TEXT;
$ogDescription = <<<'TEXT'
this is my onion sauce, the perfect partner to roast chicken that transforms your Sunday roast
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/onionsauce/650x366/onion-sauce-jug-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/onionsauce.html';
$recipeName = 'Onion Sauce';
$recipeIntro = <<<'TEXT'
this is my onion sauce, the perfect partner to roast chicken that transforms your Sunday roast to the next level. I hope you enjoy this!
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/onionsauce.view.php';
