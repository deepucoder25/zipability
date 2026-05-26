<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-branches') ?>">Our Branches</a>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= $state ?></span>
        </nav>
        <h1><span class="bc-title-white">Packers and Movers in</span> <span class="bc-title-orange"><?= $state ?></span></h1>
        <p class="bc-desc">Professional relocation and shifting services across all major cities in <?= $state ?>.</p>
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
    <div class="our-service-page" style="background-image:url('<?= base_url() ?>assets/images/location/location-background.png'); background-size: cover; background-repeat: no-repeat; background-position: center; min-height:500px;">
    <div class="container feature-content-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="city-card-link d-block h-100 text-decoration-none">
                        <div class="city-card card border-0 shadow h-100">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <!-- Truck Icon on Left -->
                                <div class="icon">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <!-- Title on Right -->
                                <div class="city-name">
                                    <h5>Packers and Movers <b><?= $ct['nm'] ?></b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>
<style>
.our-service-page {
    background-attachment: fixed !important;
    background-size: cover;
    position: relative;
    padding: 50px 0 !important;
}

/* Subtle overlay for better readability */
.our-service-page::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(2px);
    z-index: 1;
}

.feature-content-section {
    position: relative;
    z-index: 2;
}

.city-card {
    border: 1px solid #edf2f7 !important;
    border-radius: 12px !important;
    background: #fff !important;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    box-shadow: 0 4px 12px rgba(0, 24, 70, 0.04) !important;
    overflow: hidden;
    position: relative;
}

.city-card-link:hover .city-card {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 24, 70, 0.12) !important;
    background: #fff !important;
}

.city-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 4px;
    background: var(--primary);
    transition: width 0.4s ease;
}

.city-card-link:hover .city-card::after {
    width: 100%;
}

.card-body {
    padding: 10px 15px !important;
    display: flex;
    align-items: center;
    gap: 12px;
    justify-content: flex-start !important;
}

.city-card .icon {
    width: 40px;
    height: 40px;
    background: #f8fafc;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.city-card-link:hover .icon {
    background: rgba(255, 107, 22, 0.1);
    transform: scale(1.05);
}

.city-card .icon i {
    font-size: 1.2rem;
    color: var(--navy);
    transition: color 0.3s ease;
}

.city-card-link:hover .icon i {
    color: var(--primary);
}

.city-name {
    flex: 1;
}

.city-name h5 {
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--navy);
    margin: 0;
    line-height: 1.2;
    transition: color 0.3s ease;
}

.city-name h5 b {
    display: block;
    font-weight: 700;
    color: var(--primary);
    font-size: 0.95rem;
    margin-top: 1px;
}

@media (max-width: 991px) {
    .our-service-page {
        padding: 50px 0 !important;
    }
}

@media (max-width: 576px) {
    .card-body {
        padding: 12px 10px !important;
        gap: 10px;
    }
    .city-card .icon {
        width: 35px;
        height: 35px;
        border-radius: 8px;
    }
    .city-card .icon img {
        width: 24px !important;
    }
    .city-name h5 {
        font-size: 0.75rem;
    }
    .city-name h5 b {
        font-size: 0.8rem;
    }
    .row > div {
        padding-left: 8px;
        padding-right: 8px;
    }
}
</style>
