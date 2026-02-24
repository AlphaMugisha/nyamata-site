<?php include 'header.php'; ?>

<header class="hero" style="height: 50vh;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1500') center/cover; z-index:0;"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-anim-text">OUR MINISTRIES</h1>
        <p class="hero-anim-text">Serving Through Ministries</p>
    </div>
</header>

<section class="about-section">
    <div class="container">
        <h2 class="section-title">GET INVOLVED</h2>
        <p class="about-subtitle">God has given each of us unique gifts to serve His church and the community. Find your place here.</p>
        
        <div class="grid-3">
            <div class="info-card">
                <img src="https://images.unsplash.com/photo-1471286174890-9c112ffca5b4?auto=format&fit=crop&q=80&w=400" alt="Children" style="width:100%; border-radius:8px; margin-bottom:15px; height:200px; object-fit:cover;">
                <h3>Children Ministry</h3>
                <p>Nurturing the faith of our youngest members through engaging Bible studies and activities.</p>
                <p style="font-size: 0.85rem; color: #666; margin-top: 10px;"><strong>Meeting:</strong> Sabbath 9:00 AM</p>
                <button class="btn btn-blue-outline btn-full join-btn" data-ministry="Children Ministry" style="margin-top:15px">Join Ministry</button>
            </div>

            <div class="info-card">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=400" alt="Youth" style="width:100%; border-radius:8px; margin-bottom:15px; height:200px; object-fit:cover;">
                <h3>Youth Ministry (Adventist Youth)</h3>
                <p>Empowering young people to lead, serve, and grow deeply in their relationship with Christ.</p>
                <p style="font-size: 0.85rem; color: #666; margin-top: 10px;"><strong>Meeting:</strong> Sabbath 2:30 PM</p>
                <button class="btn btn-blue-outline btn-full join-btn" data-ministry="Youth Ministry" style="margin-top:15px">Join Ministry</button>
            </div>

            <div class="info-card">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=400" alt="Women" style="width:100%; border-radius:8px; margin-bottom:15px; height:200px; object-fit:cover;">
                <h3>Women's Ministry</h3>
                <p>Uplifting women in their spiritual journey and providing a strong support system.</p>
                <p style="font-size: 0.85rem; color: #666; margin-top: 10px;"><strong>Meeting:</strong> Wednesday 5:00 PM</p>
                <button class="btn btn-blue-outline btn-full join-btn" data-ministry="Women's Ministry" style="margin-top:15px">Join Ministry</button>
            </div>

            <div class="info-card">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400" alt="Men" style="width:100%; border-radius:8px; margin-bottom:15px; height:200px; object-fit:cover;">
                <h3>Men's Ministry</h3>
                <p>Equipping men to be godly leaders in their homes, church, and the Nyamata community.</p>
                <p style="font-size: 0.85rem; color: #666; margin-top: 10px;"><strong>Meeting:</strong> Sunday 8:00 AM</p>
                <button class="btn btn-blue-outline btn-full join-btn" data-ministry="Men's Ministry" style="margin-top:15px">Join Ministry</button>
            </div>

            <div class="info-card">
                <img src="music.jpg" alt="Music" style="width:100%; border-radius:8px; margin-bottom:15px; height:200px; object-fit:cover;">
                <h3>Music Ministry</h3>
                <p>Praising God through beautiful harmonies, choirs, and instrumental worship.</p>
                <p style="font-size: 0.85rem; color: #666; margin-top: 10px;"><strong>Meeting:</strong> Friday 4:00 PM</p>
                <button class="btn btn-blue-outline btn-full join-btn" data-ministry="Music Ministry" style="margin-top:15px">Join Ministry</button>
            </div>

            <div class="info-card">
                <img src="outreach.jpg" alt="Community" style="width:100%; border-radius:8px; margin-bottom:15px; height:200px; object-fit:cover;">
                <h3>Community Outreach</h3>
                <p>Being the hands and feet of Jesus to those in need throughout Rwanda.</p>
                <p style="font-size: 0.85rem; color: #666; margin-top: 10px;"><strong>Meeting:</strong> Monthly</p>
                <button class="btn btn-blue-outline btn-full join-btn" data-ministry="Community Outreach" style="margin-top:15px">Join Ministry</button>
            </div>
        </div>
    </div>
</section>

<div id="joinModal" class="ministry-modal">
    <div class="ministry-modal-content">
        <span class="close-modal">&times;</span>
        <h3 style="color: var(--deep-blue); margin-bottom: 5px; font-size: 1.5rem;">Join <span id="ministryNameDisplay">Ministry</span></h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 0.9rem;">Fill out the form below and the ministry leader will contact you.</p>
        
        <form id="joinMinistryForm" action="contact.php" method="POST">
            <input type="hidden" name="selected_ministry" id="selectedMinistryInput">
            
            <input type="text" name="name" placeholder="Full Name" required style="width: 100%; padding: 12px; margin-bottom: 12px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
            <input type="email" name="email" placeholder="Email Address" required style="width: 100%; padding: 12px; margin-bottom: 12px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
            <input type="tel" name="phone" placeholder="Phone Number" style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
            
            <button type="submit" class="btn btn-gold btn-full">Submit Request</button>
        </form>
    </div>
</div>

<style>
    /* Modal Background Overlay */
    .ministry-modal {
        display: none; 
        position: fixed; 
        z-index: 2000; 
        left: 0; 
        top: 0;
        width: 100%; 
        height: 100%; 
        background-color: rgba(11, 42, 74, 0.85); /* Deep blue with opacity */
        align-items: center; 
        justify-content: center; 
        opacity: 0; 
        transition: opacity 0.3s ease;
    }
    
    .ministry-modal.show { 
        display: flex; 
        opacity: 1; 
    }
    
    /* Modal White Box */
    .ministry-modal-content {
        background-color: #fff; 
        padding: 40px; 
        border-radius: 8px;
        width: 90%; 
        max-width: 400px; 
        position: relative;
        transform: translateY(-30px); 
        transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }
    
    .ministry-modal.show .ministry-modal-content { 
        transform: translateY(0); 
    }
    
    /* Close Button */
    .close-modal {
        position: absolute; 
        right: 20px; 
        top: 15px; 
        font-size: 28px;
        font-weight: bold; 
        color: #999; 
        cursor: pointer;
        transition: color 0.3s;
    }
    
    .close-modal:hover { 
        color: var(--deep-blue); 
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('joinModal');
        const btns = document.querySelectorAll('.join-btn');
        const closeBtn = document.querySelector('.close-modal');
        const displaySpan = document.getElementById('ministryNameDisplay');
        const hiddenInput = document.getElementById('selectedMinistryInput');
        const form = document.getElementById('joinMinistryForm');

        // Open modal when any Join button is clicked
        btns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                // Get the ministry name from the clicked button
                const ministryName = btn.getAttribute('data-ministry');
                
                // Update the form title and hidden input
                displaySpan.textContent = ministryName;
                hiddenInput.value = ministryName;
                
                // Show the modal
                modal.classList.add('show');
            });
        });

        // Close modal when X is clicked
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('show');
        });

        // Close modal if user clicks outside the white box
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('show');
            }
        });

        // Handle form submission (For now it shows an alert and closes)
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            alert(`Thank you! Your request to join the ${hiddenInput.value} has been recorded. We will contact you soon.`);
            modal.classList.remove('show');
            form.reset(); // Clear the form fields
        });
    });
</script>

<?php include 'footer.php'; ?>