
// modifire
// i perform case-insensitive matching
// g perform a global match
// m perform multiline matching


// \          Escape character
// \d         find a digit
// \s         find a whitespace character
// \b         find match at beginning or end of a word
// n+         contains at least one n
// n*         contains zero or more occurrences of n
// n?         contains zero or one occurrences of n
// ^          Start of string
// $          End of string
// \uxxxx     find the Unicode character
// .          Any single character
// (a|b)      a or b
// (...)      Group section
// [abc]      In range (a, b or c)
// [0-9]      any of the digits between the brackets
// [^abc]     Not in range
// \s         White space
// a?         Zero or one of a
// a*         Zero or more of a
// a*?        Zero or more, ungreedy
// a+         One or more of a
// a+?        One or more, ungreedy
// a{2}       Exactly 2 of a
// a{2,}      2 or more of a
// a{,5}      Up to 5 of a
// a{2,5}     2 to 5 of a
// a{2,5}?           2 to 5 of a, ungreedy
// [:punct:]         Any punctu­ation symbol
// [:space:]         Any space character
// [:blank:]         Space or tab


// === JavaScript Regular Expressions Examples ===

// 1. Basic Creation
// let regex1 = /abc/;                 // Literal notation
// let regex2 = new RegExp('abc');      // Constructor notation

// // === Common Regex Patterns ===

// // 2. Matching Literal Strings
// let text = "The quick brown fox jumps over the lazy dog";
// console.log(/quick/.test(text));     // true

// // 3. Case-Insensitive Matching
// console.log(/quick/i.test("Quick")); // true

// // 4. Matching Digits and Non-Digits
// console.log(/\d/.test("abc123"));    // true (matches any digit)
// console.log(/\D/.test("abc123"));    // true (matches any non-digit)

// // 5. Matching Whitespace and Non-Whitespace
// console.log(/\s/.test("Hello World")); // true (matches any whitespace character)
// console.log(/\S/.test("Hello World")); // true (matches any non-whitespace character)

// // 6. Matching Word Characters and Non-Word Characters
// console.log(/\w/.test("abc123"));    // true (matches any word character: a-z, A-Z, 0-9, _)
// console.log(/\W/.test("abc123"));    // false (matches any non-word character)

// // 7. Matching at Start (^) and End ($) of a String
// console.log(/^The/.test(text));      // true (string starts with "The")
// console.log(/dog$/.test(text));      // true (string ends with "dog")

// // 8. Matching Repeating Characters
// console.log(/a{3}/.test("caaaandy")); // true (matches exactly 3 'a's in a row)
// console.log(/a{2,4}/.test("caaaandy")); // true (matches between 2 and 4 'a's)
// console.log(/a+/.test("candy"));      // true (matches one or more 'a's)

// // 9. Optional Characters (?)
// console.log(/colou?r/.test("color"));   // true (matches "color" or "colour")
// console.log(/colou?r/.test("colour"));  // true

// // 10. Any Character (.)
// console.log(/c.t/.test("cat"));         // true (matches any character between 'c' and 't')

// // 11. Character Classes and Ranges
// console.log(/[aeiou]/.test("apple"));   // true (matches any vowel)
// console.log(/[a-z]/.test("apple"));     // true (matches any lowercase letter)
// console.log(/[A-Z]/.test("Apple"));     // true (matches any uppercase letter)

// // 12. Negated Character Classes
// console.log(/[^aeiou]/.test("sky"));    // true (matches any non-vowel)

// // === Regex Methods ===

// // 13. Testing a Pattern with .test()
// let pattern = /fox/;
// console.log(pattern.test(text));       // true (checks if "fox" is in the text)

// // 14. Searching a Pattern with .exec()
// let result = /fox/.exec(text);
// console.log(result);                   // ["fox"] (returns the match found)

// // 15. String .match() Method
// console.log(text.match(/quick/));      // ["quick"] (returns first match)
// console.log(text.match(/o/g));         // ["o", "o", "o", "o"] (global match for all 'o's)

// // 16. String .replace() Method
// console.log(text.replace(/dog/, "cat")); // "The quick brown fox jumps over the lazy cat"

// // 17. Global and Case-Insensitive Search
// console.log(text.match(/o/gi));       // ["o", "O", "o", "o", "o"] (case-insensitive global match)

// // 18. Splitting a String
// let fruits = "apple, banana, cherry";
// console.log(fruits.split(/,\s*/));    // ["apple", "banana", "cherry"]

// === Advanced Patterns ===

// 19. Grouping with ()
// Grouped regex allows us to capture parts of the match.
// let date = "11-11-2024";
//  let date = "2024-11-11";
// let datePattern = /((\d{4})-(\d{2})-(\d{2}))|((\d{2})-(\d{2})-(\d{4}))/;

// // let datePattern = /((\d{4})-(\d{2})-(\d{2}))/;
// let dateMatch = date.match(datePattern);
// console.log(dateMatch);               // ["2024-11-11", "2024", "11", "11"]

// // 20. Alternation (|)
// console.log(/cat|dog/.test("I have a dog."));  // true (matches either "cat" or "dog")

// // 21. Positive Lookahead (?=)
// // Match "fox" only if followed by " jumps"
// console.log(/fox(?= jumps)/.test("fox jumps")); // true

// // 22. Negative Lookahead (?!)
// // Match "fox" only if NOT followed by " jumps"
// console.log(/fox(?! jumps)/.test("fox sleeps")); // true

// // === Validation Examples ===

// // 23. Email Validation
// let email = "test@example.com";
// let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
// console.log(emailPattern.test(email)); // true

// // 24. URL Validation
// let url = "https://www.example.com";
// let urlPattern = /^(https?:\/\/)?(www\.)?[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
// console.log(urlPattern.test(url));     // true

// // 25. Phone Number Validation (US format)
// let phone = "(123) 456-7890";
// let phonePattern = /^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
// console.log(phonePattern.test(phone)); // true
