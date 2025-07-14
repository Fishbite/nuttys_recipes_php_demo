<?php

$pageTitle = 'Sticky Gingerbread Cake | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Easy and scrummy snack sized cakes that will be perfect after a Sunday roast or popped onto a side plate with a lovely cup of tea.
TEXT;
$ogDescription = <<<'TEXT'
Easy and scrummy snack sized cakes that will be perfect after a Sunday roast
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/gingerbread/650x366/cake-finished.jpg';
$canonical = 'https://www.nuttyskitchen.co.uk/gingerbread.html';
$recipeName = 'Gingerbread';
$recipeIntro = <<<'TEXT'
Easy and scrummy snack sized cakes that will be perfect after a Sunday roast or popped onto a side plate with a lovely cup of tea.
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/gingerbread.view.php';
