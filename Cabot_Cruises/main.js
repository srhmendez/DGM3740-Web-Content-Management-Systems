

//This function toggles the hamburger menu closed and expanded
function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle('open')
    document.getElementById("primaryNav").classList.toggle('open');
}

//assigning the variable to the DOM hamburger button element
var x = document.getElementById('hamburgerBtn');

//On click toggle the menu open and closed; calling the function
x.onclick = toggleMenu;