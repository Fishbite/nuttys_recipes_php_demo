<?php require __DIR__ . '/../functions.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recipes Grid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Load CSS first -->
    <link rel="stylesheet" href="/styles/styles.css">

    <!-- Load fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Load logos -->
    <link rel="preload" href="/images/logo-left.svg" as="image">
    <link rel="preload" href="/images/logo-right.svg" as="image">
    <link rel="preload" href="/images/nuttys-kitchen-logo.svg" as="image">


    <!-- Critical CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .recipe-grid {
            min-height: 200px;
        }

        .back-to-top {
            position: sticky;
            top: 87.5vh;
            text-align: right;
            z-index: 100;
        }
    </style>
</head>

<?php require __DIR__. '/../views/partials/nav-main.view.php';?>

<body>
    <header class="title">
        <section class="title-wrap">
            <img width="60" height="30" src="/images/logo-left.svg" alt="logo left" title="nuttys kitchen logo left" />

            <h1>nutty's recipes</h1>

            <img width="60" height="30" src="/images/logo-right.svg" alt="logo right"
                title="nuttys kitchen logo right" />
        </section>
        <img width="160" height="40" src="/images/nuttys-kitchen-logo.svg" alt="nuttys kitchen logo"
            title="nuttys kitchen logo" class="logo-main" />
        <p>
            Browse through some delicious English dishes from recipes passed down
            through generations along with a delectable, scrumptious collection of
            Italian, Mexican, Chinese and Indian dishes that we hope will inspire
            you. We'll be testing, trialling and cooking lots more to share with you
            in the future. I hope you love what I have so far.
        </p>
        <p>
            Drop me an email by clicking the
            <b><i>"mail me some love"</i></b> button below to let me know what you
            think - it would be fantastic to hear from you. Happy cooking!
        </p>
        <p>
            Use the other buttons below to jump to a specific category such as
            chicken, puddings etc.
        </p>
        <div class="cta list-btn" title="email me :¬)">
            <a href="&#109;ailto&#58;nutty&#64;nuttyskitchen&#46;co&#46;uk">mail me some love<br />
                &#128522;</a>
        </div>

        <!-- This list defines the on-page nav buttons that
           facilitate jumping to specific categories -->
        <!--========= Link Buttons START =========-->

        <?php require __DIR__ . '/../views/partials/category-btns.view.php'; ?>

        <!--========= Link Buttons END =========-->
    </header>

    <!-- Back to Top button -->
    <div class="back-to-top">
        <a href="#search-btns">&#128064;&#x23EB;</a>
    </div>

    <!-- Search Form -->
    <form id="search-form" class="search-form" action="/recipes" method="POST">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="all" <?= $searchCategory === 'all' ? 'selected' : ''; ?>>All
                Categories</option>
            <?php foreach ($categories as $cat): ?>
            <option value="<?= htmlspecialchars($cat); ?>" <?= $cat === $searchCategory ? 'selected' : ''; ?>>
                <?= htmlspecialchars(ucfirst($cat)); ?>
            </option>
            <?php endforeach; ?>
        </select>
        <label for="search">Keyword:</label>
        <input type="text" id="search" name="search" placeholder="Enter keyword..."
            value="<?= htmlspecialchars($searchTerm); ?>">
        <button type="submit">Search</button>
    </form>

    <!-- Recipe Grid -->
    <div class="recipe-grid">
        <?php
        if (!empty($groupedRecipes)) {
            foreach ($groupedRecipes as $catName => $recipesArray) {
                $description = $categoryDescriptions[$catName] ?? '';
                echo renderCategoryGrid($catName, $description, $recipesArray);
            }
        } else {
            echo "<p>No recipes found matching your criteria.</p>";
        }
?>

    </div>



    <?php require __DIR__ . '/../views/partials/footer.php'; ?>

</html>