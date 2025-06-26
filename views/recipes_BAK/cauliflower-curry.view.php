<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          <strong>Cauliflower Curry</strong>, now firstly & maybe obviously you
          need to like cauliflower to try this dish as it really is what it says
          in the title! Delicate, not too spicy, in a creamy coconut sauce.
          There is one ingredient you may not as yet have in your growing Indian
          spices &mdash; Gram flour, but, here it is essential, so go buy some
          before even attempting this dish as plain flour will not work ;-0 Gram
          flour has a flavour all of its own and can not be substituted, it also
          thickens the sauce.
        </p>

        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make this <strong>Cauliflower Curry</strong> along with a couple of
          pictures for reference.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/cauli-curry/650x366/cauliflower-curry-in-a-pan-01.webp"
            alt="cauliflower curry in a pan"
            title="cauliflower curry finished cooking in a pan"
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

          <!-- about content -->
          <article class="about-content">
            <!-- single item -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <ul>
                <li>1 large cauliflower broken into bite size florets</li>
                <li>4 Tbsp vegetable oil</li>
                <li>1 tsp cumin seeds</li>
                <li>10 to 15 dried or frozen curry leaves</li>
                <li>2 small red onions sliced</li>
                <li>400ml 1 tin coconut milk</li>
                <li>Juice of a large lemon</li>
                <li>Juice of a small lime</li>
              </ul>

              <div class="spacer"></div>

              <h2>Spice paste ingredients</h2>

              <ul>
                <li>1 Tbsp gram flour</li>
                <li>120ml water</li>
                <li>1 tsp hot chilli powder</li>
                <li>1 tsp Kashmiri chilli powder</li>
                <li>1 tsp ground coriander</li>
                <li>1 tsp mustard powder</li>
                <li>1 tsp ground cumin</li>
                <li>1 tsp turmeric</li>
                <li>1 tsp sea salt</li>
                <li>
                  2 to 4 Fresh green chillies sliced into discs (Optional)
                </li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                To make the spice paste: combine the gram flour with a little
                water to make a paste, then add all the other spices & salt to
                it, mixing with enough water to make a wet paste. Slice your
                onions, break down your cauliflower, juice your fruit and now
                your ready to cook.
              </p>
              <!-- Method List Goes Below Here!!! -->

              <p>Here are the ingredients bar the cauliflower & onions:</p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/cauli-curry/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for cauliflower curry"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>Set a large heavy bottomed pan onto a large ring.</li>
                <li>Add your oil when it is hot</li>
                <li>
                  As soon as it shimmers, add your cumin seeds & curry leaves
                </li>
                <li>
                  Once they are sizzling, add in your onions fry for 20 minutes
                </li>
                <li>
                  Now add your spice paste & stir-fry, as soon as it becomes too
                  thick, add any remaining water & your coconut milk
                </li>
                <li>
                  Once bubbling add in your cauliflower & if it is not all
                  submerged add a little more water
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add cauliflower</figcaption>
                <img
                  src="/images/cauli-curry/650x366/add-water-and-coconut-milk.webp"
                  alt="add water and coconut milk"
                  title="water and coconut milk added to make cauliflower curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  Set a timer for 20 minutes, turn the ring down, cover and feel
                  free to walk away
                </li>
                <li>
                  Test the cauliflower to see if it is tender & as your prefer
                  it, if it is, add in your fresh lemon & lime juices
                </li>
                <li>
                  If it needs longer, continue to cook then add your juices
                </li>
                <li>
                  If the consistency is a bit thin, get another Tbsp of gram
                  flour & combine with water add into the pot stir through
                </li>
                <li>
                  If it is too thick, add a little more water & allow it to
                  reheat
                </li>
                <li>
                  If using the fresh chillies sprinkle over the top & serve
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>cauliflower curry</figcaption>
                <img
                  src="/images/cauli-curry/650x366/cauliflower-curry-in-a-pan-01.webp"
                  alt="cauliflower curry in a pan"
                  title="cauliflower curry finished cooking in a pan"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Serve with naan breads, poppadom or chapati, or even just a
                spoon added to another helping.
              </p>

              <!-- Method List Goes Above Here!!! -->
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
