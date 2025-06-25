<footer>
    <h1>&copy; 2025, Made by Muba Khan</h1>

    <div class="box-icons">
        <a href=""><i class="bx bx1-youtube"></i></a>
        <a href=""><i class="bx bx1-youtube"></i></a>
        <a href=""><i class="bx bx1-youtube"></i></a>
        <a href=""><i class="bx bx1-youtube"></i></a>
    </div>
</footer>


</div>
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

</body>
<script src="{{ asset('../assets/scripts/logic.js') }}"></script>


</html>
