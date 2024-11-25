let menu = document.getElementById("menu");
let list = document.getElementById("list");
let closeItem = document.getElementById("close-item");
menu.addEventListener("click", () => {
  list.style.display = "flex";
});
closeItem.addEventListener("click", () => {
  list.style.display = "none";
});
