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
          I make a lot of dishes with cauliflower but, this is a simple side
          dish of <strong>Cauliflower Cheese</strong> to go with any kind of
          roast dinner, it's also perfect with a slice of bread & butter @ lunch
          time.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Cauliflower Cheese</strong> along with some pictures
          as a guide.
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
              <h2>serves 4</h2>

              <h2>Cheese sauce</h2>
              <ul>
                <li>50g butter</li>
                <li>50g flour</li>
                <li>Pinch of Salt & black pepper</li>
                <li>1 tsp Dijon mustard</li>
                <li>1 tsp English mustard powder</li>
                <li>1 tsp onion powder</li>
                <li>1 OXO vegetable stock cube</li>
                <li>100g extra mature (No. 6 strength) cheddar cheese</li>
                <li>50g extra cheese for topping</li>
                <li>1 pint of whole or semi-skimmed milk</li>
              </ul>
              <div class="spacer"></div>

              <h2>Cauliflower</h2>

              <ul>
                <li>1 large cauliflower, broken into florets</li>
                <li>1 Tblsp salt</li>
                <li>cauliflower leaves</li>
                <li>Dash of oil</li>
                <li>Knob of butter</li>
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
                Description about the method here please!!! Poutine etsy tote
                bag, cred fingerstache leggings cornhole everyday carry blog
                gastropub. Brunch biodiesel sartorial mlkshk swag, mixtape
                hashtag marfa readymade direct trade man braid cold-pressed roof
                party. Small batch adaptogen coloring book heirloom. Letterpress
                food truck hammock literally hell of wolf beard adaptogen
                everyday carry. Dreamcatcher pitchfork yuccie, banh mi salvia
                venmo photo booth quinoa chicharrones.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <!-- If you need to break the list to insert an image
                   or paragraph, make sure to close the list:
                  
                   This list numbering starts at "1"

                  <ol>
                    <li>list content here</li>
                    <li>list content here</li>
                  </ol>

                  <p>inserted paragraph or image here</p>

                  Then restart the method list with a `start` parameter
                  to tell the list what the first number should be:

                  This list numbering starts at "3":

                  <ol start="3">
                    <li>More list content here</li>
                    <li>More list content here</li>
                  </ol>
                
                -->
              <h2>make the cheese sauce</h2>

              <ol>
                <li>Melt the butter in a small - med pan</li>
                <li>Add all the flour</li>
                <li>Add the onion powder with the English & Dijon mustard</li>
                <li>Stir with a whisk or spoon to make a roux</li>
                <li>Add a little milk at a time while whisking</li>
              </ol>
              <div class="spacer"></div>

              <p>
                Don't worry about the lumps, keep stirring and whisking as you
                add the milk and they will melt into the sauce
              </p>

              <ol>
                <li>Stir continuously to form a thick white sauce</li>
                <li>When thickened, it should coat the back of a spoon</li>
                <li>Turn the heat off</li>
                <li>Add the cheese</li>
                <li>Stir until the cheese has melted</li>
              </ol>

              <div class="spacer"></div>

              <h2>Prepare Cauliflower cheese bake</h2>

              <ol>
                <li>put the cauli' florets in a large pan</li>
                <li>cover with water & add 1 Tblsp salt</li>
                <li>bring to the boil & simmer for 5 mins until just cooked</li>
                <li>add the cauliflower leaves for 1 min</li>
                <li>drain & immerse in ice-cold water</li>
                <li>once stone-cold drain well</li>
                <li>
                  place cauli into your cheese sauce stir until throughly coated
                </li>
              </ol>

              <div class="spacer"></div>

              <h2>Baking</h2>

              <ol>
                <li>use oil & butter to grease the dish throughly</li>
                <li>
                  decant cauli & sauce into the greased baking dish / serving
                  dish
                </li>
                <li>top with your reserved cheese</li>
                <li>bake @ 180c for 30 mins until browned & bubbling</li>
              </ol>

              <div class="spacer"></div>

              <p>
                <strong>Serving suggestion</strong> for:
                <strong>Cauliflower cheese</strong> do not know what we served
                this with?
              </p>
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