/*Paralax*/

//Получаем элемент фона с деревом
const bgMove = document.querySelector("#Paralax__img");
const bgCondition = document.querySelector("#Paralax__img_condition");
const bgConditionBottom = document.querySelector(
  "#Paralax__img_condition_bottom"
);
const bgConditionBAbout = document.querySelector("#Paralax__img_about");
const bgFeedback = document.querySelector("#Paralax__img__feedback");

//При движении мышью вызываем функцию, которая меняет положение фона
document.addEventListener("mousemove", function (e) {
  MoveBackground(e);
});

function MoveBackground(e) {
  //Рассчитываем, насколько далеко от начала оси находится курсор: 0 - 0, 0.5 - середина экрана, 1 - ширина экрана (например, 1920)
  //Затем умножаем получившееся число на 30 - настолько будет сдвигаться фон
  //Например, если курсор находится посередине страницы (0.5), то при умножении получится 15
  //Далее отнимаем половину от 30, чтобы фон мог двигаться как влево, так и вправо

  let offsetX = (e.clientX / window.innerWidth) * 10 - 15;
  let offsetY = (e.clientY / window.innerHeight) * 10 - 5;

  //Меняем положение фона
  bgMove.setAttribute("style", "left: " + offsetX + "px");
  bgCondition.setAttribute("style", "left: " + offsetX + "px");
  bgConditionBottom.setAttribute("style", "left: " + offsetX + "px");
  bgConditionBAbout.setAttribute("style", "left: " + offsetX + "px");
  bgFeedback.setAttribute("style", "left: " + offsetX + "px");
}
/*/Paralax*/

function borderRadiusSlider() {
  let slirePartnersFirst = document.querySelectorAll(
    ".partnersSlider > .slick-list > .slick-track > .slick-slide > div > a > img"
  );

  for (let i = 0; i < slirePartnersFirst.length; i++) {
    if ($(window).width() < 900) {
      if (i % 2) {
        slirePartnersFirst[i].style.borderBottomRightRadius = "40px";
        slirePartnersFirst[i].style.borderBottomLeftRadius = "40px";
      } else {
        slirePartnersFirst[i].style.borderTopRightRadius = "40px";
        slirePartnersFirst[i].style.borderTopLeftRadius = "40px";
      }
    } else {
      if (i === 0) {
        slirePartnersFirst[i].style.borderBottomRightRadius = "40px";
      } else if (i === 1) {
        slirePartnersFirst[i].style.borderTopRightRadius = "40px";
      } else if (i === slirePartnersFirst.length - 1) {
        slirePartnersFirst[i].style.borderTopLeftRadius = "40px";
      } else if (i === slirePartnersFirst.length - 2) {
        slirePartnersFirst[i].style.borderBottomLeftRadius = "40px";
      } else if (i % 2) {
        slirePartnersFirst[i].style.borderTopLeftRadius = "40px";
        slirePartnersFirst[i].style.borderTopRightRadius = "40px";
      } else {
        slirePartnersFirst[i].style.borderBottomLeftRadius = "40px";
        slirePartnersFirst[i].style.borderBottomRightRadius = "40px";
      }
    }
  }
}

/*Select*/

let select = document.querySelector("#select");
let options = document.querySelectorAll("#optins > li");
let optionsWrap = document.querySelector(".ulSeectWrap");
let trigr = false;

select.addEventListener("click", function (e) {
  console.log('asdasd')
  if (trigr) {
    optionsWrap.style.display = "none";
    trigr = !trigr;
  } else {
    optionsWrap.style.display = "flex";
    trigr = !trigr;
  }

  e.preventDefault();
});

document.querySelector('.submitForm').addEventListener('click',function(){
  alert('Запрос отправлен')
})

for (let i = 0; i < options.length; i++) {
  options[i].addEventListener("click", function () {
    select.value = options[i].innerHTML;
    optionsWrap.style.display = "none";
    trigr = !trigr;
  });
}

/*.Select*/

function scrollUp() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
function scrollToForm() {
  let feedback = document.querySelector(".feedback");
  feedback.scrollIntoView({ behavior: "smooth" });
}
function scrollToCondition() {
  let feedback = document.querySelector(".condition");
  feedback.scrollIntoView({ behavior: "smooth" });
}
function scrollToPartners() {
  let feedback = document.querySelector(".partners");
  feedback.scrollIntoView({ behavior: "smooth" });
}
function scrollToAbou() {
  let feedback = document.querySelector(".about");
  feedback.scrollIntoView({ behavior: "smooth" });
}
function scrollToPrize() {
  let feedback = document.querySelector(".prize");
  feedback.scrollIntoView({ behavior: "smooth" });
}
function scrollToWinner() {
  let feedback = document.querySelector(".winner");
  feedback.scrollIntoView({ behavior: "smooth" });
}

document.querySelector(".mt__button").addEventListener("click", function () {
  scrollToForm();
  hideNav();
});
document.querySelector(".conditionNav").addEventListener("click", function () {
  scrollToCondition();
  hideNav();
});
document.querySelector(".partnersNav").addEventListener("click", function () {
  scrollToPartners();
  hideNav();
});
document.querySelector(".aboutNav").addEventListener("click", function () {
  scrollToAbou();
  hideNav();
});
document.querySelector(".winnerNav").addEventListener("click", function () {
  scrollToPrize();
  hideNav();
});
document.querySelector(".feedbackNav").addEventListener("click", function () {
  scrollToWinner();
  hideNav();
});
document.querySelector(".scrollUP").addEventListener("click", function () {
  scrollUp();
});
let nav = document.querySelector(".mobilNav");
document.querySelector(".navImg").addEventListener("click", function () {
  nav.style.top = 0;
});

function hideNav() {
  nav.style.top = "-120vh";
}
document.querySelector(".navCross").addEventListener("click", function () {
  hideNav();
});

let header = document.querySelector(".header");
let buttonUP = document.querySelector(".scrollUP");
function showBtnUp() {
  buttonUP.style.right = "3%";
}
function hideBtnUp() {
  buttonUP.style.right = "-10%";
}
function scrollBar() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.querySelector(".scrollBar").style.height = scrolled + "%";
}

document.addEventListener("scroll", () => {
  if (header.getBoundingClientRect().bottom < 0) {
    showBtnUp();
  } else {
    hideBtnUp();
  }
  scrollBar();
});

document.addEventListener("DOMContentLoaded", () => {
  borderRadiusSlider();
  hideBtnUp();
});
