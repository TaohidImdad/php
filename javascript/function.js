// Function Declaration	  A named function, hoisted to the top of its scope.
// Function Expression	  A function assigned to a variable, not hoisted.
// Arrow Function	      Concise syntax, does not bind this.
// IIFE	A function        that runs immediately after it is defined.
// Higher-Order Function  Takes or returns functions, used in functional programming.
// Callback Function	  Passed as an argument and called back later.
// Generator Function	  A function that can pause and resume, returning a sequence of values.
// Async Function	      Handles asynchronous operations with promises, using await.
// Constructor Function	  Used to create objects with the new keyword.
// Method	              A function that is a property of an object.
// Recursive Function	  Calls itself until a base condition is met, useful for repetitive tasks.


// function greet(name) {
//     return "Hello, " + name;
// }
// console.log(greet("Alice")); // "Hello, Alice"



// const sayHello = function(name) {
//     return "Hi, " + name;
// };
// console.log(sayHello("Bob")); // "Hi, Bob"



// const add = (a, b) => a + b;
// console.log(add(2, 3)); // 5

// // Single parameter without parentheses
// const square = x => x * x;
// console.log(square(4)); // 16


// (function() {
//     console.log("This runs immediately!");
// })();

// ((name) => {
//     console.log("Hello, " + name);
// })("Charlie"); // "Hello, Charlie"


// const numbers = [1, 2, 3, 4, 5];

// // Higher-order function using map
// const doubled = numbers.map(num => num * 2);
// console.log(doubled); // [2, 4, 6, 8, 10]


// // call back;
// function processUserInput(callback) {
//     const name = "Alice";
//     callback(name);
// }

// processUserInput(name => {
//     console.log("Hello, " + name);
// });
// // "Hello, Alice"

// // 7. Generator Function
// // A function that can be paused and resumed, denoted by the * symbol. It yields values one at a time using the yield keyword.

// function* generateNumbers() {
//     yield 1;
//     yield 2;
//     yield 3;
// }

// const generator = generateNumbers();
// console.log(generator.next().value); // 1
// console.log(generator.next().value); // 2
// console.log(generator.next().value); // 3


// async function fetchData() {
//     const response = await fetch("https://api.example.com/data");
//     const data = await response.json();
//     return data;
// }

// fetchData().then(data => console.log(data));


// const car = {
//     brand: "Toyota",
//     start() {
//         console.log(this.brand + " is starting...");
//     }
// };

// car.start(); // "Toyota is starting..."


function factorial(n) {
    if (n === 0) return 1;
    return n * factorial(n - 1);
}


// function factorial(n) {
//      console.log(n);
//      n--;
//     if(n === 0) return;
//     factorial(n)
// }

// factorial(10) 

