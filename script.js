// --- 1. General Site Setup (Runs Immediately on DOM Load) ---
document.addEventListener('DOMContentLoaded', () => {

    // Setup Video Autoplay Fallback
    const heroVideo = document.getElementById('heroVideo');
    if (heroVideo) {
        heroVideo.play().catch(error => {
            console.log("Video autoplay blocked by browser. User interaction required.", error);
        });
    }

    // Navbar Scroll Transition setup
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

    // Prepare Hero Texts/Buttons to be hidden initially
    const heroTexts = document.querySelectorAll('.hero-anim-text');
    const heroBtns = document.querySelectorAll('.hero-anim-btn');
    
    heroTexts.forEach(el => el.classList.add('reveal-base'));
    heroBtns.forEach(btn => btn.classList.add('reveal-base'));

    // Scroll Reveal setup via IntersectionObserver (For rest of the site)
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

    // Apply observers to site sections below the fold
    applyStaggerObserver('.section-title, .about-subtitle, .contact-form, .info-box');
    applyStaggerObserver('.grid-3, .grid-4', true);
});

// --- 2. Preloader Sequence (Runs on Window Load to account for resources) ---
window.addEventListener('load', () => {
    
    // 5 Second Timer Duration
    setTimeout(() => {
        const preloader = document.getElementById('preloader');
        
        // Hide preloader
        if (preloader) {
            preloader.classList.add('hide');
        }
        
        // Enable scrolling and add 'loaded' state
        document.body.classList.remove('no-scroll');
        document.body.classList.add('loaded');
        
        // Trigger initial hero animations *after* the preloader reveals the site
        const heroTexts = document.querySelectorAll('.hero-anim-text');
        const heroBtns = document.querySelectorAll('.hero-anim-btn');
        
        heroTexts.forEach((el, index) => {
            setTimeout(() => el.classList.add('reveal-active'), 100 + (index * 200));
        });

        heroBtns.forEach((btn, index) => {
            btn.style.transitionDelay = `${0.6 + (index * 0.15)}s`;
            setTimeout(() => btn.classList.add('reveal-active'), 100);
        });
        
    }, 5000); // Exactly 5 seconds
});