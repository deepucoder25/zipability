<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Terms &amp; Conditions</span>
        </nav>
        <h1><span class="bc-title-white">Terms &amp;</span> <span class="bc-title-orange">Conditions</span></h1>
        <p class="bc-desc">Please read these terms carefully before using our relocation and transportation services.</p>
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
                    
                    <h2 class="service-section-title">Terms &amp; Conditions</h2>
                    <div class="about-service-text">
                        <p class="lead text-muted mb-4">
                            Welcome to <strong><?= $company3 ?></strong>. These Terms &amp; Conditions govern your use of our website and relocation services. By booking a move or using our services, you agree to be bound by these terms.
                        </p>

                        <h4 class="fw-bold text-dark mt-4 mb-3">1. Service Booking &amp; Shifting Quotes</h4>
                        <ul class="mb-4">
                            <li>Shifting quotes provided by us are based on the inventory list and details supplied by you.</li>
                            <li>Any change in the inventory list, travel distance, floor levels, or loading conditions will result in an adjustment of the final price.</li>
                            <li>The final service pricing is subject to taxes and other applicable duties as outlined in the invoice.</li>
                        </ul>

                        <h4 class="fw-bold text-dark mt-4 mb-3">2. Excluded &amp; Restricted Items</h4>
                        <p class="mb-2">For safety and legal reasons, we do not transport the following items:</p>
                        <ul class="mb-4">
                            <li>Hazardous materials, explosives, and flammable liquids (e.g., gas cylinders, fuel).</li>
                            <li>Valuables including cash, jewelry, gold, and extremely important original documents. We advise carrying these items personally.</li>
                            <li>Contraband, illegal items, or restricted substances.</li>
                            <li>Perishable goods or live plants unless special arrangements are formally agreed upon.</li>
                        </ul>

                        <h4 class="fw-bold text-dark mt-4 mb-3">3. Payments &amp; Billing</h4>
                        <ul class="mb-4">
                            <li>A booking advance may be required to confirm the shifting slot.</li>
                            <li>The remaining balance must be paid in full at the time of loading or unloading, as agreed in the service order.</li>
                            <li>Payments can be made via credit card, net banking, UPI, or other options approved by our billing desk.</li>
                        </ul>

                        <h4 class="fw-bold text-dark mt-4 mb-3">4. Transit Insurance &amp; Liability</h4>
                        <ul class="mb-4">
                            <li>While we take utmost care of your goods, unexpected accidents or road conditions can occur. We strongly recommend choosing transit insurance.</li>
                            <li>Our liability for any damage is strictly limited to the terms of the transit insurance policy.</li>
                            <li>All damage claims must be documented and submitted within 24 hours of unloading.</li>
                        </ul>

                        <h4 class="fw-bold text-dark mt-4 mb-3">5. Delivery Timeline &amp; Delays</h4>
                        <p class="mb-4">
                            We make every effort to deliver your goods on schedule. However, we are not liable for transit delays caused by traffic accidents, road closures, strikes, bad weather, or other events beyond our reasonable control.
                        </p>

                        <h4 class="fw-bold text-dark mt-4 mb-3">6. Governing Law</h4>
                        <p class="mb-4">
                            These Terms &amp; Conditions are governed by and construed in accordance with the laws of India. Any legal disputes arising from our services shall be subject to the exclusive jurisdiction of the courts near our registered office.
                        </p>

                        <h4 class="fw-bold text-dark mt-4 mb-3">7. Contact Us</h4>
                        <p class="mb-2">If you have any questions about our Terms &amp; Conditions, please get in touch with us:</p>
                        <div class="p-4 bg-light rounded-3 border">
                            <h5 class="mb-3 text-primary"><strong><?= $company3 ?></strong></h5>
                            <p class="mb-1"><i class="bi bi-envelope-fill me-2 text-muted"></i> <a href="<?= $mailhtml ?>" class="text-decoration-none"><?= $mail ?></a></p>
                            <p class="mb-0"><i class="bi bi-telephone-fill me-2 text-muted"></i> <a href="<?= $phonehtml ?>" class="text-decoration-none"><?= $phone ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('company_sidebar', ['active_link' => 'terms-and-conditions']); ?>
            </div>
        </div>
    </div>
</section>
