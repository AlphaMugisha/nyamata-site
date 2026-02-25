<?php include 'header.php'; ?>

<header class="hero" style="height: 50vh;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: url('outreach.jpg') center/cover; z-index:0;"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-anim-text">GET IN TOUCH WITH NYAMATA CHURCH</h1>
        <p class="hero-anim-text">We'd love to hear from you, and what u say will be kept confidential and used to serve you better.</p>
    </div>
</header>

<section class="about-section" style="background: var(--light-gray); padding: 80px 0;">
    <div class="container contact-grid">
        
        <div class="contact-form info-card reveal-base" style="background: white; text-align: left;">
            <h3 style="margin-bottom: 25px; color: var(--deep-blue); font-size: 1.8rem;">Send Us a Message</h3>
            
            <style>
                .light-form input, .light-form textarea {
                    background: #f4f7f9; border: 1px solid #e1e8ed; color: #333; margin-bottom: 20px;
                }
                .light-form input:focus, .light-form textarea:focus {
                    background: white; border-color: var(--gold); box-shadow: 0 0 8px rgba(212, 164, 55, 0.2);
                }
            </style>
            
            <form action="contact.php" method="POST" id="churchContactPage" class="light-form">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <input type="tel" name="phone" placeholder="Phone Number (Optional)" style="width: 100%;">
                <textarea name="message" rows="6" placeholder="How can we help you or pray for you today?" required></textarea>
                <button type="submit" class="btn btn-gold" style="width: 100%; padding: 15px; font-size: 1.1rem;">Send Message</button>
            </form>
        </div>

        <div class="info-box reveal-base" style="background: var(--deep-blue); color: white;">
            <h3 style="margin-bottom: 25px; color: var(--gold); font-size: 1.8rem;">Church Office</h3>
            
            <div style="margin-bottom: 25px;">
                <h4 style="margin-bottom: 5px; opacity: 0.9;">Address</h4>
                <p style="font-size: 1.1rem;">📍 Nyamata SDA Church<br>Bugesera District<br>Nyamata, Rwanda</p>
            </div>
            
            <div style="margin-bottom: 25px;">
                <h4 style="margin-bottom: 5px; opacity: 0.9;">Contact</h4>
                <p style="font-size: 1.1rem;">📞 +250 788 000 000</p>
                <p style="font-size: 1.1rem;">✉️ info@nyamatasda.org</p>
            </div>

            <div>
                <h4 style="margin-bottom: 5px; opacity: 0.9;">Office Hours</h4>
                <p style="font-size: 1.1rem;">Monday - Thursday: 8:00 AM - 5:00 PM</p>
                <p style="font-size: 1.1rem;">Friday: 8:00 AM - 1:00 PM</p>
            </div>
        </div>

    </div>
</section>

<section style="line-height: 0;">
    <div style="width: 100%; height: 450px; background: #e0e0e0;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15947.675039281358!2d30.0827!3d-2.2023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7006822187b%3A0x6d9f8df5b3a3c9a!2sNyamata%2C%20Rwanda!5e0!3m2!1sen!2sus!4v1680000000000!5m2!1sen!2sus" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<?php include 'footer.php'; ?>