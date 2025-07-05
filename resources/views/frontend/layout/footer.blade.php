<footer class="bg-dark text-light py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <h1 class="mb-2 mb-md-0 text-white fs-6 order-2 order-md-1">&copy; 2025, Made by Muba Khan</h1>

        <div class="box-icons d-flex justify-content-center order-1 order-md-2 mb-3 mb-md-0">
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-youtube"></i></a>
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</footer>

<!-- Toggle Button -->
<button id="toggleButtons" title="Toggle Buttons">⚙️</button>

<!-- Go to Top Button -->
<button id="goTopBtn" title="Go to top">⬆️</button>

<!-- WhatsApp Button -->
<a href="https://wa.me/1234567890" target="_blank" id="whatsappBtn" title="Chat on WhatsApp" rel="noopener noreferrer">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
</a>

<!-- Chatbot Button -->
<button id="chatbotBtn" title="Chat with our Robot 🤖">🤖</button>

<!-- Chatbox (hidden initially) -->
<div id="chatbox" style="display: none;">
    <div id="chatbox-header">
        <span>Robot Assistant</span>
        <button id="closeChatbox">✖️</button>
    </div>
    <div id="chatbox-messages">
        <!-- Initial bot message with proper styling -->
        <div class="chat-message bot-message">
            <span>Hi! How can I help you today?</span>
        </div>
    </div>
    <input type="text" id="chatInput" placeholder="Type your message..." />
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('../assets/scripts/logic.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const toggleBtn = document.getElementById("toggleButtons");
        const body = document.body;

        toggleBtn.addEventListener("click", () => {
            body.classList.toggle("show-buttons");
        });
    });

    // When the button is clicked, scroll to the top smoothly
    goTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
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

    // Get the button
    const goTopBtn = document.getElementById("goTopBtn");

    // When the user scrolls down 100px from the top, show the button
    window.onscroll = function() {
        if (
            document.body.scrollTop > 100 ||
            document.documentElement.scrollTop > 100
        ) {
            goTopBtn.style.display = "block";
        } else {
            goTopBtn.style.display = "none";
        }
    };
</script>

</body>


</html>
