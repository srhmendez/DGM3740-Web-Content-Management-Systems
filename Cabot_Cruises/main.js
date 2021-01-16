
// This Function toggles between adding and removing a class of open to both the hamburger button element and the primary navigation element in the HTML
function toggleHamburgerMenu(){
    document.getElementById('hamburgerBtn').classList.toggle('open');
    document.getElementById('primaryNavigation').classList.toggle('open');
};

// targeting the Hamburger Button in the HTML

let hamburgerButton = getElementById('hamburgerBtn');

// Assigning a click action to hamburger button

hamburgerButton.onclick = toggleHamburgerMenu();
