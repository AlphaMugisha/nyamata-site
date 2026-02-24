<footer id="visit" class="footer-contact">
        <div class="container contact-grid">
            <div class="contact-form">
                <h3 style="margin-bottom: 20px; color: var(--gold);">CONTACT</h3>
                <form action="contact.php" method="POST" id="churchContact">
                    <div style="display: flex; gap: 10px;">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <textarea name="message" rows="5" placeholder="Your Message..." required style="margin-top:15px"></textarea>
                    <button type="submit" class="btn btn-gold" style="margin-top:15px">Send Message</button>
                </form>
            </div>
            <div class="info-box">
                <h3 style="margin-bottom: 20px;">VISIT US</h3>
                <p>📍 Nyamata, Rwanda</p>
                <p>📞 +250 788 000 000</p>
                <p>✉️ info@nyamatasda.org</p>
                <a href="https://maps.google.com/?q=Nyamata+SDA+Church+Rwanda" target="_blank" class="btn btn-blue-outline" style="margin-top: 15px; border-color: white; color: white; display: inline-block;">Get Directions</a>
                <div style="margin-top: 20px; display: flex; gap: 15px;">
                    <span style="cursor: pointer;">FB</span> <span style="cursor: pointer;">IG</span> <span style="cursor: pointer;">YT</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>