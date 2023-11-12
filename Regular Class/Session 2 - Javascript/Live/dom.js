document.writeln("<h1>Hai</h1>");

const h1 = document.querySelector("h1")
const h1_ = document.querySelector("#title")
const hBaru = document.querySelectorAll(".sub-title")[1];
console.log(h1);
console.log(h1_);
console.log(hBaru);

h1.style.color = "red";
hBaru.style.backgroundColor = "yellow";

const ul = document.querySelector("ul");
const li = document.createElement("li");
const val = document.createTextNode("No 4");
li.appendChild(val);
ul.appendChild(li);