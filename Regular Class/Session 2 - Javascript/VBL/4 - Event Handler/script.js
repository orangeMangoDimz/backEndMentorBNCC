const button = document.querySelector("button");
const additionalContent = document.querySelector(".addition-content");
const title = document.querySelector("#judul");
additionalContent.style.display = "none";

function clickHandler(e) {
  console.log(e);
  if (e.target.classList.contains("show")) {
    additionalContent.style.display = "block";
    e.target.classList.remove("show");
    e.target.classList.add("hide");
    e.target.innerHTML = "Show Less";
  } else if (e.target.classList.contains("hide")) {
    additionalContent.style.display = "none";
    e.target.classList.remove("hide");
    e.target.classList.add("show");
    e.target.innerHTML = "Show More";
  }
}

button.addEventListener("click", clickHandler);
title.addEventListener("mouseenter", (e) => {
  e.target.style.backgroundColor = "yellow";
  e.target.style.display = "inline-block";
  e.target.style.margin = "10px";
});
title.addEventListener("mouseleave", (e) => {
  e.target.style.backgroundColor = "transparent";
  e.target.style.display = "block";
  e.target.style.margin = "0";
});
