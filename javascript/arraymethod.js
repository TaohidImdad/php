// push() - Adds elements to the end of an array.
// pop() - Removes the last element of an array.
// shift() - Removes the first element of an array.
// unshift() - Adds elements to the beginning of an array.
// concat() - Merges two or more arrays.
// slice() - Extracts a section of an array and returns a new array.
// splice() - Adds, removes, or replaces elements in an array.
// indexOf() - Returns the first index at which an element is found.
// lastIndexOf() - Returns the last index at which an element is found.
// includes() - Checks if an array includes a certain element.
// find() - Returns the first element that satisfies a condition.
// findIndex() - Returns the index of the first element that satisfies a condition.
// forEach() - Executes a function on each element.
// map() - Creates a new array with the results of calling a function on each element.
// filter() - Creates a new array with elements that pass a condition.
// reduce() - Reduces an array to a single value.
// reduceRight() - Similar to reduce(), but processes elements from right to left.
// some() - Checks if at least one element satisfies a condition.
// every() - Checks if all elements satisfy a condition.
// sort() - Sorts elements in place.
// reverse() - Reverses the order of elements.
// join() - Joins all elements into a single string.
// flat() - Flattens nested arrays to a specified depth.
// flatMap() - Maps each element and flattens the result.
// fill() - Fills all elements with a static value.
// copyWithin() - Copies a part of the array to another location within the array.
// from() - Creates a new array from an array-like or iterable object.
// isArray() - Checks if a value is an array.
// of() - Creates a new array from a variable number of arguments.
// toString() - Converts an array to a string.
// toLocaleString() - Converts an array to a localized string.



// // Array to be used for demonstration
 let fruits = ["apple","Angur", "banana", "cherry", "date", "elderberry", "fig"];

// // 1. push() - Adds elements to the end
// fruits.push("grape");
// console.log(fruits); // ["apple", "banana", "cherry", "date", "elderberry", "fig", "grape"]

// // 2. pop() - Removes the last element
// fruits.pop();
// console.log(fruits); // ["apple", "banana", "cherry", "date", "elderberry", "fig"]

// // 3. shift() - Removes the first element
// fruits.shift();
// console.log(fruits); // ["banana", "cherry", "date", "elderberry", "fig"]

// // 4. unshift() - Adds elements to the beginning
// fruits.unshift("apricot");
// console.log(fruits); // ["apricot", "banana", "cherry", "date", "elderberry", "fig"]

// // 5. concat() - Merges two arrays
 let moreFruits = ["honeydew", "kiwi"];
 let allFruits = fruits.concat(moreFruits);
 //let allFruits = fruits.push(moreFruits);
 //console.log(fruits); // ["apricot", "banana", "cherry", "date", "elderberry", "fig", "honeydew", "kiwi"]

// // 6. slice() - Extracts a section of an array
// let slicedFruits = allFruits.slice(1, 4);
// console.log(slicedFruits); // ["banana", "cherry", "date"]

//7. splice() - Adds, removes, or replaces elements
// allFruits.splice(3, 0, "blackberry"); // Removes "cherry" and adds "blackberry"
// console.log(allFruits); // ["apricot", "banana", "blackberry", "date", "elderberry", "fig", "honeydew", "kiwi"]

// 8. indexOf() - Finds the index of an element
//console.log(allFruits.indexOf("date")); // 3

// // 9. lastIndexOf() - Finds the last index of an element
// let numbers = [1, 2, 3, 2, 1];
// console.log(numbers.lastIndexOf(2)); // 3

// // 10. includes() - Checks if an element exists
// console.log(allFruits.includes("kiwi")); // true

//11. find() - Finds the first element that satisfies a condition
// let foundFruit = allFruits.find(fruit => fruit.startsWith("b"));
// let foundFruit = allFruits.find(x=>x.startsWith("a"));
// console.log(foundFruit); // "banana"

// // 12. findIndex() - Finds the index of the first element that satisfies a condition
// let foundIndex = allFruits.findIndex(fruit => fruit.startsWith("b"));
// console.log(foundIndex); // 1

// // 13. forEach() - Executes a function on each element
// allFruits.forEach(fruit => console.log(fruit));
// // Output: apricot, banana, blackberry, date, elderberry, fig, honeydew, kiwi

