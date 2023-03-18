const body = document.body;

body.append("Hello word", "Bye");
// body.appendChild();

const div = document.createElement("div");
body.append(div);
div.append("Hello world");

// Text content prints all the content of the div
div.textContent = " new hello world";

//
