document.addEventListener("DOMContentLoaded", function () {
  const link = document.getElementById("popupLink");
  const popup = document.getElementById("popup");
  const overlay = document.getElementById("overlay");
  const closePopup = document.getElementById("closePopup");

  link.addEventListener("click", function (e) {
    e.preventDefault();
    popup.style.display = "block";
    overlay.style.display = "block";
  });

  overlay.addEventListener("click", function () {
    popup.style.display = "none";
    overlay.style.display = "none";
    window.scrollTo(0, 0);
  });

  closePopup.addEventListener("click", function () {
    popup.style.display = "none";
    overlay.style.display = "none";
    window.scrollTo(0, 0);
  });
});
