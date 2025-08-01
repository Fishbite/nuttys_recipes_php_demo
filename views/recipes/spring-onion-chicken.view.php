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
          As the name suggests the onions are key so try not to buy super market
          miniture bunches &mdash; you need long asian style spring onions, this
          is sweet & savoury dish packed with spring onions.
          <strong>Spring Onion Chicken</strong> should take you about 20 minutes
          to cook. I am using thighs as they are so flavoursome - if using
          breast reduce the cooking time. 10 ingredients in total! This is so
          easy I'm almost embarrassed to share it with you! :-)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <strong>Method</strong> tab below to see a step-by-step
          guide on how to make <strong>Spring Onion Chicken</strong> along with
          some pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/spring-onion-chicken/650x366/spring-onion-chicken-with-noodles-in-dish-03.webp"
            alt="spring onion chicken with noodles in dish"
            title="spring onion chicken with mushroom chow mein noodles in dish"
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
              <ul>
                <li>1 Tbsp honey</li>
                <li>2 1/2 Tbsp light soya sauce</li>
                <li>3 Tbsp Oyster sauce</li>
                <li>1/2 tsp black peppercorns ground</li>
                <li>1 1/2 tsp cornflour</li>
                <li>4 lrg chicken thighs boned skinned & diced</li>
                <li>4 large spring onions diced*</li>
                <li>3 cloves garlic</li>
                <li>3 cm piece of fresh ginger</li>
                <li>2 Tbsp vegetable oil</li>
                <li>2 Tbsp shaoxing rice wine vinegar</li>
                <li>a fresh lime quatered is optional</li>
              </ul>
              <div class="spacer"></div>

              <p>
                *Slice to your liking &mdash; diaginally at an angle for the
                whites and a fine dice for the greens. Keep both separately
                white & greens as we will add the whites with the chicken & the
                greens at the end of the cooking process
              </p>
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
                First I would advise getting some rinsed basmati rice onto cook
                &mdash; if that's what you want to serve this with. Of course
                you could do this the day before then make my "Egg fried rice"
                which can be found in accompaniments. Then mix your marinade. I
                am doing the marinade in my new stick blender pot as it's new
                and at the moment &mdash; very exciting (Sure it will end up
                lost in the back of a cupboard eventually) but who does not love
                a new gadget! As I said, this is a fast stir fry dish so we need
                to be organised & ready with everything measured & prepared. I
                am using a wok but you could use a large frying pan if you do
                not have one. Serve with rice and lime wedges if desired.
                However, I'm going all out this time and serving it with one of
                my favourite noodle dishes &mdash; Mushroom Chow Mein! I will
                get round to writing that recipe up for the accompaniments
                section someday soon :-P
              </p>

              <p>So! With everything ready to hand &mdash; Lets cook!</p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for spring onion chicken"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Cut the chicken down into nice bite sized pieces</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dice the chicken</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/chicken-diced.webp"
                  alt="chicken-diced"
                  title="diced chicken for spring onion chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>
                  get a suitable plastic container and mix your marinade:
                  <ul>
                    <li>1 Tbsp honey</li>
                    <li>2.5 Tbsp light soya sauce</li>
                    <li>3 Tbsp Oyster sauce</li>
                    <li>1/2 tsp black peppercorns ground</li>
                    <li>1.5 Tbsp cornflour</li>
                  </ul>
                </li>
                <li>
                  add 1 spring onion, garlic & ginger & blitz to combine & chop
                  finely
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>blitz the marinade</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/ingredients-for-marinade.webp"
                  alt="ingredients for marinade"
                  title="ingredients for marinade for spring onion chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>mix the chicken thighs throughly into the marinade</li>
                <li>set the marinaded chicken aside for 5 minutes</li>
                <li>slice your spring onions & separate white & greens</li>
                <li>
                  Heat a heavy based pan to high - once hot add 2 Tbsp oil
                </li>
                <li>
                  once the oil shimmers turn the ring down & add the marinated
                  chicken
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add chicken & marinade</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/fried-chicken-in-wok.webp"
                  alt="chicken frying in wok"
                  title="chicken frying in a wok for spring onion chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>now add the white spring onions</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add white ends of spring onion</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/onions-added-to-fried-chicken-in-wok.webp"
                  alt="onions added to fried chicken in wok"
                  title="onions added to fried chicken in wok for spring onion chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  stir fry for 4 to 5 minutes then add 2 Tbsp Shaoxing rice wine
                  vinegar
                </li>
                <li>
                  add in the green spring onions - stir fry for another 1 to 2
                  minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add green ends of spring onion</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/green-onions-added-to-chicken-in-wok.webp"
                  alt="green onions added to fried chicken in wok"
                  title="green onions added to fried chicken in wok for spring onion chicken"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>spring onion chicken</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/spring-onion-chicken-in-serving-dish.webp"
                  alt="spring onion chicken in serving dish"
                  title="spring onion chicken in a serving dish"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>
                  Quarter a small lime & add to the side of each serving if you
                  like
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                <strong>Serving suggestion</strong> for:
                <strong>Spring Onion Chicken</strong>: Mushroom Chow Mein, or,
                you could make my Egg Fried Rice &mdash; which is in
                accompaniments! So simple and delicious every one will want
                more!
              </p>

              <div class="card_image">
                <figcaption>spring onion chicken & noodles</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/spring-onion-chicken-and-noodles-served.webp"
                  alt="spring onion chicken and noodles served"
                  title="spring onion chicken and noodles in serving dishes"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>spring onion chicken...</figcaption>
                <img
                  src="/images/spring-onion-chicken/650x366/spring-onion-chicken-with-noodles-in-dish.webp"
                  alt="spring onion chicken with noodles in dish"
                  title="spring onion chicken with mushroom chow mein noodles in dish"
                />
              </div>
              <figcaption>...with mushroom chow mein</figcaption>
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
                    href="https://www.nuttyskitchen.co.uk/chinese-noodles-with-beansprouts.html"
                    >chinese noodles with beansprouts
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