<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/partials/head.view.php'; ?>

<body>
  <!-- <nav class="nav-main"> -->
  <?php require __DIR__ . '/../views/partials/nav-main.view.php'; ?>

  <!-- Navigation START -->
  <div id="nav-container" class="nav-container"></div>
  <!-- Navigation END -->

  <div>
    <header class="title">

      <?php require __DIR__ . '/../views/partials/title-banner.view.php';?>

      <section>
        <h2 style="text-transform: lowercase">
          a place where honest wholesome cooking is delivered in every dish
        </h2>

        <!-- style="margin: 0 auto; width: 650px; max-width: 95vw" -->
          <div class="spacer"></div>
          <figure class="nutty">
            <img
              src="/images/happy-nutty-chef.webp"
              alt="happy nutty chef"
              title="happy nutty chef cooking up a curry"
            />
          </figure>
          <figcaption class="strapline">
            Real Food. Real Fun. Real Nutty!
          </figcaption>
          <div class="spacer"></div>
          <div class="spacer"></div>
        <p>
          Step into the heart-warming world of Nutty's Kitchen, where the love
          for food, flavours and creativity merge to create a culinary
          experience that's as heartfelt as it is budget-friendly. Meet Nutty,
          a passionate foodie, whose journey in the realm of cooking is as
          rich and diverse as the flavours she brings to life.
        </p>

        <p style="line-height: 1.6; font-size: 1rem">
          <span style="display: inline-flex; align-items: center; gap: 0.4em">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="hsl(209, 28%, 39%)"
              style="vertical-align: middle">
              <path d="M10 2a8 8 0 105.293 14.707l5 5 1.414-1.414-5-5A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z" />
            </svg>

            <strong class="pencil">New Search!</strong>
          </span>

          <span style="margin-left: 0.5em">
            <a href="/recipes/" class="recipe-page-link underline-link"
              data-fallback="https://www.nuttyskitchen.co.uk/recipepage.html"
              data-test-image="https://recipes.nuttyskitchen.co.uk/images/icons/blank.svg">
              Explore Nutty's Recipes</a>
            or
            <a href="/recipes" class="recipe-page-link underline-link"
              data-fallback="https://www.nuttyskitchen.co.uk/recipepage.html"
              data-test-image="https://recipes.nuttyskitchen.co.uk/images/icons/blank.svg">
              Click ‘Recipes’</a>
            in the top menu to <em>search</em> by category, ingredient, or
            craving — it’s like flipping through Nutty’s personal cookbook!
          </span>
        </p>

        <p>
          Make sure to see her <a class="underline" href="#latest"><strong>latest recipe</strong></a> near the bottom
          of this page.
        </p>
      </section>
    </header>

    <!-- class about-center = set columns -->
    <!-- class section-center = set width -->
    <main class="about-center section-center justify">

      <!-- single item -->
      <section class="about-content-main">
        <h2>Cooking on a Budget</h2>

        <p>
          Times can be tough when it comes to putting together a good square
          meal that is as tasty as you would expect to get in a decent
          restaurant. So I hope I bring you some inspiration and know-how in
          the pages ahead. The cost of ingredients and cooking is never far
          from my mind, so you will find very few lavishly expensive items in
          my dishes. Just lots of flavour
        </p>

        <figure class="card_image">
          <img width="519" height="346" src="/images/originals/650x366/brownbread-and-jam-karolina-grabowska.webp"
            alt="brownbread and jam karolina-grabowska" title="budget dishes" />
          <figcaption>budget doesn't mean bread and jam!</figcaption>
        </figure>
      </section>
      <!-- end of single item -->

      <!-- single item -->
      <section class="about-content-main">
        <h2>Bulking out with veg</h2>

        <p>
          Bulking out a dish with veg' is a very old-fashioned way of reducing
          costs, but at the same time, a way to add so much flavour! Veg'
          haters will never know they are there! Crafty, unless you tell them
          of course ;¬)
        </p>
        <p>
          Throughout my recipes you will find that the base to most
          English-style cooking starts with, what is known as, the Holy
          Trinity! This is simply carrots, onions and celery, with a little
          twist here and there such as adding a little fresh garlic. Taste
          starts here!
        </p>
        <figure class="card_image">
          <img width="519" height="292" src="/images/holy-trinity.webp" alt="holy trinity"
            title="Cooking on a Budget - the holy trinity" />
          <figcaption>the holy trinity: carrots, onion, celery</figcaption>
        </figure>
      </section>
      <!-- end of single item -->

      <!-- single item -->
      <section class="about-content-main">
        <div class="title-icon">
          <h2>Freeze for another day</h2>
          <img width="32" height="44" src="/images/freezer.webp" alt="freeer icon" title="freezer" />
        </div>

        <p>
          Life can be so busy and hectic that sometimes you just want
          something super-fast. Every dish I cook will serve more people than
          I have to feed! This is my cunning ploy for those days when I just
          don't have time to prepare from fresh. You can freeze meal size
          portions of all my dishes (unless I specifically say otherwise!) so
          you can pull something out of the freezer in the morning, knowing
          that you have a delicious dinner waiting for you in just a few
          minutes. In fact, you will find that the depth of flavour develops
          nicely in most cases which is just another added bonus.
        </p>

        <figure class="card_image">
          <figcaption>when time is of the essence</figcaption>
          <a href="/recipes/lamb-curry-with-spinach">
            <img src="/images/lamb-curry-with-spinach/650x366/lamb-curry-with-spinach-rice-and-naan-2.webp"
              alt="lamb curry with spinach rice and naan 2" title="lamb curry with spinach rice and naan in a dish" />
          </a>

          <figcaption>
            who needs a takeaway when you have a ping-away!
          </figcaption>
        </figure>

        <div class="spacer"></div>
        <p>Click or tap the pic for the recipe!</p>
      </section>
      <!-- end of single item -->

      <!-- single item -->
      <section id="latest" class="about-content-main">
        <div class="title-icon">
          <h2>Latest</h2>
          <img width="32" height="44" src="/images/new.webp" alt="new icon" title="new" />
        </div>

        <p>New Recipe!</p>
        <p>
          Check out this page for regular updates. Here I will post my latest
          recipe.
        </p>
        <p>
          I am so excited to give you my
          <a class="underline" href="/recipes/curry-leaf-masala-chicken-fry"><strong>curry leaf masala chicken
              fry</strong></a>
          An absolutely outstanding Indian dish with rich earthy flavours and
          a distinct curry leaf aroma. This absolutely knocked our socks off.
          Three of us devoured 1kg of chicken in one sitting!
        </p>
        <p>
          Let me know what you think using my
          <a class="underline" href="./contact-form.html"><b>Contact Page</b></a>
        </p>

        <figure class="card_image">
          <figcaption>an indulgently delicious</figcaption>
          <a href="/recipes/curry-leaf-masala-chicken-fry">
            <img src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-and-rice.webp"
              alt="curry leaf masala cooked in a wok" title="curry leaf masala chicken fry with basmati rice" />
          </a>
          <figcaption><em>authentic</em> Indian dish</figcaption>
        </figure>
        <div class="spacer"></div>

        <p>
          Click or tap the pic for the recipe! You just have to try this :¬)
        </p>
      </section>
      <!-- end of single item -->

      <!-- single item -->
      <section style="background-color: #0c0600; border: none; color: burlywood" class="about-content-main">
        <h2>1 year one hundred recipes!</h2>

        <p style="color: burlywood">
          Well! Doesn't time fly! I can hardly believe that it's a whole year
          since I published my first recipes on
          <strong>Nutty's Kitchen</strong>. In that time I've created
          <em>one hundred dishes</em> that you can make at home without
          breaking the bank!
        </p>
        <!-- <figure class="card_image"></figure> -->
        <section class="flip-box-wrapper">
          <div id="flip-box" class="flip-box flip-me">
            <div id="flip-box-inner" class="flip-box-inner flip-me">
              <div class="flip-box-front">
                <img class="badge" src="/images/nutty-1-year-7.svg" alt="nutty 1 year"
                  title="nutty's one year, one hundred recipe badge" />
              </div>
            </div>
          </div>
        </section>
        <p style="color: burlywood; padding-top: 2rem">
          As a super special treat for one of those big nights in, I've made
          my extra special <strong>Butter Chicken</strong>, which is a
          beautiful, rich and fairly delicately spiced curry. Not one to be
          eaten on a regular basis mind, as there are quite a few colories
          included, but it is oh! So umptious! I do hope you get chance to
          enjoy this one with a dinner guest or two. Head over to my
          <a class="underline" href="/recipes/butter-chicken" target="_blank"><strong>Butter
              Chicken Recipe</strong></a>
          for the full method and ingredients.
        </p>
      </section>
      <!-- end of single item -->
    </main>
  </div>
  <?php require __DIR__ . '/../views/partials/footer.php' ?>
  <!-- <script type="module" src="./src/tabs.js"></script> -->
  <!-- <script src="./src/app.js"></script> -->
  <script src="/scripts/1year.js"></script>
</body>

</html>