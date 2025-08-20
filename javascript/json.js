// === JavaScript JSON Overview ===

// JSON (JavaScript Object Notation) is a lightweight format for storing and transporting data.
// It's often used for data exchange between a server and a client.
// JSON data format: key-value pairs, strings, numbers, arrays, and booleans.

// === JSON Syntax Examples ===
const jsonString = `
{
  "name": "Alice",
  "age": 25,
  "isStudent": false,
  "hobbies": ["reading", "coding", "sports"],
  "address": {
    "city": "New York",
    "zip": "10001"
  }
}
`;

console.log(jsonString);

// === JSON Parsing and Stringifying ===

// 1. JSON.parse() - Converts a JSON string to a JavaScript object.
const jsonObject = JSON.parse(jsonString);
console.log(jsonObject); // { name: 'Alice', age: 25, isStudent: false, ... }

// 2. JSON.stringify() - Converts a JavaScript object to a JSON string.
const jsonBackToString = JSON.stringify(jsonObject);
console.log(jsonBackToString);
// Output (minified): '{"name":"Alice","age":25,"isStudent":false,...}'

// 3. Pretty-Print JSON with JSON.stringify() - Adds indentation for readability
const prettyJson = JSON.stringify(jsonObject, null, 2);
console.log(prettyJson);
/* Output:
{
  "name": "Alice",
  "age": 25,
  "isStudent": false,
  "hobbies": [
    "reading",
    "coding",
    "sports"
  ],
  "address": {
    "city": "New York",
    "zip": "10001"
  }
}
*/

// === JSON Data Types and Structure ===

// JSON supports the following data types:
// - String: Written in double quotes, e.g., "name": "Alice"
// - Number: Written without quotes, e.g., "age": 25
// - Boolean: `true` or `false`, e.g., "isStudent": false
// - Array: Ordered list, e.g., "hobbies": ["reading", "coding"]
// - Object: Key-value pairs, e.g., "address": { "city": "New York", "zip": "10001" }
// - Null: Represents an empty value, e.g., "middleName": null

// === Accessing JSON Data ===
console.log(jsonObject.name);         // Alice
console.log(jsonObject.hobbies[1]);   // coding
console.log(jsonObject.address.city); // New York

// === Modifying JSON Data ===
jsonObject.age = 26;                  // Update age
jsonObject.hobbies.push("music");     // Add a hobby
console.log(jsonObject);

// === Converting JavaScript Objects to JSON ===
const user = {
  id: 1,
  username: "jsmith",
  roles: ["admin", "user"],
  preferences: {
    theme: "dark",
    notifications: true
  }
};

const userJsonString = JSON.stringify(user);
console.log(userJsonString); // Output: {"id":1,"username":"jsmith",...}

// === JSON.stringify() with Replacer Function ===
// Specify properties to include or transform during stringification
const userJsonFiltered = JSON.stringify(user, (key, value) => {
  if (key === "preferences") return undefined; // Exclude "preferences"
  return value;
});
console.log(userJsonFiltered); // {"id":1,"username":"jsmith","roles":["admin","user"]}

// === JSON.stringify() with Space Argument ===
// The space argument in JSON.stringify() can help with formatting.
console.log(JSON.stringify(user, null, 4)); // Adds indentation for readability

// === Error Handling ===
try {
  const invalidJson = "{name: 'Alice'}";  // Invalid JSON (missing double quotes)
  JSON.parse(invalidJson);                // This will throw an error
} catch (error) {
  console.error("JSON parsing error:", error.message); // Handle the error
}

// === Examples of Using JSON in APIs ===

// 1. Fetching JSON Data from an API
// Uncomment below to run in a browser environment
// fetch("https://api.example.com/data")
//   .then(response => response.json())      // Parses JSON from response
//   .then(data => console.log(data))        // Uses the JSON data
//   .catch(error => console.error(error));

// 2. Posting JSON Data to an API
// Uncomment below to run in a browser environment
// fetch("https://api.example.com/data", {
//   method: "POST",
//   headers: { "Content-Type": "application/json" },
//   body: JSON.stringify(user)              // Converts object to JSON string
// })
//   .then(response => response.json())
//   .then(data => console.log(data))
//   .catch(error => console.error(error));

// === JSON vs JavaScript Objects ===
// JSON is a string representation, not a JavaScript object itself.
// JSON keys and string values must be enclosed in double quotes (" ") and cannot contain functions.

// Example of JavaScript Object (valid as JavaScript, but not as JSON):
const jsObject = {
  name: "Alice",
  greet: function() {
    return `Hello, ${this.name}`;
  }
};
console.log(jsObject.greet());       // "Hello, Alice"



myObj = { "name":"Jane", "age":18, "city":"Chicago" };
myJSON = JSON.stringify(myObj);                 // storing data
localStorage.setItem("testJSON", myJSON);   
text = localStorage.getItem("testJSON");        // retrieving data 
obj = JSON.parse(text);
document.write(obj.name);
