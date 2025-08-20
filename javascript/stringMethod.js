// List of String Methods:
// charAt()
// charCodeAt()
// concat()
// includes()
// indexOf()
// lastIndexOf()
// localeCompare()
// match()
// replace()
// replaceAll()
// search()
// slice()
// split()
// substring()
// toLowerCase()
// toUpperCase()
// trim()
// trimStart() / trimLeft()
// trimEnd() / trimRight()
// padStart()
// padEnd()
// repeat()
// split()
// startsWith()
// endsWith()
// valueOf()
// anchor()

var abc = "abcdefghijklmnopqrstuvwxyz";
var esc = 'I don\'t \n know';   // \n new line
//var len = abc.length;           // string length


//let index= abc.indexOf("lmno");            // find substring, -1 if doesn't contain 

 //let index =abc.lastIndexOf("lmno");        // last occurance

 //let data =abc.slice(10, 15);                // cuts out "def", negative values count from behind

 //var a =abc.replace("abc","123");       // find and replace, takes regular expressions

 
// abc.toUpperCase();              // convert to upper case
// abc.toLowerCase();              // convert to lower case
// abc.concat(" ", str2);          // abc + " " + str2
// abc.charAt(2);                  // character at index: "c"
//var a= abc[2];                         // unsafe, abc[2] = "C" doesn't work

//var a= abc.charCodeAt(1);              // character code at index: "c" -> 99

//abc.split("");                 // splitting a string on commas gives an array

// abc.split("");                  // splitting on characters

// let number=123456789
// var b=  number.toString(8);               // number to hex(16), octal (8) or binary (2)
// console.log(number);
// 1. charAt() - Returns the character at a specified index
 let str = "Hello, World!";
// console.log(str.charAt(0)); // H
// console.log(str.charAt(7)); // W

// // 2. charCodeAt() - Returns the Unicode of the character at a specified index
// console.log(str.charCodeAt(0)); // 72
// console.log(str.charCodeAt(7)); // 87

// // 3. concat() - Concatenates two or more strings
// let str2 = " How are you?";
// let result = str.concat(str2);
// console.log(result); // Hello, World! How are you?

// // 4. includes() - Checks if a string contains a specified substring
// console.log(str.includes("World")); // true
// console.log(str.includes("world")); // false (case-sensitive)

// // 5. indexOf() - Returns the index of the first occurrence of a specified value
// console.log(str.indexOf("World")); // 7
// console.log(str.indexOf("world")); // -1 (not found)

// // 6. lastIndexOf() - Returns the index of the last occurrence of a specified value
// console.log(str.lastIndexOf("o")); // 8
// console.log(str.lastIndexOf("z")); // -1 (not found)

// // 7. localeCompare() - Compares two strings in a locale-sensitive manner    not necessary
//  console.log("apple".localeCompare("banana")); // -1
// console.log("banana".localeCompare("apple")); // 1
// console.log("apple".localeCompare("apple")); // 0

// // 8. match() - Searches a string for a match against a regular expression
// console.log(str.match(/o/g)); // [ 'o', 'o' ]
// console.log(str.match(/world/)); // null (no match)

// // 9. replace() - Replaces the first match of a pattern with a string
// console.log(str.replace("World", "Universe")); // Hello, Universe!

// // 10. replaceAll() - Replaces all matches of a pattern with a string
// console.log(str.replaceAll("o", "O")); // HellO, WOrld!

// // 11. search() - Searches for a match to a regular expression and returns the position
// console.log(str.search("World")); // 7
// console.log(str.search("world")); // -1 (not found)

// // 12. slice() - Extracts a part of a string and returns a new string
// console.log(str.slice(7, 12)); // World
// console.log(str.slice(-6)); // World!

// // 13. split() - Splits a string into an array of substrings
// let words = str.split(" ");
// console.log(words); // ["Hello,", "World!"]

// // 14. substring() - Extracts a substring between two specified indices
// console.log(str.substring(0, 5)); // Hello
// console.log(str.substring(7, 12)); // World

// // 15. toLowerCase() - Converts the string to lowercase
// console.log(str.toLowerCase()); // hello, world!

// // 16. toUpperCase() - Converts the string to uppercase
// console.log(str.toUpperCase()); // HELLO, WORLD!

// // 17. trim() - Removes whitespace from both ends of a string
// let strWithSpaces = "   Hello, World!   ";
// console.log(strWithSpaces.trim()); // Hello, World!

// // 18. trimStart() / trimLeft() - Removes whitespace from the start of a string
// console.log(strWithSpaces.trimStart()); // "Hello, World!   "

// // 19. trimEnd() / trimRight() - Removes whitespace from the end of a string
// console.log(strWithSpaces.trimEnd()); // "   Hello, World!"

// // 20. padStart() - Pads the current string with another string (on the left)
// console.log("5".padStart(3, "0")); // 005

// // 21. padEnd() - Pads the current string with another string (on the right)
// console.log("5".padEnd(3, "0")); // 500

// 22. repeat() - Returns a string with the specified number of copies of the original string
console.log("abc".repeat(3)); // abcabcabc

// // 23. split() - Splits a string into an array of substrings based on a delimiter
// let sentence = "apple,banana,cherry";
// let fruits = sentence.split(",");
// console.log(fruits); // ["apple", "banana", "cherry"]

// // 24. startsWith() - Checks if a string starts with a specified substring
// console.log(str.startsWith("Hello")); // true
// console.log(str.startsWith("hello")); // false (case-sensitive)

// // 25. endsWith() - Checks if a string ends with a specified substring
// console.log(str.endsWith("!")); // true
// console.log(str.endsWith("world!")); // false

// 26. valueOf() - Returns the primitive value of a string
console.log(str.valueOf()); // Hello, World!


