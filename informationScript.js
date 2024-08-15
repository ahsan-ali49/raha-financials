const form = document.getElementById("info-1-btn");
let formData;

if (form) {
  form.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default form submission
    // Check the button text to determine the action
    if (form.innerText === "Submit") {
      formData = {
        fullName: document.getElementById("fullName").value,
        email: document.getElementById("email").value,
        dob: document.getElementById("dob").value,
        phoneNumber: document.getElementById("phoneNumber").value,
        businessName: document.getElementById("businessName").value,
        homeAddress: document.getElementById("homeAddress").value,
        city: document.getElementById("city").value,
        state: document.getElementById("state").value,
        postalCode: document.getElementById("postalCode").value,
        country: document.getElementById("country").value,
        citizenshipStatus: document.getElementById("citizenshipStatus").value,
        countryOfCitizenship: document.getElementById("countryOfCitizenship")
          .value,
        usTaxResident: document.querySelector('input[name="ustr"]:checked')
          ? document.querySelector('input[name="ustr"]:checked').value
          : "",
        optedServices: {
          bookkeeping: document.getElementById("bk").checked,
          financialStatements: document.getElementById("fs").checked,
          taxPreparation: document.getElementById("tpf").checked,
          auditing: document.getElementById("ad").checked,
          payrollProcessing: document.getElementById("pp").checked,
          businessRegistration: document.getElementById("br").checked,
          itinRegistration: document.getElementById("itin").checked,
          netWorthEvaluation: document.getElementById("nwe").checked,
        },
        taxResidency: document.getElementById("taxResidency").value,
      };

      console.log(formData);

      // Change the button text to "Next"
      form.innerText = "Next";
    } else if (form.innerText === "Next") {
      // Redirect to information2.html
      window.location.href = "./information2.html";
    }
  });
} else if (document.getElementById("information3")) {
  var canvas = document.getElementById("signature-pad");

  function resizeCanvas() {
    var ratio = Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
  }
  window.onresize = resizeCanvas;
  resizeCanvas();

  var signaturePad = new SignaturePad(canvas, {
    backgroundColor: "rgb(250,250,250)",
  });

  const clientNameSpan = document.querySelector(".client-name-span");
  clientNameSpan.innerHTML = clientName;
  const servicesListRender = document.querySelector(".services-list-render");
  isChecked.forEach((checkbox) => {
    servicesListRender.innerHTML += `<li>${selectedServices[checkbox.id]}</li>`;
  });
}
