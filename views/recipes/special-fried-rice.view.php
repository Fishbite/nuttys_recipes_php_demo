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
          So who fancies Chinese? <strong>Special fried rice</strong> &mdash; a
          classic chinese takeaway. I love this dish as a meal in itself. It's
          an ideal way to use up left over Roast pork, or you could switch for
          chicken from a sunday dinner. And it makes a very delicious meal by
          itself. The way to manage this - as with every chinese dish - is to
          have everything chopped and prepared, then have all the mess cleared
          away before you start to cook. If you love that salty sweet and "I
          want more taste!" well this is it - with out an additive in sight -
          Nutty style!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <strong>Method</strong> tab below to see a step-by-step
          guide on how to make <strong>Special fried rice</strong> along with
          some pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/special-fried-rice/650x366/special-fried-rice-and-beansprouts.webp"
            alt="special fried rice and bean sprouts"
            title="special fried rice and bean sprouts served in a dish"
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
              <h2>ingredients for the rice</h2>
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>serves 4</h2>
              <ul>
                <li>1 Tbsp Sriracha hot chilli sauce</li>
                <li>300g roasted shoulder of pork</li>
                <li>1/2 cup long grain rice (my cup = 110g)</li>
                <li>1 cup water (exactly twice the volume of rice)</li>
                <li>4 Tbsp veg oil</li>
                <li>300g chicken thighs diced</li>
                <li>120g finely diced white onions</li>
                <li>1 red chilli diced</li>
                <li>90g diced mushrooms</li>
                <li>1 tsp salt</li>
                <li>1 tsp ground black pepper</li>
                <li>mixed bell peppers diced</li>
                <li>1/2 cup sweetcorn</li>
                <li>120g cooked peeled prawns</li>
              </ul>

              <div class="spacer"></div>

              <h2>for the beansprout side</h2>
              <ul>
                <li>1 Tbsp oil</li>
                <li>140g carrot - grated</li>
                <li>120g very finely sliced onion</li>
                <li>1/2 tsp salt</li>
                <li>1/2 tsp sugar</li>
                <li>1 tsp light soya sauce</li>
                <li>1 tsp dark soya sauce</li>
                <li>300g beansprouts</li>
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
              <h2>Method</h2>
              <p></p>
              <p>
                Now as with most Chinese food, this is going to be a fast cook,
                and precision cutting is required! If everything is not cut well
                it will not cook evenly. So I suggest you do all your prep'
                before you start cooking. I even chop / dice everything well in
                advance before I even begin cook - sometimes a day in advance -
                put into pots and placed in the fridge &mdash; a winner on the
                day after . I know I'm repeating myselfs
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the rice</h2>
              <ol>
                <li>
                  Soak & rinse your rice at least twice, once drained set aside
                  in the fridge to dry
                </li>
                <li>prepare everything else - chopped / diced etc.</li>
                <li>
                  set your cooked pork into the siracha sauce & the water allow
                  to soak
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>soak the sliced pork</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/sliced-roast-pork-marinating.webp"
                  alt="sliced pork marinating"
                  title="sliced pork marinating for special fried rice"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="3">
                <li>set a heavy based pan to heat to hot</li>
                <li>add oil & allow it to come to a shimmering heat</li>
                <li>now add in your dry rice - allow it to crisp slightly</li>
                <li>
                  push the rice to one side & add your diced chicken thighs
                </li>
                <li>stir-fry for a minute or so</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add diced chicken</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/raw-rice-and-chicken-frying.webp"
                  alt="raw rice and chicken frying"
                  title="raw rice and chicken frying for special fried rice"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>
                  stir-fry for a minute & move to the side
                </figcaption>
                <img
                  src="/images/special-fried-rice/650x366/chicken-and-raw-rice-frying.webp"
                  alt="chicken and raw rice frying"
                  title="chicken and raw rice frying for special fried rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  add your diced onions & stir fry until the onions are soft
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add onions</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/onions-added-to-rice-and-chicken.webp"
                  alt="onions added to rice and chicken"
                  title="onions added to rice and chicken for special fried rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>add 1 red chilli & stir fry</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add chilli</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/diced-chilli-and-garlic-added-to-pan.webp"
                  alt="diced chilli and garlic added to pan"
                  title="diced chilli and garlic added to pan for special fried rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>add your mushrooms stir fry</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add mushrooms</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/mushrooms-added-to-pan.webp"
                  alt="mushrooms added to pan"
                  title="mushrooms added to pan for special fried rice"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir-fry to combine</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/mushrooms-combined-with-ingredients-in-wok.webp"
                  alt="mushrooms combined with ingredients in wok"
                  title="mushrooms combined with ingredients in wok for special fried rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>add in your salt & pepper</li>
                <li>add in your Sriricha hot chilli sauce & pork - mix well</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add pork & Sriracha marinade</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/sliced-pork-added-to-pan.webp"
                  alt="sliced pork added to pan"
                  title="sliced pork added to pan for special fried rice"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir to combine</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/sriracha-and-water-added-to-pan.webp"
                  alt="sriracha and water added to pan"
                  title="sriracha and water added to pan for special fried rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="12">
                <li>add your peppers, sweetcorn, prawns & stir to combine</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add prawns, sweetcorn & peppers</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/prawns-sweetcorn-and-peppers-added-to-pan.webp"
                  alt="prawns sweetcorn and peppers added to pan"
                  title="prawns sweetcorn and peppers added to pan for special fried rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>
                  leave the rice to cook covered for 10 minutes test to check it
                  is soft & all the water has nearly absorbed
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>
                  check rice is cooked & water is absorbed
                </figcaption>
                <img
                  src="/images/special-fried-rice/650x366/special-fried-rice-in-a-wok.webp"
                  alt="special fried rice in a wok"
                  title="special fried rice after it's cooked in a wok"
                />
              </div>
              <div class="spacer"></div>

              <ol start="14">
                <li>
                  rest in a heated serving dish as you do your beansprouts side
                  dish
                </li>
              </ol>

              <div class="spacer"></div>

              <h2>Method for the beansprout side</h2>
              <ol>
                <li>set your heavy based pan to heat to hot</li>
                <li>add oil allow it to come to a shimmering heat</li>
                <li>add your carrots & stir-fry</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir-fry carrots</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/carrots-frying-in-a-pan.webp"
                  alt="carrots frying in a pan"
                  title="carrots frying in a pan for special fried rice and bean sprouts"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>add all your seasoning & stir-fry</li>
                <li>add your onions & stir-fry</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_imaged">
                <figcaption>stir-fry carrots & onions</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/onions-and-carrots-frying.webp"
                  alt="onions and carrots frying"
                  title="onions and carrots frying for special fried rice and bean sprouts"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>
                  lastly add your beansprouts & stir-fry until they just wilt
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>stir-fry beanprouts</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/beansrpouts-added-to-pan.webp"
                  alt="onions and carrots frying"
                  title="onions and carrots frying for special fried rice and bean sprouts"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>beansprout side</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/beansprout-topping-in-glass-dish.webp"
                  alt="beansprout topping in a glass dish"
                  title="beansprout topping in a glass dish for special fried rice and bean sprouts"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>special fried rice & beansprouts</figcaption>
                <img
                  src="/images/special-fried-rice/650x366/special-fried-rice-and-beansprouts.webp"
                  alt="special fried rice and bean sprouts"
                  title="special fried rice and bean sprouts served in a dish"
                />
              </div>
              <div class="spacer"></div>

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
                    href="https://www.nuttyskitchen.co.uk/pork-fried-rice.html"
                    >pork fried rice
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/egg-fried-rice.html"
                    class="underline"
                    >egg fried rice
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