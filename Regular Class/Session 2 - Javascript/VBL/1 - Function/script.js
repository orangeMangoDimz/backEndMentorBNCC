//* Function biasa

function sayHello() {
  console.log("Hello Wolrd");
}

function sayHello2(name) {
  console.log("Hello " + name);
}

function sayHello3(name, name2) {
  console.log("Hello " + name + " | Hello " + name2);
}

function sayHello4(name, name2 = "Dani") {
  console.log("Hello " + name + " | Hello " + name2);
}

function sum(angka1, angka2) {
  return angka1 + angka2;
}

function sum2(angka1, ...angka2) {
  let total = 0;
  for (let val of angka2) total += val;
  total += angka1;
  return total;
}

sayHello();
sayHello2("Dimas");
sayHello3("Dimas", "Dani");
sayHello4("Dimas", "Zaini");
const result = sum(5, 2);
console.log(result);
const result2 = sum2(5, 2, 3, 4, 5);
console.log(result2);

//* Function expresi
const say = function () {
  console.log("Helo World");
};

const say2 = function (name) {
  console.log("Helo " + name);
};
say();
say2("Dimas");

//* Arrow Function
const sayHi = (name) => {
  console.log("Hello " + name);
};
const sumNum = () => 5 + 3;
const sumNum2 = () => {
  return 5 + 3;
};

sayHi("Dimas");
const result3 = sumNum();
console.log(result3);
const result4 = sumNum2();
console.log(result4);
