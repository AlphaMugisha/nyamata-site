// Ensure script waits for full page load as requested
window.addEventListener('load', () => {
    
    // --- 1. Preloader Logic (5 Second Duration) ---
    setTimeout(() => {
        const preloader = document.getElementById('preloader');
        
        // Hide preloader
        preloader.classList.add('hide');
        
        // Enable scrolling and add 'loaded' class
        document.body.classList.remove('no-scroll');
        document.body.classList.add('loaded');
        
        // Trigger initial hero animations *after* the preloader reveals the site
        triggerHeroAnimations();
        
    }, 5000); // Exactly 5 seconds

    // --- 2. Video Autoplay Fallback ---
    const heroVideo = document.getElementById('heroVideo');
    if (heroVideo) {
        heroVideo.play().catch(error => {
            console.log("Video autoplay blocked by browser. User interaction required.", error);
        });
    }

    // --- 3. Navbar Scroll Transition ---
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

    // --- 4. Hero Animations Function ---
    function triggerHeroAnimations() {
        const heroTexts = document.querySelectorAll('.hero-anim-text');
        const heroBtns = document.querySelectorAll('.hero-anim-btn');
        
        heroTexts.forEach((el, index) => {
            el.classList.add('reveal-base');
            setTimeout(() => el.classList.add('reveal-active'), 100 + (index * 200));
        });

        heroBtns.forEach((btn, index) => {
            btn.classList.add('reveal-base');
            btn.style.transitionDelay = `${0.6 + (index * 0.15)}s`;
            setTimeout(() => btn.classList.add('reveal-active'), 100);
        });
    }

    // --- 5. Scroll Reveal via IntersectionObserver ---
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

    const applyStaggerObserver = (selectorList, isStaggered = false) => {
        document.querySelectorAll(selectorList).forEach(el => {
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

    // Apply observers to sections (these wait for scroll, so they work perfectly with preloader)
    applyStaggerObserver('.section-title, .about-subtitle, .contact-form, .info-box');
    applyStaggerObserver('.grid-3, .grid-4', true);
});