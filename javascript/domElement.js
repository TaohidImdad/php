// output 

// console.log(a);             // write to the browser console
// document.write(a);          // write to the HTML
// alert(a);                   // output in an alert box
// confirm("Really?");         // yes/no dialog, returns true/false depending on user click
// prompt("Your age?","0");    // input dialog. Second argument is the initial value


// Selecting Elements: getElementById, getElementsByClassName, querySelector, querySelectorAll.
// Creating Elements: createElement, createTextNode.
// Manipulating Elements: textContent, innerHTML, classList, style.
// Event Handling: addEventListener, removeEventListener.
// Form Elements: value, reset, submit.
// Traversal: parentNode, children, firstElementChild, nextElementSibling.
// Data Attributes: dataset.
// Removing Elements: remove, removeChild.




// // === JavaScript DOM Elements Overview ===

// // === Selecting Elements ===

// // 1. document.getElementById() - Selects an element by its ID
// const header = document.getElementById("header");
// console.log(header);

// // 2. document.getElementsByClassName() - Selects all elements with a specific class name
// const buttons = document.getElementsByClassName("btn");
// console.log(buttons);

// // 3. document.getElementsByTagName() - Selects all elements with a specific tag name
// const paragraphs = document.getElementsByTagName("p");
// console.log(paragraphs);

// // 4. document.querySelector() - Selects the first element that matches a CSS selector
// const firstButton = document.querySelector(".btn");
// console.log(firstButton);

// // 5. document.querySelectorAll() - Selects all elements that match a CSS selector
// const allButtons = document.querySelectorAll(".btn");
// console.log(allButtons);

// // === Creating Elements ===

// // 6. document.createElement() - Creates a new HTML element
// const newDiv = document.createElement("div");
// newDiv.textContent = "Hello, World!";
// document.body.appendChild(newDiv);  // Adds the new div to the document body

// // === Adding Text and HTML ===

// // 7. element.textContent - Sets or gets the text content of an element
// newDiv.textContent = "New text content!";

// // 8. element.innerHTML - Sets or gets the HTML content inside an element
// newDiv.innerHTML = "<strong>New HTML content!</strong>";

// // 9. element.innerText - Gets the visible text (only text shown, considering styles)
// console.log(newDiv.innerText);

// // === Manipulating Classes and Styles ===

// // 10. element.classList.add() - Adds a class to an element
// newDiv.classList.add("new-class");

// // 11. element.classList.remove() - Removes a class from an element
// newDiv.classList.remove("new-class");

// // 12. element.classList.toggle() - Toggles a class on/off
// newDiv.classList.toggle("toggle-class");

// // 13. element.classList.contains() - Checks if an element has a specific class
// console.log(newDiv.classList.contains("toggle-class"));  // true or false

// // 14. element.style - Sets CSS properties directly
// newDiv.style.backgroundColor = "lightblue";
// newDiv.style.fontSize = "20px";

// // === Adding and Removing Attributes ===

// // 15. element.setAttribute() - Sets an attribute on an element
// newDiv.setAttribute("id", "unique-id");

// // 16. element.getAttribute() - Gets the value of an attribute
// console.log(newDiv.getAttribute("id"));  // "unique-id"

// // 17. element.removeAttribute() - Removes an attribute from an element
// newDiv.removeAttribute("id");

// === Traversing DOM Elements ===

//alert();

const container = document.querySelector("#container"); 

// // 18. element.parentNode - Gets the parent node of an element
//console.log(container.parentNode);

// // 19. element.children - Gets all child elements (excluding text nodes)
 //console.log(container.children);

// // 20. element.firstElementChild - Gets the first child element
// console.log(container.firstElementChild);

// // 21. element.lastElementChild - Gets the last child element
// console.log(container.lastElementChild);

// // 22. element.previousElementSibling - Gets the previous sibling element
// console.log(container.previousElementSibling);

// // 23. element.nextElementSibling - Gets the next sibling element
// console.log(container.nextElementSibling);

// // === Adding and Removing Child Elements ===

// // 24. element.appendChild() - Adds an element as the last child
const newPara = document.createElement("p");
newPara.textContent = "Appended paragraph!";
container.appendChild(newPara);

// // 25. element.insertBefore() - Inserts an element before another specified child
const firstChild = container.firstElementChild;
container.insertBefore(newPara, firstChild);

// // 26. element.removeChild() - Removes a specified child element
 container.removeChild(firstChild);

// // === Event Handling ===

// // 27. element.addEventListener() - Adds an event listener to an element
// newDiv.addEventListener("click", function() {
//   console.log("Div clicked!");
// });

// // 28. element.removeEventListener() - Removes an event listener
// function clickHandler() {
//   console.log("Div clicked!");
// }
// newDiv.addEventListener("click", clickHandler);
// newDiv.removeEventListener("click", clickHandler); // Removes the click event

// // === Common Events ===
// // - "click" - User clicks the element
// // - "mouseover" - User hovers over the element
// // - "mouseout" - User moves the cursor out of the element
// // - "input" - User changes the value of an input field

// // === Working with Forms and Inputs ===

// const form = document.querySelector("form");
// const inputField = document.querySelector("input");

// // 29. input.value - Gets or sets the value of an input field
// console.log(inputField.value);  // Gets current value
// inputField.value = "New Value"; // Sets new value

// // 30. form.reset() - Resets a form's input fields to their default values
// form.reset();

// // 31. form.submit() - Submits the form programmatically
// form.submit();

// // === Advanced Manipulations ===

// // 32. element.cloneNode() - Clones an element (deep cloning with true argument)
// const clone = newDiv.cloneNode(true); // Deep clone (includes children)
// document.body.appendChild(clone);

// // 33. document.createTextNode() - Creates a text node (useful for plain text)
// const textNode = document.createTextNode("Some plain text");
// container.appendChild(textNode);

// // === Querying Element Properties ===

// // 34. element.id - Gets or sets the element's ID
// console.log(container.id); // "container"

// // 35. element.tagName - Gets the tag name of an element (e.g., "DIV")
// console.log(container.tagName); // "DIV"

// // === Manipulating Data Attributes ===
// // HTML attributes that start with "data-" can be used to store extra data.

// // 36. element.dataset - Accesses data attributes
// container.dataset.customValue = "customData";
// console.log(container.dataset.customValue); // "customData"

// // === Removing Elements from the DOM ===

// // 37. element.remove() - Removes an element from the DOM
// newDiv.remove();

// // === Example of Adding Content Dynamically ===
// function createCard(title, content) {
//   const card = document.createElement("div");
//   card.classList.add("card");
  
//   const cardTitle = document.createElement("h2");
//   cardTitle.textContent = title;
//   card.appendChild(cardTitle);

//   const cardContent = document.createElement("p");
//   cardContent.textContent = content;
//   card.appendChild(cardContent);

//   document.body.appendChild(card);
// }

// createCard("Dynamic Card", "This card was created dynamically with JavaScript!");
