<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Photo Gallery</span>
        </nav>
        <h1><span class="bc-title-white">Photo</span> <span class="bc-title-orange">Gallery</span></h1>
        <p class="bc-desc">Explore visual highlights of our packaging quality, warehouse storage, specialized container carriers, and relocation operations.</p>
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

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">Our Relocation Operations in Action</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Take a look at our on-field photos demonstrating our dedication to safety, careful packaging, and organized logistics. Our photo gallery highlights our packing standards, secure warehouse storage, and specialized fleets.
                        </p>
                    </div>

                    <!-- Photo Gallery Grid -->
                    <div class="row">
                        <!-- Photo 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden photo-gallery-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/home-shifting-services.webp') ?>" class="w-100 img-fluid gallery-card-img" alt="Household Packing and Shifting Services">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 bg-dark-50 transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-hover-icon"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge bg-success-soft text-success mb-2 gallery-badge">Household Packing</span>
                                    <h5 class="fw-bold mb-1 gallery-card-title">Multi-Layer Furniture Protection</h5>
                                    <p class="small text-muted mb-0">Careful packing of household furniture using bubble wrap and edge guards to prevent transit scratches.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Photo 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden photo-gallery-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/car-transportation-services.webp') ?>" class="w-100 img-fluid gallery-card-img" alt="Car Transportation Carriers">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 bg-dark-50 transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-hover-icon"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge bg-success-soft text-success mb-2 gallery-badge">Car Carrier</span>
                                    <h5 class="fw-bold mb-1 gallery-card-title">Enclosed Double-Deck Car Transport</h5>
                                    <p class="small text-muted mb-0">Loading passenger cars inside fully enclosed containers to protect them from weather and road debris.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Photo 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden photo-gallery-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/bike-transportation-services.webp') ?>" class="w-100 img-fluid gallery-card-img" alt="Two-Wheeler Bike Shifting">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 bg-dark-50 transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-hover-icon"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge bg-success-soft text-success mb-2 gallery-badge">Bike Shifting</span>
                                    <h5 class="fw-bold mb-1 gallery-card-title">Scratch-Free Two-Wheeler Packing</h5>
                                    <p class="small text-muted mb-0">Secure wheel lock straps and heavy foam sheeting applied to bikes before long-distance transport.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Photo 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden photo-gallery-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/loading.webp') ?>" class="w-100 img-fluid gallery-card-img" alt="Cargo Loading Operations">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 bg-dark-50 transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-hover-icon"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge bg-success-soft text-success mb-2 gallery-badge">Cargo Loading</span>
                                    <h5 class="fw-bold mb-1 gallery-card-title">Organized Goods Stacking &amp; Loading</h5>
                                    <p class="small text-muted mb-0">Professional loaders stacking boxes systematically inside our trucks to ensure stability during transit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'photo-gallery']); ?>
            </div>
        </div>
    </div>
</section>



