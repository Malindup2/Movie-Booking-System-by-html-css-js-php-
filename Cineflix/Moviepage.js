
//Navigate user to Movie Page

document.addEventListener("DOMContentLoaded", function() {
    
    const sliderImages = document.querySelectorAll(".slider img");

    
    function openBookingPage() {
    
        window.location.href = "Movie_page.php";
    }

    sliderImages.forEach(function(image) {
        image.addEventListener("click", openBookingPage);
    });

});

//Navigate user to Booking

document.addEventListener("DOMContentLoaded", function() {
    var boxes = document.querySelectorAll('.box');

    boxes.forEach(function(box) {
        box.addEventListener('click', function() {
            window.location.href = 'Booking.php';
        });
    });
});
