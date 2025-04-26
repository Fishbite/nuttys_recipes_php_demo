<!--        ########## Important ##########
    NOTE: Because of the below, we'll just leave the
    the buttons list as-is: an HTML unordered list!

    For the moment anyway!
-->

<!-- 
    This need to be reconsidered as there are problems!
    e.g:
    
    The anchor tag text diplayed to the user is not
    necessarily the same as the category name. So,
    how do we handle this? To change the category
    name would mean altering the DB. 
    e.g. "accomapaniments" to "sides" 
    
    However, to limit the number of characters in the
    category name, just because of the space on the
    buttons is complete nonsense.

    Some images need to be re-named to match the category
    name.

    Options:

    1. create a table to hold all category button info

    2. add an additional field to the category table to hold
    the button text for each category.


  -->

<ul id="search-btns" class="list-btn-wrapper">
    <li class="list-btn" title="cook sausages">
        <a href="#sausages & bacon"><img width="32" height="32" src="/images/icons/sausage-n-bacon-7.svg"
                alt="sausages" title="cook sausages" />
            sausage & bacon</a>
    </li>

    <li class="list-btn" title="cook chicken">
        <a href="#chicken"><img width="32" height="32" src="/images/icons/chicken-2.png" alt="chicken" />
            chicken</a>
    </li>

    <li class="list-btn" title="cook beef">
        <a href="#beef"><img width="32" height="32" src="/images/icons/beef.png" alt="beef" title="cook beef" />
            beef</a>
    </li>

    <li class="list-btn" title="cook pork">
        <a href="#pork"><img width="32" height="32" src="/images/icons/pork.png" alt="pork" title="cook pork" />
            pork</a>
    </li>

    <li class="list-btn" title="cook lamb">
        <a href="#lamb"><img width="32" height="32" src="/images/icons/lamb.png" alt="lamb" title="cook lamb" />
            lamb</a>
    </li>

    <li class="list-btn" title="cook veg">
        <a href="#fish & veg"><img width="32" height="32" src="/images/icons/fish-n-veg-1.svg" alt="veg"
                title="cook veg" />
            fish & veg</a>
    </li>

    <li class="list-btn" title="cook sauce">
        <a href="#sauce"><img width="32" height="32" src="/images/icons/sauce.png" alt="sauce"
                title="cook sauce" />
            sauce</a>
    </li>

    <li class="list-btn" title="accompaniments">
        <a href="#accompaniments"><img width="32" height="32" src="/images/icons/side-dish.png" alt="side dish"
                title="side dish" />
            sides</a>
    </li>

    <li class="list-btn" title="cook puddings">
        <a href="#puddings"><img width="32" height="32" src="/images/icons/cake.png" alt="cake"
                title="cook puddings" />
            puddings</a>
    </li>
</ul>