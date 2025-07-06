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
<a href="https://wa.me/9214274929" target="_blank" id="whatsappBtn" title="Chat on WhatsApp" rel="noopener noreferrer">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
</a>

<!-- Chatbot Button -->
<button id="chatbotBtn" title="Chat with our Robot 🤖">🤖</button>

<!-- Chatbox (hidden initially) -->
<div id="chatbox" style="display: none;">
    <div id="chatbox-header">
        <span>Sirus Robo</span>
        <button id="closeChatbox">✖️</button>
    </div>

    <div id="chatbox-messages">
        <!-- Initial bot message with proper styling -->
        <div class="chat-message bot-message">
            <span>Hi! How can I help you today?</span>
        </div>
    </div>

    <!-- Input and Send Button container -->
    <div
        style="display: flex; gap: 6px; margin-top: 10px; background-color: #1a1a1a; padding: 8px; border-radius: 10px;">
        <input type="text" id="chatInput" placeholder="Type your message..."
            style="flex: 1; background: #2a2a2a; border: none; color: #fff; padding: 8px 12px; border-radius: 6px;" />

        <button id="sendBtn" title="Send"
            style="background: #00f0ff; border: none; color: #000; padding: 8px 12px; border-radius: 6px; cursor: pointer;">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>
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

        const goTopBtn = document.getElementById("goTopBtn");
        goTopBtn.style.display = "none"; // hide initially

        goTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                goTopBtn.style.display = "block";
            } else {
                goTopBtn.style.display = "none";
            }
        });

        const chatbotBtn = document.getElementById("chatbotBtn");
        const chatbox = document.getElementById("chatbox");
        const closeChatbox = document.getElementById("closeChatbox");
        const chatInput = document.getElementById("chatInput");
        const chatMessages = document.getElementById("chatbox-messages");

        chatbotBtn.addEventListener("click", () => {
            chatbox.style.display = "flex";
        });

        closeChatbox.addEventListener("click", () => {
            chatbox.style.display = "none";
        });

        sendBtn.addEventListener("click", () => {
            const e = new KeyboardEvent("keydown", {
                key: "Enter"
            });
            chatInput.dispatchEvent(e);
        });

        let waitingForCallConfirmation = false;

        chatInput.addEventListener("keydown", (e) => {
            if (e.key === "Enter" && chatInput.value.trim() !== "") {
                const userMessage = chatInput.value.trim();
                appendMessage("You", userMessage);
                chatInput.value = "";

                const lowerMsg = userMessage.toLowerCase();

                if (waitingForCallConfirmation) {
                    if (lowerMsg === "yes" || lowerMsg === "yeah" || lowerMsg === "y" || lowerMsg ===
                        "sure") {
                        appendMessage("Robot", "Making the call for you... 📞");
                        window.location.href = "tel:+919214274929";
                    } else {
                        appendMessage("Robot",
                            "Thanks for chatting! If you need anything else, just ask.");
                    }
                    waitingForCallConfirmation = false;
                    return;
                }

                if (lowerMsg.includes("services")) {
                    setTimeout(() => {
                        appendMessage(
                            "Robot",
                            "Sure! Here are the services we offer:<br>" +
                            "• Web Designing<br>" +
                            "• Graphic Designing<br>" +
                            "• Web Development<br>" +
                            "• SEO Optimization<br>" +
                            "• Digital Marketing<br>" +
                            "• Blockchain Development<br>" +
                            "• UI/UX Design<br>" +
                            "• E-Commerce Development<br>" +
                            "• Mobile App Development<br>" +
                            "• And many more!"
                        );
                    }, 600);
                } else if (lowerMsg.includes("training")) {
                    setTimeout(() => {
                        appendMessage(
                            "Robot",
                            "Here are the training programs we offer:<br>" +
                            "• Wid Blocks<br>" +
                            "• IOT<br>" +
                            "• AI<br>" +
                            "• Arduino<br>" +
                            "• Cyber Security<br>" +
                            "• Raspberry Pi<br>" +
                            "• Personality Development"
                        );
                    }, 600);
                } else if (lowerMsg.includes("admission") || lowerMsg.includes("join")) {
                    setTimeout(() => {
                        appendMessage(
                            "Robot",
                            "Interested in joining? You can:<br>" +
                            "• Chat with us on WhatsApp: <a href='https://wa.me/919214274929' target='_blank'>Click here</a><br>" +
                            "• Call us at: +91-9214274929<br>" +
                            "• Email us at: <a href='mailto:info@sirustech.org'>info@sirustech.org</a><br><br>" +
                            "Do you want me to make a call?"
                        );
                        waitingForCallConfirmation = true;
                    }, 600);
                } else if (lowerMsg.includes("sirustech")) {
                    setTimeout(() => {
                        appendMessage(
                            "Robot",
                            "SirusTech is a cutting-edge technology company specializing in innovative IT solutions, " +
                            "including software development, digital marketing, and IT training. We are committed to delivering " +
                            "quality services that empower businesses to grow and adapt in the digital age."
                        );
                    }, 600);
                } else {
                    setTimeout(() => {
                        appendMessage(
                            "Robot",
                            "👋 Hello there! I’m <strong>Sirus Robo</strong>, your friendly virtual assistant 🤖.<br>" +
                            "Ask me anything about our services, training programs, or how to get in touch. I'm here to help you 24/7!"
                        );
                    }, 600);
                }
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
</script>

</body>


</html>
