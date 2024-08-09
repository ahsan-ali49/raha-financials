document
  .getElementById("hero-entr-btn")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default link behavior
    const body = document.querySelector("body");
    const transitionLayer = document.getElementById("transition-layer");
    const transitionLayer1 = document.getElementById("transition-layer-1");
    const transitionLayer2 = document.getElementById("transition-layer-2");

    // Add the active class to start the animation
    transitionLayer.classList.add("active");

    setTimeout(function () {
      transitionLayer1.classList.add("active");
    }, 200); // Match this duration with the CSS transition time
    // Add the active class to start the animation
    // transitionLayer.classList.add("active");
    setTimeout(function () {
      transitionLayer2.classList.add("active");
      //   body.style.backgroundColor = "blue";
    }, 400); // Match this duration with the CSS transition time

    // Redirect to the new page after the animation duration
    setTimeout(function () {
      window.location.href = "./enterprise.html";
    }, 1200); // Match this duration with the CSS transition time
  });
