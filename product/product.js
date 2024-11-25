function itemEnter(infoId, id, circle, colors) {
  let panchamtrit = document.getElementById(infoId);
  let circleItem = document.getElementById(circle);
  $.ajax({
    url: "../configBacked/pages/ajaxItem.php",
    type: "POST",
    data: {
      itemId: id,
    },
    success: function (result) {
      $("#panchamrit").html(result);
    },
  });
  circleItem.style.backgroundColor = `${colors}`;
  circleItem.style.left = "10%";
  panchamtrit.style.display = "block";
}
function itemLeave(infoId, id, circle) {
  let panchamtrit = document.getElementById(infoId);
  let circleItem = document.getElementById(circle);
  circleItem.style.left = "-50" + "%";
  panchamtrit.style.display = "none";
}
function rightClick(containerId) {
  const container = document.getElementById(containerId);
  container.scrollLeft += 80;
}
function leftClick(containerId) {
  const container = document.getElementById(containerId);
  container.scrollLeft -= 80;
}

var tl = gsap.timeline();

tl.from("#bottom .card", {
  y: -500,
  duration: 1,
  stagger: 0.3,
  scrollTrigger: {
    scroller: "body",
    trigger: "#bottom",
    start: "top 90%",
    end: "bottom 70%",
    scrub: 2,
  },
});
gsap.from(".card-item", {
  // x: -500,
  scale: 0.5,
  duration: 0.5,
  // stagger: 0.5,
  scrollTrigger: {
    trigger: ".popular-products",
    start: "top 60%",
    end: "bottom 40%",
    // markers: true,
    // scrub: 2,
  },
});

let menu = document.getElementById("menu");
let list = document.getElementById("list");
let closeItem = document.getElementById("close-item");
menu.addEventListener("click", () => {
  list.style.display = "flex";
});
closeItem.addEventListener("click", () => {
  list.style.display = "none";
});
