<style>
        .footer-col h3 { color: var(--gold); margin-bottom: 20px; font-size: 1.2rem; }
        .footer-links { list-style: none; padding: 0; }
        .footer-links li { margin-bottom: 10px; }
        .footer-links a { color: rgba(255,255,255,0.8); text-decoration: none; transition: color 0.3s; font-size: 0.95rem; }
        .footer-links a:hover { color: var(--gold); }
        .footer-text { color: rgba(255,255,255,0.8); font-size: 0.95rem; margin-bottom: 10px; }
        .social-icons { display: flex; gap: 15px; margin-top: 20px; }
        .social-icon { width: 35px; height: 35px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: background 0.3s; font-weight: 600; font-size: 0.8rem;}
        .social-icon:hover { background: var(--gold); }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); margin-top: 50px; padding-top: 25px; text-align: center; color: rgba(255,255,255,0.6); font-size: 0.9rem; }
    </style>

    <footer class="footer-contact" style="padding: 70px 0 30px 0; background: linear-gradient(135deg, var(--deep-blue) 0%, #07192b 100%);">
        <div class="container grid-4">
            
            <div class="footer-col reveal-base">
                <h3 style="display: flex; align-items: center; gap: 8px; color: white;">⛪ Nyamata SDA</h3>
                <p class="footer-text" style="margin-top: 15px; line-height: 1.8;">
                    A global community of believers waiting for the blessed hope of Jesus.<br>
                    <em style="color: var(--gold);">"Welcoming all to grow in Christ"</em>
                </p>
            </div>

            <div class="footer-col reveal-base">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ministries.php">Ministries</a></li>
                    <li><a href="sermons.php">Sermons</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="contact.php" style="color: var(--gold); font-weight: 600;">Plan a Visit</a></li>
                </ul>
            </div>

            <div class="footer-col reveal-base">
                <h3>Service Times</h3>
                <p class="footer-text"><strong>Sabbath School</strong><br>Saturday — 9:00 AM</p>
                <p class="footer-text"><strong>Divine Worship</strong><br>Saturday — 11:00 AM</p>
                <p class="footer-text"><strong>Prayer Meeting</strong><br>Wednesday — 6:00 PM</p>
            </div>

            <div class="footer-col reveal-base">
                <h3>Contact Us</h3>
                <p class="footer-text">📍 Nyamata, Rwanda</p>
                <p class="footer-text">📞 +250 788 000 000</p>
                <p class="footer-text">✉️ info@nyamatasda.org</p>
                
                <div class="social-icons">
                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">YT</a>
                    <a href="#" class="social-icon">WA</a>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="footer-bottom reveal-base">
                &copy; <?php echo date('Y'); ?> Nyamata SDA Church. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>