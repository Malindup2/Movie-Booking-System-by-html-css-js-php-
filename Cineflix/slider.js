document.addEventListener("DOMContentLoaded", function() {
    // Get all the slides and navigation links
    const slides = document.querySelectorAll(".slider img");
    const navLinks = document.querySelectorAll(".slider-nav a");

    let currentIndex = 0;
    const intervalTime = 2000; // Time between slide transitions (in milliseconds)
    let slideInterval;

    // Function to show a specific slide
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => slide.style.display = "none");
        // Show the slide at the given index
        slides[index].style.display = "block";
        // Update currentIndex
        currentIndex = index;
    }

    // Function to show the next slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    // Function to start the automatic sliding
    function startSlider() {
        slideInterval = setInterval(nextSlide, intervalTime);
    }

    // Function to stop the automatic sliding
    function stopSlider() {
        clearInterval(slideInterval);
    }

    // Event listeners for manual navigation
    navLinks.forEach((link, index) => {
        link.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default link behavior
            stopSlider(); // Stop automatic sliding
            showSlide(index); // Show the slide corresponding to the clicked link
        });
    });

    // Start the slider
    startSlider();
});


