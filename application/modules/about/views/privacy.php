<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Privacy Policy</span>
        </nav>
        <h1><span class="bc-title-white">Privacy</span> <span class="bc-title-orange">Policy</span></h1>
        <p class="bc-desc">Learn how we collect, use, and protect your personal information.</p>
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
                    
                    <h2 class="service-section-title">Privacy Policy</h2>
                    <div class="about-service-text">
                        <p class="lead text-muted mb-4">
                            We value your trust and are committed to protecting your privacy. This Privacy Policy describes how <strong><?= $company3 ?></strong> collects, uses, and discloses your personal information when you visit our website or use our relocation services.
                        </p>

                        <h4 class="fw-bold text-dark mt-4 mb-3">1. Information We Collect</h4>
                        <p class="mb-2">When you request a quote, contact us, or hire our shifting services, we may collect the following personal information:</p>
                        <ul class="mb-4">
                            <li>Contact details such as your name, email address, and phone number.</li>
                            <li>Origin address and destination address for your relocation.</li>
                            <li>Inventory list of goods to be moved.</li>
                            <li>Payment and billing information.</li>
                        </ul>

                        <h4 class="fw-bold text-dark mt-4 mb-3">2. How We Use Your Information</h4>
                        <p class="mb-2">We use the collected information for the following purposes:</p>
                        <ul class="mb-4">
                            <li>To provide and manage our packing, moving, and transport services.</li>
                            <li>To calculate and provide accurate shifting quotes.</li>
                            <li>To communicate with you regarding your move status.</li>
                            <li>To process payments and send invoices.</li>
                            <li>To improve our customer service and user experience.</li>
                        </ul>

                        <h4 class="fw-bold text-dark mt-4 mb-3">3. Data Security &amp; Protection</h4>
                        <p class="mb-4">
                            We implement standard security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, please note that no method of transmission over the Internet or electronic storage is 100% secure.
                        </p>

                        <h4 class="fw-bold text-dark mt-4 mb-3">4. Cookies</h4>
                        <p class="mb-4">
                            Our website uses cookies to enhance your browsing experience, track website traffic, and understand user preferences. You can choose to disable cookies through your browser settings, though some features of the website may not function properly.
                        </p>

                        <h4 class="fw-bold text-dark mt-4 mb-3">5. Third-Party Sharing</h4>
                        <p class="mb-4">
                            We do not sell, trade, or rent your personal information to third parties. We may share data with trusted partners and subcontractors (such as delivery crews or insurance providers) solely to the extent necessary to perform your relocation services.
                        </p>

                        <h4 class="fw-bold text-dark mt-4 mb-3">6. Contact Information</h4>
                        <p class="mb-2">If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
                        <div class="p-4 bg-light rounded-3 border">
                            <h5 class="mb-3 text-primary"><strong><?= $company3 ?></strong></h5>
                            <p class="mb-1"><i class="bi bi-geo-alt-fill me-2 text-muted"></i> <?= $address ?></p>
                            <p class="mb-1"><i class="bi bi-envelope-fill me-2 text-muted"></i> <a href="<?= $mailhtml ?>" class="text-decoration-none"><?= $mail ?></a></p>
                            <p class="mb-0"><i class="bi bi-telephone-fill me-2 text-muted"></i> <a href="<?= $phonehtml ?>" class="text-decoration-none"><?= $phone ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('company_sidebar', ['active_link' => 'privacy-policy']); ?>
            </div>
        </div>
    </div>
</section>
