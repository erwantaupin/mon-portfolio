const btn = document.querySelector(".btn");
// a = 600;

// window.addEventListener("scroll", () => {
//   if (scrollY == a) {
//     function changeStyle() {
//       document.getElementsByClassName("btn")[0].style.display = "flex";
//     }
//   }
//   console.log(window.scrollY);
// });

btn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});
