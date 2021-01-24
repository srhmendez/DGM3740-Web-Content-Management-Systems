

//This function toggles the hamburger menu closed and expanded
function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle('open')
    document.getElementById("primaryNav").classList.toggle('open');
}

//assigning the variable to the DOM hamburger button element
var x = document.getElementById('hamburgerBtn');

//On click toggle the menu open and closed; calling the function
x.onclick = toggleMenu;



$(document).ready(function(){
    $('.heroCaro').slick({
        dots:true,
        arrows:false,
        infinite: true,
        speed: 3,
        slidesToShow: 1,
        adaptiveHeight: true,
        cssEase: 'fade-out',
        autoplay:true,
        autoplaySpeed:2500
    });
  });


