<?php include 'header.php'; ?>

<style>
    .reveal-base {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        will-change: opacity, visibility;
    }
    .reveal-base.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<header id="home" class="hero">
    <video autoplay loop muted playsinline class="hero-video" id="heroVideo">
        <source src="video.mp4" type="video/mp4">
        <img src="https://images.unsplash.com/photo-1510590337019-5ef8d3d32116?auto=format&fit=crop&q=80&w=1500" alt="Worship Background">
    </video>
    
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1 class="hero-anim-text">WELCOME HOME</h1>
        <p class="hero-anim-text">Join us this Sabbath</p>
        <div class="hero-actions">
            <a href="events.php#visit" class="btn btn-gold hero-anim-btn">Plan Your Visit</a>
            <a href="sermons.php" class="btn btn-blue-glass hero-anim-btn">Watch Sermons</a>
        </div>
    </div>
</header>

<section id="about" class="about-section">
    <div class="container">
        <h2 class="section-title">ABOUT NYAMATA SDA CHURCH</h2>
        <p class="about-subtitle">We exist to love God, love people, and prepare for the soon return of Jesus Christ.</p>
        <div class="grid-3">
            <div class="info-card clickable-card reveal-base" onclick="window.location.href='ministries.php'">
                <h3>Our Mission</h3>
                <p>To spread the everlasting gospel and prepare a people for the second coming.</p>
                <span style="color: var(--gold); font-weight:bold;">Learn More</span>
            </div>
            <div class="info-card clickable-card reveal-base" style="transition-delay: 0.1s;" onclick="window.location.href='ministries.php'">
                <h3>Our Beliefs</h3>
                <p>Rooted in the 28 Fundamental Beliefs of the Seventh-day Adventist Church.</p>
                <span style="color: var(--gold); font-weight:bold;">Learn More</span>
            </div>
            <div class="info-card clickable-card reveal-base" style="transition-delay: 0.2s;" onclick="window.location.href='events.php'">
                <h3>Join Us</h3>
                <p>A global community of believers waiting for the blessed hope of Jesus.</p>
                <span class="btn btn-blue btn-full" style="margin-top:15px">Plan A Visit</span>
            </div>
        </div>
    </div>
</section>

<section class="about-section" style="background: var(--light-gray); padding: 100px 0;">
    <div class="container contact-grid" style="align-items: center;">
        <div class="reveal-base" style="text-align: left;">
            <h2 class="section-title" style="margin-bottom: 20px;">A MESSAGE FROM OUR PASTOR</h2>
            <p style="font-size: 1.1rem; margin-bottom: 15px; color: #555; line-height: 1.8;">
                Welcome to Nyamata SDA Church! We are so thrilled that you've taken the time to visit us online.
            </p>
            <p style="font-size: 1.1rem; margin-bottom: 25px; color: #555; line-height: 1.8;">
                Whether you are seeking a new church home, exploring faith for the first time, or just passing through the beautiful Bugesera district, our doors and hearts are open to you. We believe in building a vibrant community where everyone can experience the transformative love of Christ and discover their God-given purpose.
            </p>
            <p style="font-family: serif; font-size: 1.5rem; color: var(--gold); font-style: italic; font-weight: 600;">
                - Pastor's Name
            </p>
        </div>
        <div class="reveal-base" style="border-radius: 8px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
            <img src="https://images.unsplash.com/photo-1560252829-804f1aedf1be?auto=format&fit=crop&q=80&w=800" alt="Pastor Welcoming" style="width: 100%; display: block; object-fit: cover; height: 100%;">
        </div>
    </div>
</section>

<section class="about-section" style="background: white; padding: 80px 0;">
    <div class="container">
        <h2 class="section-title reveal-base">OUR ADVENTIST FAITH</h2>
        <p class="about-subtitle reveal-base" style="text-align: center; margin-bottom: 40px;">Rooted in scripture, focused on holistic living, and waiting for His return.</p>
        <div class="grid-3">
            <div class="info-card reveal-base">
                <h3 style="color: var(--gold);">Core Beliefs</h3>
                <p style="margin-bottom: 10px;"><strong>The Sabbath:</strong> Observance of the seventh-day Sabbath (Saturday) as a day of rest and worship.</p>
                <p style="margin-bottom: 10px;"><strong>The Second Coming:</strong> A strong focus on the imminent, literal, and visible return of Jesus.</p>
                <p><strong>The Bible:</strong> The belief that the Bible is the ultimate, inspired authority.</p>
            </div>
            <div class="info-card reveal-base" style="transition-delay: 0.1s;">
                <h3 style="color: var(--gold);">Lifestyle & Health</h3>
                <p style="margin-bottom: 10px;"><strong>Holistic Well-being:</strong> Promoting health through a plant-based diet, regular exercise, and rest.</p>
                <p style="margin-bottom: 10px;"><strong>Abstinence:</strong> Avoiding alcohol, tobacco, and illicit drugs to honor the body.</p>
                <p><strong>Restoration:</strong> Dedicated to healing the whole person—mind, body, and spirit.</p>
            </div>
            <div class="info-card reveal-base" style="transition-delay: 0.2s;">
                <h3 style="color: var(--gold);">Mission & Values</h3>
                <p style="margin-bottom: 10px;"><strong>Global Service:</strong> Running one of the largest Protestant healthcare and education systems worldwide.</p>
                <p style="margin-bottom: 10px;"><strong>Community:</strong> Sharing a message of hope, healing, and restoration with the Nyamata district.</p>
                <p><strong>Growth:</strong> Encouraging spiritual growth through prayer and continuous Bible study.</p>
            </div>
        </div>
    </div>
