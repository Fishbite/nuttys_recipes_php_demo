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
          Celeriac is often overlooked and underused, but it’s absolutely
          delicious. It can be grated into pickles and salads or used in soups
          &mdash; perfect for warming up in winter. That’s exactly what I’m
          going to do, adding a touch of curry powder for extra flavour.
          However, you can follow the recipe and leave out the curry powder if
          you prefer; it will still make a fantastic celeriac soup. To finish,
          I’ve added crispy fried grated celeriac and red onion as a topping,
          bringing both an amazing texture and flavour to the dish.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Celeriac Soup</strong> along with some pictures as a
          guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/celeriac-soup/650x366/celeriac-soup.webp"
            alt="celeriac soup"
            title="celeriac soup with crispy celeriac & onion topping"
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
                <li>2 Tbsp oil</li>
                <li>2 white onions sliced</li>
                <li>4 cloves garlic, sliced</li>
                <li>2 Tbsp Dunns Hot curry powder (optional)</li>
                <li>1 tsp dried thyme</li>
                <li>1 tsp sea salt, ground</li>
                <li>1 tsp black pepper corns, ground</li>
                <li>2 OXO&trade; vegetable stock cubes, crumbled</li>
                <li>1 pint boiling water</li>
                <li>1 whole celeriac, diced</li>
                <li>1 lemon, juiced</li>
                <li>1 celeriac steak, grated</li>
                <li>1 red onion</li>
                <li>Pinch of salt</li>
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
                First, gather all your ingredients. Peel and slice the onions
                and garlic, then start frying them while you prepare the
                celeriac.
              </p>
              <p>
                To prepare the celeriac, the easiest method is to trim a little
                from the smooth bottom to create a flat base. Then, flip it over
                and slice into the wrinkled top until you reach a smooth, clean
                surface. Peel the outer skin downwards, flip it again, and
                repeat the process. Once peeled, cut the celeriac in half, then
                into steaks. Set one steak aside for the topping, and dice the
                rest into 2cm cubes.
              </p>
              <p>
                I used a pressure cooker for this recipe, but you can also use a
                large heavy bottomed pan. Timings for both methods are included
                in the steps below.
              </p>
              <p>
                The finished soup may need thinning down before serving, you
                won't know if it needs this until you blend the
                <strong>Celeriac Soup</strong> to a smooth consistency. The soup
                should keep for about a week in the fridge.
              </p>

              <p>So, get all your ingredients out and get ready to cook!</p>

              <!-- Method List Goes Below Here!!! -->

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/ingredients-01.webp"
                  alt="ingredients"
                  title="ingredients for celeriac soup"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  Heat your cooking pot, add the oil, once shimmering add in the
                  sliced onions
                </li>
                <li>
                  once the onions have softened, add your garlic allow it to fry
                  gently
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>trim & peel the celeriac</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/celeriac-and-peelings-01.webp"
                  alt="celeriac and peelings"
                  title="preparing celeriac for celeriac soup"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>slice & dice the celeriac</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/celeriac-sliced-and-diced-01.webp"
                  alt="sliced and diced celeriac"
                  title="sliced and diced celeriac for celeriac soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>prepare your celeriac as above</li>
                <li>disolve stock cubes in boiling water</li>
                <li>add salt, pepper & thyme to the pan</li>
                <li>add curry powder if using & stir fry</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add spices to soft onions</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/onions-and-spices-in-a-cooking-pot.webp"
                  alt="onions and spices in a cooking pot"
                  title="onions and spices in a cooking pot celeriac soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>add the stock water</li>
                <li>add the diced celeriac to the pot & cover</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add diced celeriac</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/diced-celeriac-in-a-cooking-pot.webp"
                  alt="diced celeriac in a cooking pot"
                  title="diced celeriac in a cooking pot for celeriac soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  cook in a pressure cooker on 'soup/high' setting for 5
                  minutes, alternatively; 15 minutes on the hob
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add lemon when cooked</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/celeriac-chunky-soup-cooked.webp"
                  alt="celeriac chunky soup cooked"
                  title="diced celeriac in a cooking pot for celeriac soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  *now remove the soup, add the lemon juice & stick blend (or
                  place in a liquidiser) until smooth
                </li>
                <li>sprinkle with some fresh thyme leaves</li>
              </ol>

              <div class="spacer"></div>

              <p>
                <strong
                  >*If the soup is a little thick, thin down with boiling water.
                  You really wont know if it needs it until you blend
                  it!</strong
                >
              </p>
              <div class="card_image_round">
                <figcaption>blend & sprinkle with thyme</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/celeriac-soup-blended-in-serving-dish.webp"
                  alt="celeriac soup blended in serving dish"
                  title="celeriac soup with fresh thyme in a serving dish"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <h2>method for the topping</h2>
              <p>
                You can make the topping for the soup while the soup is cooking.
                Make sure you do this, it adds a great texture and flavour to
                the soup!
              </p>

              <ol>
                <li>get a small frying pan & add a little oil</li>
                <li>once hot, add your grated celeriac & red onion</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>celeriac and onions browning</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/celeriac-and-onions-browning-in-pan.webp"
                  alt="celeriac and onions browning in pan"
                  title="celeriac and onions browning in pan to top celeriac soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  do not stir excessively, we want it to almost catch and deeply
                  colour
                </li>
                <li>flip once deeply coloured & repeat</li>
                <li>set into a pot & add to each bowl as you serve</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>crispy celeriac & onion topping</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/caramalised-celeriac-and-onion-topping.webp"
                  alt="caramalised celeriac and onion topping"
                  title="caramalised celeriac and onion topping for celeriac soup"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>celeriac soup</figcaption>
                <img
                  src="/images/celeriac-soup/650x366/celeriac-soup.webp"
                  alt="celeriac soup"
                  title="celeriac soup with crispy celeriac & onion topping"
                />
                <figcaption>with crispy celeriac & onion topping</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                A beautiful smooth warming soup with a crispy tangy topping that
                adds another dimension of flavours and textures. Simply
                delicious :-P
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
