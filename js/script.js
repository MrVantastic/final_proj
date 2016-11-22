

//global variables
var counter = 0;


function pic_rotate(counterchange) {
    "use strict";
    //variables
    var apple_images = ["apple_fest1.jpg", "apple_fest2.jpg", "apple_fest3.jpg", "apple_fest4.jpg"],
        apple_pic = document.getElementById('apple_pic'),
        length = apple_images.length;
    //procedural code
    counter = counter + counterchange;
    if (counter >= length) {
        counter = 0;
    }
    if (counter < 0) {
        counter = length - 1;
    }
    apple_pic.src = "images/" + apple_images[counter];
}