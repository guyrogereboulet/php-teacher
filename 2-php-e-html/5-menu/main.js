const button = document.querySelector(".button");
const red = document.querySelector(".backgroundColorRed");
const green = document.querySelector(".backgroundColorGreen")

button.addEventListener( "click", function(){

    red.style.backgroundColor = "green";
    green.style.backgroundColor = "red";

});