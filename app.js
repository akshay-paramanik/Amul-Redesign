window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.backgroundImage =
      "linear-gradient(180deg, black, #0000009c)";
  } else {
    document.getElementById("navbar").style.backgroundImage =
      "linear-gradient(180deg, black, #0000009c, transparent)";
  }
}

//step 1: get DOM
let nextDom = document.getElementById("next");
let prevDom = document.getElementById("prev");

let carouselDom = document.querySelector(".carousel");
let SliderDom = carouselDom.querySelector(".carousel .list");
let thumbnailBorderDom = document.querySelector(".carousel .thumbnail");
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll(".item");
let timeDom = document.querySelector(".carousel .time");

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 3000;
let timeAutoNext = 7000;

nextDom.onclick = function () {
  showSlider("next");
};

prevDom.onclick = function () {
  showSlider("prev");
};
let runTimeOut;
let runNextAuto = setTimeout(() => {
  next.click();
}, timeAutoNext);
function showSlider(type) {
  let SliderItemsDom = SliderDom.querySelectorAll(".carousel .list .item");
  let thumbnailItemsDom = document.querySelectorAll(
    ".carousel .thumbnail .item"
  );

  if (type === "next") {
    SliderDom.appendChild(SliderItemsDom[0]);
    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
    carouselDom.classList.add("next");
  } else {
    SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
    thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
    carouselDom.classList.add("prev");
  }
  clearTimeout(runTimeOut);
  runTimeOut = setTimeout(() => {
    carouselDom.classList.remove("next");
    carouselDom.classList.remove("prev");
  }, timeRunning);

  clearTimeout(runNextAuto);
  runNextAuto = setTimeout(() => {
    next.click();
  }, timeAutoNext);
}

// slide scrollerTrigger
gsap.to(".details #slide", {
  transform: "translateX(-300%)",
  scrollTrigger: {
    trigger: ".details",
    scroller: "body",
    // markers: true,
    start: "top -10%",
    end: "top -100%",
    scrub: 2,
    pin: true,
  },
});

// function breakTheText() {
//     var info = document.querySelector("#info")
//     var infoText = info.textContent

//     var splittedText = infoText.split("")

//     var clutter = ""
//     splittedText.forEach(function (elem) {
//         clutter += `<span>${elem}</span>`
//     })

//     info.innerHTML = clutter
// }

// breakTheText()

// gsap.from("#info span", {
//     y: 100,
//     opacity: 0,
//     duration: 1,
//     delay: 2,
//     stagger:0.15
// })
let menu = document.getElementById("menu");
let list = document.getElementById("list");
let closeItem = document.getElementById("close-item");
menu.addEventListener("click", () => {
  list.style.display = "flex";
});
closeItem.addEventListener("click", () => {
  list.style.display = "none";
});
