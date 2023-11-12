// const xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.status === 200 && xhr.readyState === 4) {
//     const data = xhr.response;
//     console.log(JSON.parse(data));
//   }
// };
// xhr.open("GET", "https://jsonplaceholder.typicode.com/users");
// xhr.send();

// fetch("https://jsonplaceholder.typicode.com/users")
//   .then((data) => data.json())
//   .then((data) => console.log(data))
//   .catch((error) => console.log(error));

const getData = async () => {
  try {
    const fetching = await fetch("https://jsonplaceholder.typicode.com/users");
    if (!fetching.ok) {
      alert("API is not found!");
    }
    const data = await fetching.json();
    console.log(data);
  } catch (error) {
    console.log("Something's wrong");
  }
};

const main = async () => {
  console.log("Start");
  await getData();
  console.log("End");
};

main();
