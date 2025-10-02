/*    ======================
            STICKY TABS TEST
      ======================
*/
/*    ======================
            START TABS
      ======================
*/

// get all the buttons from the document
// this will create a node list
const btns = document.querySelectorAll(".tab-btn");
// console.log("Buttons node list:", btns);

//  get the about class
const about = document.querySelector(".about");
// console.log("about", about);

// get our articles to show/hide
const articles = document.querySelectorAll(".content");
// console.log("articles node list", articles);

// store last scroll positions per tab id
const scrollPositions = new Map();

// attach an event listener to the about class
if (about) {
  about.addEventListener("click", clickhandler, false);
}

function clickhandler(e) {
  const id = e.target.dataset.id;

  if (id) {
    // save scroll for currently visible article (if any)
    const activeArticle = document.querySelector(".content.active");
    if (activeArticle) {
      // if article itself scrolls, save its scrollTop; otherwise save window scroll
      if (activeArticle.scrollHeight > activeArticle.clientHeight) {
        scrollPositions.set(activeArticle.id, {
          type: "el",
          value: activeArticle.scrollTop,
        });
      } else {
        scrollPositions.set(activeArticle.id, {
          type: "win",
          value: window.scrollY,
        });
      }
    }

    btns.forEach(function (btn) {
      btn.classList.remove("active");
      e.target.classList.add("active");

      articles.forEach(function (article) {
        article.classList.remove("active");
      });

      const element = document.getElementById(id);
      element.classList.add("active");

      // restore scroll for the shown tab (defer to let layout settle)
      const saved = scrollPositions.get(id);
      if (saved) {
        requestAnimationFrame(() => {
          if (
            saved.type === "el" &&
            element.scrollHeight > element.clientHeight
          ) {
            element.scrollTop = saved.value;
          } else {
            // ensure element is visible at same relative position on page
            window.scrollTo({ top: saved.value, behavior: "auto" });
          }
        });
      }
    });
  }
}
/*    ======================
             END TABS
      ======================
*/
