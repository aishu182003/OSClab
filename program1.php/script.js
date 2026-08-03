// Array of images
const images = [
    "img1.jpeg",
    "img2.jpeg",
    "img3.jpg"
];

// Starting index
let index = 0;

// Select image element
const slide = document.getElementById("slide");

// Display first image
slide.src = images[index];

// Function to change image
function changeImage() {

    index++;

    if(index >= images.length){
        index = 0;
    }

    slide.src = images[index];

}


setInterval(changeImage, 2000);