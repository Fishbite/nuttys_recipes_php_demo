<?php
require "../controllers/recipes.controller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recipes Grid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/styles/tabs-nav.css"> -->
    <link rel="stylesheet" href="/styles/styles.css">

    <!-- Preload the Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <header class="title">
        <div class="title-wrap">
            <img width="60" height="32" src="/images/logo-left.svg" alt="logo left" title="nuttys kitchen logo left" />
            <h1>nutty's recipes</h1>

            <img width="60" height="32" src="/images/logo-right.svg" alt="logo right"
                title="nuttys kitchen logo right" />
        </div>
        <img src="/images/nuttys-kitchen-logo.svg" alt="nuttys kitchen logo" width="160" height="40"
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
        <ul class="list-btn-wrapper">
            <li class="list-btn" title="cook sausages">
                <a href="#sausages & bacon"><img width="32" height="32" src="/images/icons/sausage-n-bacon-7.svg"
                        alt="sausages" title="cook sausages" />
                    sausage & bacon</a>
            </li>

            <li class="list-btn" title="cook chicken">
                <a href="#chicken"><img width="32" height="32" src="/images/icons/chicken-2.png" alt="chicken" />
                    chicken</a>
            </li>

            <li class="list-btn" title="cook beef">
                <a href="#beef"><img width="32" height="32" src="/images/icons/beef.png" alt="beef" title="cook beef" />
                    beef</a>
            </li>

            <li class="list-btn" title="cook pork">
                <a href="#pork"><img width="32" height="32" src="/images/icons/pork.png" alt="pork" title="cook pork" />
                    pork</a>
            </li>

            <li class="list-btn" title="cook lamb">
                <a href="#lamb"><img width="32" height="32" src="/images/icons/lamb.png" alt="lamb" title="cook lamb" />
                    lamb</a>
            </li>

            <li class="list-btn" title="cook veg">
                <a href="#fish & veg"><img width="32" height="32" src="/images/icons/fish-n-veg-1.svg" alt="veg"
                        title="cook veg" />
                    fish & veg</a>
            </li>

            <li class="list-btn" title="cook sauce">
                <a href="#sauce"><img width="32" height="32" src="/images/icons/sauce.png" alt="sauce"
                        title="cook sauce" />
                    sauce</a>
            </li>

            <li class="list-btn" title="accompaniments">
                <a href="#accompaniments"><img width="32" height="32" src="/images/icons/side-dish.png" alt="side dish"
                        title="side dish" />
                    sides</a>
            </li>

            <li class="list-btn" title="cook puddings">
                <a href="#puddings"><img width="32" height="32" src="/images/icons/cake.png" alt="cake"
                        title="cook puddings" />
                    puds</a>
            </li>
        </ul>

        <!--========= Link Buttons END =========-->
    </header>

    <!-- Search Form -->
    <form id="search-form" class="search-form" action="/views/recipes.view.php" method="GET">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="all" <?= $searchCategory === 'all' ? 'selected' : ''; ?>>All
                Categories</option>
            <?php foreach ($categories as $cat): ?>
            <option value="<?= htmlspecialchars($cat) ?>" <?= $cat === $searchCategory ? 'selected' : ''; ?>>
                <?= htmlspecialchars(ucfirst($cat)) ?>
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
                echo renderCategoryGrid($catName, $recipesArray);
            }
        } else {
            echo "<p>No recipes found matching your criteria.</p>";
        }
?>
    </div>
</body>

</html>