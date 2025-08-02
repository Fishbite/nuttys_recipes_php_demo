<?php

$pageTitle = 'Cheese Sauce | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
My delicious & simple cheese sauce is quick and easy to make and can be used in a variety
    of recipes
TEXT;
$ogDescription = <<<'TEXT'
My delicious & simple cheese sauce is quick and easy to make
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/cheesesauce/650x366/cheese-sauce-in-pan.jpg';
$canonical = 'https://www.nuttyskitchen.co.uk/cheesesauce.html';
$recipeName = 'Cheese Sauce';
$recipeIntro = <<<'TEXT'
My delicious & simple cheese sauce is quick and easy to make and can be used in a variety
    of recipes
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/cheesesauce.view.php';
