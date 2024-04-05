const con3Carousel = document.querySelector(".con3-carousel");
const arrLeft = document.querySelector(".arrow-left");
const arrRight = document.querySelector(".arrow-right");
const heading = document.querySelector(".caption h4");

const images = [
  "Photo/Contactus/normal-array/gallery/gallery2.jpg",
  "Photo/Contactus/normal-array/gallery/gallery3.jpg",
  "Photo/Contactus/normal-array/gallery/gallery4.jpg",
  "Photo/Contactus/normal-array/gallery/gallery5.jpg",
  "Photo/Contactus/normal-array/gallery/gallery6.jpg",
  "Photo/Contactus/normal-array/gallery/gallery7.jpg",
  "./Photo/Contactus/normal-array/amenities/amenity5.jpg",
  "./Photo/Contactus/normal-array/amenities/amenity6.jpg",
  "./Photo/MainCarousel/bg1.jpg",
  "./Photo/MainCarousel/bg2.jpg",
  "./Photo/MainCarousel/bg3.jpg",
  "./Photo/MainCarousel/bg4.jpg",
  "./Photo/MainCarousel/bg5.jpg",
  "./Photo/MainCarousel/bg6.jpg",
];

let id = 0;

function slide(id) {
  //set backgnd img
  con3Carousel.style.backgroundImage = `url(./${images[id]})`;
  //add imagefade animation
  con3Carousel.classList.add("image-fade");
  //remove animation when its done so it can be used again {
  setTimeout(() => {
    con3Carousel.classList.remove("image-fade");
  }, 300);
  //change heading

  heading.innerText = headings[id];
  //change description
  description.innerText = descriptions[id];
}

arrLeft.addEventListener("click", () => {
  id--;
  //check if id is msaller thanthe number of avvailable slides
  if (id < 0) {
    id = images.length - 1;
  }
  //run the slide function
  slide(id);
});

// add click to right arrow
arrRight.addEventListener("click", () => {
  id++;
  //checkif id is greater than number of  available slides
  if (id > images.length - 1) {
    id = 0;
  }
  //run slide fn
  slide(id);
});

// . Making images larger onclick

//. loop
(loop = () => {
  con3Carousel.style.backgroundImage = `url(./${images[id]})`;
  if (++id < images.length) {
    setTimeout(loop, 3000);
  }
})();
