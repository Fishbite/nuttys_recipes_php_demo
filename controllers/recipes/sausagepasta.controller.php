<?php

$pageTitle = 'Sausage & Penne Pasta';
$metaDescription = <<<'TEXT'
Make another crowd pleaser using our humble ingredient the sausage! I like the sauce to be the star of the dish, with the pasta adding a beautiful silky texture
TEXT;
$ogDescription = <<<'TEXT'
Make another crowd pleaser using our humble ingredient the sausage!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/sausagepasta/650x366/16-add-marjoram-leaves.jpg';
$canonical = 'https://www.nuttyskitchen.co.uk/sausagepasta.html';
$recipeName = 'Sausage & Penne Pasta';
$recipeIntro = <<<'TEXT'
Make another crowd pleaser using our humble ingredient the sausage! I like the sauce to be the star of the dish, with the pasta adding a beautiful silky texture
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/sausagepasta.view.php';
