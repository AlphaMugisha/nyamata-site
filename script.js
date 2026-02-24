document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. Video Autoplay Fallback ---
    // Browsers sometimes block autoplay videos. This forces play on load.
    const heroVideo = document.getElementById('heroVideo');
    if (heroVideo) {
        heroVideo.play().catch(error => {
            console.log("Video autoplay blocked by browser. User interaction required.", error);
        });
    }

    // --- 2. Navbar Scroll Transition ---
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

    // --- 3. Initial Hero Load Animations ---
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

    // --- 4. Scroll Reveal via IntersectionObserver ---
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

    // Apply observers to sections
    applyStaggerObserver('.section-title, .about-subtitle, .contact-form, .info-box');
    applyStaggerObserver('.grid-3, .grid-4', true);
});