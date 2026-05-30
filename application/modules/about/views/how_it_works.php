<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">How It Works</span>
        </nav>
        <h1><span class="bc-title-white">How It</span> <span class="bc-title-orange">Works</span></h1>
        <p class="bc-desc">A simple, transparent, and step-by-step guide to how we handle your motorcycle shifting and household relocation in Hyderabad and across India.</p>
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
                    
                    <h2 class="service-section-title">Our Relocation Journey: 5 Simple Steps</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At <strong><?= htmlspecialchars($company3) ?></strong>, we have streamlined our logistics and shifting process to offer a completely stress-free experience. Whether you are shifting your sports bike locally in Hyderabad, sending a motorcycle to another state, or moving your entire household, here is exactly how we ensure a safe and scratch-free delivery.
                        </p>
                    </div>

                    <!-- Workflow Timeline -->
                    <div class="process-timeline">
                        <!-- Step 1 -->
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <h4>Request a Free Shifting Quote</h4>
                            <p>
                                Submit your shifting requirement using our interactive "Get a Quote" form, or call our Hyderabad shifting desk. Detail the type of bike (sports bike, cruiser, or standard commuter) or household items you need relocated, along with the destination and moving dates.
                            </p>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <h4>Expert Pre-Move Consultation</h4>
                            <p>
                                Our logistics coordinators will analyze your request and provide a clear, transparent, and itemized quotation. For households and bulk vehicle shifting in Hyderabad, we can conduct a digital pre-move survey to estimate materials and carrier requirements precisely.
                            </p>
                        </div>

                        <!-- Step 3 -->
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <h4>Multi-Layer Premium Packing</h4>
                            <p>
                                On shifting day, our specialized team arrives with high-grade packing supplies. For motorcycles, we apply a multi-layer bubble wrap, heavy-duty cargo sheets, and stretch film protection to safeguard mirrors, exhausts, and paintwork.
                            </p>
                        </div>

                        <!-- Step 4 -->
                        <div class="process-step">
                            <div class="step-number">4</div>
                            <h4>Safe Enclosed Transit</h4>
                            <p>
                                Your packed vehicle or household goods are loaded securely inside enclosed container trucks. Bikes are secured with specialized wheel clamps and soft harness straps to prevent any movement or impact during transit.
                            </p>
                        </div>

                        <!-- Step 5 -->
                        <div class="process-step">
                            <div class="step-number">5</div>
                            <h4>On-Time Door Delivery &amp; Inspection</h4>
                            <p>
                                We deliver your bike or household goods directly to your doorstep at the destination. Our team will carefully unpack and assist with initial setup, letting you inspect your vehicle and possessions to ensure everything arrived in absolute perfect condition.
                            </p>
                        </div>
                    </div>

                    <!-- CTA section -->
                    <div class="p-4 bg-light border-start border-5 border-success rounded-3 mt-5">
                        <h5 class="fw-bold text-success mb-2"><i class="bi bi-patch-check-fill me-2"></i>Guaranteed Peace of Mind</h5>
                        <p class="mb-0 text-muted small">
                            All relocations are backed by professional transit insurance options, real-time logistics tracking, and direct coordinator support, ensuring that your shifting journey is absolutely transparent from pickup to delivery.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'how-it-works']); ?>
            </div>
        </div>
    </div>
</section>


