let floatOffset = 0;

function updateParallax() {
    document.querySelectorAll(".parallax").forEach((element) => {
        const speed = parseFloat(element.getAttribute("data-speed"));

        const x = (currentX - 0.5) * speed * 40;
        const y = (currentY - 0.5) * speed * 40;

        // Floating effect (sine wave)
        const floatY = Math.sin(performance.now() / 500 + speed) * 5;

        element.style.transform = `translate(${x}px, ${y + floatY}px)`;
    });

    requestAnimationFrame(updateParallax);
}

let currentX = 0.5;
let currentY = 0.5;

document.addEventListener("mousemove", (event) => {
    currentX = event.clientX / window.innerWidth;
    currentY = event.clientY / window.innerHeight;
});

updateParallax();

// Testimonial Carousel Functionality
const testimonialWrapper = document.querySelector(".testimonial-wrapper");
const testimonialCards = document.querySelectorAll(".testimonial-card");
const prevButton = document.getElementById("prevTestimonial");
const nextButton = document.getElementById("nextTestimonial");

let currentIndex = 0; // Tracks the currently displayed testimonial
const totalTestimonials = testimonialCards.length; // Total number of testimonials

// Function to update the carousel's position
function updateCarousel() {
    // Moves the testimonial-wrapper left by a percentage equal to the current index
    // multiplied by the width of one card (100%)
    testimonialWrapper.style.transform = `translateX(${-currentIndex * 100}%)`;
}

// Function to go to the next testimonial
function nextTestimonial() {
    // Increments currentIndex, wraps around to 0 if it exceeds totalTestimonials
    currentIndex = (currentIndex + 1) % totalTestimonials;
    updateCarousel(); // Update carousel position
}

// Function to go to the previous testimonial
function prevTestimonial() {
    // Decrements currentIndex, wraps around to the last testimonial if it goes below 0
    currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials;
    updateCarousel(); // Update carousel position
}

// Initialize the carousel to show the first testimonial when the page loads
updateCarousel();

// Add event listeners to the navigation buttons
nextButton.addEventListener("click", nextTestimonial);
prevButton.addEventListener("click", prevTestimonial);

setInterval(nextTestimonial, 7000); // Changes testimonial every 7 seconds (7000 milliseconds)

function toggleMobileNav() {
    const nav = document.getElementById("mobileNav");
    nav.classList.toggle("show");
}

document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("nav-menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
});
