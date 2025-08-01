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
          <strong>Now, this is something really special</strong>—I would even go
          so far as to say <em>authentic</em> Indian food:
          <strong>Curry Leaf Masala Chicken Fry.</strong>
        </p>
        <p>
          A bit of research "Curry Leaves Masala is not tied to a specific
          region but is commonly found in South Indian cuisine. The use of curry
          leaves as a key ingredient is deeply rooted in the culinary traditions
          of states like Tamil Nadu, Kerala, Karnataka, and Andhra Pradesh.
          These regions frequently use curry leaves in spice blends, chutneys,
          and curries to enhance flavor and aroma."
        </p>
        <p>
          This masala has a rich, earthy flavour with a distinct curry leaf
          aroma. I wouldn’t class it as hot, but some say I have the palate of
          an elephant’s foot! Probably from growing up with fresh chillies as a
          snack. &#128521; <em>But I digress…</em>
        </p>

        <p>
          This was introduced to me by an Indian friend, and I have to say, I
          was <em>thrilled</em> when he said, <q>You’ve made it well.</q>
        </p>

        <p><strong>Praise indeed!</strong> I mused silently to myself.</p>

        <p>
          I tend to make my spice mixes and even pastes the day before—reducing
          the workload when all you want to do is <em>eat</em>.
        </p>

        <p><strong>So, without ado, let's do this ting!</strong></p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Curry Leaf Masala Chicken Fry</strong> along with some
          pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-and-rice.webp"
            alt="curry leaf masala cooked in a wok"
            title="curry leaf masala chicken fry with basmati rice"
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
              <p>
                The ingredients for this masala will make enough for three
                cooking sessions! The reason I've made it in this quantity is to
                use a whole bunch of curry leaves as bought from my local
                supermarket. The masala can be stored in an air-tight jar for
                about three weeks. Happy cooking :¬)
              </p>

              <h2>Ingredients for Curry leaf Masala</h2>
              <ul>
                <li>30g curry leaves (stalks discarded)</li>
                <li>2 Tbsp whole coriander seeds</li>
                <li>1 1/2 tsp whole cumin seeds</li>
                <li>1 1/2 tsp whole fennel seeds</li>
                <li>5cm cinnamon stick</li>
                <li>8 whole cloves</li>
                <li>3 whole cardamom</li>
                <li>2 tsp whole peppercorns</li>
                <li>7 dried red chilli's</li>
              </ul>
              <div class="spacer"></div>

              <h2>Ingredients for Curry Leaf Chicken Fry</h2>

              <h2>serves 3 - 4</h2>
              <ul>
                <li>1 kg bone in chicken*</li>
                <li>5 tsp curry leaf masala</li>
                <li>3 Tbsp vegetable Oil</li>
                <li>1 tsp mustard seeds whole</li>
                <li>1 tsp cumin seeds whole</li>
                <li>4 red onions finely diced</li>
                <li>4 fresh green chilli's slit</li>
                <li>3 tsp fresh ginger garlic paste**</li>
                <li>2 fresh tomatoes finely diced</li>
                <li>1 to 2 tsp salt</li>
                <li>1 tsp turmeric powder</li>
                <li>fresh curry Leaves to garnish</li>
              </ul>
              <div class="spacer"></div>

              <p>
                <strong
                  >*Try to find the smallest thighs, or better yet, use
                  drumsticks.</strong
                >
                Indians usually cut through the bone—which I
                <em>did</em> attempt here, but nearly broke me wrist in the
                process! &#128517;
              </p>

              <p>
                (My new scissors for bone-cutting are officially banished to the
                back of the cupboard... forever!)
              </p>

              <p>
                **<strong>Try to make ginger & garlic paste fresh</strong> with
                5 cloves garlic & 5cm piece of ginger, peel the garlic & hit
                with back of a wide knife. As to the ginger roughly chop it.
                Then put both into a pestle & mortar and bash it till fine.
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
                Right our BIG PANTS are on
                <img
                  src="/images/icons/pants.png"
                  alt="pants image"
                  title="big pants!"
                  style="width: 24px"
                  class="inline"
                />
                ️Here's a brief description of how to approach this dish - get
                your self organised, prepare your curry leaf masala spices as
                above. Whilst they are all cooling move onto the step of
                preparing the Chicken Fry, then pop back here to complete the
                curry leaf masala
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method Curry leaf Masala</h2>

              <ol>
                <li>
                  First, prepare 50g of curry leaves. Just check they are clean
                  & fresh
                </li>
                <li>
                  Put into a hot dry pan & roast the curry leaves till they
                  change colour
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dry roast the curry leaves</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaves-drying-in-a-pan.webp"
                  alt="curry leaves drying in a pan"
                  title="curry leaves drying in a pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>Once they are crispy, transfer to a plate and cool</li>
                <li>
                  Use the same pan, add 2 Tbsp of coriander seeds, 1.5 tsp of
                  cumin seeds, 1.5 tsp of fennel seeds, a piece of cinnamon, 7-8
                  cloves, 3 cardamom pods, 2 tsp of pepper corns, 7-8 dried red
                  chillies
                </li>
                <li>
                  Dry roast them till you get a nice aroma, once done transfer
                  to a pot to cool in.
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dry roast the whole spices</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/toasting-whole-spices-in-a-pan.webp"
                  alt="toasting whole spices in a pan"
                  title="toasting whole spices in a pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>cool the spices after toasting</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/whole-spices-cooling-in-a-mortar.webp"
                  alt="whole spices cooling in a mortar"
                  title="whole spices cooling in a mortar for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>
                  Transfer the ingredients to a spice grinder and grind it to a
                  nice fine powder
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>grind to a fine powder</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-spoon.webp"
                  alt="curry leaf masala spoon"
                  title="curry leaf masala on a spoon for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>it will store for up to about 3 weeks</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-spoon-and-jar.webp"
                  alt="curry leaf masala spoon and jar"
                  title="curry leaf masala on a spoon and in a storage jar"
                />
              </div>
              <div class="spacer"></div>

              <h2>Method: Chicken fry</h2>

              <p>
                chop & grind all your fresh ingriedients. Then get your 1 tsp
                whole mustard & cumin seeds ready to dry fry. Set all your
                powdered spices onto a plate ready to add to the dish. We are
                good to go now...
              </p>

              <ol>
                <li>Take a wide heavy based wok, heat & add 3 Tbsp of oil</li>
                <li>
                  Once the oil shimmers, add 1 tsp of mustard seeds & 1 tsp
                  cumin seeds.
                </li>
                <li>
                  Add 2 x finely chopped large onions, four slit green chillies
                  & stir fry until the aroma fills the kitchen.
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry onions & chillies</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/onions-chillies-in-a-pan.webp"
                  alt="onions chiiies in a pan"
                  title="onions chiiies in a pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>Add 3 tsp of ginger & 3 tsp garlic paste and mix well.</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add ginger & garlic</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/ginger-added-to-pan.webp"
                  alt="ginger added to pan"
                  title="ginger added to pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>
                  Add 1 tsp of salt & 1 tsp of turmeric powder then mix it all
                  in.
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add salt & turmeric</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/ground-spices-added-to-pan.webp"
                  alt="ground spices added to pan"
                  title="ground spices added to pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>Add 2 chopped tomatoes & mix again.</li>
                <li>Add one kilo of chicken pieces and mix it all together.</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add chicken pieces</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/raw-chicken-added-to-pan.webp"
                  alt="raw chicken added to pan"
                  title="raw chicken added to pan for curry leaf masala chicken fry"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>mix the spice & chicken well</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/chicken-coated-in-spices-in-a-pan.webp"
                  alt="chicken coated in spices in a pan"
                  title="chicken coated in spices in a pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>Add 2 chopped tomatoes & mix again.</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/tomatoes-added-to-pan.webp"
                  alt="tomatoes added to pan"
                  title="tomatoes added to pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>Close the pan with the lid and cook for 5 minutes.</li>
                <li>
                  Add two tsp of curry leaf masala and cook well with the lid on
                  again. About 10 minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>
                  add curry leaf masala & cook for 10 mins
                </figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-added-to-pan-01.webp"
                  alt="curry leaf masala added to pan"
                  title="curry leaf masala added to pan for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>
                  Again add two tsp of curry leaf masala & mix well cook for 5
                  minutes uncovered.
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add more curry leaf masala</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-added-to-pan-02.webp"
                  alt="curry leaf masala added to pan 02"
                  title="curry leaf masala added to pan for the 2nd time for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>
                  Once it is drier, add the last tsp of curry leaf masala again
                  & mix together.
                </li>
                <li>Add some fresh curry leaves & turn off the stove</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add curry leaf masala again</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-added-to-pan-03.webp"
                  alt="curry leaf masala added to pan 03"
                  title="curry leaf masala added to pan for the 3rd time for curry leaf masala chicken fry"
                />
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Note:</strong> Adding the curry leaf masala in different
                stages helps to build up layers of flavours: spices that are
                really well cooked (this flavour dissapates through the entire
                dish) then some that are cooked a little and then some that are
                literally &mdash; <em>just warmed through</em>.
              </p>

              <ol start="15">
                <li>Taste & add salt if required</li>
                <li>
                  Curry leaf chicken fry is ready to be served nice and hot.
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>curry leaf masala chicken fry</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-cooked-in-wok.webp"
                  alt="curry leaf masala cooked in a wok"
                  title="curry leaf masala chicken fry cooked in a wok & ready to serve"
                />
                <figcaption>...ready to serve</figcaption>
              </div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>curry leaf masala chicken fry</figcaption>
                <img
                  src="/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-and-rice-03.webp"
                  alt="curry leaf masala cooked in a wok"
                  title="curry leaf masala chicken fry with basmati rice"
                />
                <figcaption>...and plain boiled basmati rice</figcaption>
              </div>
              <div class="spacer"></div>

              <p>This is just astounding!</p>

              <div class="card_image">
                <figcaption>curry leaf masala chicken fry</figcaption>
                <img
                  src="/images/Swedish Chef Cooking GIF.gif"
                  alt="Swedish Chef Cooking GIF"
                  title="Swedish Chef Cooking GIF"
                />
                <figcaption>
                  ...Yes! Yes! Yes! Now that's what I call a masala :¬)
                </figcaption>
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
                    href="https://www.nuttyskitchen.co.uk/basmati-rice.html"
                    >basmati rice
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/authentic-seekh-kebabs.html"
                    class="underline"
                    >authentic seekh kebabs
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