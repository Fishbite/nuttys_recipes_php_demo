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
          This quick and easy homemade gravy recipe allows you to create rich,
          flavorful gravy without relying on instant granules, which often
          contain unnecessary additives.
        </p>

        <p>
          While this recipe uses beef stock cubes as an example, you can easily
          substitute them with chicken, pork, or lamb to complement your dish.
        </p>

        <p>
          Using stock cubes is a simple and effective way to enhance your
          gravy's depth of flavor without additional processed ingredients. This
          recipe serves two, but you can easily adjust the quantities to
          accommodate more.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Gravy</strong> along with some pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/sausagepepperpie/sausageandpepperpie03.jpg"
            alt="sausage and pepper pie"
            title=""
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
              <h2>serves 2</h2>
              <ul>
                <li>10g salted butter</li>
                <li>1/2 dessert spoon Bisto&trade; powder</li>
                <li>1/2 dessert spoon plain flour</li>
                <li>1 OXO&trade; beef stock cube</li>
                <li>1 OXO&trade; veg stock cube</li>
                <li>300ml cold water</li>
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
                Whenever you need to whip up some <strong>gravy</strong>, this
                recipe is a fantastic starting point. Plus, I have a few expert
                tips to elevate the flavor and make your
                <strong>gravy</strong> even more delicious!
              </p>
              <p>
                If you are roasting a joint of meat or frying steaks, chops or
                even diced meat of any kind, put your meat to one side to rest
                and keep warm while you make the <strong>Gravy</strong>. This
                will allow the meat to relax and become more tender and juicy.
              </p>
              <p>
                Take your hot meat tin / pan and deglaze it with some water, put
                it back on the heat (or in the oven) until it's hot and then
                give the bottom of the pan / tin a good scrape with a wooden
                spoon to get all those wonderful brown bits off the bottom.
                Substitute some or all of the water stated in the ingredients
                with these juices.
              </p>
              <p>
                <strong>Note:</strong> Nine times out of ten, this is how I'll
                make my <strong>Gravy</strong>. However, I will occasionally
                deglaze the pan with a glass of red or white wine (depending on
                the type of meat) to make an even more luxurious
                <strong>Gravy</strong>!
              </p>

              <p>
                The <strong>Gravy</strong> comes together rather quickly, so
                have everything to hand and ready to use.
              </p>

              <ol>
                <li>
                  add your butter to a medium hot saucepan & allow it to melt
                </li>
                <li>add your flour and stir to combine & create a roux</li>
                <li>mix your Bisto&trade; with the 300ml of water* & whisk</li>
                <li>crumble in both your stock cubes</li>
                <li>add the water & Bisto&trade; mix to your pan</li>
                <li>stir constantly until it thickens & starts to simmer</li>
                <li>check the seasoning add salt if required</li>
              </ol>

              <div class="spacer"></div>

              <p>
                <strong>*</strong>Substitute some or all of the water with your
                meat juices if you have them.
              </p>

              <h2>Let's Make Proper Gravy!</h2>

              <!-- 
                   Image with spacers before and after, you can copy and
                   paste this and change the details to point to a new
                   image.

                   NOTE: The `alt` & `title` parameters are REALLY
                   important for Google and disabled folks! The text in
                   the `alt` parameter should be exactly the same as the 
                   descriptive filename but without the dashes!
                   Use the title to push the key words of the page.
                   e.g. "sausage pasta" in this instance!
              -->
              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>brown sausages</figcaption>
                <img
                  src="/images/sausagepasta/650x366/sausage-browning-in-pan-02.jpg"
                  alt=""
                  title=""
                />
              </div>
              <div class="spacer"></div>

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
