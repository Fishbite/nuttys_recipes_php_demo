<!-- 
    ############# This is a test file #############

    It queries the recipe DB and returns a single
    result after the user typed some-recipe-name
    in the browser's address bar after /recipes/
-->
<?php include __DIR__ . '/partials/nav-main.view.php'; ?>
<?php require_once __DIR__ . '/../functions.php'; ?>

<?= 'Contents of $recipe: ' ?>
<?= print_r($recipe) ?>

<main id="content">
    <h1><?= htmlspecialchars($recipe['imgTitle']) ?>
    </h1>
    <p><?= nl2br(htmlspecialchars($recipe['description'])) ?>
    </p>

    <?php
    $imgPath = htmlspecialchars($recipe['image']);
echo '$imgPath = ' . $imgPath . "<br>";
$alt = htmlspecialchars(generateImageAlt($imgPath));
?>

    <figure class="recipe-single-image">
        <img src="<?= $imgPath ?>"
            alt="<?= $alt ?>"
            title="<?= htmlspecialchars($recipe['imgTitle']) ?>"
            loading="lazy" style="max-width: 100%; height: auto;" />
        <figcaption style="margin-top: 0.5rem; font-style: italic;">
            <?= htmlspecialchars($recipe['imgTitle']) ?>
        </figcaption>
    </figure>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>