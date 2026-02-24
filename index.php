<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyamata SDA Church | Welcome Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="no-scroll">

    <div id="preloader" class="preloader">
        <div class="preloader-content">
            <div class="logo-float-wrapper">
                <div class="preloader-logo">⛪</div>
            </div>
            <div class="preloader-text">Nyamata SDA Church</div>
        </div>
    </div>

    <nav class="navbar">
        <div class="container nav-wrapper">
            <a href="#home" class="logo">⛪ Nyamata SDA Church</a>
            <ul class="nav-links">
                <li><a href="#ministries">Ministries</a></li>
                <li><a href="#sermons">Sermons</a></li>
                <li><a href="#visit">Events</a></li>
            </ul>
            <div class="nav-btns">
                <a href="#visit" class="btn btn-gold">Plan A Visit</a>
                <a href="#sermons" class="btn btn-blue-outline">Watch Sermons</a>
            </div>
        </div>
    </nav>

    <header id="home" class="hero">
        <video autoplay loop muted playsinline class="hero-video" id="heroVideo">
            <source src="assets/hero-worship.mp4" type="video/mp4">
            <img src="https://images.unsplash.com/photo-1510590337019-5ef8d3d32116?auto=format&fit=crop&q=80&w=1500" alt="Worship Background">
        </video>
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <h1 class="hero-anim-text">WELCOME HOME</h1>
            <p class="hero-anim-text">Join us this Sabbath</p>
            <div class="hero-actions">
                <a href="#visit" class="btn btn-gold hero-anim-btn">Plan Your Visit</a>
                <a href="#sermons" class="btn btn-blue-glass hero-anim-btn">Watch Sermons</a>
            </div>
        </div>
    </header>

    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title">ABOUT NYAMATA SDA CHURCH</h2>
            <p class="about-subtitle">We exist to love God, love people, and prepare for the soon return of Jesus Christ.</p>
            <div class="grid-3">
                <div class="info-card clickable-card" onclick="window.location.href='#about'">
                    <h3>Our Mission</h3>
                    <p>To spread the everlasting gospel and prepare a people for the second coming.</p>
                    <span style="color: var(--gold); font-weight:bold; text-decoration:none;" class="btn-link">Learn More</span>
                </div>
                <div class="info-card clickable-card" onclick="window.location.href='#about'">
                    <h3>Our Beliefs</h3>
                    <p>Rooted in the 28 Fundamental Beliefs of the Seventh-day Adventist Church.</p>
                    <span style="color: var(--gold); font-weight:bold; text-decoration:none;" class="btn-link">Learn More</span>
                </div>
                <div class="info-card clickable-card" onclick="window.location.href='#about'">
                    <h3>Who We Are</h3>
                    <p>A global community of believers waiting for the blessed hope of Jesus.</p>
                    <span class="btn btn-blue btn-full" style="margin-top:15px">Learn More</span>
                </div>
            </div>
        </div>
    </section>

    <section id="sermons" class="service-times">
        <div class="container">
            <h2 class="section-title" style="color: white; text-align: center; margin-bottom: 40px;">SERVICE TIMES & SERMONS</h2>
            <div class="grid-3">
                <div class="service-card clickable-card" onclick="window.location.href='#sermons'">
                    <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?auto=format&fit=crop&q=80&w=400" alt="Bible">
                    <div class="service-info">
                        <h4>Sabbath School</h4>
                        <p>8:30 AM</p>
                        <span class="btn btn-blue-glass" style="margin-top:10px">Watch Now</span>
                    </div>
                </div>
                <div class="service-card clickable-card" onclick="window.location.href='#sermons'">
                    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&q=80&w=400" alt="Worship">
                    <div class="service-info">
                        <h4>Divine Worship</h4>
                        <p>Saturday 11:00 AM</p>
                        <span class="btn btn-gold" style="margin-top:10px">Watch Now</span>
                    </div>
                </div>
                <div class="service-card clickable-card" onclick="window.location.href='#sermons'">
                    <img src="https://images.unsplash.com/photo-1515162305285-0293e4767cc2?auto=format&fit=crop&q=80&w=400" alt="Prayer">
                    <div class="service-info">
                        <h4>Prayer Meeting</h4>
                        <p>Wednesday 6:00 PM</p>
                        <span class="btn btn-blue-glass" style="margin-top:10px">Watch Now</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ministries" class="ministries">
        <div class="container">
            <h2 class="section-title" style="text-align: center; margin-bottom: 40px;">OUR MINISTRIES</h2>
            <div class="grid-4">
                <div class="m-card clickable-card" onclick="window.location.href='#ministries'">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1471286174890-9c112ffca5b4?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Children Ministry</div>
                </div>
                <div class="m-card clickable-card" onclick="window.location.href='#ministries'">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Youth Ministry</div>
                </div>
                <div class="m-card clickable-card" onclick="window.location.href='#ministries'">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Women Ministry</div>
                </div>
                <div class="m-card clickable-card" onclick="window.location.href='#ministries'">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Men Ministry</div>
                </div>
            </div>
        </div>
    </section>

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