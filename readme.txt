This App should be pushed to the staging server:
################################################

https://recipes.my-style.in

Once Thoroughly tested the Domain nuttyskitchen.co.uk should
be pointed to the infinity free servers instead of github.

################################
Under NO CICUMSTANCES overwrite:
################################

https:\\recipes.nuttyskitchen.co.uk

as this is serving up the current 'recipe page' search engine feature.
i.e. when a user clisk 'recipes' in nuttyskitchen.co.uk they are taken to:

https:\\recipes.nuttyskitchen.co.uk

This is just temporary until we are ready to move over to the full PHP system.

The full PHP system should be fully self-contained
i.e. no external links to recipe pages hosted on github

The full PHP system should maintain the static site.
i.e. The PHP system should:
create a `new-recipe-page.html` for each new recipe created in the PHP system
update the `images` folder with images required by the `new-recipe-page.html` file
update `content.mjs` in the static site so that a new `recipe_card` displays a link to the `new-recipe-page.html` on the static `recipepage.html`
Alert the user "commit & sync static site to  github"