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

// Feedback Form Submission (Client-Side Only)
const feedbackForm = document.querySelector(".feedback-form");

feedbackForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevents the default form submission (which would reload the page)

    // Get values from the form fields
    const name = document.getElementById("feedback-name").value;
    const email = document.getElementById("feedback-email").value;
    const message = document.getElementById("feedback-message").value;

    // --- IMPORTANT: For a real website, you would send this data to a server ---
    // This is client-side only for demonstration.
    // You would typically use fetch() or XMLHttpRequest here to send data to a backend.
    console.log("Feedback Submitted:", { name, email, message });

    alert("Thank you for your feedback, " + name + "! We appreciate it."); // User-friendly alert
    feedbackForm.reset(); // Clears the form fields after submission
});

// Get the button
const goTopBtn = document.getElementById("goTopBtn");

// When the user scrolls down 100px from the top, show the button
window.onscroll = function () {
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        goTopBtn.style.display = "block";
    } else {
        goTopBtn.style.display = "none";
    }
};

document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggleButtons");
    const body = document.body;

    toggleBtn.addEventListener("click", () => {
        body.classList.toggle("show-buttons");
    });
});

// When the button is clicked, scroll to the top smoothly
goTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

document.addEventListener("DOMContentLoaded", () => {
    const chatbotBtn = document.getElementById("chatbotBtn");
    const chatbox = document.getElementById("chatbox");
    const closeChatbox = document.getElementById("closeChatbox");
    const chatInput = document.getElementById("chatInput");
    const chatMessages = document.getElementById("chatbox-messages");

    // Show chatbox
    chatbotBtn.addEventListener("click", () => {
        chatbox.style.display = "flex";
    });

    // Hide chatbox
    closeChatbox.addEventListener("click", () => {
        chatbox.style.display = "none";
    });

    // Handle Enter key to send message
    chatInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter" && chatInput.value.trim() !== "") {
            const userMessage = chatInput.value.trim();
            appendMessage("You", userMessage);
            chatInput.value = "";

            // Optional: bot response
            setTimeout(() => {
                appendMessage(
                    "Robot",
                    "I'm just a simple bot 🤖. How can I assist?"
                );
            }, 600);
        }
    });

    function appendMessage(sender, text) {
        const msg = document.createElement("div");
        msg.classList.add("chat-message");
        msg.classList.add(sender === "You" ? "user-message" : "bot-message");
        msg.innerHTML = `<span>${text}</span>`;
        chatMessages.appendChild(msg);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
});

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
