let contenLoader;
let clientName;
let companyName;
let isChecked;
const selectedServices = {
  bk: "Bookkeeping",
  fs: "Financial Statements",
  tpf: "Tax Preparation & Filing",
  ad: "Auditing",
  pp: "Payroll Processing",
  br: "Business Registration",
  itin: "ITIN Registration",
  nwe: "Net Worth Evaluation",
};
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

const carouselContainer = document.querySelector(".carousel-container");

let isDown = false;
let startX;
let scrollLeft;

const attachEventListeners = () => {
  const information1Button = document.querySelector("#info-1-btn");
  if (information1Button) {
    information1Button.addEventListener("click", () => {
      clientName = document.querySelector(".information-name-field").value;
      console.log(clientName);
      companyName = document.querySelector("#information-company-name").value;
      console.log(companyName);
      isChecked = document.querySelectorAll('input[type="checkbox"]:checked');

      isChecked.forEach((checkbox) => {
        console.log(checkbox.id);
        console.log(selectedServices[checkbox.id]);
      });
    });
  }
};

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector("[data-collapse-toggle]");
  const mobileMenu = document.getElementById("mobile-menu");

  toggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
  });
});

const financialCarouselContainer = document.querySelector(
  ".financial-carousel-container"
);

let isDown1 = false;
let startX1;
let scrollLeft1;

// Mouse events for desktop
// financialCarouselContainer.addEventListener("mousedown", (e) => {
//   isDown1 = true;
//   financialCarouselContainer.classList.add("active");
//   startX1 = e.pageX - financialCarouselContainer.offsetLeft;
//   scrollLeft1 = financialCarouselContainer.scrollLeft1;
// });

// financialCarouselContainer.addEventListener("mouseleave", () => {
//   isDown1 = false;
//   financialCarouselContainer.classList.remove("active");
// });

// financialCarouselContainer.addEventListener("mouseup", () => {
//   isDown1 = false;
//   financialCarouselContainer.classList.remove("active");
// });

// financialCarouselContainer.addEventListener("mousemove", (e) => {
//   if (!isDown1) return;
//   e.preventDefault();
//   const x = e.pageX - financialCarouselContainer.offsetLeft;
//   const walk = (x - startX1) * 2; // Adjust scroll speed
//   financialCarouselContainer.scrollLeft1 = scrollLeft1 - walk;
// });

// Touch events for mobile
// financialCarouselContainer.addEventListener("touchstart", (e) => {
//   isDown1 = true;
//   startX1 = e.touches[0].pageX - financialCarouselContainer.offsetLeft;
//   scrollLeft1 = financialCarouselContainer.scrollLeft1;
// });

// financialCarouselContainer.addEventListener("touchend", () => {
//   isDown1 = false;
// });

// financialCarouselContainer.addEventListener("touchmove", (e) => {
//   if (!isDown1) return;
//   e.preventDefault();
//   const x = e.touches[0].pageX - financialCarouselContainer.offsetLeft;
//   const walk = (x - startX1) * 2; // Adjust scroll speed
//   financialCarouselContainer.scrollLeft1 = scrollLeft1 - walk;
// });
