<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section class="fg">
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <!-- First paragraph after the page title -->
        <p>
          <strong>Caribbean Creamy Pork Curry</strong> 🏝️ Now this is completely
          different to most of my Caribbean dishes, not a fresh chilli in sight
          for starters. Greek yogurt & coconut cream create a delicate sauce. I
          always have a Caribbean spice mix in my cupboard it's so easy to make
          a spice paste with & the perfect blend of spices for this dish. I know
          you'll Love it! I'd usually serve this with baked potatoes & salad but
          rice is a perfect partner too. I love the way the spices work with the
          yogurt & coconut cream to create a creamy sauce that is full of
          flavour. The pork is tender and juicy, and the peppers add a nice
          crunch to the dish. It's perfect for a quick weeknight dinner. Give it
          a try and let me know what you think! Enjoy! :¬)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <strong>Method</strong> tab below to see a step-by-step
          guide on how to make
          <strong>Caribbean Creamy Pork Curry</strong> along with some pictures
          as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/caribbean-creamy-pork-curry/650x366/caribbean-creamy-pork-curry-and-rice-02.webp"
            alt="caribbean creamy pork curry and rice"
            title="caribbean creamy pork curry and rice with a slice of lime"
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button
              title="Click this tab to reveal the ingredients"
              class="tab-btn active"
              data-id="ingredients"
            >
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

          <!-- This is where the "Ingredients" & "Method" tabs are created -->
          <!-- about content -->
          <article class="about-content">
            <!-- single item -->

            <!-- the class `active` is applied to show the contents of the tab. "Ingredients" is active by default -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>Serves 4</h2>

              <h2>Ingredients to marinade</h2>

              <ul>
                <li>450g Pork leg steaks diced</li>
                <li>1 lime - juiced</li>
                <li>5 garlic cloves - crushed</li>
                <li>3 cm fresh ginger - crushed</li>
                <li>3 Tbsp Dunns River Hot Caribbean curry powder</li>
                <li>1 tsp extra hot chilli powder (Optional)</li>
                <li>3 tablespoons greek yogurt</li>
                <li>1 Tbsp vegetable oil</li>
              </ul>
              <div class="spacer"></div>

              <h2>Ingredients curry</h2>

              <ul>
                <li>3 Tbsp vegetable oil</li>
                <li>4 med white onions - halved & sliced</li>
                <li>1 tsp sea salt ground</li>
                <li>1 tsp black pepper corns crushed (optional)</li>
                <li>1 x 450g tin of plum tomatoes crushed</li>
                <li>450g greek yogurt</li>
                <li>65g creamed coconut cream</li>
                <li>1 red bell pepper sliced</li>
                <li>1 green bell pepper sliced</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <!-- The method tab  does not have the call `active` by default, thus it is hidden from view. When the user clicks
            the "Method" tab the `active` class is applied here and
            removed from the "Ingredients" tab, which is then hidden
            from view
             -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                So our first task is to get the paste done once your limes are
                juiced, garlic & ginger are crushed you can set all 7
                ingredients into a plastic container. Add your diced pork & set
                into the fridge preferably overnight. Now this is an easy dish
                to cook once you have got your paste ready and meat marinated.
                Just slice your onions while the pan heats & slice your peppers
                while the dish simmers. I cooked this in my dutch oven on the
                hob but any heavy based pan will be fine.
              </p>

              <div class="card_image">
                <figcaption>marinade ingredients</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/ingredients-for-marinade.webp"
                  alt="ingredients for marinade"
                  title="ingredients for marinade for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the marinade</h2>

              <ol>
                <li>juice your lime into a pestle & mortar</li>
                <li>add your garlic cloves & ginger, bash to a paste</li>
                <li>add your curry powder & chilli powder if using</li>
                <li>add your vegetable oil & combine</li>
                <li>get a plastic pot with a lid & add your spice paste</li>
                <li>add yogurt and mix well</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>marinade</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/marinade.webp"
                  alt="marinade"
                  title="marinade for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>add your diced pork</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>pork in marinade</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/pork-in-marinade.webp"
                  alt="pork in marinade"
                  title="pork in marinade for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>give it all a very good mix</li>
                <li>seal the container & set into a fridge overnight</li>
              </ol>
              <div class="spacer"></div>

              <h2>Method for the curry</h2>

              <div class="card_image">
                <figcaption>curry ingredients</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/ingredients-curry.webp"
                  alt="ingredients curry"
                  title="curry ingredients for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="1">
                <li>Heat a heavy based pan & add oil</li>
                <li>
                  once hot add your onions to soften & brown just a little
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>lightly brown the onions</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/onions-browing.webp"
                  alt="onions browning"
                  title="onions browning for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>
                  now add your marinated meat - have a lid to hand as it could
                  spit at first
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add meat and marinade</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/pork-and-onions-in-a-pan.webp"
                  alt="pork and onions in pan"
                  title="pork and onions in pan for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  remove the lid after it settles, add salt & pepper & brown
                  your meat pieces & spices
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add salt & pepper</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/spices-added-to-pork.webp"
                  alt="spices added to pork"
                  title="spices added to pork for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>add coconut</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add coconut</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/coconut-added-to-pan.webp"
                  alt="coconut added to pan"
                  title="coconut added to pan for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>add the tomatoes & combine</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/tomatoes-added-to-pan.webp"
                  alt="spices added to pork"
                  title="spices added to pork for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>add yogurt & stir to combine</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add yogurt</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/yogurt-added-to-ingredients-in-pan.webp"
                  alt="yogurt added to ingredients in pan"
                  title="yogurt added to ingredients in pan for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>combine the yogurt</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/yogurt-combined-with-ingredients-in-pan.webp"
                  alt="yogurt combined with ingredients in pan"
                  title="yogurt combined with ingredients in pan for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  lower the heat cover with a tight fitting lid & cook for 30
                  minutes
                </li>
                <li>
                  check if the meat is tender, if not continue to cook for
                  longer
                </li>
                <li>
                  once tender add in your peppers & cook until peppers are just
                  softening &mdash; about 10 minutes uncovered
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add peppers</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/peppers-added-to-pan.webp"
                  alt="yogurt combined with ingredients in pan"
                  title="yogurt combined with ingredients in pan for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>combine the peppers & sauce</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/peppers-combined-with-curry-sauce.webp"
                  alt="peppers combined with curry sauce"
                  title="peppers combined with curry sauce for caribbean creamy pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  you do want to retain some crunch to the peppers adding
                  texture to the dish
                </li>
                <li>
                  the curry is ready when the oil separates from the sauce
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>caribbean creamy pork curry</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/caribbean-creamy-pork-curry-in-pan.webp"
                  alt="caribbean creamy pork curry in pan"
                  title="caribbean creamy pork curry in pan"
                />
              </div>
              <div class="spacer"></div>

              <h2>Serving suggestion for Caribbean Creamy Pork Curry:</h2>

              <div class="card_image_round">
                <figcaption>caribbean creamy pork curry...</figcaption>
                <img
                  src="/images/caribbean-creamy-pork-curry/650x366/caribbean-creamy-pork-curry-and-rice.webp"
                  alt="caribbean creamy pork curry and rice"
                  title="caribbean creamy pork curry and rice with a slice of lime"
                />
                <figcaption>...with rice & a slice!</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                A little squeeze of lime lifts this
                <strong>Caribbean Creamy Pork Curry</strong> to dizzying heights
                of lovelyness. It's light, tangy, creamy in texture with an
                aroma of tropical coconut. It goes down a treat when you want
                something full of Caribbean sunshine but not too spicy 🏝️🌞 :¬)
              </p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't less with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/jerked-pork-curry.html"
                    >jerked pork curry
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/jerked-pork-steaks-grill.html"
                    class="underline"
                    >jerked pork steaks grill
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