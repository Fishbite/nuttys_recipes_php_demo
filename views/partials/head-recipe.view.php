<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content=<?=htmlspecialchars($metaDescription)?> />

    <!-- *********************FACEBOOK START******************** -->
    <!-- facebook meta tags to ensure correct image / page is shared START-->

    <!-- set the URL that you want Facebook to point to in this tag -->
    <meta property="og:url" content=<?=htmlspecialchars($canonical)?>
    />
    <meta property="og:type" content="article" />
    <meta property="og:title" content=<?=htmlspecialchars($recipeName)?> />

    <!-- set a very short description of the page in this tag -->
    <meta property="og:description" content=<?=htmlspecialchars($ogDescription)?>
    />

    <!-- set the image that you want Facebook to display in this tag-->
    <meta property="og:image" content=<?=htmlspecialchars($ogImage)?>
    />
    <!-- facebook meta tags to ensure correct image / page is shared END-->
    <!-- *********************FACEBOOK END********************* -->

    <title><?=htmlspecialchars($pageTitle)?></title>

    <!--set the image that shows in the browser tabs -->
    <link rel="icon" href="favicon.svg" />

    <!-- tell google to use this page as the canonical page -->
    <link rel="canonical" href=<?=htmlspecialchars($canonical)?> />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" /> -->

    <!-- styles -->
    <?php foreach($stylesheets as $stylesheet):?>
    <link rel="stylesheet" href=<?=htmlspecialchars($stylesheet)?>>
    <?php endforeach;?>

    <style>
        <?=htmlspecialchars($styleBlock, ENT_NOQUOTES)?>
    </style>
</head>