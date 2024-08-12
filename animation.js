document
  .getElementById("hero-entr-btn")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default link behavior
    const body = document.querySelector("body");
    let transitionLayer = document.getElementById("transition-layer");
    let transitionLayer1 = document.getElementById("transition-layer-1");
    let transitionLayer2 = document.getElementById("transition-layer-2");
    if (!transitionLayer) {
      transitionLayer = document.getElementById("enterprise-transition-layer");
      transitionLayer1 = document.getElementById(
        "enterprise-transition-layer-1"
      );
      transitionLayer2 = document.getElementById(
        "enterprise-transition-layer-2"
      );
    }

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
      // Get the full path of the current page
      let fullPath = window.location.pathname;

      // Extract the file name from the full path
      let fileName = fullPath.substring(fullPath.lastIndexOf("/") + 1);

      console.log(fileName); // This will log the current file name
      if (fileName == "enterprise.html") window.location.href = "./index.html";
      else window.location.href = "./enterprise.html";
    }, 1200); // Match this duration with the CSS transition time
  });
