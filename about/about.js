let menu = document.getElementById("menu");
let list = document.getElementById("list");
let closeItem = document.getElementById("close-item");
menu.addEventListener("click", () => {
  list.style.display = "flex";
});
closeItem.addEventListener("click", () => {
  list.style.display = "none";
});

gsap.to("#head", {
  x: 100,
  duration: 2,
  opacity: 1,
  delay: 1,
});
gsap.from(".dtls", {
  y: 100,
  opacity: 0,
  duration: 2,

  delay: 1,
});
gsap.from(".icon", {
  y: 100,
  opacity: 0,
  duration: 2,

  delay: 1,
});
gsap.to(".pic", {
  y: -50,
  opacity: 1,
  duration: 2,
  opacity: 1,
  delay: 1,
});
gsap.from("#head1", {
  x: 100,
  duration: 1.2,
  opacity: 0,
  delay: 1,
  scrollTrigger: {
    trigger: ".container2",
    start: "top 50%",
    end: "top 20%",
    // markers: true,
  },
});
gsap.from(".dtls1", {
  y: -50,
  duration: 0.2,
  opacity: 0,
  delay: 1,
  scrollTrigger: {
    trigger: ".container2",
    start: "top 0px",
    end: "top 50%",
  },
});
