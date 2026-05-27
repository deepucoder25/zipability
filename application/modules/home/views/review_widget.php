<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="testimonial-section py-5 bg-white">
    <div class="container">
        
        <!-- Header -->
        <div class="text-center mb-5">
            <!-- Eyebrow -->
            <div class="testimonial-eyebrow d-flex align-items-center justify-content-center">
                <span class="me-2">—</span> CUSTOMER REVIEWS <span class="ms-2">—</span>
            </div>
            <!-- Title -->
            <h2 class="testimonial-title">
                Trusted by Riders. Proven by<br>
                <span class="accent-text">On-Time Deliveries.</span>
            </h2>
        </div>

        <!-- Slider Wrapper -->
        <div class="testimonial-slider-wrapper">
            <!-- Left Arrow Button -->
            <button class="testimonial-arrow prev-btn" id="testimonial-prev-btn" aria-label="Previous testimonial">
                <i class="bi bi-arrow-left"></i>
            </button>

            <!-- Viewport -->
            <div class="testimonial-viewport">
                <div class="testimonial-track" id="testimonial-slider-track">
                    
                    <!-- Slide 1: Rohit Sharma -->
                    <div class="testimonial-slide-card">
                        <div class="row align-items-center g-4">
                            <!-- Left Content Col -->
                            <div class="col-lg-8 col-12">
                                <div class="d-flex align-items-start mb-3 flex-column flex-sm-row text-center text-sm-start">
                                    <img src="<?= base_url('assets/images/reviews/rohit_avatar.png') ?>" alt="Rohit Sharma" class="testimonial-avatar shadow-sm mb-3 mb-sm-0 mx-auto mx-sm-0 me-sm-4">
                                    <div class="d-flex flex-column">
                                        <div class="testimonial-quote-icon mb-1">“</div>
                                        <p class="testimonial-text mb-3">
                                            Zipability made my bike relocation from Bangalore to Delhi incredibly smooth. The pickup was on time, the team was professional, and my bike reached in perfect condition. Highly recommended!
                                        </p>
                                        <!-- Rating block -->
                                        <div class="d-flex align-items-center justify-content-center justify-content-sm-start mb-3">
                                            <div class="testimonial-stars me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="testimonial-rating-num">5.0</span>
                                        </div>
                                        <!-- Name & Route -->
                                        <h4 class="testimonial-name">Rohit Sharma</h4>
                                        <span class="testimonial-route">Bangalore to Delhi</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Right Image Col -->
                            <div class="col-lg-4 col-12 text-center">
                                <img src="<?= base_url('assets/images/reviews/sports_bike.png') ?>" alt="Relocated Sports Bike" class="testimonial-product-img img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Priya Mehta -->
                    <div class="testimonial-slide-card">
                        <div class="row align-items-center g-4">
                            <!-- Left Content Col -->
                            <div class="col-lg-8 col-12">
                                <div class="d-flex align-items-start mb-3 flex-column flex-sm-row text-center text-sm-start">
                                    <!-- Priya Avatar SVG -->
                                    <div class="mb-3 mb-sm-0 mx-auto mx-sm-0 me-sm-4 shadow-sm" style="width: 75px; height: 75px; flex-shrink: 0; border-radius: 50%; overflow: hidden;">
                                        <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;">
                                            <circle cx="30" cy="30" r="30" fill="url(#priyaGradSlider)"/>
                                            <path d="M12 28 C 12 15, 48 15, 48 28 C 48 38, 44 48, 44 48 L 16 48 C 16 48, 12 38, 12 28 Z" fill="#2d1c18"/>
                                            <circle cx="30" cy="27" r="11" fill="#fed8cc"/>
                                            <path d="M19 22 C 22 17, 38 17, 41 22 C 43 25, 40 20, 30 20 C 20 20, 17 25, 19 22 Z" fill="#2d1c18"/>
                                            <path d="M19 22 C 19 22, 23 23, 25 26 C 25 26, 22 25, 19 22 Z" fill="#2d1c18"/>
                                            <path d="M41 22 C 41 22, 37 23, 35 26 C 35 26, 38 25, 41 22 Z" fill="#2d1c18"/>
                                            <path d="M16 48 C 16 39, 44 39, 44 48" fill="#e85b82" stroke="#fed8cc" stroke-width="1.5"/>
                                            <defs>
                                                <linearGradient id="priyaGradSlider" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0%" stop-color="#ffa0bd"/>
                                                    <stop offset="100%" stop-color="#ff608d"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="testimonial-quote-icon mb-1">“</div>
                                        <p class="testimonial-text mb-3">
                                            Fantastic car transport service. Excellent tracking and communication throughout. The vehicle arrived in pristine condition, and the pricing was super competitive!
                                        </p>
                                        <!-- Rating block -->
                                        <div class="d-flex align-items-center justify-content-center justify-content-sm-start mb-3">
                                            <div class="testimonial-stars me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="testimonial-rating-num">5.0</span>
                                        </div>
                                        <!-- Name & Route -->
                                        <h4 class="testimonial-name">Priya Mehta</h4>
                                        <span class="testimonial-route">Mumbai to Pune</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Right Image Col -->
                            <div class="col-lg-4 col-12 text-center">
                                <img src="<?= base_url('assets/images/reviews/sports_bike.png') ?>" alt="Relocated Vehicle" class="testimonial-product-img img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Amit Verma -->
                    <div class="testimonial-slide-card">
                        <div class="row align-items-center g-4">
                            <!-- Left Content Col -->
                            <div class="col-lg-8 col-12">
                                <div class="d-flex align-items-start mb-3 flex-column flex-sm-row text-center text-sm-start">
                                    <!-- Amit Avatar SVG -->
                                    <div class="mb-3 mb-sm-0 mx-auto mx-sm-0 me-sm-4 shadow-sm" style="width: 75px; height: 75px; flex-shrink: 0; border-radius: 50%; overflow: hidden;">
                                        <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;">
                                            <circle cx="30" cy="30" r="30" fill="url(#amitGradSlider)"/>
                                            <circle cx="30" cy="26" r="11" fill="#fedcbe"/>
                                            <path d="M19 22 C 19 16, 41 16, 41 22 C 41 14, 19 14, 19 22 Z" fill="#1f2421"/>
                                            <path d="M19 22 C 22 18, 38 18, 41 22" stroke="#1f2421" stroke-width="3" stroke-linecap="round"/>
                                            <rect x="22" y="23" width="7" height="5" rx="2" stroke="#1f2421" stroke-width="1.5" fill="none"/>
                                            <rect x="31" y="23" width="7" height="5" rx="2" stroke="#1f2421" stroke-width="1.5" fill="none"/>
                                            <line x1="29" y1="25" x2="31" y2="25" stroke="#1f2421" stroke-width="1.5"/>
                                            <path d="M16 48 C 16 39, 44 39, 44 48" fill="#0a4ebd" stroke="#fedcbe" stroke-width="1.5"/>
                                            <defs>
                                                <linearGradient id="amitGradSlider" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0%" stop-color="#6fa3fb"/>
                                                    <stop offset="100%" stop-color="#0a4ebd"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="testimonial-quote-icon mb-1">“</div>
                                        <p class="testimonial-text mb-3">
                                            The packers and movers team handled our entire household move without a hitch. Very quick, extremely well-behaved, and completely transparent with costs. Highly recommended!
                                        </p>
                                        <!-- Rating block -->
                                        <div class="d-flex align-items-center justify-content-center justify-content-sm-start mb-3">
                                            <div class="testimonial-stars me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="testimonial-rating-num">5.0</span>
                                        </div>
                                        <!-- Name & Route -->
                                        <h4 class="testimonial-name">Amit Verma</h4>
                                        <span class="testimonial-route">Delhi to Gurgaon</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Right Image Col -->
                            <div class="col-lg-4 col-12 text-center">
                                <img src="<?= base_url('assets/images/reviews/sports_bike.png') ?>" alt="Household Relocation" class="testimonial-product-img img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Arrow Button -->
            <button class="testimonial-arrow next-btn" id="testimonial-next-btn" aria-label="Next testimonial">
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>

        <!-- Dot pagination indicators -->
        <div class="testimonial-dots mt-4" id="testimonial-slider-dots">
            <span class="testimonial-dot active" data-index="0"></span>
            <span class="testimonial-dot" data-index="1"></span>
            <span class="testimonial-dot" data-index="2"></span>
        </div>

    </div>
