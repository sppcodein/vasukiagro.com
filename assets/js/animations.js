/**
 * VAC Block Theme custom JavaScript
 * 
 * This file contains JavaScript functions for animations and performance optimizations
 * for the VASUKI AGRO CHEMICALS LLP website.
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize animations
    initAnimations();
    
    // Initialize lazy loading for images
    initLazyLoading();
    
    // Initialize mobile menu toggle
    initMobileMenu();
});

/**
 * Initialize scroll-based animations
 */
function initAnimations() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
    if (!animatedElements.length) return;
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                
                // Optional: Stop observing after animation is triggered
                if (entry.target.dataset.animateOnce === 'true') {
                    observer.unobserve(entry.target);
                }
            } else {
                // Optional: Remove class when element is out of view
                if (entry.target.dataset.animateOnce !== 'true') {
                    entry.target.classList.remove('animated');
                }
            }
        });
    }, observerOptions);
    
    animatedElements.forEach(element => {
        observer.observe(element);
    });
}

/**
 * Initialize lazy loading for images
 */
function initLazyLoading() {
    // If the browser supports native lazy loading, let it handle it.
    // Do NOT override existing src/srcset unless data-src is explicitly provided.
    if ('loading' in HTMLImageElement.prototype) {
        const lazyImages = document.querySelectorAll('img[loading="lazy"]');
        lazyImages.forEach(img => {
            if (img.dataset && img.dataset.src) {
                img.src = img.dataset.src;
            }
            if (img.dataset && img.dataset.srcset) {
                img.srcset = img.dataset.srcset;
            }
        });
        return;
    } else {
        // Fallback for browsers that don't support native lazy loading
        const lazyImageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    if (lazyImage.dataset && lazyImage.dataset.src) {
                        lazyImage.src = lazyImage.dataset.src;
                    }
                    if (lazyImage.dataset && lazyImage.dataset.srcset) {
                        lazyImage.srcset = lazyImage.dataset.srcset;
                    }
                    lazyImage.classList.remove("lazy");
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });
        // Only observe images that use the lazy class with data-src attributes
        document.querySelectorAll('img.lazy').forEach(lazyImage => {
            lazyImageObserver.observe(lazyImage);
        });
    }
}

/**
 * Initialize mobile menu toggle functionality
 */
function initMobileMenu() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (!menuToggle || !mobileMenu) return;
    
    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('is-active');
        menuToggle.setAttribute('aria-expanded', 
            menuToggle.getAttribute('aria-expanded') === 'false' ? 'true' : 'false'
        );
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
            mobileMenu.classList.remove('is-active');
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    });
}
