// const burgerBtn = document.querySelector("#burger-btn");
// const burgerMenu = document.querySelector("#burger-menu");

// burgerBtn.addEventListener("click", () => {
//     burgerMenu.classList.toggle("hidden");
// });

console.log("test");

const overlay = document.querySelector("#overlay");
const pop = document.querySelector("#popup-window");
const target_button = document.querySelectorAll(".reser-button");
const target = document.querySelectorAll(".close");

target_button.forEach((tar) => {
    tar.addEventListener("click", () => {
        pop.classList.toggle("hidden");
        overlay.classList.toggle("hidden");
    });
});
// target_button.addEventListener("click", () => {
//     pop.classList.toggle("hidden");
//     overlay.classList.toggle("hidden");
// });

target.forEach((tar) => {
    tar.addEventListener("click", () => {
        pop.classList.toggle("hidden");
        overlay.classList.toggle("hidden");
    });
});

let button_plus = document.querySelector(".plus-button");
let menu = document.querySelector(".menuu");

button_plus.addEventListener("click", function () {
    menu.classList.toggle("hidden");
});
