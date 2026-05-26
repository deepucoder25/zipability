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
<section class="contact-section py-5 bg-light">
    <div class="container my-4">
        <div class="row g-5">
            <!-- Contact Details -->
            <div class="col-lg-5">
                <div class="contact-details-box bg-white p-4 p-md-5 rounded-4 shadow-sm h-100">
                    <h2 class="fw-bold mb-4" style="color: #073c91;">Get In Touch</h2>
                    <p class="text-muted mb-5">Have questions or need a custom quote? Reach out to us, and our team will get back to you as soon as possible.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 60px; height: 60px; font-size: 1.5rem; background: rgba(7, 60, 145, 0.1); color: #073c91;">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Head Office</h6>
                            <p class="mb-0 text-muted"><?= $address ?></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 60px; height: 60px; font-size: 1.5rem; background: rgba(25, 135, 84, 0.1); color: #198754;">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Phone Number</h6>
                            <p class="mb-0 text-muted"><a href="<?= $phonehtml ?>" class="text-decoration-none text-muted"><?= $phone ?></a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 60px; height: 60px; font-size: 1.5rem; background: rgba(255, 193, 7, 0.1); color: #ffc107;">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email Address</h6>
                            <p class="mb-0 text-muted"><a href="<?= $mailhtml ?>" class="text-decoration-none text-muted"><?= $mail ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-box bg-white p-4 p-md-5 rounded-4 shadow-sm h-100 border-top border-4" style="border-color: #ffb800 !important;">
                    <h2 class="fw-bold mb-4" style="color: #073c91;">Send Us A Message</h2>
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Your Name *</label>
                                <input type="text" name="name" class="form-control py-2" placeholder="John Doe"  style="border-radius: 8px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control py-2" placeholder="Mobile Number"  style="border-radius: 8px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Email Address</label>
                                <input type="email" name="email" class="form-control py-2" placeholder="hello@example.com" style="border-radius: 8px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Your Message</label>
                                <textarea name="message" class="form-control py-2" rows="5" placeholder="How can we help you?" style="border-radius: 8px;"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="theme-btn w-100 py-3" style="border-radius: 8px; font-size: 1.1rem;">
                                    <i class="bi bi-send me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
