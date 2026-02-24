<?php include 'header.php'; ?>

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
            <div class="info-card clickable-card" onclick="window.location.href='ministries.php'">
                <h3>Our Mission</h3>
                <p>To spread the everlasting gospel and prepare a people for the second coming.</p>
                <span style="color: var(--gold); font-weight:bold;">Learn More</span>
            </div>
            <div class="info-card clickable-card" onclick="window.location.href='ministries.php'">
                <h3>Our Beliefs</h3>
                <p>Rooted in the 28 Fundamental Beliefs of the Seventh-day Adventist Church.</p>
                <span style="color: var(--gold); font-weight:bold;">Learn More</span>
            </div>
            <div class="info-card clickable-card" onclick="window.location.href='events.php'">
                <h3>Join Us</h3>
                <p>A global community of believers waiting for the blessed hope of Jesus.</p>
                <span class="btn btn-blue btn-full" style="margin-top:15px">Plan A Visit</span>
            </div>
        </div>
    </div>
</section>

<section class="service-times">
    <div class="container" style="text-align: center;">
        <h2 class="section-title" style="color: white; margin-bottom: 20px;">LATEST MESSAGE</h2>
        <p style="color: rgba(255,255,255,0.8); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">Catch up on the latest powerful sermon from our pastoral team.</p>
        
        <div class="service-card clickable-card" onclick="window.location.href='sermons.php'" style="height: 350px; max-width: 800px; margin: 0 auto;">
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
        <h2 class="section-title" style="text-align: center; margin-bottom: 40px;">GET INVOLVED</h2>
        <div class="grid-4">
            <div class="m-card clickable-card" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1471286174890-9c112ffca5b4?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Children Ministry</div>
            </div>
            <div class="m-card clickable-card" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Youth Ministry</div>
            </div>
            <div class="m-card clickable-card" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Women Ministry</div>
            </div>
            <div class="m-card clickable-card" onclick="window.location.href='ministries.php'">
                <div class="m-img" style="background-image: url('https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=300')"></div>
                <div class="m-title">Men Ministry</div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="ministries.php" class="btn btn-blue">View All Ministries</a>
        </div>
    </div>
</section>

<section class="about-section" style="background: var(--light-gray);">
    <div class="container">
        <h2 class="section-title">UPCOMING EVENTS</h2>
        <div class="grid-3" style="margin-top: 40px;">
            <div class="info-card clickable-card" onclick="window.location.href='events.php'">
                <h3 style="color: var(--gold);">Prayer Week</h3>
                <p><strong>Date:</strong> Next Sunday<br><strong>Time:</strong> 6:00 PM</p>
                <p style="margin-top:10px;">Join us for a powerful week of seeking God's face.</p>
            </div>
            <div class="info-card clickable-card" onclick="window.location.href='events.php'">
                <h3 style="color: var(--gold);">Youth Camp</h3>
                <p><strong>Date:</strong> August 15-20<br><strong>Time:</strong> All Day</p>
                <p style="margin-top:10px;">Annual youth retreat for spiritual growth and fellowship.</p>
            </div>
            <div class="info-card clickable-card" onclick="window.location.href='events.php'">
                <h3 style="color: var(--gold);">Community Outreach</h3>
                <p><strong>Date:</strong> Last Sabbath<br><strong>Time:</strong> 2:00 PM</p>
                <p style="margin-top:10px;">Serving our local Nyamata community with love.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>