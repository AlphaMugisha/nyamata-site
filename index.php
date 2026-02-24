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

        /* --- NAVBAR & ANIMATIONS --- */
        .navbar {
            background: rgba(255, 255, 255, 1);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 0px 0px rgba(0,0,0,0);
            transition: background 0.4s ease, box-shadow 0.4s ease, padding 0.4s ease;
        }
        .nav-wrapper { display: flex; justify-content: space-between; align-items: center; }
        .logo { display: flex; align-items: center; gap: 10px; color: var(--deep-blue); font-weight: 700; font-size: 1.2rem; }
        
        .nav-links { list-style: none; display: flex; gap: 20px; align-items: center; }
        .nav-links a { 
            text-decoration: none; 
            color: var(--deep-blue); 
            font-size: 0.9rem; 
            font-weight: 500; 
            position: relative;
            padding-bottom: 2px;
        }
        /* Link Hover Underline Animation */
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: var(--gold);
            transition: width 0.3s ease;
        }
        .nav-links a:hover::after { width: 100%; }
        .nav-btns { display: flex; gap: 10px; }

        /* --- GLOBAL BUTTON ANIMATIONS --- */
        .btn { 
            padding: 10px 22px; 
            border-radius: 4px; 
            text-decoration: none; 
            font-weight: 600; 
            font-size: 0.85rem; 
            cursor: pointer; 
            border: none;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: transform, box-shadow;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
        .btn:active {
            transform: scale(0.97) translateY(0);
        }
        .btn-gold { background: var(--gold); color: white; }
        .btn-gold:hover { 
            background: #dfae40; 
            box-shadow: 0 6px 15px rgba(212, 164, 55, 0.35); 
        }
        .btn-blue-outline { border: 1.5px solid var(--deep-blue); color: var(--deep-blue); }
        .btn-blue-outline:hover {
            background: var(--deep-blue);
            color: var(--white);
            box-shadow: 0 6px 15px rgba(11, 42, 74, 0.2);
        }
        .btn-blue-glass { background: rgba(255,255,255,0.15); border: 1px solid white; color: white; backdrop-filter: blur(5px); }
        .btn-blue-glass:hover {
            background: rgba(255,255,255,0.25);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
        }
        .btn-blue { background: var(--deep-blue); color: white; }
        .btn-blue:hover { box-shadow: 0 6px 15px rgba(11, 42, 74, 0.3); }
        .btn-full { width: 100%; display: block; text-align: center; }

        /* --- HERO ANIMATIONS --- */
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        @keyframes heroZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
        }

        .hero {
            height: 85vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden; /* Contains background zoom */
            background: var(--deep-blue);
        }
        /* Extracted background to pseudo-element for GPU zoom */
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('https://images.unsplash.com/photo-1510590337019-5ef8d3d32116?auto=format&fit=crop&q=80&w=1500') center/cover no-repeat;
            animation: heroZoom 18s ease-out forwards;
            z-index: 0;
        }
        .hero-overlay { 
            position: absolute; 
            top: 0; left: 0; width: 100%; height: 100%; 
            z-index: 1;
            /* Animated Gradient Overlay */
            background: linear-gradient(135deg, rgba(11, 42, 74, 0.85), rgba(22, 58, 95, 0.65), rgba(11, 42, 74, 0.85));
            background-size: 200% 200%;
            animation: gradientShift 15s ease infinite;
        }
        .hero-content { position: relative; z-index: 2; }
        .hero h1 { font-size: 4.5rem; letter-spacing: 5px; margin-bottom: 5px; font-weight: 700; }
        .hero p { font-size: 1.5rem; margin-bottom: 30px; opacity: 0.9; }
        .hero-actions { display: flex; gap: 15px; justify-content: center; }

        /* --- SCROLL REVEAL BASE CLASSES --- */
        .reveal-base {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94), 
                        transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: opacity, transform;
        }
        .reveal-active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- ABOUT SECTION --- */
        .about-section { padding: 80px 0; text-align: center; background: white; }
        .section-title { font-size: 1.8rem; color: var(--deep-blue); margin-bottom: 10px; letter-spacing: 1px; }
        .about-subtitle { max-width: 700px; margin: 0 auto 50px; color: #666; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        
        .info-card { 
            background: white; 
            padding: 40px 30px; 
            border-radius: 8px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
            transition: transform 0.4s ease, box-shadow 0.4s ease; 
        }
        /* Combined interaction so it respects the reveal transform state */
        .info-card.reveal-active:hover { 
            transform: translateY(-6px); 
            box-shadow: 0 18px 40px rgba(0,0,0,0.08); 
        }
        .info-card h3 { margin-bottom: 15px; color: var(--deep-blue); }

        /* --- SERVICE TIMES (ANIMATED GRADIENT) --- */
        .service-times { 
            padding: 80px 0; color: white; 
            background: linear-gradient(135deg, #0b2a4a 0%, #163a5f 50%, #0b2a4a 100%); 
            background-size: 200% 200%;
            animation: gradientShift 20s ease infinite;
        }
        .service-card { 
            height: 220px; border-radius: 10px; position: relative; overflow: hidden; 
            display: flex; align-items: center; justify-content: center; text-align: center; 
        }
        .service-card img { 
            position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: 1; opacity: 0.4; 
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.5s ease;
        }
        .service-card.reveal-active:hover img {
            transform: scale(1.08);
            opacity: 0.15; /* overlay darken */
        }
        .service-info { position: relative; z-index: 2; padding: 20px; }
        .service-info h4 { font-size: 1.4rem; margin-bottom: 5px; }

        /* --- MINISTRIES --- */
        .ministries { padding: 80px 0; background: var(--light-gray); }
        .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        
        .m-card { 
            background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); text-align: center; 
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .m-card.reveal-active:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }
        .m-img { 
            height: 180px; background-size: cover; background-position: center; 
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .m-card.reveal-active:hover .m-img {
            transform: scale(1.05);
        }
        .m-title { 
            padding: 20px; font-weight: 700; color: var(--deep-blue); 
            transition: color 0.3s ease;
        }
        .m-card.reveal-active:hover .m-title {
            color: #2a659e; /* Color shift to lighter blue */
        }

        /* --- SERMONS & MAP --- */
        .sermons-strip { background: #102d4d; color: white; padding: 40px 0; display: flex; align-items: center; }
        .sermon-content { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
        .map-placeholder { background: url('https://www.map-maker.pt/images/google-maps-marker.jpg') center/cover; height: 150px; border-radius: 8px; }

        /* --- FOOTER / CONTACT --- */
        .footer-contact { background: #07192b; color: white; padding: 80px 0; }
        .contact-grid { display: grid; grid-template-columns: 1.5fr 1fr; gap: 60px; }
        .form-group { margin-bottom: 15px; }
        input, textarea { 
            width: 100%; padding: 12px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); 
            color: white; border-radius: 4px; transition: border 0.3s ease, background 0.3s ease;
        }
        input:focus, textarea:focus {
            outline: none;
            border: 1px solid var(--gold);
            background: rgba(255,255,255,0.1);
        }
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
            <h1 class="hero-anim-text">WELCOME HOME</h1>
            <p class="hero-anim-text">Join us this Sabbath</p>
            <div class="hero-actions">
                <a href="#" class="btn btn-gold hero-anim-btn">Plan Your Visit</a>
                <a href="#" class="btn btn-blue-glass hero-anim-btn">Watch Live</a>
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
                    <a href="#" style="color: var(--gold); font-weight:bold; text-decoration:none;" class="btn-link">Learn More</a>
                </div>
                <div class="info-card">
                    <h3>Our Beliefs</h3>
                    <p>Rooted in the 28 Fundamental Beliefs of the Seventh-day Adventist Church.</p>
                    <a href="#" style="color: var(--gold); font-weight:bold; text-decoration:none;" class="btn-link">Learn More</a>
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
        document.addEventListener('DOMContentLoaded', () => {
            // --- 1. Navbar Scroll Transition ---
            const nav = document.querySelector('.navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    nav.style.padding = "10px 0";
                    nav.style.background = "rgba(255,255,255,0.98)";
                    nav.style.boxShadow = "0 4px 15px rgba(0,0,0,0.08)";
                } else {
                    nav.style.padding = "15px 0";
                    nav.style.background = "rgba(255,255,255,1)";
                    nav.style.boxShadow = "0 0px 0px rgba(0,0,0,0)";
                }
            });

            // --- 2. Initial Hero Load Animations ---
            const heroTexts = document.querySelectorAll('.hero-anim-text');
            const heroBtns = document.querySelectorAll('.hero-anim-btn');
            
            heroTexts.forEach((el, index) => {
                el.classList.add('reveal-base');
                setTimeout(() => el.classList.add('reveal-active'), 100 + (index * 200));
            });

            heroBtns.forEach((btn, index) => {
                btn.classList.add('reveal-base');
                // Hardware delay mapping
                btn.style.transitionDelay = `${0.6 + (index * 0.15)}s`;
                setTimeout(() => btn.classList.add('reveal-active'), 100);
            });

            // --- 3. Scroll Reveal via IntersectionObserver ---
            const observerOptions = {
                threshold: 0.12,
                rootMargin: "0px 0px -60px 0px"
            };

            const scrollObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Apply base class & stagger dynamically to maintain HTML purity
            const applyStaggerObserver = (selectorList, isStaggered = false) => {
                document.querySelectorAll(selectorList).forEach(el => {
                    // Check if it's a grid parent for staggering
                    if(isStaggered && el.children.length > 0) {
                        Array.from(el.children).forEach((child, idx) => {
                            child.classList.add('reveal-base');
                            child.style.transitionDelay = `${idx * 0.15}s`;
                            scrollObserver.observe(child);
                        });
                    } else {
                        el.classList.add('reveal-base');
                        scrollObserver.observe(el);
                    }
                });
            };

            // Single items
            applyStaggerObserver('.section-title, .about-subtitle, .contact-form, .info-box');
            
            // Staggered grid items
            applyStaggerObserver('.grid-3, .grid-4', true);

            // Form Submit Logic
            document.getElementById('churchContact').addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Thank you for reaching out! We will get back to you soon.');
            });
        });
    </script>
</body>
</html>