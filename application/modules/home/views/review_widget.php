<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Fallback dynamic variables if not set in controllers or MX_Controller
$companyName = isset($company3) ? $company3 : 'MyCompany';
?>

<section class="reviews-section py-5">
    <!-- Background Decor Elements -->
    <div class="reviews-decor decor-top-left"></div>
    <div class="reviews-decor decor-bottom-right"></div>

    <div class="container position-relative about-z2">
        
        <!-- Header -->
        <div class="reviews-header-wrap text-center mb-4">
            
            <!-- Graphic Speech Bubble & Stars SVG -->
            <svg width="80" height="50" viewBox="0 0 80 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="reviews-header-icon mb-2">
                <!-- Stars on Left -->
                <path d="M12 18 L13.5 21 L16.5 21.2 L14.2 23.2 L15 26.2 L12 24.5 L9 26.2 L9.8 23.2 L7.5 21.2 L10.5 21 Z" fill="#0a4ebd" opacity="0.3"/>
                <path d="M22 10 L23 12 L25 12.1 L23.5 13.5 L24 15.5 L22 14.3 L20 15.5 L20.5 13.5 L19 12.1 L21 12 Z" fill="#0a4ebd" opacity="0.6"/>
                <path d="M15 32 L15.8 33.5 L17.5 33.6 L16.2 34.7 L16.6 36.3 L15 35.3 L13.4 36.3 L13.8 34.7 L12.5 33.6 L14.2 33.5 Z" fill="#0a4ebd" opacity="0.4"/>
                
                <!-- Stars on Right -->
                <path d="M68 18 L69.5 21 L72.5 21.2 L70.2 23.2 L71 26.2 L68 24.5 L65 26.2 L65.8 23.2 L63.5 21.2 L66.5 21 Z" fill="#0a4ebd" opacity="0.3"/>
                <path d="M58 10 L59 12 L61 12.1 L59.5 13.5 L60 15.5 L58 14.3 L56 15.5 L56.5 13.5 L55 12.1 L57 12 Z" fill="#0a4ebd" opacity="0.6"/>
                <path d="M65 32 L65.8 33.5 L67.5 33.6 L66.2 34.7 L66.6 36.3 L65 35.3 L63.4 36.3 L63.8 34.7 L62.5 33.6 L64.2 33.5 Z" fill="#0a4ebd" opacity="0.4"/>

                <!-- Main Speech Bubble Outer (small) -->
                <path d="M48 28 C48 31.5 44.5 34 40.5 34 C39.5 34 38.5 33.8 37.5 33.5 L34 35.5 L34.5 32.5 C33.5 31.5 33 30 33 28 C33 24.5 36.5 22 40.5 22 C44.5 22 48 24.5 48 28 Z" stroke="#0a4ebd" stroke-width="2" fill="#ffffff"/>
                
                <!-- Main Speech Bubble (large) -->
                <circle cx="36" cy="22" r="14" fill="#ffffff" stroke="#0a4ebd" stroke-width="2"/>
                <!-- Star in Main Bubble -->
                <path d="M36 15 L38.2 19.5 L43 20.2 L39.5 23.6 L40.3 28.4 L36 26.1 L31.7 28.4 L32.5 23.6 L29 20.2 L33.8 19.5 Z" fill="#0a4ebd"/>
            </svg>

            <!-- Pill Badge -->
            <div class="reviews-badge-container d-flex align-items-center justify-content-center mb-2">
                <span class="badge-line line-left"></span>
                <span class="reviews-pill-badge">REVIEWS</span>
                <span class="badge-line line-right"></span>
            </div>

            <!-- Title & Truck Divider -->
            <h2 class="reviews-section-title">What Our Customers Say</h2>
            <div class="reviews-title-truck-wrap">
                <div class="truck-icon-container">
                    <span class="speed-line line-1"></span>
                    <span class="speed-line line-2"></span>
                    <span class="speed-line line-3"></span>
                    <i class="bi bi-truck truck-icon"></i>
                </div>
            </div>
            
            <p class="reviews-section-subtitle">
                Real experiences from our happy customers who trust us for their relocation and transportation needs.
            </p>
        </div>

        <!-- Slider Section -->
        <div class="reviews-slider-container position-relative mb-4">
            
            <!-- Left Arrow Button -->
            <button class="slider-arrow prev-arrow" id="rev-prev-btn" aria-label="Previous review">
                <i class="bi bi-chevron-left"></i>
            </button>

            <!-- Slider Viewport -->
            <div class="reviews-slider-viewport">
                <div class="reviews-slider-track" id="rev-slider-track">
                    
                    <!-- Card 1: Rohit Sharma -->
                    <div class="review-card">
                        <!-- Top quote decoration -->
                        <span class="quote-decor top-quote"><i class="bi bi-quote"></i></span>
                        
                        <!-- Stars -->
                        <div class="review-stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <!-- User Profile Info -->
                        <div class="review-user-row d-flex align-items-center mb-3">
                            <img src="<?= base_url('assets/images/reviews/rohit.webp') ?>" 
                                 alt="Rohit Sharma Relocation Review" 
                                 class="review-avatar img-fluid">
                            <div class="review-user-details">
                                <h3 class="review-username">
                                    Rohit Sharma <i class="bi bi-patch-check-fill verified-badge"></i>
                                </h3>
                                <span class="review-location">
                                    <i class="bi bi-geo-alt-fill location-icon"></i> Bengaluru, India
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <p class="review-text">
                            Excellent bike transportation service! My bike was delivered safely and on time. Very professional team.
                        </p>

                        <!-- Bottom quote decoration -->
                        <span class="quote-decor bottom-quote"><i class="bi bi-quote"></i></span>
                    </div>

                    <!-- Card 2: Priya Mehta -->
                    <div class="review-card">
                        <!-- Top quote decoration -->
                        <span class="quote-decor top-quote"><i class="bi bi-quote"></i></span>
                        
                        <!-- Stars -->
                        <div class="review-stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <!-- User Profile Info -->
                        <div class="review-user-row d-flex align-items-center mb-3">
                            <!-- SVG Avatar for Priya Mehta -->
                            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="review-avatar-svg review-avatar">
                                <circle cx="30" cy="30" r="30" fill="url(#priyaGrad)"/>
                                <path d="M12 28 C 12 15, 48 15, 48 28 C 48 38, 44 48, 44 48 L 16 48 C 16 48, 12 38, 12 28 Z" fill="#2d1c18"/>
                                <circle cx="30" cy="27" r="11" fill="#fed8cc"/>
                                <path d="M19 22 C 22 17, 38 17, 41 22 C 43 25, 40 20, 30 20 C 20 20, 17 25, 19 22 Z" fill="#2d1c18"/>
                                <path d="M19 22 C 19 22, 23 23, 25 26 C 25 26, 22 25, 19 22 Z" fill="#2d1c18"/>
                                <path d="M41 22 C 41 22, 37 23, 35 26 C 35 26, 38 25, 41 22 Z" fill="#2d1c18"/>
                                <path d="M16 48 C 16 39, 44 39, 44 48" fill="#e85b82" stroke="#fed8cc" stroke-width="1.5"/>
                                <defs>
                                    <linearGradient id="priyaGrad" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#ffa0bd"/>
                                        <stop offset="100%" stop-color="#ff608d"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="review-user-details">
                                <h3 class="review-username">
                                    Priya Mehta <i class="bi bi-patch-check-fill verified-badge"></i>
                                </h3>
                                <span class="review-location">
                                    <i class="bi bi-geo-alt-fill location-icon"></i> Mumbai, India
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <p class="review-text">
                            Smooth car transportation experience. The team kept me updated throughout the process. Highly recommended!
                        </p>

                        <!-- Bottom quote decoration -->
                        <span class="quote-decor bottom-quote"><i class="bi bi-quote"></i></span>
                    </div>

                    <!-- Card 3: Amit Verma -->
                    <div class="review-card">
                        <!-- Top quote decoration -->
                        <span class="quote-decor top-quote"><i class="bi bi-quote"></i></span>
                        
                        <!-- Stars -->
                        <div class="review-stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <!-- User Profile Info -->
                        <div class="review-user-row d-flex align-items-center mb-3">
                            <!-- SVG Avatar for Amit Verma -->
                            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="review-avatar-svg review-avatar">
                                <circle cx="30" cy="30" r="30" fill="url(#amitGrad)"/>
                                <circle cx="30" cy="26" r="11" fill="#fedcbe"/>
                                <path d="M19 22 C 19 16, 41 16, 41 22 C 41 14, 19 14, 19 22 Z" fill="#1f2421"/>
                                <path d="M19 22 C 22 18, 38 18, 41 22" stroke="#1f2421" stroke-width="3" stroke-linecap="round"/>
                                <rect x="22" y="23" width="7" height="5" rx="2" stroke="#1f2421" stroke-width="1.5" fill="none"/>
                                <rect x="31" y="23" width="7" height="5" rx="2" stroke="#1f2421" stroke-width="1.5" fill="none"/>
                                <line x1="29" y1="25" x2="31" y2="25" stroke="#1f2421" stroke-width="1.5"/>
                                <path d="M16 48 C 16 39, 44 39, 44 48" fill="#0a4ebd" stroke="#fedcbe" stroke-width="1.5"/>
                                <defs>
                                    <linearGradient id="amitGrad" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#6fa3fb"/>
                                        <stop offset="100%" stop-color="#0a4ebd"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="review-user-details">
                                <h3 class="review-username">
                                    Amit Verma <i class="bi bi-patch-check-fill verified-badge"></i>
                                </h3>
                                <span class="review-location">
                                    <i class="bi bi-geo-alt-fill location-icon"></i> Delhi, India
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <p class="review-text">
                            Our office relocation was seamless and well-organized. Great service and very cooperative staff.
                        </p>

                        <!-- Bottom quote decoration -->
                        <span class="quote-decor bottom-quote"><i class="bi bi-quote"></i></span>
                    </div>

                </div>
            </div>

            <!-- Right Arrow Button -->
            <button class="slider-arrow next-arrow" id="rev-next-btn" aria-label="Next review">
                <i class="bi bi-chevron-right"></i>
            </button>

        </div>

        <!-- Bottom Trust/Rating Bar -->
        <div class="reviews-trust-bar mx-auto">
            <div class="row align-items-center g-3 text-center text-md-start">
                
                <!-- Stat 1 -->
                <div class="col-lg-3 col-md-6 col-6 d-flex justify-content-center justify-content-md-start">
                    <div class="trust-stat-item d-flex align-items-center">
                        <div class="trust-icon-box box-star shadow-sm">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="trust-text-box">
                            <h4 class="trust-value">4.9/5</h4>
                            <span class="trust-label">Average Rating</span>
                        </div>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="col-lg-3 col-md-6 col-6 d-flex justify-content-center justify-content-md-start">
                    <div class="trust-stat-item d-flex align-items-center">
                        <div class="trust-icon-box box-users shadow-sm">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="trust-text-box">
                            <h4 class="trust-value">10,000+</h4>
                            <span class="trust-label">Hiappy Customers</span>
                        </div>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="col-lg-3 col-md-6 col-6 d-flex justify-content-center justify-content-md-start">
                    <div class="trust-stat-item d-flex align-items-center">
                        <div class="trust-icon-box box-shield shadow-sm">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="trust-text-box">
                            <h4 class="trust-value">100%</h4>
                            <span class="trust-label">Veritied-Reviews.</span>
                        </div>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="col-lg-3 col-md-6 col-6 d-flex justify-content-center justify-content-md-start">
                    <div class="trust-stat-item d-flex align-items-center">
                        <div class="trust-icon-box box-recommend shadow-sm">
                            <i class="bi bi-chat-right-quote-fill"></i>
                        </div>
                        <div class="trust-text-box">
                            <h4 class="trust-value">98%</h4>
                            <span class="trust-label">Woud Recomand Us</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Inline JavaScript for Touch & Click Slide Actions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('rev-slider-track');
    const prevBtn = document.getElementById('rev-prev-btn');
    const nextBtn = document.getElementById('rev-next-btn');
    let currentIndex = 0;
    const cardCount = track.children.length;
    
    function updateSlider(index) {
        if (index < 0) index = 0;
        if (index >= cardCount) index = cardCount - 1;
        
        currentIndex = index;
        
        // Calculate sliding position based on dynamic element widths
        const cardWidth = track.children[0].offsetWidth;
        const gap = 20; // Matches grid gap
        track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
        
        // Arrow opacities
        prevBtn.style.opacity = currentIndex === 0 ? '0.35' : '1';
        nextBtn.style.opacity = currentIndex === cardCount - 1 ? '0.35' : '1';
    }
    
    if (prevBtn && nextBtn && track) {
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) updateSlider(currentIndex - 1);
        });
        
        nextBtn.addEventListener('click', () => {
            if (currentIndex < cardCount - 1) updateSlider(currentIndex + 1);
        });
        
        // Reset translation on window resizing for desktop static display
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 992) {
                track.style.transform = 'none';
            } else {
                updateSlider(currentIndex);
            }
        });
        
        // Initialize
        if (window.innerWidth < 992) {
            updateSlider(0);
        }
    }
});
</script>