</section>

<section class="service-times">
    <div class="container" style="text-align: center;">
        <h2 class="section-title reveal-base" style="color: white; margin-bottom: 20px;">LATEST MESSAGE</h2>
        <p class="reveal-base" style="color: rgba(255,255,255,0.8); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">Catch up on the latest powerful sermon from our pastoral team.</p>
        
        <div class="service-card clickable-card reveal-base" onclick="window.location.href='sermons.php'" style="height: 350px; max-width: 800px; margin: 0 auto;">
            <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&q=80&w=1000" alt="Latest Sermon">
            <div class="service-info">
                <h4 style="font-size: 2rem;">Walking in His Love</h4>
                <p style="font-size: 1.1rem; margin-bottom: 15px;">Pastor John Doe • Last Sabbath</p>
                <span class="btn btn-gold">Watch Sermon</span>
            </div>
        </div>
    </div>
</section>

<section id="ministries" class="ministries">
    <div class="container">
        <h2 class="section-title reveal-base" style="text-align: center; margin-bottom: 40px;">GET INVOLVED</h2>
        <div class="grid-4">
            <div class="m-card clickable-card reveal-base" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1471286174890-9c112ffca5b4?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Children Ministry</div>
            </div>
            <div class="m-card clickable-card reveal-base" style="transition-delay: 0.1s;" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Youth Ministry</div>
            </div>
            <div class="m-card clickable-card reveal-base" style="transition-delay: 0.2s;" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Women Ministry</div>
            </div>
            <div class="m-card clickable-card reveal-base" style="transition-delay: 0.3s;" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Men Ministry</div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px;" class="reveal-base">
            <a href="ministries.php" class="btn btn-blue">View All Ministries</a>
        </div>
    </div>
</section>

<section class="about-section" style="background: white;">
    <div class="container">
        <h2 class="section-title reveal-base">UPCOMING EVENTS</h2>
        <div class="grid-3" style="margin-top: 40px;">
            <div class="info-card clickable-card reveal-base" onclick="window.location.href='events.php'">
                <h3 style="color: var(--gold);">Prayer Week</h3>
                <p><strong>Date:</strong> Next Sunday<br><strong>Time:</strong> 6:00 PM</p>
                <p style="margin-top:10px;">Join us for a powerful week of seeking God's face.</p>
            </div>
            <div class="info-card clickable-card reveal-base" style="transition-delay: 0.1s;" onclick="window.location.href='events.php'">
                <h3 style="color: var(--gold);">Youth Camp</h3>
                <p><strong>Date:</strong> August 15-20<br><strong>Time:</strong> All Day</p>
                <p style="margin-top:10px;">Annual youth retreat for spiritual growth and fellowship.</p>
            </div>
            <div class="info-card clickable-card reveal-base" style="transition-delay: 0.2s;" onclick="window.location.href='events.php'">
                <h3 style="color: var(--gold);">Community Outreach</h3>
                <p><strong>Date:</strong> Last Sabbath<br><strong>Time:</strong> 2:00 PM</p>
                <p style="margin-top:10px;">Serving our local Nyamata community with love.</p>
            </div>
        </div>
    </div>
</section>

<section class="service-times" style="text-align: center; padding: 100px 0;">
    <div class="container reveal-base">
        <h2 class="section-title" style="color: white; margin-bottom: 20px;">WORSHIP THROUGH GIVING</h2>
        <p style="color: rgba(255,255,255,0.8); margin-bottom: 35px; max-width: 650px; margin-left: auto; margin-right: auto; font-size: 1.15rem; line-height: 1.6;">
            Your generosity helps us continue our mission, support our growing ministries, and serve the surrounding community. Thank you for partnering with us.
        </p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="#" class="btn btn-gold" style="font-size: 1.1rem; padding: 15px 35px;">Give Online</a>
            <a href="contact.php" class="btn btn-blue-glass" style="font-size: 1.1rem; padding: 15px 35px;">Other Ways to Give</a>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    // Optional: Unobserve after animating so it only animates once
                    observer.unobserve(entry.target); 
                }
            });
        }, {
            threshold: 0.1 // Triggers when 10% of the element is visible
        });

        const hiddenElements = document.querySelectorAll('.reveal-base');
        hiddenElements.forEach((el) => observer.observe(el));
    });
</script>

<?php include 'footer.php'; ?>