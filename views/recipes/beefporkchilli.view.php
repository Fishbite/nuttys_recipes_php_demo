<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          Now this is a type of chilli con carne, but its not in it's pure form,
          as I have packed it with: You guessed it veg ;-0 It doubles the amount
          of chilli and you will never know.... Feel free to use either of the
          minces alone but it will have a different texture and less flavour.
        </p>
        <p>
          Click the <b>Method</b> tab below to see a step by step guide with
          pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/beefporkchilli/650x366/beef-and-pork-chilli.webp"
            alt="beef and pork chilli"
            title="beef and pork chill cooked in a wok"
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button class="tab-btn active" data-id="ingredients">
              ingredients
            </button>
            <button
              title="Click this tab to read the recipe method and see pictures of how to make this dish"
              class="tab-btn"
              data-id="method"
            >
              method
            </button>
          </div>

          <!-- about content -->
          <article class="about-content">
            <!-- single item -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :¬)</p>

              <h2>serves 6 to 8</h2>

              <!-- Ingredients List Goes Below Here!!! -->
              <ul>
                <li>1 medium white onions sliced</li>
                <li>1 medium red onion sliced</li>
                <li>2 carrots grated</li>
                <li>2 celery stalks finely chopped</li>
                <li>3 cloves of garlic finely chopped</li>
                <li>450g beef and pork mince</li>
                <li>1 400g tin plum tomatoes mashed</li>
                <li>1 400g tin red kidney beans and all the fluid</li>
                <li>8 chestnut mushrooms sliced - optional</li>
                <li>2 Tblsp tomato puree</li>
                <li>1 OXO&trade; beef stock cube crumbled</li>
                <li>1 OXO&trade; vegetable stock cube crumbled</li>
                <li>1 tsp Worcestershire sauce</li>
                <li>1 tsp salt</li>
                <li>1.5 tsp extra hot chilli powder</li>
                <li>
                  1 tsp Kashmir chilli powder - optional but it does add colour
                </li>
                <li>1 tsp cumin seeds</li>
                <li>1 tsp cumin powder</li>
                <li>1 tsp black pepper</li>
                <li>
                  1 red green and yellow pepper cut into strips then in half
                </li>
                <li>3 fresh green chilli's</li>
                <li>400ml water</li>
              </ul>

              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                The way to make this dish is fairly similar to my pasta sauce
                dishes, only it has that definate chilli kick along with bags
                and bags of flavour. So, we start off by preparing our
                ingredients as always before we start cooking!
              </p>
              <p>
                I always find it really helpful, especially when using lots of
                spices, to have all my ingredients ready to hand and in sequence
                for cooking. I find it makes my kitchen a little less chaotic
                and a way to make sure that I don't miss any vital component!
              </p>
              <!-- Method List Goes Below Here!!! -->

              <h5>Prep' your ingredients</h5>

              <div class="card_image">
                <figcaption>ingredients ready</figcaption>
                <img
                  src="/images/beefporkchilli/650x366/ingredients.jpg"
                  alt="ingredients"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>Heat a large wok to med-high ( or wide bottomed pan )</li>
                <li>Add a 3rd of the mince broken into strips</li>
              </ol>
              <div class="spacer"></div>
              <p>
                <i
                  ><b>Tip</b> - fry your mince in 3 small batches. If you put it
                  all in at once the temperature of the pan will drop and they
                  will boil!</i
                >
              </p>

              <ol start="3">
                <li>Push to the side of the pan when brown</li>
                <li>Add some more mince & brown</li>
                <li>repeat</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>brown the meat</figcaption>
                <img
                  src="/images/beefporkchilli/650x366/meat-browning.jpg"
                  alt="meat browning"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>Set the meat aside on a plate</li>
                <li>Add the cumin seeds to the hot pan</li>
                <li>Fry for a minute until they start to smell</li>
              </ol>
              <div class="spacer"></div>
              <p>
                <i
                  ><b>Tip</b> The vegetables need softening not browning as such
                  so set temp to med-hot</i
                >
              </p>

              <ol start="9">
                <li>Add your onions for 5 mins</li>
                <li>Add your carrots for 5 mins</li>
                <li>Add your celery and garlic for 5 mins</li>
                <li>Add salt and pepper</li>
                <li>Reduce veg by 2 / 3rds in size</li>
                <li>Push aside, add the mince & juices back into the pan</li>
                <li>Stir fry until all ingredients are combined</li>
                <li>Add your chilli powder and cumin powder</li>
                <li>Stir fry for 10mins</li>
                <li>Push everything to the side again</li>
                <li>Add mushrooms, fry for 5 mins until soft</li>
                <li>Stir to combine all the ingredients in the pan</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>meat and veg combined</figcaption>
                <img
                  src="/images/beefporkchilli/650x366/meat-veg-in-pan-1.jpg"
                  alt="meat veg in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="21">
                <li>Add your tomatoes, tomato puree, stock cubes</li>
                <li>Add the water & a dash of Worcestershire sauce</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>bring to rapid simmer</figcaption>
                <img
                  src="/images/beefporkchilli/650x366/chilli-cooking.jpg"
                  alt="chilli cooking"
                />
              </div>
              <div class="spacer"></div>

              <ol start="23">
                <li>Bring to a rapid simmer</li>
                <li>Add sliced peppers</li>
              </ol>
              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add sliced peppers</figcaption>
                <img
                  src="/images/beefporkchilli/650x366/peppers-and-chilli.jpg"
                  alt="peppers & chilli"
                />
              </div>
              <div class="spacer"></div>

              <ol start="25">
                <li>Cover with a tight-fitting lid</li>
                <li>Simmer gently on low-med heat for 15mins</li>
                <li>Remove lid, turn heat up to med</li>
                <li>Reduce the sauce</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>dinner is served</figcaption>
                <img
                  src="/images/beefporkchilli/650x366/chilli-rice-plated.webp"
                  alt="chilli rice chilli-rice-plated"
                />
              </div>
              <div class="spacer"></div>
              <p>
                serving suggestion: Rice & salad, chips, baked potato, even
                mashed potato, tacos, burritos with cheese! ...let your
                imagination run riot!
              </p>
              <!-- Method List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/pork-chilli.html"
                    >pork chilli
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/vegetarian-chilli.html"
                    class="underline"
                    >vegetarian chilli
                  </a>
                </li>
              </ul>
            </section>
          </article>
        </article>
      </div>
    </section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
<script src="/scripts/tabs.js"></script>
</body>
</html>