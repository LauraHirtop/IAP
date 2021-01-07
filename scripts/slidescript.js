
var Index1 = 1;
showSlides1(Index1);

function plusSlides1(n) {
showSlides1(Index1 += n);
}

function currentSlide1(n) {
showSlides1(Index1 = n);
}

function showSlides1(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
        
    if (n > slides.length) {Index1 = 1}    
    if (n < 1) {Index1 = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }      
    slides[Index1-1].style.display = "block";  
}
  



var Index2 = 0;
showSlides2();

function showSlides2() {
    var i;
    var slides = document.getElementsByClassName("testimonial");
    var dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    Index2++;

    if (Index2 > slides.length) {Index2 = 1}   

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    slides[Index2-1].style.display = "block";  
    dots[Index2-1].className += " active";
    setTimeout(showSlides2, 2000); // Change image every 2 seconds
}