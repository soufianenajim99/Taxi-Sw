const burgerBtn = document.querySelector("#burger-btn");
const burgerMenu = document.querySelector("#burger-menu");

burgerBtn.addEventListener("click", () => {
    burgerMenu.classList.toggle("hidden");
});

console.log("test");
