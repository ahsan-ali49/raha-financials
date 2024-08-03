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

carouselContainer.addEventListener("mousemove", (e) => {
  const rect = carouselContainer.getBoundingClientRect();
  const x = e.clientX - rect.left; // x position within the element
  const walk =
    (x / rect.width) * carouselContainer.scrollWidth - rect.width / 2;
  carouselContainer.scrollLeft = walk;
});

// const loadPage = (page, section) => {
//   fetch(`${page}.html`)
//     .then((response) => response.text())
//     .then((data) => {
//       // Remove the slide-in class to reset the animation
//       // content.classList.remove('slide-in');

//       content.innerHTML = data;
//       // Re-attach the event listener after content is loaded
//       attachEventListeners();

//       if (section) {
//         const sectionElement = document.getElementById(section);
//         if (sectionElement) {
//           sectionElement.scrollIntoView({ behavior: "smooth" });
//         }
//       }

//       contenLoader();
//       console.log(page);
//       if (page == "services") {
//         console.log(page);
//         const serviceListItems = document.querySelectorAll(
//           ".flex-item-inner-div"
//         );
//         serviceListItems.forEach((item) => {
//           item.addEventListener("click", () => {
//             const serviceId = item.getAttribute("id");
//             console.log(serviceId);
//             loadPage(serviceId, `${serviceId}-section`);
//           });
//         });
//       } else if (page == "blogs") {
//         console.log(page);
//         const blogListItems = document.querySelectorAll(".blog-flex-item");
//         blogListItems.forEach((item) => {
//           item.addEventListener("click", () => {
//             const blogId = item.getAttribute("id");
//             console.log(blogId);
//             loadPage(blogId, blogId);
//           });
//         });
//       }
//     })
//     .catch((error) => {
//       content.innerHTML = "<p>Sorry, the content could not be loaded.</p>";
//       console.error("Error loading page:", error);
//     });
// };

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

      loadPage("information2", "privacy-agreement");
    });
  }

  const information2Button = document.querySelector("#info-2-btn");
  if (information2Button) {
    information2Button.addEventListener("click", () => {
      // const formValue = document.getElementById('privacy-agreement-form').elements["privacy-agreement"].value;
      loadPage("information3", "engagement-form");
    });
  }

  const information2PreviousButton = document.querySelector(
    "#info-2-previous-btn"
  );
  if (information2PreviousButton) {
    information2PreviousButton.addEventListener("click", () => {
      loadPage("information1", "information1");
    });
  }

  const information3PreviousButton = document.querySelector(
    "#info-3-previous-btn"
  );
  if (information3PreviousButton) {
    information3PreviousButton.addEventListener("click", () => {
      loadPage("information2", "information2");
    });
  }

  const blog1PreviousButton = document.querySelector("#blog-previous-1-btn");
  if (blog1PreviousButton) {
    blog1PreviousButton.addEventListener("click", () => {
      loadPage("blogItem3", "blogItem3");
    });
  }

  const blog1NextButton = document.querySelector("#blog-next-1-btn");
  if (blog1NextButton) {
    blog1NextButton.addEventListener("click", () => {
      loadPage("blogItem2", "blogItem2");
    });
  }

  const blog2PreviousButton = document.querySelector("#blog-previous-2-btn");
  if (blog2PreviousButton) {
    blog2PreviousButton.addEventListener("click", () => {
      loadPage("blogItem1", "blogItem1");
    });
  }

  const blog2NextButton = document.querySelector("#blog-next-2-btn");
  if (blog2NextButton) {
    blog2NextButton.addEventListener("click", () => {
      loadPage("blogItem3", "blogItem3");
    });
  }

  const blog3PreviousButton = document.querySelector("#blog-previous-3-btn");
  if (blog3PreviousButton) {
    blog3PreviousButton.addEventListener("click", () => {
      loadPage("blogItem2", "blogItem2");
    });
  }

  const blog3NextButton = document.querySelector("#blog-next-3-btn");
  if (blog3NextButton) {
    blog3NextButton.addEventListener("click", () => {
      loadPage("blogItem1", "blogItem1");
    });
  }

  const contactBtns = document.querySelectorAll(".contact-btn");
  contactBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      loadPage("information1", "information1");
    });
  });
};

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector("[data-collapse-toggle]");
  const mobileMenu = document.getElementById("mobile-menu");

  toggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
  });
});
