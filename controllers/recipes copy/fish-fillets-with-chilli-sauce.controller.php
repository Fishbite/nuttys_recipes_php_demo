<?php

$pageTitle = 'Fish Fillets With Chilli Sauce | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Now, I know fish dishes can be really tasty, but this Fish Fillets with Chilli Sauce dish is something else. It packs a punch! It's on a completely different level...
TEXT;
$ogDescription = <<<'TEXT'
this Fish Fillets with Chilli Sauce dish is something else. It packs a punch!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/fish-fillets-with-chilli-sauce/650x366/fish-fillets-with-chilli-sauce-and-saffron-rice-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/fish-fillets-with-chilli-sauce.html';
$recipeName = 'Fish Fillets With Chilli Sauce';
$recipeIntro = <<<'TEXT'
Now, I know fish dishes can be really tasty, but this Fish Fillets with Chilli Sauce dish is something else. It packs a punch! It's on a completely different level...
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/blank.png");
        /* set the background size */
        --bg-size: 32px;
        /* set the start of the 2nd colour of the gradient */
        /* basically, increase the value until the background
           images are below the intro' paragraphs */
        --bg-1st-col-stop: 35%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/fish-fillets-with-chilli-sauce.view.php';
