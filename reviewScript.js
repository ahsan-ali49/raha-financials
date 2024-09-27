const emojiBoxes = document.querySelectorAll(".emoji-box");
console.log(emojiBoxes);
emojiBoxes.forEach(box => {
    box.addEventListener("click", (event) => {
        // Remove the border from all buttons
        emojiBoxes.forEach(box => box.classList.remove("border", "border-solid", "border-[#1445c2]"));
        
        // Add the border to the clicked button
        event.currentTarget.classList.add("border", "border-solid", "border-[#1445c2]");
    });
});
