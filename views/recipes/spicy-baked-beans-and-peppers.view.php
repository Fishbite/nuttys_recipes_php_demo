<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section class="fg">
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <!-- First paragraph after the page title -->
        <p>
          <strong>Spicy Baked Beans & Peppers!</strong> This is something my
          mother used to put together for barbecues & parties. I've altered it
          slightly as were not keen on barbecue style sauces. If you are, I have
          given you that option as well, which basically involves adding tomato
          kepchup & brown sauce to create a barbecue sauce. This can be eaten
          hot or cold, so it's a perfect addition to a picnic style lunch or
          buffet. I last served this for dinner with my home made "Cheese &
          Onion Quiche" & "Spicy Potato Wedges" and both those recipes can be
          found over on the recipe page. But, 15 minutes & this side dish should
          be done and ready to serve with whatever you please :-)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Spicy Baked Beans & Peppers</strong>, along with
          some pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/spicy-baked-beans-and-peppers/650x366/spicy-baked-beans-and-peppers.webp"
            alt="spicy baked beans and peppers"
            title="spicy baked beans and peppers with spicy potato wedges"
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
              <ul>
                <li>1 medium onion sliced</li>
                <li>2 cloves garlic diced</li>
                <li>2 small fresh tomatoes halved & sliced</li>
                <li>1/2 red green & yellow pepper diced</li>
                <li>1 fresh green chilli sliced into disks</li>
                <li>1 Tbls veg oil</li>
                <li>grind of salt & pepper</li>
                <li>dash of Worschester sauce</li>
                <li>1 tsp paprika</li>
                <li>1 x 410g tin of baked beans in tomato sauce</li>
              </ul>
              <div class="spacer"></div>
              <p>
                <strong>Note:</strong> To make the dish more barbecue style, add
                a Tbsp tomato ketchup & a Tbsp of brown sauce at the end and
                stir through
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
                There's just a little veg' prep' to do, then it's a simple
                one-pot-pan to make this side dish. And, as I said in the intro,
                to make the dish more barbecue style, add a Tbsp tomato ketchup
                & a Tbsp of brown sauce at the end and stir through. So, gather
                all ingredients and away we go!
              </p>

              <!-- Method List Goes Below Here!!! -->
              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/spicy-baked-beans-and-peppers/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for Spicy Baked Beans & Peppers"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>heat a heavy based pan & add oil</li>
                <li>once hot add your onions to soften for 5 mins</li>
                <li>add garlic & tomatoes for 5 mins</li>
                <li>add peppers & chillies for 5 minutes</li>
                <li>
                  season with salt, pepper, paprika & a dash of Worcester sauce
                </li>
              </ol>

              <div class="card_image">
                <figcaption>season well when soft</figcaption>
                <img
                  src="/images/spicy-baked-beans-and-peppers/650x366/veg-cooking.webp"
                  alt="veg cooking"
                  title="veg cookinng for Spicy Baked Beans & Peppers"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>add in the baked beans & simply re-heat & serve</li>
                <li>or cool & store for a cold picnic</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>spicy baked beans and peppers</figcaption>
                <img
                  src="/images/spicy-baked-beans-and-peppers/650x366/spicy-baked-beans-and-peppers.webp"
                  alt="spicy baked beans and peppers"
                  title="spicy baked beans and peppers with spicy potato wedges"
                />
                <figcaption>with spicy potato wedges</figcaption>
              </div>

              <div class="spacer"></div>

              <p>
                These <strong>Spicy Baked Beans & Peppers</strong> are really,
                really tasty and go excellently with spicy potato wedges. Adjust
                the chilli heat accordingly!!!
              </p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't less with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->
          </article>
        </article>
      </div>
    </section>
  <?php require __DIR__ . '/../partials/footer.php'; ?>
  <script src="/scripts/tabs.js"></script>
</body>
</html>
