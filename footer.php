<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyamata SDA Church</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --gold: #d4af37;
            --deep-blue: #0a2540;
        }

        .footer-col h3 { color: var(--gold); margin-bottom: 20px; font-size: 1.2rem; }
        .footer-links { list-style: none; padding: 0; }
        .footer-links li { margin-bottom: 10px; }
        .footer-links a { color: rgba(255,255,255,0.8); text-decoration: none; transition: color 0.3s; font-size: 0.95rem; }
        .footer-links a:hover { color: var(--gold); }
        .footer-text { color: rgba(255,255,255,0.8); font-size: 0.95rem; margin-bottom: 10px; }
        
        /* Social Icons Container */
        .social-icons { display: flex; gap: 12px; margin-top: 20px; }
        
        /* Social Icon Styling */
        .social-icon { 
            width: 40px; 
            height: 40px; 
            border-radius: 50%; 
            background: rgba(255,255,255,0.1); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            color: white; 
            text-decoration: none; 
            transition: all 0.3s ease; 
            font-size: 1.1rem; /* Adjusted for icon visibility */
        }

        /* Individual Hover Colors */
        .social-icon:hover { background: var(--gold); transform: translateY(-3px); color: #fff; }
        .fa-facebook-f:hover { color: #1877F2; }
        .fa-instagram:hover { color: #E4405F; }
        .fa-youtube:hover { color: #CD201F; }
        .fa-whatsapp:hover { color: #25D366; }

        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); margin-top: 50px; padding-top: 25px; text-align: center; color: rgba(255,255,255,0.6); font-size: 0.9rem; }
        
        /* Basic Grid Layout */
        .grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
    </style>
</head>
<body>

    <footer class="footer-contact" style="padding: 70px 0 30px 0; background: linear-gradient(135deg, var(--deep-blue) 0%, #07192b 100%); font-family: sans-serif; color: white;">
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
                    <li><a href="admin/login.php" style="color: var(--accent-green);"><i class="fas fa-lock"></i> Admin Portal</a></li>
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
                    <a href="" class="social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ububyutsechoir/?hl=en" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon" title="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
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