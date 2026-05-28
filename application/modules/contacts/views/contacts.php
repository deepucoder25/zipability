<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Contact Us</span>
        </nav>
        <h1><span class="bc-title-white">Contact</span> <span class="bc-title-orange">Us</span></h1>
        <p class="bc-desc">Get in touch with <?= $company3 ?> Packers and Movers. We are here to help you 24/7 with your relocation needs.</p>
        <div class="bc-features">
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-clock-history"></i></div>
                <div class="pill-text"><strong>Since <?= $startYear ?></strong><small><?= $experience ?> Years Legacy</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-patch-check-fill"></i></div>
                <div class="pill-text"><strong>ISO Certified</strong><small>Licensed &amp; Verified</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-people-fill"></i></div>
                <div class="pill-text"><strong>Expert Team</strong><small>CMD to Branch Staff</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="pill-text"><strong>Pan-India</strong><small>100+ Branches</small></div>
            </div>
        </div>
    </div>
    <div class="bc-wave-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 64" preserveAspectRatio="none">
            <path d="M0,30 C480,64 960,0 1440,30 L1440,64 L0,64 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<!-- Contact Details & Form Section -->
<section class="contact-section py-5">
    <div class="container my-4">
        <div class="row g-4">
            <!-- Contact Details -->
            <div class="col-lg-5">
                <div class="contact-details-box p-3 p-md-4 h-100">
                    <!-- Live Ribbon -->
                    <div class="live-status-ribbon">
                        <div class="live-pulse-dot"></div>
                        <span>Live Shifting Support</span>
                    </div>

                    <h2>Get In Touch</h2>
                    <p class="text-muted mb-4">Have questions or need a custom quote? Reach out to us, and our team will get back to you as soon as possible.</p>
                    
                    <!-- Detail Cards Flow -->
                    <div class="contact-item-card">
                        <div class="contact-icon-wrap icon-office">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-title">Head Office</div>
                            <p class="contact-info-value"><?= $address ?></p>
                        </div>
                    </div>
                    
                    <a href="<?= $phonehtml ?>" class="contact-item-card">
                        <div class="contact-icon-wrap icon-phone">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-title">Phone Number</div>
                            <p class="contact-info-value"><?= $phone ?></p>
                        </div>
                    </a>
                    
                    <a href="<?= $mailhtml ?>" class="contact-item-card">
                        <div class="contact-icon-wrap icon-email">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-title">Email Address</div>
                            <p class="contact-info-value"><?= $mail ?></p>
                        </div>
                    </a>

                    <div class="contact-item-card">
                        <div class="contact-icon-wrap icon-hours">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-title">Business Hours</div>
                            <p class="contact-info-value">Monday – Sunday: 24/7 Shifting Support</p>
                        </div>
                    </div>

                    <!-- Social Quick Connections -->
                    <div class="contact-social-bar">
                        <span>Connect:</span>
                        <a href="<?= $facebookhtml ?>"  class="social-circle-link social-fb" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="<?= $twitterhtml ?>"  class="social-circle-link social-tw" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="<?= $linkedinhtml ?>"  class="social-circle-link social-ln" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="<?= $youtubehtml ?>"  class="social-circle-link social-yt" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-box p-3 p-md-4 h-100">
                    <h2 class="fw-bold mb-4">Send Us A Message</h2>
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Your Name *</label>
                                <input type="text" name="name" class="form-control py-2" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control py-2" placeholder="Mobile Number">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Email Address</label>
                                <input type="email" name="email" class="form-control py-2" placeholder="hello@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Your Message</label>
                                <textarea name="message" class="form-control py-2" rows="5" placeholder="How can we help you?"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="theme-btn w-100 py-3">
                                    <i class="bi bi-send me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Process Timeline Section -->
        <div class="row mt-5 pt-3">
            <div class="col-12">
                <div class="process-timeline-wrapper">
                    <h3 class="timeline-section-title">Our 4-Step Hassle-Free Shifting Process</h3>
                    <div class="row g-4 mt-2">
                        <!-- Step 1 -->
                        <div class="col-6 col-md-3">
                            <div class="timeline-step-card">
                                <div class="timeline-icon-wrap">
                                    <i class="bi bi-pencil-square"></i>
                                    <div class="timeline-number">1</div>
                                </div>
                                <h4 class="timeline-title">Quick Booking</h4>
                                <p class="timeline-desc">Fill out the quick quote form or call our support line directly.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col-6 col-md-3">
                            <div class="timeline-step-card">
                                <div class="timeline-icon-wrap">
                                    <i class="bi bi-box-seam-fill"></i>
                                    <div class="timeline-number">2</div>
                                </div>
                                <h4 class="timeline-title">Safe Packing</h4>
                                <p class="timeline-desc">Multi-layer bubble wrapping and heavy carton protection.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="col-6 col-md-3">
                            <div class="timeline-step-card">
                                <div class="timeline-icon-wrap">
                                    <i class="bi bi-truck"></i>
                                    <div class="timeline-number">3</div>
                                </div>
                                <h4 class="timeline-title">Secure Transit</h4>
                                <p class="timeline-desc">Enclosed container transport driven by certified experts.</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="col-6 col-md-3">
                            <div class="timeline-step-card">
                                <div class="timeline-icon-wrap">
                                    <i class="bi bi-house-heart-fill"></i>
                                    <div class="timeline-number">4</div>
                                </div>
                                <h4 class="timeline-title">Doorstep Delivery</h4>
                                <p class="timeline-desc">Careful unloading, unpacking, and placement in your new home.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
