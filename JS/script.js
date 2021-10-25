// elementen selecteren
const body = document.querySelector("body");
const h2list = document.querySelectorAll("h2");
const txt = document.querySelectorAll(".txt ");
const icon = document.querySelector("#icon");
const navbar = document.querySelector(".na");

let dark = false;

// text light changer
function lighTxt(event) {
  if (dark) {
    dark = false;
    btn.textContent = "dark";
  } else {
    dark = true;
    btn.textContent = "Light";
  }
}
// dark mode aan zetten
const darkMode = function () {
  body.classList.toggle("body-dark");
  body.classList.toggle("body-light");
  navbar.classList.toggle("na1");
  for (let i = 0; i < h2list.length; i++) {
    h2list[i].classList.toggle("clrfnt");
  }

  for (let i = 0; i < txt.length; i++) {
    txt[i].classList.toggle("txt2");
  }

  if(body.classList.contains("body-dark")){
    icon.src = "./IMGS/sun.png"
  }else{
    icon.src = "./IMGS/moon.png"
  }
};


// dark mode: 2 

 icon.addEventListener("click", darkMode);
 icon.addEventListener("click", lightxt);







// timer
const autoDark = function () {
  const date = new Date();
  console.log(date);
  if (date.getHours() > 18 && date.getHours() < 08) {
    if (dark === false) {
      darkMode();
      lighTxt();
    }
  } else {
    if (dark === true) {
      DarkMode();
      lightxt();
    }
  }
};
setInterval(autoDark, 1000);
