// ...existing code...
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
      } else {
        // NEW: when there's no saved position (first time opening this tab),
        // ensure the tab content starts at the top so its h2 is visible,
        // accounting for the sticky tab bar height.
        requestAnimationFrame(() => {
          // if the content itself scrolls, reset its internal scroll to top
          if (element.scrollHeight > element.clientHeight) {
            element.scrollTop = 0;
          }

          // find heading inside the content; fall back to element top
          const heading = element.querySelector("h2");
          const headingRect = heading ? heading.getBoundingClientRect() : null;
          const headingDocTop = headingRect
            ? window.scrollY + headingRect.top
            : element.offsetTop;

          // measure sticky tab bar height (if present)
          const btnContainer = about.querySelector(".btn-container");
          const btnHeight = btnContainer
            ? btnContainer.getBoundingClientRect().height
            : 0;

          // if you have a fixed site header, add its height here (px)
          const extraTop = 0;

          const targetTop = Math.max(0, headingDocTop - btnHeight - extraTop);

          // scroll so the h2 is visible below the sticky tabs
          window.scrollTo({ top: targetTop, behavior: "auto" });
        });
      }
    });
  }
}
/*    ======================
             END TABS
      ====================== 
*/
