<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Our Branches</span>
        </nav>
        <h1><span class="bc-title-white">Our</span> <span class="bc-title-orange">Branches</span></h1>
        <p class="bc-desc"><?= $company3 ?> Packers and Movers — Delivering trusted relocation services across 20+ states in India.</p>
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

<?php
$state = [
    [
        "image" => "telangana.jpg",
        "category" => "Telangana",
        "link" => "telangana"
    ],
    [
        "image" => "bangalore.jpg",
        "category" => "Bangalore",
        "link" => "bangalore"
    ],

    [
        "image" => "tamil-nadu.jpg",
        "category" => "Tamil Nadu",
        "link" => "tamil-nadu"
    ]
];
?>

<!-- Branch Section -->
<section class="portfolio-area py-5" style="background-color: #fafbfc;">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5 mt-3">
            <span class="badge rounded-pill text-uppercase px-3 py-1.5 mb-2" style="background: rgba(7, 98, 247, 0.08); color: #073c91; font-weight: 700; letter-spacing: 1px; font-size: 0.75rem;">Network Coverage</span>
            <h2 class="fw-black text-dark mb-3" style="font-size: 2.5rem; letter-spacing: -0.5px;">
                Our Presence Across <span style="background: linear-gradient(135deg, #ff6b16, #ff8a00); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">India</span>
            </h2>
            <p class="text-muted max-width-600 mx-auto" style="font-size: 1rem; line-height: 1.6;">
                Select your state to explore localized city branches, custom transit options, and certified shifting teams near you.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            <?php foreach ($state as $item): ?>
                
                <!-- Circular Profile Cards -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="state-circle-card text-center bg-white p-4 rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-between position-relative border-0">
                        
                        <!-- Top Floating Badge -->
                        <span class="active-badge"><i class="bi bi-geo-alt-fill me-1"></i> Active Hub</span>

                        <div class="card-top-content">
                            <!-- Circular Image with Double-Ring Spinner -->
                            <div class="circle-avatar-wrap position-relative mx-auto mb-4">
                                <div class="outer-ring"></div>
                                <div class="inner-ring"></div>
                                <div class="avatar-img-box">
                                    <img class="img-fluid"
                                        src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                        alt="<?= $item['category'] ?>"
                                        loading="lazy">
                                </div>
                            </div>

                            <!-- State Name & Details -->
                            <h4 class="state-title-text mb-2"><?= htmlspecialchars($item['category']) ?></h4>
                            <p class="state-desc-text text-muted small px-2">Premium household shifting and auto-transportation services available.</p>
                        </div>

                        <!-- CTA Button -->
                        <div class="card-bottom-content w-100 mt-3">
                            <a href="<?= site_url($item['link']) ?>" class="btn btn-outline-primary rounded-pill px-4 py-2 w-100 fw-bold explore-btn d-flex align-items-center justify-content-center gap-2">
                                Explore State <i class="bi bi-arrow-right-short fs-5"></i>
                            </a>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<style>
.max-width-600 {
    max-width: 600px;
}

/* Card Container Styles */
.state-circle-card {
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    border: 1px solid #edf2f7 !important;
    padding-top: 2.5rem !important;
}

.state-circle-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(7, 60, 145, 0.08) !important;
    border-color: rgba(7, 98, 247, 0.12) !important;
}

/* Circular Image Wrapper */
.circle-avatar-wrap {
    width: 130px;
    height: 130px;
}

/* Outer Ring (Spins/Pulses on hover) */
.outer-ring {
    position: absolute;
    inset: -6px;
    border: 2px dashed rgba(255, 107, 22, 0.2);
    border-radius: 50%;
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.state-circle-card:hover .outer-ring {
    transform: rotate(180deg);
    border-color: #ff6b16;
}

/* Inner Ring */
.inner-ring {
    position: absolute;
    inset: -2px;
    border: 2px solid rgba(7, 98, 247, 0.1);
    border-radius: 50%;
    transition: all 0.4s ease;
}

.state-circle-card:hover .inner-ring {
    border-color: #073c91;
    transform: scale(1.03);
}

/* Avatar Image Box */
.avatar-img-box {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    border: 4px solid #ffffff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    z-index: 2;
}

.avatar-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.state-circle-card:hover .avatar-img-box img {
    transform: scale(1.15);
}

/* Typography styles */
.state-title-text {
    font-size: 1.25rem;
    font-weight: 800;
    color: #1e293b;
    transition: color 0.3s ease;
}

.state-circle-card:hover .state-title-text {
    color: #073c91;
}

.state-desc-text {
    font-size: 0.78rem;
    line-height: 1.4;
    color: #64748b !important;
}

/* Floating Top Badge */
.active-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    font-size: 0.65rem;
    font-weight: 700;
    color: #ff6b16;
    background: rgba(255, 107, 22, 0.08);
    padding: 3px 8px;
    border-radius: 20px;
    letter-spacing: 0.3px;
    border: 1px solid rgba(255, 107, 22, 0.1);
    transition: all 0.3s ease;
}

.state-circle-card:hover .active-badge {
    color: #ffffff;
    background: #ff6b16;
}

/* Explore Button (Fills with gradient on hover) */
.state-circle-card .explore-btn {
    border: 1.5px solid rgba(7, 98, 247, 0.2) !important;
    color: #073c91 !important;
    background: transparent !important;
    font-size: 0.85rem;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
}

.state-circle-card:hover .explore-btn {
    color: #ffffff !important;
    background: linear-gradient(135deg, #073c91, #0a4ebd) !important;
    border-color: transparent !important;
    box-shadow: 0 10px 20px rgba(7, 98, 247, 0.25) !important;
    transform: translateY(-2px);
}

.state-circle-card:hover .explore-btn i {
    transform: translateX(4px);
    transition: transform 0.3s ease;
}

/* Breadcrumb styles */
.city-breadcrumb .breadcrumb-item a {
    color: #fff;
}

.city-breadcrumb .breadcrumb-item.active {
    color: #ffc107;
}

/* Responsive Styles */
@media(max-width: 576px) {
    .circle-avatar-wrap {
        width: 110px;
        height: 110px;
    }
    .state-title-text {
        font-size: 1.15rem;
    }
    .state-circle-card {
        padding: 1.5rem !important;
        padding-top: 2rem !important;
    }
}
</style>
