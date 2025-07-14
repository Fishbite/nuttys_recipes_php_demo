<?php

$pageTitle = 'White Sauce | Nutty\'s kitchen';
$metaDescription = <<<'TEXT'
Béchamel sauce is one of the 'mother sauces' of French cuisine. You can add ingredients such as cheese, onion, parsley, watercress, quick and easy to make.
TEXT;
$ogDescription = <<<'TEXT'
Béchamel sauce is one of the 'mother sauces' of French cuisine
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/caulifrankcheese/650x366/white-sauce.jpg';
$canonical = 'https://www.nuttyskitchen.co.uk/whitesauce.html';
$recipeName = 'Whitesauce';
$recipeIntro = <<<'TEXT'
Béchamel sauce is one of the 'mother sauces' of French cuisine. You can add ingredients such as cheese, onion, parsley, watercress, quick and easy to make.
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/whitesauce.view.php';
