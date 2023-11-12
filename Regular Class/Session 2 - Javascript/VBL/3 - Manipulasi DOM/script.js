const content = document.querySelector(".content");
const p = document.createElement("p");
const newP = document.createTextNode(
  "<span>Lorem ipsum dolor, sit</span> amet consectetur adipisicing elit. Iure sed ipsa nam quisquam deleniti animi sunt culpa aliquid quas alias? Sit aspernatur qui veritatis maxime quibusdam recusandae ipsa temporibus vitae?Neque, libero quod nam blanditiis nihil voluptatum eius, reprehenderit quam ut exercitationem eaque doloribus expedita temporibus ab rerum quasi similique saepe modi possimus quos atque earum? Quos eveniet illo magnam?Laudantium et quisquam debitis deleniti neque nemo iste laboriosam accusamus repudiandae excepturi nam, non unde doloremque quibusdam, eveniet fugit perspiciatis veniam nesciunt! Maiores odio deserunt doloremque enim. Atque, velit placeat?"
);
p.appendChild(newP);
p.classList.add("paragraf");
// p.innerHTML =
//   "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex aspernatur sapiente blanditiis, laudantium quos laboriosam necessitatibus repudiandae placeat deleniti porro doloribus eaque aliquid optio distinctio veritatis labore voluptatem nihil molestiae.Tempora quis eligendi ab error, exercitationem provident optio aliquam excepturi harum deleniti incidunt ratione vel ducimus tempore alias molestias recusandae architecto reiciendis earum? Vitae vel dolorem voluptas quas earum <span>et!Velit similique delectus esse odio tempora illo</span>, sapiente, eius repellendus aspernatur inventore eligendi? Non numquam fugiat amet quia atque nihil dolorum. Maxime ipsum inventore magni aspernatur nam dolor aliquid labore.";
content.appendChild(p);

const spans = document.querySelectorAll("span");
for (let i = 0; i < spans.length; i++) {
  spans[i].style.backgroundColor = "yellow";
  spans[i].style.fontWeight = "bold";
}
