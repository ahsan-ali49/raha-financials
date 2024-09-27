import { formData } from "./informationScript";
const clientsNameSpan = document.querySelector(".client-name-span");
if (clientsNameSpan) {
  clientsNameSpan.textContent = formData.fullName;
}
