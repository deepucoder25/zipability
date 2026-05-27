<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="service-sidebar">
    <!-- Company Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <h3 class="widget-title">About Company</h3>
        <ul class="sidebar-services-list">
            <?php
            $sidebar_links = [
                ['slug' => 'about-us',          'name' => 'About Us',          'icon' => 'bi-info-circle'],
                ['slug' => 'why-us',            'name' => 'Why Us',            'icon' => 'bi-patch-question'],
                ['slug' => 'how-it-works',      'name' => 'How It Works',      'icon' => 'bi-gear'],
                ['slug' => 'careers',           'name' => 'Careers',           'icon' => 'bi-briefcase'],
                ['slug' => 'faqs',              'name' => 'FAQs',              'icon' => 'bi-chat-left-text'],
                ['slug' => 'blog',              'name' => 'Blog',              'icon' => 'bi-journal-text'],
                ['slug' => 'terms-and-conditions',  'name' => 'Terms & Conditions','icon' => 'bi-file-earmark-text'],
                ['slug' => 'privacy-policy',    'name' => 'Privacy Policy',    'icon' => 'bi-shield-check'],
            ];

            foreach ($sidebar_links as $link):
                $is_active = ($active_link === $link['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($link['slug']) ?>" class="d-flex align-items-center justify-content-between <?= $is_active ?>">
                        <span class="d-flex align-items-center gap-2">
                            <span class="service-icon-wrap">
                                <i class="bi <?= $link['icon'] ?>"></i>
                            </span>
                            <span class="service-name"><?= $link['name'] ?></span>
                        </span>
                        <i class="bi bi-chevron-right arrow-icon"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Contact & Action CTA Widget -->
    <div class="sidebar-widget widget-contact-cta mb-4 text-center">
        <div class="cta-inner-card">
            <div class="cta-icon-box">
                <i class="bi bi-headset"></i>
            </div>
            <h3 class="cta-title">Need Urgent Shifting?</h3>
            <p class="cta-desc">Get in touch with our moving experts for a fast and free quotation.</p>
            
            <div class="cta-buttons d-flex flex-column gap-3">
                <a href="<?= $phonehtml ?>" class="btn-sidebar-cta btn-sidebar-call">
                    <i class="bi bi-telephone-fill me-2"></i> <?= $phone ?>
                </a>
                
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-sidebar-cta btn-sidebar-whatsapp">
                    <i class="bi bi-whatsapp me-2"></i> WhatsApp Chat
                </a>
                
                <button type="button" class="btn-sidebar-cta btn-sidebar-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-file-earmark-text me-2"></i> Get a Free Quote
                </button>
            </div>
        </div>
    </div>

    <!-- Trusted Badge Widget -->
    <div class="sidebar-widget widget-trusted-badges">
        <h4 class="widget-sub-title mb-3">Why Choose <?= $company3 ?>?</h4>
        <ul class="trusted-points-list">
            <li class="d-flex align-items-start gap-2 mb-3">
                <i class="bi bi-patch-check-fill text-success mt-1"></i>
                <div>
                    <strong><?= $yearsExperience ?> Years Experience</strong>
                    <p class="m-0 text-muted small">Relocating since <?= $startYear ?>.</p>
                </div>
            </li>
            <li class="d-flex align-items-start gap-2 mb-3">
                <i class="bi bi-people-fill text-primary mt-1"></i>
                <div>
                    <strong><?= $happyClients ?> Happy Clients</strong>
                    <p class="m-0 text-muted small">Trusted by families and businesses.</p>
                </div>
            </li>
            <li class="d-flex align-items-start gap-2 mb-3">
                <i class="bi bi-shield-check text-warning mt-1"></i>
                <div>
                    <strong>Verified &amp; Licensed</strong>
                    <p class="m-0 text-muted small">ISO certified packers and movers.</p>
                </div>
            </li>
            <li class="d-flex align-items-start gap-2">
                <i class="bi bi-file-earmark-lock-fill text-danger mt-1"></i>
                <div>
                    <strong><?= $secureShifting ?> Secure Shifting</strong>
                    <p class="m-0 text-muted small">Complete transit insurance options.</p>
                </div>
            </li>
        </ul>
    </div>
</aside>
