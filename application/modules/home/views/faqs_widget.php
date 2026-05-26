<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$faqs = [
    [
        'question' => '1. What services do you provide?',
        'answer' => 'We offer bike transportation, car transportation, home shifting, office relocation, warehousing, pet relocation, and more.',
        'icon' => 'bi-file-earmark-check'
    ],
    [
        'question' => '2. How do I get a quote for my move?',
        'answer' => 'You can request a quote by filling out our online form or by contacting our customer support team.',
        'icon' => 'bi-box-seam'
    ],
    [
        'question' => '3. How far in advance should I book?',
        'answer' => 'We recommend booking at least 3-7 days in advance to ensure availability and smooth planning.',
        'icon' => 'bi-calendar3'
    ],
    [
        'question' => '4. Is my goods and vehicle insured?',
        'answer' => 'Yes, we provide transit insurance options to ensure your goods and vehicle are fully protected.',
        'icon' => 'bi-shield-check'
    ],
    [
        'question' => '5. Do you provide door-to-door service?',
        'answer' => 'Yes, we provide safe and reliable door-to-door pickup and delivery services for all locations.',
        'icon' => 'bi-geo-alt'
    ],
    [
        'question' => '6. Can I track my shipment?',
        'answer' => 'Yes, once your shipment is dispatched, you will receive tracking details to monitor your move in real-time.',
        'icon' => 'bi-headset'
    ],
    [
        'question' => '7. What payment methods do you accept?',
        'answer' => 'We accept payments via UPI, credit/debit cards, net banking, and cash. Payment terms may vary for corporate bookings.',
        'icon' => 'bi-credit-card'
    ],
    [
        'question' => '8. What if something gets damaged?',
        'answer' => 'In the rare event of damage, our support team will assist you with a quick claim and resolution process.',
        'icon' => 'bi-chat-left-dots'
    ]
];
?>

<section class="faq-section py-5">
    <!-- Background Decor Grid Patterns -->
    <div class="faq-decor decor-top-left"></div>
    <div class="faq-decor decor-bottom-right"></div>

    <div class="container position-relative about-z2">
        
        <!-- FAQ Badge & Header -->
        <div class="faq-header-wrap text-center mb-4">
            <div class="faq-badge-container d-flex align-items-center justify-content-center mb-3">
                <span class="badge-line line-left"></span>
                <span class="faq-pill-badge">FAQ</span>
                <span class="badge-line line-right"></span>
            </div>
            <h2 class="faq-section-title">Frequently Asked Questions</h2>
            <div class="faq-title-truck-wrap">
                <div class="truck-icon-container">
                    <span class="speed-line line-1"></span>
                    <span class="speed-line line-2"></span>
                    <span class="speed-line line-3"></span>
                    <i class="bi bi-truck truck-icon"></i>
                </div>
            </div>
            <p class="faq-section-subtitle mt-3">Find answers to common questions about our moving and transportation services.</p>
        </div>

        <!-- Accordion Grid -->
        <div class="row g-2">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="col-lg-6 col-12 d-flex">
                    <div class="faq-card flex-fill">
                        <div class="faq-card-header d-flex align-items-center collapsed" 
                             data-bs-toggle="collapse" 
                             data-bs-target="#faq-collapse-<?= $index ?>" 
                             aria-expanded="false" 
                             role="button">
                            
                            <div class="faq-icon-wrap d-flex align-items-center justify-content-center">
                                <i class="bi <?= $faq['icon'] ?> faq-card-icon"></i>
                            </div>
                            
                            <div class="faq-question-wrap flex-grow-1">
                                <h3 class="faq-question m-0"><?= htmlspecialchars($faq['question']) ?></h3>
                            </div>
                            
                            <div class="faq-toggle-btn d-flex align-items-center justify-content-center">
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                        </div>
                        
                        <div id="faq-collapse-<?= $index ?>" class="collapse" data-bs-parent="">
                            <div class="faq-card-body">
                                <p class="faq-answer m-0">
                                    <?= htmlspecialchars($faq['answer']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Still have questions / help banner -->
        <div class="faq-footer-banner-wrap mt-3 pt-1 position-relative">
            
            <!-- Curved Dotted Arrows -->
            <div class="faq-arrow-wrap faq-arrow-left d-none d-lg-block">
                <svg width="120" height="60" viewBox="0 0 120 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 10 C 20 45, 75 45, 105 15" stroke="#0a4ebd" stroke-width="2" stroke-dasharray="4, 4" stroke-linecap="round"/>
                    <path d="M96 22 L 105 15 L 105 26" stroke="#0a4ebd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            
            <div class="faq-arrow-wrap faq-arrow-right d-none d-lg-block">
                <svg width="120" height="60" viewBox="0 0 120 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M110 10 C 100 45, 45 45, 15 15" stroke="#0a4ebd" stroke-width="2" stroke-dasharray="4, 4" stroke-linecap="round"/>
                    <path d="M24 22 L 15 15 L 15 26" stroke="#0a4ebd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <!-- Help Banner Box -->
            <div class="faq-help-banner mx-auto">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center text-center text-md-start">
                    <div class="help-icon-wrap d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-4">
                        <i class="bi bi-headset help-icon"></i>
                    </div>
                    <div class="help-text-wrap text-white">
                        <h4 class="help-title mb-1">Still have questions? We're here to help!</h4>
                        <p class="help-desc mb-0">
                            Call us at <a href="<?= $phonehtml ?>" class="help-link"><?= $phone ?></a> or email us at <a href="mailto:<?= $mail ?>" class="help-link"><?= $mail ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
