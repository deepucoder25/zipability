<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Fetch site-wide dynamic company settings (loaded from MX_Controller or system context)
$companyName = isset($company3) ? $company3 : 'MyCompany';
$companyPhone = isset($phone) ? $phone : '+91 ';
$companyPhoneHtml = isset($phonehtml) ? $phonehtml : 'tel:+';
$companyEmail = isset($mail) ? $mail : '';
$companyEmailHtml = isset($mailhtml) ? $mailhtml : '';
$companyExperience = isset($experience) ? $experience : '';
$companyLocation = isset($addressRegion) ? $addressRegion : '';
$companyState = isset($companystate) ? $companystate : '';
?>

<section class="about-section py-5">
    <!-- Background Decor Grid Patterns -->
    <div class="about-decor decor-top-right"></div>
    <div class="about-decor decor-bottom-left"></div>

    <div class="container position-relative about-z2">
        <div class="row align-items-center g-4 g-lg-5">
            
            <!-- Left Side: Image Showcase -->
            <div class="col-lg-6 col-12">
                <div class="about-image-wrap position-relative">
                    <div class="about-img-bg-shape"></div>
                    <img src="<?= base_url('assets/images/about/about-showcase.webp') ?>" 
                         alt="Reliable Packers and Movers Service - <?= htmlspecialchars($companyName) ?>" 
                         class="about-img img-fluid rounded-4 shadow-lg position-relative about-z2" 
                         loading="lazy">
                    
                    <!-- Floating Experience Badge -->
                    <div class="about-experience-badge d-flex align-items-center shadow-lg">
                        <div class="exp-number"><?= htmlspecialchars($companyExperience) ?></div>
                        <div class="exp-text">
                            <span class="d-block text-uppercase font-weight-bold">Years of</span>
                            <span class="d-block text-uppercase">Trusted service</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content Details -->
            <div class="col-lg-6 col-12">
                <div class="about-content">
                    
                    <!-- Subheading Badge -->
                    <div class="about-badge-wrap d-flex align-items-center mb-3">
                        <span class="about-badge-line"></span>
                        <span class="about-pill-badge text-uppercase">Who We Are</span>
                    </div>

                    <!-- SEO-Friendly Heading -->
                    <h2 class="about-title mb-3">
                        Reliable Shifting &amp; Relocation Services by <span class="text-primary-blue"><?= htmlspecialchars($companyName) ?></span>
                    </h2>

                    <!-- Descriptive Paragraphs -->
                    <p class="about-desc-lead mb-3">
                        Moving to a new home, office, or transporting vehicles can feel overwhelming. At <strong><?= htmlspecialchars($companyName) ?></strong>, we are committed to making your relocation journey smooth, secure, and stress-free. Whether shifting locally within <?= htmlspecialchars($companyLocation) ?> or relocating across <?= htmlspecialchars($companyState) ?> and all over India, our team handles every aspect of your move with extreme care and precision.
                    </p>
                    
                    <p class="about-desc mb-4">
                        With over <strong><?= htmlspecialchars($companyExperience) ?> years</strong> of professional experience, we have established ourselves as one of India's most trusted packing and moving brands. We use industry-standard packaging materials, modern cargo carriers, and structured loading systems to ensure all your precious goods and vehicles reach their destination safely, on time, and damage-free.
                    </p>

                    <!-- Features List Grid -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 col-12">
                            <div class="about-feature-item d-flex align-items-center">
                                <div class="feature-icon-circle mr-3">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <span class="feature-text">Fully Insured Shifting</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="about-feature-item d-flex align-items-center">
                                <div class="feature-icon-circle mr-3">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <span class="feature-text">Modern GPS Fleet</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="about-feature-item d-flex align-items-center">
                                <div class="feature-icon-circle mr-3">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <span class="feature-text">Trained Packing Crew</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="about-feature-item d-flex align-items-center">
                                <div class="feature-icon-circle mr-3">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <span class="feature-text">On-Time Safe Delivery</span>
                            </div>
                        </div>
                    </div>

                    <!-- Call To Actions -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="<?= site_url('about-us') ?>" class="btn btn-primary-blue shadow-sm d-flex align-items-center">
                            Read More About Us
                            <i class="bi bi-arrow-right-short ml-2 font-weight-bold about-cta-icon"></i>
                        </a>
                        <div class="about-contact-wrap d-flex align-items-center ml-md-4 mt-2 mt-md-0">
                            <div class="about-contact-icon d-flex align-items-center justify-content-center">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="about-contact-details ml-2">
                                <span class="d-block contact-label text-muted">Talk to an Expert</span>
                                <a href="<?= htmlspecialchars($companyPhoneHtml) ?>" class="contact-number font-weight-bold text-decoration-none">
                                    <?= htmlspecialchars($companyPhone) ?>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
