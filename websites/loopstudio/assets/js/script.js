let toggleBtn = document.querySelector(".toggle-btn");
let menu = document.getElementById("menu");

toggleBtn.addEventListener("click", () => {
  toggleBtn.classList.toggle("active");
  menu.classList.toggle("active");

})

window.addEventListener("scroll", scrollEvent)

function scrollEvent() {
  menu.classList.remove("active");
  toggleBtn.classList.remove("active");
}