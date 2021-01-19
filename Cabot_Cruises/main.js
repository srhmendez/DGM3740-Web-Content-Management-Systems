

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
    $('.hero-large').slick({
      autoplay: true;
    });
  });

//display one image at a time
$('.single-item').slick();

//Making the Carousel Responsive
$('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });