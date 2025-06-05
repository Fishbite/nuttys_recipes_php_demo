document.addEventListener("DOMContentLoaded", scrollTo, false);

function scrollTo(e) {
  // If the user submitted a search and the form exists, scroll to it
  const el = document.getElementById("search-form");

  console.log("event: ", e, "scroll to element: ", el);

  if (el && window.location.pathname === "/recipes/") {
    const hasSearch = !!el.querySelector('input[name="search"]').value.trim();
    const hasCategory =
      el.querySelector('select[name="category"]').value !== "all";

    if (hasSearch || hasCategory) {
      el.scrollIntoView({
        behavior: "smooth",
      });
    }
  }
}
