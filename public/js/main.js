console.log("test");

const overlay = document.querySelector("#overlay");
const pop = document.querySelector("#popup-window");
const target_button = document.querySelector(".button-target");
const target = document.querySelector(".close");

target_button.addEventListener("click", () => {
    pop.classList.toggle("hidden");
    overlay.classList.toggle("hidden");
});
target.addEventListener("click", () => {
    pop.classList.toggle("hidden");
    overlay.classList.toggle("hidden");
});

let button_plus = document.querySelector(".plus-button");
let menu = document.querySelector(".menuu");

button_plus.addEventListener("click", function () {
    menu.classList.toggle("hidden");
});