</section>

<!-- Lightweight Vanilla JS Slider Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('testimonial-slider-track');
    const prevBtn = document.getElementById('testimonial-prev-btn');
    const nextBtn = document.getElementById('testimonial-next-btn');
    const dotsContainer = document.getElementById('testimonial-slider-dots');
    
    let currentIndex = 0;
    const slidesCount = track.children.length;
    const dots = Array.from(dotsContainer.children);

    function updateSlider(index) {
        if (index < 0) index = slidesCount - 1; // Wrap around to end
        if (index >= slidesCount) index = 0;   // Wrap around to start
        
        currentIndex = index;
        
        // Translate the track by the current slide width percentage
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots state
        dots.forEach((dot, idx) => {
            if (idx === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    if (prevBtn && nextBtn && track) {
        prevBtn.addEventListener('click', () => {
            updateSlider(currentIndex - 1);
        });
        
        nextBtn.addEventListener('click', () => {
            updateSlider(currentIndex + 1);
        });
        
        // Click on dots directly
        dots.forEach(dot => {
            dot.addEventListener('click', (e) => {
                const targetIndex = parseInt(e.target.getAttribute('data-index'));
                updateSlider(targetIndex);
            });
        });
        
        // Auto slide every 7 seconds
        let autoSlideInterval = setInterval(() => {
            updateSlider(currentIndex + 1);
        }, 7000);
        
        // Stop auto slide on user interaction
        const resetInterval = () => {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(() => {
                updateSlider(currentIndex + 1);
            }, 7000);
        };
        
        prevBtn.addEventListener('click', resetInterval);
        nextBtn.addEventListener('click', resetInterval);
        dots.forEach(dot => dot.addEventListener('click', resetInterval));
    }
});
</script>
