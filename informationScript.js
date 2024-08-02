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
