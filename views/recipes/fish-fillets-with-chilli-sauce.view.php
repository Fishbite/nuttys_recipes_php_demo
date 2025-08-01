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
          Now, I know fish dishes can be really tasty, but this
          <strong>Fish Fillets with Chilli Sauce</strong> dish is something
          else. It packs a punch! It's on a completely different level than fish
          & chips or fisherman's pie! You always hear chefs saying that a few
          simple ingredients are all it takes to make the best meal? Well, this
          is one excellent example of that. A simple marinade of lemon juice,
          oil, and coriander infuses the fish fillets with vibrant flavor...
          and, the chilli sauce is just as simple and quick to make, you will
          not believe such amazing tastes can be produced so easily.
        </p>
        <p>
          I'm using quite an economical frozen white fish called Basa here, but,
          you could use any white fish you fancy, fresh or frozen. I've made
          this with Talapia in the past and it was just as good.
        </p>
        <p>
          This time, as a special treat, I made
          <strong>Saffron & Cardamom Rice</strong> to go with it. Head over to
          my
          <a
            class="in-link"
            href="/saffron-and-cardamom-rice.html"
            target="_blank"
            >Saffron and Cardamom Rice Recipe</a
          >
          while the fish is marinating, if you fancy trying that. It's well
          worth making :-)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Fish Fillets with Chilli Sauce</strong> along with
          some pictures to guide you.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/fish-fillets-with-chilli-sauce/650x366/fish-fillets-with-chilli-sauce-and-saffron-rice-01.webp"
            alt="fish-fillets-with-chilli-sauce-and-saffron-rice-01"
            title="fish fillets with chilli sauce & saffron rice"
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
              <h2>serves 2</h2>
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->

              <h2>for the fish</h2>
              <ul>
                <li>4 skinless fish fillets*</li>
                <li>2 Tbsp lemon juice</li>
                <li>1 Tbsp coriander - finely chopped</li>
                <li>1 Tbsp veg' oil</li>
                <li>4 lime wedges - to squeeze over the cooked fish</li>
                <li>2 sprigs of coriander - to garnish</li>
              </ul>
              <div class="spacer"></div>

              <p>
                *I'm using Basa fillets, but you can use flat fish fillets such
                as Plaice or Sole as a more expensive alternative.
              </p>

              <div class="spacer"></div>
              <h2>for the chilli sauce</h2>
              <ul>
                <li>1 tsp ginger pulp</li>
                <li>2 Tbsp tomato puree</li>
                <li>1 & 1/2 tsp sugar</li>
                <li>1 tsp coarse sea salt</li>
                <li>1 Tbsp chilli sauce (West Indian Hot Pepper Sauce)*</li>
                <li>1 Tbsp malt vinegar</li>
                <li>300ml water</li>
              </ul>
              <div class="spacer"></div>

              <p>
                *Just use one or two teaspoons of chilli sauce to reduce the
                heat to your own taste - we like it with a bit of a kick here at
                Nutty's Kitchen though! Which chilli sauce to use? I use West
                Indian Hot Pepper Sauce made with Scotch Bonnet chillies :-P
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
                I'm using frozen Basa fillets for this recipe, as they're a lot
                cheaper than fresh Plaice or Sole fillets. So, if you want to
                use frozen too, just defrost them overnight in the fridge and
                pat them dry with kitchen paper before marinating them. If using
                fresh fish, pat them dry too before using.
              </p>
              <p>
                The marinade is very simple and consits of just: lemon juice,
                fresh coriander and vegetable oil. Just mix them together, then
                tip over the fish and rub it all over the fillets. Leave in the
                fridge for at least one hour before cooking.
              </p>
              <p>
                The chilli sauce is really easy to make, just mix all the
                ingredients together: ginger, tomato puree, sugar, salt, chilli
                sauce, malt vinegar and water, then bring to the boil and simmer
                until reduced to a thick soup-like consitency. You can make this
                in advance while the fish is marinating and then warm it up
                again when you are ready to cook the fish.
              </p>
              <p>
                To cook the fish, I simply tip all the marinade into a large
                flat warm pan (frying pan will do) on medium heat, then cover
                the pan with foil to create a steam trap. This helps to keep the
                fish beautiful and moist. Whatever you do, don't over-cook the
                fish, it only take a few minutes! How long exactly depends on
                the thickness of the fillets. My Basa fillets took about six
                minutes on a gentle simmer. Note that there is no salt added to
                the fish &mdash; it doesn't need it, as the rice and chilli
                sauce are seasoned enough.
              </p>
              <p>
                I serve this dish with
                <strong>Saffron & Cardamom Rice</strong> which you can also make
                while the fish is marinating:
                <a
                  class="in-link"
                  href="/saffron-and-cardamom-rice.html"
                  target="_blank"
                  >saffron and Cardamom Rice Recipe</a
                >
              </p>
              <p>
                First things first though, gather all the ingredients together
                in separate stock piles for the fish and the chilli sauce.
              </p>

              <!-- Method List Goes Below Here!!! -->
              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>ingredients for fish fillets</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/ingredients-for-fish-fillets.webp"
                  alt="ingredients for fish fillets"
                  title="fish ingredients for fish fillets with chilli sauce"
                />
              </div>
              <div class="spacer"></div>
              <p>Defrost frozen fish overnight in the fridge.</p>

              <h2>Marinade the fish</h2>

              <ol>
                <li>pat the fish dry & place in a bowl</li>
                <li>mix the lemon juice, oil & coriander together</li>
                <li>
                  rub it all over the fish & place in the fridge for at least an
                  hour...
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fish fillets marinating</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/fish-fillets-marinating-in-a-bowl-01.webp"
                  alt="fish fillets marinating in a bowl"
                  title="fish fillets marinating in a bowl for fish fillets with chilli sauce"
                />
              </div>
              <div class="spacer"></div>

              <p>while that's doing its thing...</p>

              <h2>make the chilli sauce</h2>

              <div class="card_image">
                <figcaption>ingredients for chilli sauce</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/ingredients-for-chilli-sauce.webp"
                  alt="ingredients for chilli sauce"
                  title="chilli sauce ingredients for fish fillets with chilli sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  in a small pan, mix all the ingredients together: ginger,
                  tomato puree, sugar, salt, chilli sauce, malt vinegar and
                  water
                </li>
                <li>
                  bring to a boil, then simmer on a medium heat until reduced
                  (to about 1/4 of its' original volume) & thickened*
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chilli sauce reducing</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/chilli-sauce-simmering-in-a-pan.webp"
                  alt="chilli sauce simmering in a pan"
                  title="chilli sauce simmering in a pan for fish fillets with chilli sauce"
                />
              </div>
              <div class="spacer"></div>

              <p>
                *keep stirring the chilli sauce while cooking to ensure the sea
                salt is totally disolved
              </p>

              <div class="card_image">
                <figcaption>chilli sauce reduced</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/chilli-sauce-reduced-in-a-pan.webp"
                  alt="chilli sauce reduced in a pan"
                  title="chilli sauce reduced in a pan for fish fillets with chilli sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  take off the heat, cover with a lid and set aside until needed
                </li>
              </ol>
              <div class="spacer"></div>
              <p>
                Taste the sauce when reduced and add a little more sugar if you
                want. It should taste really tangy with quite a bit of a chilli
                kick and a little bitter note that goes perfectly with well
                seasoned rice and the cooked fish infused with lemon and
                coriander.
              </p>

              <h2>cook the fish & make the dish!</h2>
              <ol>
                <li>tip the marinade into a large warm flat pan</li>
                <li>on a med heat, add the fish and cover with foil</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>place fish & marinade in pan</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/fish-fillets-in-a-pan.webp"
                  alt="fish fillets in a pan"
                  title="fish fillets in a pan for fish fillets with chilli sauce"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cover with foil</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/foil-covered-pan.webp"
                  alt="foil covered pan"
                  title="foil covered pan for fish fillets with chilli sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  simmer gently until the fish is just cooked - don't over cook
                  it, it will only take a few minutes, depending on the
                  thickness of the fillets. My Basa fillets took about 5- 6 mins
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cooked fish fillets</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/fish-fillets-cooked-in-a-pan.webp"
                  alt="fish fillets cooked in a pan"
                  title="fish fillets cooked in a pan for fish fillets with chilli sauce"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>meanwhile, re-heat the chilli sauce ready to serve</li>
                <li>warm some plates to serve the fish on</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>fish fillets with chilli sauce</figcaption>
                <img
                  src="/images/fish-fillets-with-chilli-sauce/650x366/fish-fillets-with-chilli-sauce-and-saffron-rice-02.webp"
                  alt="fish fillets with chilli sauce & saffron rice"
                  title="fish fillets with chilli sauce & saffron rice"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Serve with <strong>Saffron & Cardamom Rice</strong> or even just
                plain boiled Basmati rice for something simpler, just make sure
                the rice is well seasoned.
              </p>
              <p>
                <a
                  class="in-link"
                  href="/saffron-and-cardamom-rice.html"
                  target="_blank"
                  >Saffron and Cardamom Rice Recipe</a
                >
              </p>

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
                    href="https://www.nuttyskitchen.co.uk/saffron-and-cardamom-rice.html"
                    >saffron & cardamom rice
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chorizo-cod-stew.html"
                    class="underline"
                    >chorizo cod stew
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