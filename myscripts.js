//PHP
// Get the modal
var phpmodal = document.getElementById("php");

// Get the button that opens the modal
var phpbtn = document.getElementById("phpbtn");

// Get the <span> element that closes the modal
var phpspan = document.getElementsByClassName("php")[0];

//PHP
// When the user clicks the button, open the modal
phpbtn.onclick = function() {
    phpmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
phpspan.onclick = function() {
    phpmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == phpmodal) {
        phpmodal.style.display = "none";
    }
}

//Javascript
// Get the modal
var jvmodal = document.getElementById("javascript");

// Get the button that opens the modal
var jvbtn = document.getElementById("javascriptbtn");

// Get the <span> element that closes the modal
var jvspan = document.getElementsByClassName("javascript")[0];

//javascript
// When the user clicks the button, open the modal
jvbtn.onclick = function() {
    jvmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
jvspan.onclick = function() {
    jvmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == jvmodal) {
        jvmodal.style.display = "none";
    }
}