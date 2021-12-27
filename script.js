var div = document.querySelector("#log");
div.style.color = 'green';

var div = document.querySelector("#be");
div.style.color = 'green';

var i = 0;
var text = 'THE MOST  DARKEST WORLD!';
var speed = 250;

function no(){
  if (i < text.length ){
    document.getElementById("ok").innerHTML += text.charAt(i);
    i++;
    setTimeout(no, speed);
  }
}
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

