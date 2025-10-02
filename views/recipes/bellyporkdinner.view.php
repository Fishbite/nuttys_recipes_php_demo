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
        I had some left over mashed potatoes from when I made my Lamb Mash
        Pie, so I thought, why not have a mini roast dinner ;-) I'm fortunate
        to own an air fryer that's perfect for this (it costs a little less to
        run!) but this can easily be made under a grill or in a standard oven.
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
        <img src="/images/bellyporkdinner/650x366/dinner-served.jpg" alt="dinner dinner-served"
          title="Belly Pork Dinner Served" />
      </article>

      <article class="about">
        <!-- buttons container -->
        <div class="btn-container">
          <!-- class active = show content -->
          <button class="tab-btn active" data-id="ingredients">
            ingredients
          </button>
          <button title="Click this tab to read the recipe method and see pictures of how to make this dish"
            class="tab-btn" data-id="method">
            method
          </button>
        </div>

        <!-- about content -->
        <article class="about-content">
          <!-- single item -->
          <div class="content active" id="ingredients">
            <h2>ingredients</h2>
            <p>Here's what you need :¬)</p>

            <!-- Ingredients List Goes Below Here!!! -->
            <h2>serves 2</h2>
            <h5>Meat</h5>
            <ul>
              <li>6 slices of belly pork</li>
              <li>1 Tblsp veg oil</li>
            </ul>
            <div class="spacer"></div>

            <h5>Gravy</h5>
            <ul>
              <li>5 Chestnut mushrooms sliced</li>
              <li>Knob of butter to fry the mushrooms</li>
              <li>1 dessert spoon plain flour</li>
              <li>1 dessert spoon Bisto&trade; gravy powder</li>
              <li>Small cup cold water</li>
              <li>1 OXO&trade; veg stock cube</li>
            </ul>
            <div class="spacer"></div>

            <h5>Vegetables</h5>
            <ul>
              <li>2 Maris Piper potatoes chopped into 4</li>
              <li>1 1/2 Tblsp salt</li>
              <li>
                Mashed potatoes (I had some left over from Lamb Mash pie)
              </li>
              <li>2 large carrots quatered length ways</li>
              <li>3 large savoy cabbage leaves thinly sliced</li>
            </ul>
            <!-- Ingredients List Goes Above Here!!! -->
          </div>
          <!-- end of single item -->

          <!-- single item -->
          <div class="content" id="method">
            <h2>method</h2>
            <p>
              We're doing a few things to make this dinner, roasting the belly
              pork, making the roast potatoes and steaming some veg and making
              the all important gravy to finish the dish off.
            </p>
            <!-- Method List Goes Below Here!!! -->

            <h5>Prep The Roast Potatoes</h5>
            <ol>
              <li>Grease a roasting tin with veg oil</li>
              <li>Put the potatoes in a pan of cold water</li>
              <li>Add 1 heaped Tblsp salt</li>
              <li>Bring to the boil</li>
              <li>Simmer for 5 mins</li>
              <li>Drain & cover with cold water to stop the cooking</li>
              <li>Drain well when cold</li>
            </ol>

            <div class="spacer"></div>
            <h5>Prep The Pork</h5>
            <div class="card_image">
              <figcaption>belly pork</figcaption>
              <img src="/images/bellyporkdinner/650x366/belly-pork-roasting-tin.jpg" alt="belly pork roasting tin"
                title="Belly Pork in Roasting Tin" />
            </div>
            <div class="spacer"></div>

            <ol>
              <li>Set oven to 200c</li>
              <li>Make several cuts across the belly pork fat/skin</li>
              <li>Put pork strips into a roasting tin, fat side up</li>
              <li>Roast for 10 mins</li>
              <li>Turn the pork strips onto their side</li>
              <li>Roast for 12 mins</li>
              <li>Turn the pork onto the other side</li>
              <li>Roast for another 12 mins</li>
              <li>Set onto a warm plate & cover to rest</li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>belly pork</figcaption>
              <img src="/images/bellyporkdinner/650x366/belly-pork-plated.jpg" alt="belly pork plated"
                title="Belly Pork Dinner plated" />
            </div>
            <div class="spacer"></div>
            <p>
              <b>Note:</b> It's really important to let the meat rest as it
              allows the meat to relax and juices to run through to make it
              succulent
            </p>

            <h5>Roast Potatoes</h5>
            <ol>
              <li>Set oven to 180c</li>
              <li>Put the roasting potatoes into the meat tin</li>
              <li>Roast for 30 mins, turn once after 15 mins</li>
            </ol>

            <div class="spacer"></div>
            <h5>Gravy</h5>
            <ol>
              <li>Melt the butter in a pan</li>
              <li>Gently fry the mushrooms on med-high until soft</li>
              <li>Put the rest of the ingredients into the pan</li>
              <li>Whisk on med-high heat until combined and thickened</li>
              <li>Simmer for 2 mins</li>
            </ol>

            <div class="spacer"></div>
            <h5>Veg</h5>
            <ol>
              <li>Pop the veg into the steamer, all in one basket</li>
              <li>Steam for 25mins</li>
              <li>Pop the mash in the microwave for 1 min</li>
              <li>Stir the mash & heat for another minute</li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>dinner done!</figcaption>
              <img src="/images/bellyporkdinner/650x366/dinner-served.jpg" alt="dinner served"
                title="Belly Pork Dinner Served" />
            </div>
            <div class="spacer"></div>

            <div class="card_image_round">
              <figcaption>dinner plated</figcaption>
              <img src="/images/bellyporkdinner/650x366/dinner-plated.jpg" alt="dinner plated"
                title="Belly Pork dinner with mash, steamed veg, gravy & apple sauce" />
              <figcaption>
                serve with mash, steamed veg, gravy & apple sauce
              </figcaption>
            </div>
            <div class="spacer"></div>

            <!-- Method List Goes Above Here!!! -->
          </div>
          <!-- end of single item -->

          <section class="related">
            <h1>Related recipes</h1>
            <ul>
              <li>
                <a class="underline" href="https://www.nuttyskitchen.co.uk/lambmashpie.html">sheperds pie
                </a>
              </li>
              <li>
                <a href="https://www.nuttyskitchen.co.uk/mashed-roots.html" class="underline">mashed roots
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