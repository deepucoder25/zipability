<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Careers</span>
        </nav>
        <h1><span class="bc-title-white">Join Our</span> <span class="bc-title-orange">Team</span></h1>
        <p class="bc-desc">Explore exciting career opportunities at <?= $company3 ?> and help us shape the future of smart logistics and relocation services in Hyderabad and nationwide.</p>
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
                    
                    <h2 class="service-section-title">Grow Your Career With India's Trusted Relocation Brand</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At <strong><?= htmlspecialchars($company3) ?></strong>, our employees are our greatest asset. Our 30+ year reputation as Hyderabad's premium bike transport and household shifting leader is built entirely on the dedication of our logistics coordinators, custom packing specialists, drivers, and support managers. 
                        </p>
                        <p>
                            We provide a dynamic, safe, and highly collaborative environment with ample opportunities for professional development, competitive compensation packages, and a chance to build a meaningful career in the thriving supply chain and logistics sector.
                        </p>
                    </div>

                    <!-- Current Openings -->
                    <h3 class="fw-bold text-dark mt-5 mb-4"><i class="bi bi-briefcase me-2 text-success"></i>Current Opportunities in Hyderabad</h3>
                    
                    <div class="accordion custom-faq-accordion" id="careersAccordion">
                        <!-- Job 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="job-heading-1">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#job-collapse-1" aria-expanded="true" aria-controls="job-collapse-1">
                                    1. Shifting Coordinator &amp; Customer Relationship Executive
                                </button>
                            </h2>
                            <div id="job-collapse-1" class="accordion-collapse collapse show" aria-labelledby="job-heading-1" data-bs-parent="#careersAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    <strong>Location:</strong> Hyderabad Branch office<br>
                                    <strong>Experience:</strong> 1-3 Years in Customer Support or Logistics Sales<br>
                                    <strong>Key Responsibilities:</strong> Handle shifting queries, coordinate with survey teams, prepare detailed digital shifting quotes, manage booking schedules, and maintain communication with clients from pick-up to doorstep delivery.
                                </div>
                            </div>
                        </div>

                        <!-- Job 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="job-heading-2">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#job-collapse-2" aria-expanded="false" aria-controls="job-collapse-2">
                                    2. Custom Packing &amp; Shifting Supervisor
                                </button>
                            </h2>
                            <div id="job-collapse-2" class="accordion-collapse collapse" aria-labelledby="job-heading-2" data-bs-parent="#careersAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    <strong>Location:</strong> Hyderabad &amp; Surrounding Regions<br>
                                    <strong>Experience:</strong> 2+ Years in Household Packers and Movers<br>
                                    <strong>Key Responsibilities:</strong> Lead the packing crew at shifting locations, supervise premium bubble wrap and wooden crating of sports/cruiser motorcycles, ensure safe loading inside covered carriers, and maintain transit safety compliance.
                                </div>
                            </div>
                        </div>

                        <!-- Job 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="job-heading-3">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#job-collapse-3" aria-expanded="false" aria-controls="job-collapse-3">
                                    3. Logistics Operations Manager
                                </button>
                            </h2>
                            <div id="job-collapse-3" class="accordion-collapse collapse" aria-labelledby="job-heading-3" data-bs-parent="#careersAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    <strong>Location:</strong> Hyderabad Hub<br>
                                    <strong>Experience:</strong> 4+ Years in Fleet or Transportation Management<br>
                                    <strong>Key Responsibilities:</strong> Optimize vehicle routes for pan-India bike and cargo transit, coordinate multi-city branches, supervise vehicle tracking and safety compliance, and handle transit insurance administrative processes.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Application Info -->
                    <div class="p-4 bg-light border-start border-5 border-success rounded-3 mt-5">
                        <h5 class="fw-bold text-success mb-2"><i class="bi bi-send me-2"></i>How to Apply</h5>
                        <p class="mb-0 text-muted small">
                            Ready to join our team? Send your updated CV along with the position you are applying for in the email subject line to <a href="mailto:<?= htmlspecialchars($companyEmail) ?>" class="text-success fw-bold text-decoration-none"><?= htmlspecialchars($companyEmail) ?></a>, or contact our Hyderabad human resources desk at <?= htmlspecialchars($companyPhone) ?>.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'careers']); ?>
            </div>
        </div>
    </div>
</section>

<style>
.custom-faq-accordion .accordion-item {
    border: 1px solid #eef1f6 !important;
}
.custom-faq-accordion .accordion-button:not(.collapsed) {
    color: var(--primary-cyan) !important;
    background-color: rgba(0, 181, 184, 0.05) !important;
    box-shadow: none !important;
}
.custom-faq-accordion .accordion-button:focus {
    box-shadow: none !important;
    border-color: transparent !important;
}
/* Override green accents with primary-cyan brand color */
.border-success,
.text-success,
.text-success a {
    color: var(--primary-cyan) !important;
    border-color: var(--primary-cyan) !important;
}
</style>
