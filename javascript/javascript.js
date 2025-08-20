
// console.log(a);             // write to the browser console
// document.write(a);          // write to the HTML
// alert(a);                   // output in an alert box
//confirm("Really?");         // yes/no dialog, returns true/false depending on user click
//prompt("Your age?","0");    // input dialog. Second argument is the initial value

// "use strict";   // Use strict mode to write secure code
// x = 1;          // Throws an error because variable is not declared

// false, true                     // boolean
// 18, 3.14, 0b10011, 0xF6, NaN    // number
// "flower", 'John'                // string
// undefined, null , Infinity      // special

var a;                          // variable
var b = "init";                 // string
var c = "Hi" + " " + "Joe";     // = "Hi Joe"
var d = 1 + 2 + "3";            // = "33"
var e = [2,3,5,8];              // array
var f = false;                  // boolean
var g = /()/;                   // RegEx
var h = function(){};           // function object
const PI = 3.14;                // constant
var a = 1, b = 2, c = a + b;    // one line
let z = 'zzz';                  // block scope local variable


// var name= "tawhid";
// let name2= "jamal";
// const abc= 1234;

// function add() {
//     var name= "Hamid";
//     console.log(name);
//     let name2= "kamal";
//     console.log(name2);
    
// }
// var name= "khalid";
//  name2= "rashed";
// abc= 1235;
// add();
// console.log(name);
// console.log(name2);
// console.log(abc);










// // var (old way), let (block-scoped), const (constant)
// var x = 5;               // globally/function-scoped can redeclar 
// let y = 10;              // block-scoped cant not be redeclared
// const z = 15;            // block-scoped, cannot be reassigned


// let str = "Hello";       // String
// let num = 42;            // Number
// let bool = true;         // Boolean
// let arr = [1, 2, 3];     // Array
// let obj = {a: 1, b: 2};  // Object
// let func = function() {}; // Function
// let und = undefined;     // Undefined
// let nul = null;          // Null

// // operator -----------------------------------------
// // Arithmetic
// let add = 5 + 3;         // 8
// let sub = 5 - 3;         // 2
// let mul = 5 * 3;         // 15
//let div = 5 / 3;         // 1.666...
// let mod = 7 % 3;         // 1
 
  
// // Assignment
// let x = 10;
// x += 5;                  // x = 15
//let x=5, y="5";
// // Comparison
// x == y;                  // Equal (value only)
// x === y;                 // Strictly Equal (value and type)




// x != y;                  // Not Equal
// x !== y;                 // Strictly Not Equal

//console.log(x !== y);
//let x= false , y= false;
// // Logical
// x && y;                  // AND
// x || y;                  // OR
// !x;                      // NOT

//console.log(!x);

// //loop 
// // for loop
// for (let i = 1; i <= 5; i++) {
//     console.log(i);
// }


// // while loop
// let j = 0;
// while (j < 5) {
//     console.log(j);
//     j++;
// }

//  let num2 = 1;

// do {
//     console.log(num2);
//     num2++;
// } while (num2 <= 5);
// // Outputs 1, 2, 3, 4, 5


// // for...of (for arrays)
//  let arrr = [1, 2, 3];
// for (let num of arrr) {
//     console.log(num);
// }

// // for...in (for objects)
// let obj = {a: 1, b: 2};
// for (let key in obj) {
//     console.log(key, obj[key]);
// }

// //---------------------------
// let age =18;
// if (age > 18) {
//     console.log("Adult");
// } else if (age === 18) {
//     console.log("Just turned adult");
// } else {
//     console.log("Minor");
// }


//let isMember = true;
//let discount = isMember ? "20%" : "10%";
// let isMember = null;
// let discount = isMember ?? "10%";
//  console.log(discount); // "20%"


// let color = "blue";

// switch (color) {
//     case "red":
//         console.log("Stop!");
//         break;
//     case "yellow":
//         console.log("Caution!");
//         break;
//     case "green":
//         console.log("Go!");
//         break;
//     default:
//         console.log("Color not recognized.");
// }

// // --------------
function checkAge(age) {
    if (age >= 18) {
        return "Adult";
    }
    return "child";
}

//console.log(checkAge(20)); // "Adult"
 //console.log(checkAge(15)); // "Child"

// //-----------error handeling 

// try {
//     let result = riskyOperation();
// } catch (error) {
//     console.log("An error occurred:", error.message);
// } finally {
//     console.log("Always executes");
// }


// function getGrade(score) {
//     if (score >= 90) {
//         return "A";
//     } else if (score >= 80) {
//         return "B";
//     } else if (score >= 70) {
//         return "C";
//     } else if (score >= 60) {
//         return "D";
//     } else {
//         return "F";
//     }
// }

// let scores = [95, 82, 67, 58, -1]; // Includes an invalid score to demonstrate error handling

// for (let score of scores) {
//     try {
//         if (score < 0 || score > 100) throw new Error("Invalid score");

//         let grade = getGrade(score);
//         console.log(`Score: ${score}, Grade: ${grade}`);
//     } catch (error) {
//         console.log(`Error with score ${score}: ${error.message}`);
//     }
// }


