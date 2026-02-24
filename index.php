<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyamata SDA Church | Welcome Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --deep-blue: #0b2a4a;
            --mid-blue: #163a5f;
            --gold: #d4a437;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --overlay: rgba(11, 42, 74, 0.75);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; color: #333; overflow-x: hidden; line-height: 1.6; }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* --- NAVBAR --- */
        .navbar {
            background: var(--white);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .nav-wrapper { display: flex; justify-content: space-between; align-items: center; }
        .logo { display: flex; align-items: center; gap: 10px; color: var(--deep-blue); font-weight: 700; font-size: 1.2rem; }
        .nav-links { list-style: none; display: flex; gap: 20px; align-items: center; }
        .nav-links a { text-decoration: none; color: var(--deep-blue); font-size: 0.9rem; font-weight: 500; }
        .nav-btns { display: flex; gap: 10px; }

        /* --- BUTTONS --- */
        .btn { padding: 10px 22px; border-radius: 4px; text-decoration: none; font-weight: 600; font-size: 0.85rem; transition: 0.3s; cursor: pointer; border: none; }
        .btn-gold { background: var(--gold); color: white; }
        .btn-blue-outline { border: 1.5px solid var(--deep-blue); color: var(--deep-blue); }
        .btn-blue-glass { background: rgba(255,255,255,0.15); border: 1px solid white; color: white; backdrop-filter: blur(5px); }
        .btn-full { width: 100%; display: block; text-align: center; }

        /* --- HERO --- */
        .hero {
            height: 85vh;
            background: url('https://images.unsplash.com/photo-1510590337019-5ef8d3d32116?auto=format&fit=crop&q=80&w=1500') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: var(--overlay); }
        .hero-content { position: relative; z-index: 2; }
        .hero h1 { font-size: 4.5rem; letter-spacing: 5px; margin-bottom: 5px; font-weight: 700; }
        .hero p { font-size: 1.5rem; margin-bottom: 30px; opacity: 0.9; }
        .hero-actions { display: flex; gap: 15px; justify-content: center; }

        /* --- ABOUT --- */
        .about-section { padding: 80px 0; text-align: center; background: white; }
        .section-title { font-size: 1.8rem; color: var(--deep-blue); margin-bottom: 10px; letter-spacing: 1px; }
        .about-subtitle { max-width: 700px; margin: 0 auto 50px; color: #666; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .info-card { background: white; padding: 40px 30px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s; }
        .info-card:hover { transform: translateY(-5px); }
        .info-card h3 { margin-bottom: 15px; color: var(--deep-blue); }

        /* --- SERVICE TIMES (BLUE GRADIENT) --- */
        .service-times { background: linear-gradient(135deg, #0b2a4a 0%, #163a5f 100%); padding: 80px 0; color: white; }
        .service-card { height: 220px; border-radius: 10px; position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; text-align: center; }
        .service-card img { position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: 1; opacity: 0.4; }
        .service-info { position: relative; z-index: 2; padding: 20px; }
        .service-info h4 { font-size: 1.4rem; margin-bottom: 5px; }

        /* --- MINISTRIES --- */
        .ministries { padding: 80px 0; background: var(--light-gray); }
        .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        .m-card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); text-align: center; }
        .m-img { height: 180px; background-size: cover; background-position: center; }
        .m-title { padding: 20px; font-weight: 700; color: var(--deep-blue); }

        /* --- SERMONS & MAP --- */
        .sermons-strip { background: #102d4d; color: white; padding: 40px 0; display: flex; align-items: center; }
        .sermon-content { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
        .map-placeholder { background: url('https://www.map-maker.pt/images/google-maps-marker.jpg') center/cover; height: 150px; border-radius: 8px; }

        /* --- FOOTER / CONTACT --- */
        .footer-contact { background: #07192b; color: white; padding: 80px 0; }
        .contact-grid { display: grid; grid-template-columns: 1.5fr 1fr; gap: 60px; }
        .form-group { margin-bottom: 15px; }
        input, textarea { width: 100%; padding: 12px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; border-radius: 4px; }
        .info-box { background: rgba(255,255,255,0.03); padding: 30px; border-radius: 10px; }

        @media (max-width: 768px) {
            .grid-3, .grid-4, .contact-grid, .sermon-content { grid-template-columns: 1fr; }
            .hero h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="container nav-wrapper">
            <div class="logo">⛪ Nyamata SDA Church</div>
            <ul class="nav-links">
                <li><a href="#">Ministries</a></li>
                <li><a href="#">Sermons</a></li>
                <li><a href="#">Events</a></li>
            </ul>
            <div class="nav-btns">
                <a href="#" class="btn btn-gold">Plan A Visit</a>
                <a href="#" class="btn btn-blue-outline">Watch Sermons</a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>WELCOME HOME</h1>
            <p>Join us this Sabbath</p>
            <div class="hero-actions">
                <a href="#" class="btn btn-gold">Plan Your Visit</a>
                <a href="#" class="btn btn-blue-glass">Watch Live</a>
            </div>
        </div>
    </header>

    <section class="about-section">
        <div class="container">
            <h2 class="section-title">ABOUT NYAMATA SDA CHURCH</h2>
            <p class="about-subtitle">We exist to love God, love people, and prepare for the soon return of Jesus Christ.</p>
            <div class="grid-3">
                <div class="info-card">
                    <h3>Our Mission</h3>
                    <p>To spread the everlasting gospel and prepare a people for the second coming.</p>
                    <a href="#" style="color: var(--gold); font-weight:bold; text-decoration:none;">Learn More</a>
                </div>
                <div class="info-card">
                    <h3>Our Beliefs</h3>
                    <p>Rooted in the 28 Fundamental Beliefs of the Seventh-day Adventist Church.</p>
                    <a href="#" style="color: var(--gold); font-weight:bold; text-decoration:none;">Learn More</a>
                </div>
                <div class="info-card">
                    <h3>Who We Are</h3>
                    <p>A global community of believers waiting for the blessed hope of Jesus.</p>
                    <a href="#" class="btn btn-blue btn-full" style="margin-top:15px">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service-times">
        <div class="container">
            <h2 class="section-title" style="color: white; text-align: center; margin-bottom: 40px;">SERVICE TIMES</h2>
            <div class="grid-3">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?auto=format&fit=crop&q=80&w=400" alt="Bible">
                    <div class="service-info">
                        <h4>Sabbath School</h4>
                        <p>8:30 AM</p>
                        <button class="btn btn-blue-glass" style="margin-top:10px">Watch Now</button>
                    </div>
                </div>
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&q=80&w=400" alt="Worship">
                    <div class="service-info">
                        <h4>Divine Worship</h4>
                        <p>Saturday 11:00 AM</p>
                        <button class="btn btn-gold" style="margin-top:10px">Watch Now</button>
                    </div>
                </div>
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1515162305285-0293e4767cc2?auto=format&fit=crop&q=80&w=400" alt="Prayer">
                    <div class="service-info">
                        <h4>Prayer Meeting</h4>
                        <p>Wednesday 6:00 PM</p>
                        <button class="btn btn-blue-glass" style="margin-top:10px">Watch Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ministries">
        <div class="container">
            <h2 class="section-title" style="text-align: center; margin-bottom: 40px;">OUR MINISTRIES</h2>
            <div class="grid-4">
                <div class="m-card">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1471286174890-9c112ffca5b4?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Children Ministry</div>
                </div>
                <div class="m-card">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Youth Ministry</div>
                </div>
                <div class="m-card">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Women Ministry</div>
                </div>
                <div class="m-card">
                    <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=300')"></div>
                    <div class="m-title">Men Ministry</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-contact">
        <div class="container contact-grid">
            <div class="contact-form">
                <h3 style="margin-bottom: 20px; color: var(--gold);">CONTACT</h3>
                <form id="churchContact">
                    <div style="display: flex; gap: 10px;">
                        <input type="text" placeholder="Name" required>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <textarea rows="5" placeholder="Your Message..." style="margin-top:15px"></textarea>
                    <button type="submit" class="btn btn-gold" style="margin-top:15px">Send Message</button>
                </form>
            </div>
            <div class="info-box">
                <h3 style="margin-bottom: 20px;">VISIT US</h3>
                <p>📍 Nyamata, Rwanda</p>
                <p>📞 +250 788 000 000</p>
                <p>✉️ info@nyamatasda.org</p>
                <div style="margin-top: 20px; display: flex; gap: 15px;">
                    <span>FB</span> <span>IG</span> <span>YT</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Sticky Navbar logic
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                nav.style.padding = "10px 0";
                nav.style.background = "rgba(255,255,255,0.98)";
            } else {
                nav.style.padding = "15px 0";
                nav.style.background = "#ffffff";
            }
        });

        // Form Submission simple feedback
        document.getElementById('churchContact').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for reaching out! We will get back to you soon.');
        });
    </script>
</body>
</html>