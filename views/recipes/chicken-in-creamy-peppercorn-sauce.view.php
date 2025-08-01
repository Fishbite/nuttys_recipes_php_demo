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
          This is a similar recipe to my
          <em>Pork in Creamy Peppercorn Sauce</em>. But today, I'm going to use
          diced chicken thighs to create
          <strong>Chicken In Creamy Peppercorn Sauce</strong>. The delicate
          chicken is flavoured with smoked bacon, garlic & of course &mdash;
          lots of roughly ground peppercorns. Yummy!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Chicken In Creamy Peppercorn Sauce</strong>, along
          with pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chicken-in-creamy-peppercorn-sauce/650x366/chicken-in-creamy-peppercorn-sauce-and-mash-plated.webp"
            alt="chicken creamy peppercorn sauce and mash plated"
            title="chicken creamy peppercorn sauce mash and veg"
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
              <h2>serves 4</h2>
              <ul>
                <li>600g boned & skinned chicken thighs cut into 6 pieces</li>
                <li>*8 rashers streaky smoked bacon cut into 2cm pieces</li>
              </ul>
              <div class="spacer"></div>

              <p>
                <em
                  >*I use the streaky part of back bacon & save the rest for
                  sandwiches!</em
                >
              </p>

              <ul>
                <li>1/2 a medium onion finely diced</li>
                <li>1 stick of celery finely diced</li>
                <li>3 cloves garlic roughly chopped</li>
                <li>pack chestnut mushrooms, each cut into 4</li>
                <li>*1 tsp black pepper corns roughly ground</li>
                <li>*1 tsp mixed peppercorns roughly ground</li>
                <li>*1 tsp sea salt</li>
              </ul>
              <div class="spacer"></div>

              <p>
                <em
                  >*crush the peppercorns in a pestle & mortar with sea salt
                  just cracking them slightly, we do not want them ground to a
                  powder. Feel free to add 1 tsp extra whole mixed peppercorns
                  if you are a true pepper lover and like a bit of extra heat
                  :-)</em
                >
              </p>

              <ul>
                <li>2 Tbsp salted butter</li>
                <li>1 veg stock cube crumbled</li>
                <li>1 chicken stock cube crumbled</li>
                <li>1 tsp dyjon mustard</li>
                <li>1 tsp onion powder</li>
                <li>1 Tbsp plain flour</li>
                <li>3/4 pint of whole or semi-skimmed milk</li>
                <li>2 tsp Worcestershire sauce</li>
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
                I start this recipe by frying the bacon and slowly adding all
                the veg' and seasoning to build up layers of flavour. Then I set
                that all aside and use the same pan to start making the creamy
                peppercorn sauce. That way, I get all the flavours from the pan
                incorporated into the base of the sauce.
              </p>
              <p>
                Once you have all your ingredients prepared, it's really quite
                simple to build though.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>heat wok or heavy based pan to med-high heat</li>
                <li>add bacon to the wok & fry until it starts to brown</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>brown the bacon</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/bacon-frying.webp"
                  alt="bacon frying"
                  title="bacon frying for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>add onions, celery & garlic &mdash; allow to soften</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>soften the onions</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/onions-softening-with-bacon.webp"
                  alt="onions softening with bacon"
                  title="onions softening with bacon for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>add mushrooms, salt and peppercorns</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>mushrooms added</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/mushrooms-added-to-pan.webp"
                  alt="mushrooms added to pan"
                  title="mushrooms added to pan for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>stir fry on a medium heat for 5 mins</li>
                <li>push everything to the sides of the pan</li>
                <li>
                  *turn the heat up to high & gradually add the diced chicken
                </li>
              </ol>

              <div class="spacer"></div>
              <p>
                <em
                  >*seal the chicken in three batches so that the pan stays
                  hot.</em
                >
              </p>

              <div class="card_image">
                <figcaption>add chicken in batches</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/chicken-added-to-pan.webp"
                  alt="chicken added to pan"
                  title="chicken added to pan for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>
                  stir fry until the chicken just whitens, set it all aside onto
                  a plate
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>seal the chicken</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/chicken-sealed.webp"
                  alt="chicken sealed"
                  title="chicken sealed for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>using the same pan, add butter until it melts</li>
                <li>add your stock cubes, onion powder & mustard</li>
                <li>then add your flour, & dont panic!</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add flour to melted butter</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/flour-and-butter-in-pan.webp"
                  alt="flour and butter in pan"
                  title="flour and butter in pan for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="12">
                <li>
                  gentle coax the flour into the butter until it starts to
                  combine
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir to make a roux</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/making-a-roux.webp"
                  alt="making a roux"
                  title="making a roux for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>
                  slowly add in a little of your milk & stir, stir, stir, while
                  adding milk
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add milk while stirring</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/milk-added-to-roux.webp"
                  alt="milk added to roux"
                  title="milk added to roux for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="14">
                <li>
                  gradually combine until it comes together, then add worchester
                  sauce
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add worcestershire sauce</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/worcestershire-sauce-added.webp"
                  alt="worcestershire sauce added"
                  title="worcestershire sauce added for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="15">
                <li>
                  add your chicken & everything else back in to the pan & stir
                  to combine all the ingredients
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add everything back into the pan</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/chicken-and-mushrooms-added.webp"
                  alt="chicken and mushrooms added"
                  title="chicken and mushrooms added for chicken in creamy peppercorn sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="16">
                <li>
                  bring back to simmer & cover, lower the heat to 3, set a timer
                  for 10 mins
                </li>
                <li>
                  remove the lid, check the chicken's cooked by cutting a piece
                  in half
                </li>
                <li>
                  taste, adjust seasoning & Worcestershire sauce if required
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                Serving suggestion:
                <strong>Chicken In Creamy Peppercorn Sauce</strong> Mashed
                potatoes, steamed carrots & brocolli. This dish is equally
                delicious served with just a simple vegetable rice. See below:
              </p>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/chicken-in-creamy-peppercorn-sauce-and-mash-plated.webp"
                  alt="chicken creamy peppercorn sauce and mash plated"
                  title="chicken creamy peppercorn sauce mash and veg"
                />
                <figcaption>...mash & veg</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                An umptuous sliky, buttery mash and freshly steamed veg' are
                just heavenly when served with
                <strong>Chicken In Creamy Peppercorn Sauce</strong>
              </p>

              <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/chicken-in-creamy-peppercorn-sauce/650x366/chicken-in-creamy-peppercorn-sauce-and-rice-plated.webp"
                  alt="chicken creamy peppercorn sauce and rice plated"
                  title="chicken creamy peppercorn sauce and rice"
                />
                <figcaption>...rice, peas & sweetcorn</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Or, rice, peas and sweetcorn make for an equally delicious, no
                faff, lighter bite!
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
                    href="https://www.nuttyskitchen.co.uk/porksupreme.html"
                    >pork in creamy black pepper sauce
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/bellyporkdinner.html"
                    class="underline"
                    >belly pork dinner
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