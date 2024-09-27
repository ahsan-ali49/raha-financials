// Get the modal
var popupForm = document.getElementById("popupForm");
var consultForm = document.getElementById("consultForm");

// Get the button that opens the modal
var btn = document.getElementById("bookDemoBtn");
var consultBtn = document.getElementById("consultBtn");

// Get the <span> element that closes the modal
var closeBtn = document.getElementById("closeBtn");

// When the user clicks the button, open the modal 
btn.onclick = function() {
    popupForm.style.display = "block";
    // document.getElementById('demoForm').setAttribute('action') = 'formsubmit.php';
    // document.getElementById('demoForm').setAttribute('method') = 'post';

}
// When the user clicks the button, open the modal 
consultBtn.onclick = function() {
    consultForm.style.display = "block";
    // document.getElementById('demoForm').setAttribute('action') = 'formsubmit.php';
    // document.getElementById('demoForm').setAttribute('method') = 'post';

}

// // When the user clicks on <span> (x), close the modal
// closeBtn.onclick = function() {
//     popupForm.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == popupForm) {
        popupForm.style.display = "none";
    }
    if (event.target == consultForm) {
        consultForm.style.display = "none";
    }
}
