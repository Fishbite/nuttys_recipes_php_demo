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
          I'm not kidding here, this dish takes a little while to construct! If
          I could give you one great tip: I often make the pasta sauce a day or
          two ahead - it only benefits from being in the fridge allowing the
          flavours to develop. You can also make the cheese sauce in advance and
          then it's not such a huge task to put this beautiful meal together.
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
          <img
            src="/images/chickenlasagne/650x366/chicken-lasagne-01.jpg"
            alt="chicken lasagne"
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button class="tab-btn active" data-id="ingredients">
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
              <p>Here's what you need :-)</p>

              <h2>serves 6</h2>

              <!-- Ingredients List Goes Below Here!!! -->
              <ul>
                <h2>for the pasta sauce</h2>
                <li>3 Tblsp oil</li>
                <li>3 medium onions sliced</li>
                <li>3 carrots grated</li>
                <li>3 celery stalks finely chopped</li>
                <li>5 cloves of garlic finely chopped</li>
                <li>
                  1 pack smoked bacon lardons or 3 rashers sliced and diced
                </li>
                <li>450g chicken boneless thighs diced into eight</li>
                <li>8 chestnut mushrooms quartered</li>
                <li>
                  1 400g tin plum tomatoes pulped in a blender or mashed with a
                  potato masher
                </li>
                <li>2 Tbls tomatoe puree</li>
                <li>2 tsp italian mixed herbs</li>
                <li>1 tsp oregano</li>
                <li>1 bunch of fresh marjoram</li>
                <li>1 OXO™ chicken stock cube crumbled</li>
                <li>1 OXO™ vegetable stock cube crumbled</li>
                <li>1 Tbls Worcestershire sauce</li>
                <li>1 tsp salt</li>
                <li>1 1/2 x tsp black pepper</li>
                <li>400ml water</li>
              </ul>

              <div class="spacer"></div>

              <h2>for the cheese sauce</h2>
              <ul>
                <li>50g butter</li>
                <li>50g flour</li>
                <li>Pinch of Salt & black pepper</li>
                <li>1 tsp Dijon mustard</li>
                <li>1 tsp English mustard powder</li>
                <li>1 tsp onion powder</li>
                <li>1 OXO vegetable stock cube</li>
                <li>150g extra mature (No. 6 strength) cheddar cheese</li>
                <li>1 pint of whole or semi-skimmed milk</li>
              </ul>

              <div class="spacer"></div>

              <h2>for the lasagne</h2>
              <ul>
                <li>1 box of lasagne sheets</li>
                <li>1 slice of half white / half brown bread - crumbed</li>
                <li>80g grated extra strong cheddar 6</li>
                <li>Dash of olive oil to drizzle</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                I'm going to break the process of making this dish down into
                three stages:
              </p>

              <ul class="list-btn-wrapper">
                <li class="list-btn">
                  <a href="#pasta">Make the pasta sauce</a>
                </li>
                <li class="list-btn">
                  <a href="#cheese">Make the cheese sauce</a>
                </li>
                <li class="list-btn">
                  <a href="#lasagne">Construct the lasagne</a>
                </li>
              </ul>

              <div class="spacer"></div>

              <p>Click the links above to jump to any of the stages below</p>

              <p>
                I was wondering whether to simply put links here that took you
                to my pasta and cheese sauce recipes, but, I think it's easier
                if you have everything here on the same page, so you are not
                needlessly jumping around the website.
              </p>

              <p id="pasta">Let's kick off with the pasta sauce:</p>
              <h2>pasta sauce</h2>
              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>Heat a large wok temp 6 (or heavy bottomed pan)</li>
                <li>Add the oil & allow it to heat up</li>
                <li>Add your onions for 5 mins</li>
                <li>Add your carrots for 5 mins</li>
                <li>Add your celery and garlic for 5 mins</li>
                <li>Add salt and pepper and dried herbs</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>softened veg</figcaption>
                <img
                  src="/images/chickenmushroompasta/650x366/veg-cooked-in-pan.jpg"
                  alt="veg cooked in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Once these vegetables have reduced by 2/3rds</li>
                <li>Push aside & add your bacon lardons brown for 10 mins</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cook the bacon</figcaption>
                <img
                  src="/images/chickenmushroompasta/650x366/bacon-added-to-veg.jpg"
                  alt="bacon added to veg"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>Push the bacon under the vegetables</li>
                <li>Fry your chicken pieces for 10 mins</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cook the chicken</figcaption>
                <img
                  src="/images/chickenmushroompasta/650x366/chicken-added-to-veg.jpg"
                  alt="chicken added to veg"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Tip - fry your chicken in 3 small batches. If you put it all in
                at once the temperature of the pan will drop and they will boil!
                Push your chicken under your vegetables and bacon
              </p>

              <ol start="11">
                <li>Add your mushrooms stir-fry for 5 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cook the mushrooms</figcaption>
                <img
                  src="/images/chickenmushroompasta/650x366/mushrooms-added-to-pan.jpg"
                  alt="mushrooms added to veg"
                />
              </div>
              <div class="spacer"></div>

              <ol start="12">
                <li>Combine all the ingredients in the pan</li>
                <li>Add tomato pulp & tomato puree</li>
                <li>Add stock cubes & Worcestershire sauce</li>
                <li>Add water & bring to a rapid simmer</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes & remaining ingredients</figcaption>
                <img
                  src="/images/chickenmushroompasta/650x366/tomatoes-added-to-pan.jpg"
                  alt="tomatoes added to veg"
                />
              </div>
              <div class="spacer"></div>

              <ol start="16">
                <li>Cover with a well fitting lid</li>
                <li>Turn down to med heat for 15 mins</li>
                <li>Remove the lid turn to med-high heat & allow to reduce</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chicken & mushroom pasta sauce</figcaption>
                <img
                  src="/images/chickenmushroompasta/650x366/pasta-sauce-in-pan.jpg"
                  alt="pasta sauce in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="19">
                <li>Lastly, sprinkle in your marjoram</li>
              </ol>

              <div class="spacer"></div>

              <p>
                Set the pasta sauce aside to cool, popping it in the fridge
                overnight is best. It will let those flavours develop
                beautifully
              </p>

              <p id="cheese">Now let's tackle the cheese sauce:</p>
              <h2>cheese sauce</h2>

              <ol>
                <li>Melt the butter in a small - med pan</li>
                <li>Add all the flour</li>
                <li>Add the onion powder with the English & Dijon mustard</li>
                <li>Stir with a whisk or spoon to make a roux</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>make the roux</figcaption>
                <img
                  src="/images/cheesesauce/650x366/roux-in-pan.jpg"
                  alt="roux in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>Add a little milk at a time while whisking</li>
              </ol>

              <div class="spacer"></div>
              <p>
                Don't worry about the lumps, keep stirring and whisking as you
                add the milk, and they will melt into the sauce
              </p>

              <ol start="6">
                <li>Stir continuously to form a thick white sauce</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>white sauce</figcaption>
                <img
                  src="/images/cheesesauce/650x366/white-sauce-in-pan.jpg"
                  alt="white sauce in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>When thickened, it should coat the back of a spoon</li>
                <li>Turn the heat off</li>
                <li>Add the cheese</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>grated cheese</figcaption>
                <img
                  src="/images/cheesesauce/650x366/grated-cheese-02.jpg"
                  alt="grated cheese"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>Stir until the cheese has melted</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cheese sauce</figcaption>
                <img
                  src="/images/cheesesauce/650x366/cheese-sauce-in-pan.jpg"
                  alt="cheese sauce in pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <p>Cover and set aside until needed.</p>
              </ol>

              <p id="lasagne">
                Now let's get down to the business of putting the lasagne
                together
              </p>

              <div class="spacer"></div>
              <h2>construct the lasagne</h2>
              <p>
                You'll need a 22.5cm square by 7.5cm deep oven-proof dish, or 3
                loaf tins (or disposable dishes) with each one being enough for
                two people.
              </p>
              <ol>
                <li>Pre heat oven to 190c</li>
                <li>Mix the cheese and bread together</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>breadcrumbs & cheese</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/beadcrumbs-and-cheese.jpg"
                  alt="breadcrumbs and cheese"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>Put half the pasta sauce in the bottom of the dish</li>
                <li>Then top with lasagne sheets</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>layering pasta</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/layeringpasta-01.jpg"
                  alt="layering pasta"
                />
              </div>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>layering pasta</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/layeringpasta-02.jpg"
                  alt="layering pasta"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>Spread half the cheese sauce onto the pasta sheets</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cover with cheese sauce</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/layeringpasta-03.jpg"
                  alt="layering pasta"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>Top with lasagne sheets</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>layering pasta</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/layeringpasta-04.jpg"
                  alt="layering pasta"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Put other half the pasta sauce on top</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>layering pasta</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/layeringpasta-05.jpg"
                  alt="layering pasta"
                />
              </div>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>layering pasta</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/layeringpasta-06.jpg"
                  alt="layering pasta"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>Then top with lasagne sheets</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>layering pasta</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/layeringpasta-07.jpg"
                  alt="layering pasta"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>Then put other half the cheese sauce on top</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>top with cheese sauce</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/top-with-cheese-sauce.jpg"
                  alt="top with cheese sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>Top with breadcrumbs & cheese mix</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>top with breadcrumbs & cheese mix</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/topped-with-breadcrumbs-cheese.jpg"
                  alt="topped with breadcrums cheese"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>Drizzle some olive oil over the top</li>
                <li>Cover with pre-oiled tin foil</li>
                <li>Bake in pre-heated oven at 190c for 30mins</li>
                <li>Remove the tin foil & bake for another 15mins</li>
                <li>Check it is hot in the center & browned and bubbling</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>just out of the oven</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/chicken-lasagne-01.jpg"
                  alt="chicken lasagne"
                />
              </div>

              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>freshly served with baguette</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/lasagne-bagette.jpg"
                  alt="lasagne bagette"
                />
              </div>

              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>de-frost & reheat</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/freezeandreheat-02.jpg"
                  alt="freeze and reheat"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>when time is of the essence</figcaption>
                <img
                  src="/images/chickenlasagne/650x366/lasagneandsalad.jpg"
                  alt="lasagne and salad"
                />
                <figcaption>delicious with salad</figcaption>
              </div>
              <!-- Method List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/cheesesauce.html"
                    >cheese sauce
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/sausagepasta.html"
                    class="underline"
                    >sausage & penne pasta
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