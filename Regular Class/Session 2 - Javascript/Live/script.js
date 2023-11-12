//* Variabel
// var nama = "Dimas";
// let ipk = 3.2;
// const alamat = "BINUS";
// // alamat = "ITB";

// var x = 10;
// let y = 5;

// // alt + shift + arrow key bawah
// // for (let y = 0; y <= 3; y++){
// //     y = y * 2;
// //     console.log(y);
// // }

// for (var x = 0; x <= 3; x++){
//     x = x * 2;
//     console.log(x);
// }

// console.log(x);
// // console.log(y);
// // console.log(alamat);

//* Tipe Data
// let x = 12;
// let y = 2.5;
// let z = "Hello";
// let a = null;
// let b;

// console.log(typeof(x));
// console.log(typeof(y));
// console.log(typeof(z));
// console.log(typeof(a));
// console.log(typeof(b));

//* Operator
// // ! Aritmatika
// let hasilJumlah = 1 + 3;
// let hasilAngka = (5 / 2) + 5;
// console.log(hasilJumlah);
// console.log(hasilAngka);

// // ! Perbandingan
// let angka1 = 5;
// let angka2 = 7;
// let angka3 = "5";
// console.log(5 === 7);
// console.log(angka1 === angka3);
// console.log(angka1 == angka3);
// console.log(5 > 7);

// // ! Logika
// // 0 -> false, 1 -> true
// let jomblo = true; //1 
// let jomblo2 = false; //0
// let status = jomblo && jomblo2;
//  status = jomblo2 && jomblo2;
//  status = jomblo && jomblo;
//  status = jomblo || jomblo2;
//  status = (jomblo && jomblo) || (jomblo2 && jomblo);
// console.log(status)

//* Conditional Statement
// let angka = prompt("Value?")
// console.log(angka);

// // alt + arrow key
// if (parseInt(angka) === 12)
// console.log("Angka Spesial");
// else if (angka % 2 === 0)
// console.log("Genap");
// else
//     console.log("Ganjil");

// * Looping
// // ! Looping for
// for (let i = 1; i <= 3; i++)
// {
//     console.log(i);
// }

// console.log("===");

// // ! While
// let angka = 8;
// while(angka <= 5)
// {
//     console.log(angka);
//     angka++;
// }

// console.log("===");

// // ! Do While
// let angka2 = 8;
// do{
//     angka2++;
//     console.log(angka2);
// }while(angka2 <= 10);

// ! For in
let person = {
    name : "Dimas",
    age : 20
}

console.log(person.name);
console.log(person.age);

for (let prop in person)
{
    console.log(person[prop]);
}

// ! For of
let angka3 = [1, 2, 3, 4, 5];
// console.log(angka3);
// console.log(angka3[0]);
// console.log(angka3[3]);

for (let val of angka3)
{
    console.log(val);
}

