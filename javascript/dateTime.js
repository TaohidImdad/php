
// Mon Nov 11 2024 10:52:41 GMT+0600 (Bangladesh Standard Time)
//  var d = new Date();
// // 1731300761659 miliseconds passed since 1970
// Number(d) 
// Date("2017-06-23");                 // date declaration
// Date("2017");                       // is set to Jan 01
// Date("2017-06-23T12:00:00-09:45");  // date - time YYYY-MM-DDTHH:MM:SSZ
// Date("June 23 2017");               // long date format
// Date("Jun 23 2017 07:45:00 GMT+0100 (Tokyo Time)"); // time zone




// var d = new Date();
// a = d.getDay();     // getting the weekday

// getDate();          // day as a number (1-31)
// getDay();           // weekday as a number (0-6)
// getFullYear();      // four digit year (yyyy)
// getHours();         // hour (0-23)
// getMilliseconds();  // milliseconds (0-999)
// getMinutes();       // minutes (0-59)
// getMonth();         // month (0-11)
// getSeconds();       // seconds (0-59)
// getTime();          // milliseconds since 1970

// var d = new Date();
// d.setDate(d.getDate() + 7); // adds a week to a date

// setDate();          // day as a number (1-31)
// setFullYear();      // year (optionally month and day)
// setHours();         // hour (0-23)
// setMilliseconds();  // milliseconds (0-999)
// setMinutes();       // minutes (0-59)
// setMonth();         // month (0-11)
// setSeconds();       // seconds (0-59)
// setTime();          // milliseconds since 1970)












let currentDate = new Date();
console.log(currentDate); // Example output: "2024-11-11T15:30:00.000Z"

let specificDate = new Date('2024-11-11T10:30:00');
console.log(specificDate); // Example output: "2024-11-11T10:30:00.000Z"

let customDate = new Date(2024, 10, 11, 10, 30, 0); // Month is zero-based (10 = November)
console.log(customDate); // Example output: "2024-11-11T10:30:00.000Z"


let date = new Date();

console.log(date.getFullYear());  // Example output: 2024
console.log(date.getMonth());     // Example output: 10 (November, since months are zero-based)
console.log(date.getDate());      // Example output: 11 (day of the month)
console.log(date.getHours());     // Example output: 15 (24-hour format)
console.log(date.getMinutes());   // Example output: 30
console.log(date.getSeconds());   // Example output: 0
console.log(date.getMilliseconds()); // Example output: 0


let date = new Date();
date.setFullYear(2025);
date.setMonth(5);         // Sets month to June
date.setDate(15);         // Sets day to 15
date.setHours(10);        // Sets hours to 10
date.setMinutes(45);      // Sets minutes to 45

console.log(date); // Example output: "2025-06-15T10:45:00.000Z"



let date = new Date();
console.log(date.toString());          // Example output: "Mon Nov 11 2024 15:30:00 GMT+0000 (UTC)"
console.log(date.toISOString());       // Example output: "2024-11-11T15:30:00.000Z"
console.log(date.toLocaleDateString()); // Example output: "11/11/2024" (format varies by locale)
console.log(date.toLocaleTimeString()); // Example output: "15:30:00" (format varies by locale)
console.log(date.toLocaleString());    // Example output: "11/11/2024, 15:30:00" (format varies by locale)

let date = new Date();
date.setDate(date.getDate() + 5); // Adds 5 days to the current date
console.log(date); // Example output: "2024-11-16T15:30:00.000Z"

let newDate = new Date(date);
newDate.setMonth(newDate.getMonth() + 1);

let newDate = new Date(date);
newDate.setMonth(newDate.getMonth() -1);

let newDate = new Date(date);
newDate.setHours(newDate.getHours() + hours);

let date = new Date('2024-11-11T15:30:00');
// Add 1 day, 2 hours, 30 minutes, and 45 seconds in one line:
date = new Date(date.getTime() + (1 * 24 * 60 * 60 * 1000) + (2 * 60 * 60 * 1000) + (30 * 60 * 1000) + (45 * 1000));


let timestamp = 1730872200000;
let date = new Date(timestamp);
console.log(date); // Example output: "2024-11-11T15:30:00.000Z"
