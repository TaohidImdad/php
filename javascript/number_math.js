
//Numbers and Math∑
var pi = 3.141;
pi.toFixed(0);          // returns 3
pi.toFixed(2);          // returns 3.14 - for working with money
pi.toPrecision(2)       // returns 3.1
pi.valueOf();           // returns number
Number(true);           // converts to number
Number(new Date())      // number of milliseconds since 1970
parseInt("3 months");   // returns the first number: 3
parseFloat("3.5 days"); // returns 3.5
Number.MAX_VALUE        // largest possible JS number
Number.MIN_VALUE        // smallest possible JS number
Number.NEGATIVE_INFINITY// -Infinity
Number.POSITIVE_INFINITY// Infinity


var pi = Math.PI;       // 3.141592653589793
Math.round(4.4);        // = 4 - rounded
Math.round(4.5);        // = 5
Math.pow(2,8);          // = 256 - 2 to the power of 8
Math.sqrt(49);          // = 7 - square root 
Math.abs(-3.14);        // = 3.14 - absolute, positive value
Math.ceil(3.14);        // = 4 - rounded up
Math.floor(3.99);       // = 3 - rounded down
Math.sin(0);            // = 0 - sine
Math.cos(Math.PI);      // OTHERS: tan,atan,asin,acos,
Math.min(0, 3, -2, 2);  // = -2 - the lowest value
Math.max(0, 3, -2, 2);  // = 3 - the highest value
Math.log(1);            // = 0 natural logarithm 
Math.exp(1);            // = 2.7182pow(E,x)
Math.random();          // random number between 0 and 1
Math.floor(Math.random() * 5) + 1;  // random integer, from 1 to 5





// === Number Functions ===

// 1. Number.isNaN() - Checks if the value is NaN (Not a Number)
console.log(Number.isNaN(NaN));            // true
console.log(Number.isNaN(123));            // false

// 2. Number.isFinite() - Checks if the value is a finite number
console.log(Number.isFinite(123));         // true
console.log(Number.isFinite(Infinity));    // false

// 3. Number.isInteger() - Checks if the value is an integer
console.log(Number.isInteger(4));          // true
console.log(Number.isInteger(4.5));        // false

// 4. Number.parseInt() - Parses a string and returns an integer
console.log(Number.parseInt('42.5'));      // 42
console.log(Number.parseInt('abc'));       // NaN

// 5. Number.parseFloat() - Parses a string and returns a floating-point number
console.log(Number.parseFloat('42.5'));    // 42.5
console.log(Number.parseFloat('abc'));     // NaN

// 6. Number.toFixed() - Formats a number with a specific number of decimal places
console.log((4.5678).toFixed(2));          // "4.57"

// 7. Number.toPrecision() - Formats a number to a specified length
console.log((4.5678).toPrecision(3));      // "4.57"

// 8. Number.toString() - Converts a number to a string
console.log((123).toString());             // "123"

// 9. Number.valueOf() - Returns the primitive value of a Number object
let num = new Number(123);
console.log(num.valueOf());                // 123

// 10. Number.isSafeInteger() - Checks if a value is a safe integer within JavaScript's range
console.log(Number.isSafeInteger(9007199254740991)); // true
console.log(Number.isSafeInteger(9007199254740992)); // false


// === Math Functions ===

// 1. Math.abs() - Returns the absolute value of a number
console.log(Math.abs(-5));                 // 5

// 2. Math.ceil() - Rounds a number up to the nearest integer
console.log(Math.ceil(4.2));               // 5

// 3. Math.floor() - Rounds a number down to the nearest integer
console.log(Math.floor(4.8));              // 4

// 4. Math.round() - Rounds a number to the nearest integer
console.log(Math.round(4.5));              // 5

// 5. Math.trunc() - Returns the integer part of a number, removing any fractional digits
console.log(Math.trunc(4.8));              // 4

// 6. Math.max() - Returns the largest number from a set of numbers
console.log(Math.max(1, 5, 10));           // 10

// 7. Math.min() - Returns the smallest number from a set of numbers
console.log(Math.min(1, 5, 10));           // 1

// 8. Math.pow() - Returns base to the exponent power
console.log(Math.pow(2, 3));               // 8

// 9. Math.sqrt() - Returns the square root of a number
console.log(Math.sqrt(16));                // 4

// 10. Math.cbrt() - Returns the cube root of a number
console.log(Math.cbrt(27));                // 3

// 11. Math.random() - Returns a random number between 0 and 1
console.log(Math.random());                // Example output: 0.4523

// 12. Math.log() - Returns the natural logarithm (base e) of a number
console.log(Math.log(1));                  // 0

// 13. Math.log10() - Returns the base-10 logarithm of a number
console.log(Math.log10(100));              // 2

// 14. Math.log2() - Returns the base-2 logarithm of a number
console.log(Math.log2(8));                 // 3

// 15. Math.exp() - Returns e^x, where x is the argument
console.log(Math.exp(1));                  // 2.718...

// 16. Math.sin() - Returns the sine of an angle (in radians)
console.log(Math.sin(Math.PI / 2));        // 1

// 17. Math.cos() - Returns the cosine of an angle (in radians)
console.log(Math.cos(Math.PI));            // -1

// 18. Math.tan() - Returns the tangent of an angle (in radians)
console.log(Math.tan(Math.PI / 4));        // 1

// 19. Math.asin() - Returns the arcsine of a value, in radians
console.log(Math.asin(1));                 // 1.5708...

// 20. Math.acos() - Returns the arccosine of a value, in radians
console.log(Math.acos(1));                 // 0

// 21. Math.atan() - Returns the arctangent of a value, in radians
console.log(Math.atan(1));                 // 0.7853...

// 22. Math.atan2() - Returns the arctangent of the quotient of its arguments
console.log(Math.atan2(1, 1));             // 0.7853...

// 23. Math.hypot() - Returns the square root of the sum of squares of its arguments (useful for distance)
console.log(Math.hypot(3, 4));             // 5
