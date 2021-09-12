//CAROUSEL SCRIPT
var myCarousel = document.querySelector("#myCarousel");
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 3000,
  pause: "hover",
});
//LIGHTBOX SCRIPT
lightbox.option({
  resizeDuration: 200,
  wrapAround: true,
});

//YEAR SCRIPT
$("#year").text(new Date().getFullYear());

// NAVIGATION SCRIPT
const currentLocation = location.href;
const linkItem = document.querySelectorAll(".nav-link");
const linkLength = linkItem.length;

for (let i = 0; i < linkLength; i++) {
  if (linkItem[i].href === currentLocation) {
    linkItem[i].classList.add("activee");
  }
}

//Contact Us Button in All Except Contact Us Page Script

let fileName = location.href;
const footerBtn = document.querySelector(".footerbtn");
fileName = fileName.substr(fileName.length - 7);
if (fileName === "contact") {
  footerBtn.classList.add("hidden");
}

// SLICK SCRIPT
$(".slider").slick({
  infinite: true,
  slideToShow: 1,
  slideToScroll: 1,
});
// VENOBOX SCRIPT
$(document).ready(function () {
  $(".venobox").venobox();
});

$(".venobox_custom").venobox({
  framewidth: "400px", // default: ''
  frameheight: "300px", // default: ''
  border: "10px", // default: '0'
  bgcolor: "#5dff5e", // default: '#fff'
  titleattr: "data-title", // default: 'title'
  numeratio: true, // default: false
  infinigall: true, // default: false
  share: ["facebook", "twitter", "download"], // default: [],
  overlayColor: "rgba(255,255,255,0.9)",
});
