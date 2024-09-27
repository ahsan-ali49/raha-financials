const modalLoader = () => {
  const links = document.querySelectorAll(".navlink");
  console.log(links);

  const serviceModal = document.getElementById("navbar-modal");
  const industryModal = document.getElementById("industry-modal");

  let isMouseOverServiceModal = false;
  let isMouseOverIndustryModal = false;
  let hideServiceModalTimeout;
  let hideIndustryModalTimeout;

  const showServiceModal = () => {
    clearTimeout(hideServiceModalTimeout);
    serviceModal.classList.remove("hidden");
  };

  const hideServiceModal = () => {
    hideServiceModalTimeout = setTimeout(() => {
      if (!isMouseOverServiceModal) {
        serviceModal.classList.add("hidden");
      }
    }, 200);
  };

  const showIndustryModal = () => {
    clearTimeout(hideIndustryModalTimeout);
    industryModal.classList.remove("hidden");
  };

  const hideIndustryModal = () => {
    hideIndustryModalTimeout = setTimeout(() => {
      if (!isMouseOverIndustryModal) {
        industryModal.classList.add("hidden");
      }
    }, 200);
  };

  links[0].addEventListener("mouseenter", showServiceModal);
  links[0].addEventListener("mouseleave", hideServiceModal);

  serviceModal.addEventListener("mouseenter", () => {
    isMouseOverServiceModal = true;
    showServiceModal();
  });

  serviceModal.addEventListener("mouseleave", () => {
    isMouseOverServiceModal = false;
    hideServiceModal();
  });

  links[1].addEventListener("mouseenter", showIndustryModal);
  links[1].addEventListener("mouseleave", hideIndustryModal);

  industryModal.addEventListener("mouseenter", () => {
    isMouseOverIndustryModal = true;
    showIndustryModal();
  });

  industryModal.addEventListener("mouseleave", () => {
    isMouseOverIndustryModal = false;
    hideIndustryModal();
  });
};

modalLoader();

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector("[data-collapse-toggle]");
  const mobileMenu = document.getElementById("mobile-menu");

  toggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
  });
});