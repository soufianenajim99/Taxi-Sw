// const burgerBtn = document.querySelector("#burger-btn");
// const burgerMenu = document.querySelector("#burger-menu");

// burgerBtn.addEventListener("click", () => {
//     burgerMenu.classList.toggle("hidden");
// });

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


