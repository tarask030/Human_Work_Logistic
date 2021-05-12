const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("header").style.height = "90px";
    document.getElementById("logo_header").style.marginTop = "20px";
    document.getElementById("main-menu").style.marginTop = "23px";
  } else {
    document.getElementById("header").style.height = "auto";
    document.getElementById("logo_header").style.marginTop = "30px";
    document.getElementById("main-menu").style.marginTop = "30px";
  }
}
