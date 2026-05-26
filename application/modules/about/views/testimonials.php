<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Testimonials</span>
        </nav>
        <h1><span class="bc-title-white">Client</span> <span class="bc-title-orange">Testimonials</span></h1>
        <p class="bc-desc">Read the authentic experiences of families, corporates, and professionals who chose <?= $company3 ?> for their relocation needs.</p>
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
                    
                    <h2 class="service-section-title">What Our Customers Say</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At <strong><?= $company3 ?></strong>, client satisfaction is our primary reward. Over our 30+ year legacy, we have successfully relocated thousands of families, offices, and vehicles across India. Below are some reviews and testimonials from our valued clients.
                        </p>
                    </div>

                    <!-- Testimonials Grid -->
                    <div class="row">
                        <!-- Testimonial 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative transition-hover testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote" style="font-size: 3rem;"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Excellent Household Shifting</h6>
                                <p class="small text-muted mb-3 italic-text">
                                    "I shifted my entire household goods from Delhi to Bangalore. The crew arrived on time and packed everything carefully using double-layered bubble wrap. Not even a single glass item broke during the transit. Highly recommended!"
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div>
                                        <strong class="d-block small">Ramanuj Sharma</strong>
                                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">Delhi to Bangalore</small>
                                    </div>
                                    <span class="badge bg-success-soft text-success rounded-pill px-2 py-1 small" style="font-size: 0.7rem;">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative transition-hover testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote" style="font-size: 3rem;"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Safe Car &amp; Bike Carrier Service</h6>
                                <p class="small text-muted mb-3 italic-text">
                                    "We relocated our Hyundai i20 and Royal Enfield from Mumbai to Gurgaon. <?= $company3 ?> used a dedicated car carrier and delivered both vehicles door-to-door without a single scratch. Very transparent pricing as well."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div>
                                        <strong class="d-block small">Priya Nair</strong>
                                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">Mumbai to Gurgaon</small>
                                    </div>
                                    <span class="badge bg-success-soft text-success rounded-pill px-2 py-1 small" style="font-size: 0.7rem;">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative transition-hover testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote" style="font-size: 3rem;"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Smooth Office Relocation</h6>
                                <p class="small text-muted mb-3 italic-text">
                                    "We had to move our IT office branch with 45 work stations from Pune to Hyderabad. The planning and execution by <?= $company3 ?> was flawless. We resumed our operations on Monday morning without any downtime."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div>
                                        <strong class="d-block small">Vikram Malhotra</strong>
                                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">Pune to Hyderabad</small>
                                    </div>
                                    <span class="badge bg-success-soft text-success rounded-pill px-2 py-1 small" style="font-size: 0.7rem;">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative transition-hover testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote" style="font-size: 3rem;"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Reliable Local Shifting</h6>
                                <p class="small text-muted mb-3 italic-text">
                                    "Shifted our 3 BHK flat within Kolkata. The team completed the loading, transport, and unloading in just under 6 hours. Their pricing was highly competitive and the crew was incredibly polite and helpful."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div>
                                        <strong class="d-block small">Amitava Bose</strong>
                                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">Local Kolkata Shifting</small>
                                    </div>
                                    <span class="badge bg-success-soft text-success rounded-pill px-2 py-1 small" style="font-size: 0.7rem;">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative transition-hover testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote" style="font-size: 3rem;"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Stress-Free Pet Relocation</h6>
                                <p class="small text-muted mb-3 italic-text">
                                    "Extremely thankful to <?= $company3 ?> for safely shifting my Labrador from Siliguri to Chennai. They handled the documentation, custom travel crate, and kept feeding and walking him during breaks. Amazing care!"
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div>
                                        <strong class="d-block small">Dr. Rajesh Patel</strong>
                                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">Siliguri to Chennai</small>
                                    </div>
                                    <span class="badge bg-success-soft text-success rounded-pill px-2 py-1 small" style="font-size: 0.7rem;">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative transition-hover testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote" style="font-size: 3rem;"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">IBA Approved Billing &amp; Shifting</h6>
                                <p class="small text-muted mb-3 italic-text">
                                    "As a bank employee, I needed IBA approved packers and movers for my official transfer from Patna to Lucknow. <?= $company3 ?> provided accurate quotation, consignment note, and bills. Claim settlement was smooth."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div>
                                        <strong class="d-block small">Siddharth Sen</strong>
                                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">Patna to Lucknow</small>
                                    </div>
                                    <span class="badge bg-success-soft text-success rounded-pill px-2 py-1 small" style="font-size: 0.7rem;">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality commitment box -->
                    <div class="p-4 bg-light border-start border-5 border-success rounded-3 mt-4">
                        <h5 class="fw-bold text-success mb-2">Leave Your Feedback</h5>
                        <p class="mb-3 text-muted small">
                            Have you recently relocated with us? We would love to hear about your experience. Your reviews help us improve our services and guide other families in choosing the right relocation partner.
                        </p>
                        <a href="<?= site_url('reviews') ?>" class="btn btn-success btn-sm fw-bold">
                            <i class="bi bi-pencil-square me-1"></i> Write a Customer Review
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'testimonials']); ?>
            </div>
        </div>
    </div>
</section>

<style>
.transition-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}
.transition-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(10, 78, 189, 0.05) !important;
}
.bg-success-soft {
    background-color: rgba(25, 135, 84, 0.1) !important;
}
.italic-text {
    font-style: italic;
}
.testimonial-card {
    border: 1px solid #eef1f6 !important;
}
.testimonial-card:hover {
    border-color: #5f9618 !important;
}
</style>

