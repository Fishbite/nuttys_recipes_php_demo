<?php

$pageTitle = 'Pork Chilli | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
here's a little twist on a your usual chilli con carne — Pork Chilli using pork shoulder steaks to add an extra layer of texture to a dish normally made with minced meat
TEXT;
$ogDescription = <<<'TEXT'
Pork Chilli using pork shoulder steaks
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/pork-chilli/650x366/pork-chilli-served.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/pork-chilli.html';
$recipeName = 'Pork Chilli';
$recipeIntro = <<<'TEXT'
here's a little twist on a your usual chilli con carne — Pork Chilli using pork shoulder steaks to add an extra layer of texture to a dish normally made with minced meat
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/pork-chilli.view.php';