// // 14. map() - Creates a new array with transformed elements
// let fruitLengths = allFruits.map(fruit => [fruit.length, fruit]);
//   console.log(fruitLengths); // [7, 6, 10, 4, 10, 3, 8, 4]

let fruitLengths = allFruits.map(fruit => ({
    a: fruit.length,
    b:fruit
   }));

// console.log( fruitLengths);




   
// console.log(fruitLengths.map(a=>a.b));

// 15. filter() - Creates a new array with elements that pass a test
let longNamedFruits = allFruits.filter(fruit => fruit.length > 5);
console.log(longNamedFruits); // ["apricot", "banana", "blackberry", "elderberry", "honeydew"]


let a= new Array(100).fill().map((_,index)=>index+1);

// console.log(a);




// 16. reduce() - Reduces an array to a single value
// let fruitLengthSum = a.reduce((acc, length) => acc + length,0);
// console.log(fruitLengthSum); // Sum of lengths

// // 17. some() - Checks if at least one element passes a test
// let hasShortName = allFruits.some(fruit => fruit.length < 3);
// console.log(hasShortName); // true

// // // 18. every() - Checks if all elements pass a test
// let allLongNames = allFruits.every(fruit => fruit.length > 2);
// console.log(allLongNames); // true

// // 19. sort() - Sorts elements
// allFruits.sort();
// console.log(allFruits); // Alphabetically sorted array

// // 20. reverse() - Reverses the order of elements
// allFruits.reverse();
// console.log(allFruits); // Reversed array

// 21. join() - Joins all elements into a string
// let fruitString = allFruits.join(", ");
// console.log(fruitString); // "kiwi, honeydew, fig, elderberry, date, blackberry, banana, apricot"

// // 22. flat() - Flattens a nested array
// let nestedArray = [1, [2, [3, 4]], 5];
// console.log(nestedArray.flat(2)); // [1, 2, 3, 4, 5]

// 23. flatMap() - Maps and flattens the result
// let phrases = ["hello world", "goodbye world"];
// let words = phrases.flatMap(phrase => phrase.split(" "));
// console.log(words); // ["hello", "world", "goodbye", "world"]

// 24. fill() - Fills the array with a specific value
// let filledArray = new Array(10).fill("apple");
// console.log(filledArray); // ["apple", "apple", "apple"]


// let filledArray = new Array(10).fill().map((_,index)=>index+1);
// console.log(filledArray); 

// let filledArray = [];
// for (let i = 1; i <= 10; i++) {
//     filledArray.push(i);
// }
// console.log(filledArray); 

// // 25. copyWithin() - Copies part of the array to another location
// let arr = [1, 2, 3, 4, 5];
// arr.copyWithin(1, 3);
// console.log(arr); // [1, 4, 5, 4, 5]  not important 

// // 26. isArray() - Checks if a variable is an array
// console.log(Array.isArray(allFruits)); // true

// // 27. of() - Creates a new array from arguments
// let numArray = Array.of(6, 7, 8);
// console.log(numArray); // [6, 7, 8]

// // 28. from() - Creates an array from an iterable
// let str = "hello";
// let chars = Array.from(str);
// console.log(chars); // ["h", "e", "l", "l", "o"]

// // 29. toString() - Converts the array to a string
// console.log(allFruits.toString()); // "kiwi,honeydew,fig,elderberry,date,blackberry,banana,apricot"

// // 30. toLocaleString() - Converts the array to a localized string representation
// console.log(allFruits.toLocaleString()); // Depends on locale, similar to toString in many cases

// 31. entries() - Returns an iterator with key/value pairs
// let entries = allFruits.entries();
// console.log( entries);

// for (let entry of entries) {
//     console.log(entry); // [index, element]
// }

// // 32. keys() - Returns an iterator with keys
// let keys = allFruits.keys();
// for (let key of keys) {
//     console.log(key); // indexes: 0, 1, 2, ...
// }


// 33. values() - Returns an iterator with values
// let values = allFruits.values();
// for (let value of values) {
//     console.log(value); // elements: "kiwi", "honeydew", ...
// }