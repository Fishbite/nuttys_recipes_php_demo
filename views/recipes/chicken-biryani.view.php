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
        <h2>oven baked</h2>
        <p>
          Sure, I’m Nutty. And yes, I get that Biryani has a rep for being
          complicated. But honestly? It’s just rice, chicken, and a little spice
          magic. All myths removed. <strong>Chicken Biryani</strong> (One-Pot
          Style) is a simple and easy dish to make, but the flavours and
          textures are absolutely incredible. It features fragrant, flavourful
          rice paired with perfectly cooked chicken drumsticks. This recipe uses
          a special biryani masala from Chettinad cuisine, known as Chettinad
          Masala, which gives the dish a unique and delicious taste. One of the
          great things about this recipe is how forgiving it is—you can easily
          adjust the heat by using less fresh chilli's and chilli powder (though
          personally, I like it HOT! &#127798; &#65039;&#127798;
          &#65039;&#127798; &#65039;). Since the chicken and rice are cooked
          together in the same pot, this is a classic one-pot biryani. The
          process starts with grinding the Chettinad Masala, then sautéing
          onions and tomatoes with the freshly ground spices. Next, the chicken
          is added and cooked until it's halfway done. Finally, pre-soaked rice
          is placed on top and everything is baked in the oven at 180°C (350°F)
          for 45 minutes.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Okay, so the hardest part—as usual—is getting those onions nicely
          browned. It takes a bit of time, but trust me, they’re a must for good
          <strong>Chicken Biryani </strong>. Another not-so-fun job is taking
          the skin off the drumsticks. I know it’s a bit of a hassle, but it
          really makes a difference.
        </p>
        <p>
          Don’t worry about the bone end—it doesn’t have any meat on it anyway.
          Think of it as a built-in handle. &#x1F609;
        </p>
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make this oven baked <strong>Chicken Biryani</strong> along with a
          few of pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chicken-biryani/650x366/chicken-biryani-raita-popadoms.webp"
            alt="chicken biryani raita popadams"
            title="chicken biryani served with raita and popadoms"
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
              <h2>serves 4 to 6</h2>
              <h2>For the Chicken Biryani Masala powder</h2>
              <ul>
                <li>1 bay leaf</li>
                <li>1 tsp fennel seeds</li>
                <li>2 tsp coriander seeds</li>
                <li>1 star anise</li>
                <li>1 inch cinnamon stick</li>
                <li>1 tsp whole peppercorns</li>
                <li>3 Green cardamom</li>
                <li>4 whole cloves</li>
                <li>1 tsp whole cumin seeds</li>
              </ul>
              <div class="spacer"></div>

              <h2>for making the Chicken Biryani</h2>

              <ul>
                <li>2 Tbsp Oil</li>
                <li>2 Tbsp Ghee/ Clarified Butter</li>
                <li>2 Bay leaves</li>
                <li>3 Cloves</li>
                <li>3 Cardamom</li>
                <li>3 small brown onions(250g) thinly sliced</li>
                <li>1 tsp salt into the onions</li>
                <li>1 Tbsp Ginger paste</li>
                <li>1 Tbsp Garlic paste</li>
                <li>3 green chilli's split</li>
                <li>1/2 tsp turmeric powder</li>
                <li>1/2 tsp nutmeg</li>
                <li>1 Tbsp Extra hot Chilli powder</li>
                <li>1 tomato sliced(150g)</li>
                <li>2 Tbls Mint leaves chopped</li>
                <li>3 Tbls Coriander leaves chopped</li>
                <li>1/2 cup Yogurt</li>
                <li>1kg Chicken drumsticks</li>
                <li>1 cup Basmati Rice soaked for 30 minutes</li>
                <li>1.5 cups of water</li>
                <li>1/2 tsp Salt into the water</li>
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
                First, let's get the masala ready. In a dry frying pan, roast
                the spices for the masala powder until they become fragrant. Be
                careful not to burn them, as that will make the masala taste
                bitter. Once the spices have cooled, grind them into a fine
                powder and set them aside.
              </p>
              <p>
                Next, organize all your ingredients and start heating the oil
                and ghee. Place the rice in a bowl of cold water and let it soak
                for 30 minutes. Pre-heat your oven when you add the chicken
                drumsticks to the pan.
              </p>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>whole spices for biryani masala</figcaption>
                <img
                  src="/images/chicken-biryani/650x366/whole-spices-for-biryani-masala.webp"
                  alt="whole spices for biryani masala"
                  title="whole spices for chicken biryani masala"
                />
              </figure>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <div class="spaced-ol-list">
                <ol class="spaced-ol-list">
                  <li>
                    To make biryani masala - dry roast the following for 2
                    minutes on a medium heat. Allow them to cool completely then
                    grind it all to a fine powder
                    <ul>
                      <li>bay leaf</li>
                      <li>fennel seeds</li>
                      <li>coriander seeds</li>
                      <li>star anise</li>
                      <li>green cardamom</li>
                      <li>cinnamon stick</li>
                      <li>pepper</li>
                      <li>cloves & cumin seeds</li>
                    </ul>
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>toast the spices</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/toasting-whole-spices-for-biryani-masala.webp"
                    alt="toasting whole spices for biryani masala"
                    title="toasting whole spices for chicken biryani masala"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="2">
                  <li>Get your rice onto soak as it takes 30 minutes</li>
                  <li>
                    Heat a heavy based pan (on this occassion I am using my wok
                    then transfering to my dutch oven to bake the dish just
                    because I can & I am sure you can too!)
                  </li>
                  <li>
                    To begin the biryani - heat 2 Tbsp of oil and 2 Tbsp ghee /
                    clarified butter (ghee adds extra aroma and richness to the
                    biryani as an added bonus ghee mellows spices)
                  </li>
                  <li>
                    then add the whole spices - bay leaves, cardamom and cloves.
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>fry bayleaves & spices</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/frying-bayleaves-cloves-and-cardamom-in-oil.webp"
                    alt="frying bayleaves cloves and cardamom in oil"
                    title="frying bayleaves cloves and cardamom in oil for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="6">
                  <li>
                    Add thinly sliced brown onions (its important to slice them
                    thinly as you can), then add 1 tsp salt and saute until the
                    onions are golden brown.
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>add onions</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/onions-added-to-pan.webp"
                    alt="onions added to pan"
                    title="onions added to pan for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="7">
                  <li>
                    Once the onions are nice and brown add 3 slit green
                    chillies, 2 Tbsp of ginger garlic paste and cook until the
                    raw smell is gone
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>add chillies</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/chillies-added-to-browned-onions.webp"
                    alt="chillies added to browned onions"
                    title="chillies added to browned onions for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="8">
                  <li>
                    Now add the masalas - turmeric powder, freshly ground
                    biryani masala (from step 1) nutmeg & chilli powder - this
                    can be reduced to your spice preference. Give it a good stir
                    fry (be careful do not burn the spice powders).
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>add masala & spices</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/masala-and-spices-added-to-wok.webp"
                    alt="masala and spices added to wok"
                    title="masala and spices added to wok for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="9">
                  <li>
                    Add sliced tomato and cook until the tomato softens down &
                    begins to disappear (we don't want tomato chunks in our
                    biryani) &mdash; mix well
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>add tomato</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/tomatoes-added-to-wok.webp"
                    alt="tomatoes added to wok"
                    title="tomatoes added to wok for chicken biryani"
                  />
                </figure>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>soften the tomato</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/tomatoes-softening-in-wok.webp"
                    alt="tomatoes softening in wok"
                    title="tomatoes softening in wok for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <figure class="card_image">
                  <figcaption>blend tomato with ingredients</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/tomatoes-blended-with-ingredients-in-wok.webp"
                    alt="tomatoes blended with ingredients in wok"
                    title="tomatoes blended with ingredients in wok for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="10">
                  <li>
                    Now remove the skin from the chicken drumsticks if you have
                    not already done so. Set your oven onto 180c to pre-heat
                  </li>

                  <li>
                    Add the chicken drumsticks. Mix well, cover and cook until
                    the chicken pieces are 50% done. About 5 minutes.
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>add the drumsticks</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/chicken-drumstick-added-to-wok.webp"
                    alt="chicken drumsticks added to wok"
                    title="chicken drumsticks added to wok for chicken biryani"
                  />
                </figure>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>mix well, cover & cook for 5 mins</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/chicken-drumsticks-coated-in-spices.webp"
                    alt="chicken drumsticks coated in spices"
                    title="chicken drumsticks coated in spices for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="12">
                  <li>
                    Add some mint and coriander leaves, 1/2 cup of yogurt and
                    mix everything well.
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>add mint, coriander & yogurt</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/chopped-mint-added-to-chicken.webp"
                    alt="chopped mint added to chicken"
                    title="chopped mint added to chicken in wok for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="13">
                  <li>
                    Now add the cleaned, soaked & drained basmati rice on top of
                    the chicken.
                  </li>
                </ol>

                <ol start="14">
                  <li>
                    Then add water (for 1 cup of Basmati rice add 1.5 cups of
                    water). Add another 1/2 tsp salt. Cover & place in a
                    pre-heated oven for 45 minutes.
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>add water - cover & cook</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/water-added-to-dutch-oven.webp"
                    alt="water added to dutch oven"
                    title="water added to dutch oven for chicken biryani"
                  />
                </figure>
                <div class="spacer"></div>

                <ol start="15">
                  <li>
                    Uncover & check the rice is cooked &mdash; mix gently to
                    enjoy tasty home-made Chettinad style chicken biryani.
                  </li>
                </ol>

                <div class="spacer"></div>
                <figure class="card_image">
                  <figcaption>check rice is cooked</figcaption>
                  <img
                    src="/images/chicken-biryani/650x366/chicken-biryani-cooked.webp"
                    alt="chicken biryani cooked"
                    title="chicken biryani cooked in a dutch oven"
                  />
                </figure>
                <div class="spacer"></div>
              </div>

              <div class="spacer"></div>
              <p>
                Oven Baked <strong>Chicken Biryani</strong> served with a Mint
                Raita. Or you could go all out & make a vegetable curry sauce to
                accompany this dish.
              </p>

              <p>
                Nutty says "Well all I need is fork ;-) and a quiet corner to
                eat & enjoy!"
              </p>

              <div class="spacer"></div>
              <figure class="card_image_round">
                <figcaption>chicken biryani...</figcaption>
                <img
                  src="/images/chicken-biryani/650x366/chicken-biryani-raita-popadoms-01.webp"
                  alt="chicken biryani raita popadams"
                  title="chicken biryani served with raita and popadoms"
                />
                <figcaption>...with mint raita & popadoms</figcaption>
              </figure>
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
                    href="https://www.nuttyskitchen.co.uk/lamb-pulao-rice.html"
                    >lamb pulao rice
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/cauliflower-curry.html"
                    class="underline"
                    >cauliflower curry
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