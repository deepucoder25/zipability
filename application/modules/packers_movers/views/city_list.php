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
        <h1><span class="bc-title-white">Bike Transportation in</span> <span class="bc-title-orange"><?= $state ?></span></h1>
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
<div class="our-service-page bg-light py-5">
    <div class="container feature-content-section">
        
        <!-- Premium Section Header -->
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2">
                Explore Shifting Hubs in <span class="theme-accent-text"><?= $state ?></span>
            </h2>
            <p class="text-muted max-width-600 mx-auto">
                Find localized, certified packing and moving solutions across major cities in <?= $state ?>. Type to filter your city instantly.
            </p>
        </div>

        <!-- Interactive Instant Search/Filter Bar -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="search-box-wrapper shadow-sm rounded-pill p-2 bg-white border d-flex align-items-center">
                    <span class="ps-3 text-muted"><i class="bi bi-search fs-5"></i></span>
                    <input type="text" id="citySearchInput" class="form-control border-0 bg-transparent py-2 shadow-none" placeholder="Search for a city in <?= $state ?>..." aria-label="Search city">
                    <button class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-white shadow-sm" type="button" style="background: linear-gradient(135deg, #ff8a00, #ff6b16); border: none;">Filter</button>
                </div>
            </div>
        </div>

        <!-- Cities Grid -->
        <div class="row g-3" id="cityCardGrid">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 city-card-col" data-city="<?= htmlspecialchars($ct['nm']) ?>">
                    <a href="<?= site_url("$link-bike-transportation-$statename") ?>" class="city-card-link d-block h-100 text-decoration-none">
                        <div class="city-card card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <!-- Location Icon with Live Radar Wave -->
                                <div class="pulse-indicator-box">
                                    <span class="pulse-dot"></span>
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <!-- Title -->
                                <div class="city-name">
                                    <h5 class="city-title"><?= $ct['nm'] ?></h5>
                                    <span class="city-status">Active Hub</span>
                                </div>
                                <!-- Action Chevron -->
                                <div class="arrow-indicator">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

            <!-- No Results Message -->
            <div id="noResultsMessage" class="col-12 text-center py-5" style="display: none;">
                <div class="py-4">
                    <div class="empty-icon-wrap mb-3">
                        <i class="bi bi-geo-fill text-muted display-4"></i>
                    </div>
                    <h4 class="mt-3 text-dark fw-bold">No Shifting Hubs Found</h4>
                    <p class="text-muted">We couldn't find any branches in <?= $state ?> matching your search. Please check the spelling.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Instant Search Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('citySearchInput');
    const cards = document.querySelectorAll('.city-card-col');
    const grid = document.getElementById('cityCardGrid');
    const noResults = document.getElementById('noResultsMessage');

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase().trim();
            let hasResults = false;

            cards.forEach(card => {
                const cityName = card.getAttribute('data-city').toLowerCase();
                if (cityName.includes(query)) {
                    card.style.setProperty('display', 'block', 'important');
                    hasResults = true;
                } else {
                    card.style.setProperty('display', 'none', 'important');
                }
            });

            if (hasResults) {
                noResults.style.setProperty('display', 'none', 'important');
            } else {
                noResults.style.setProperty('display', 'block', 'important');
            }
        });
    }
});
</script>

<style>
.our-service-page {
    position: relative;
    background-color: #f8fafc !important;
}

.max-width-600 {
    max-width: 600px;
}

/* Search Box styling */
.search-box-wrapper {
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0 !important;
}

.search-box-wrapper:focus-within {
    border-color: #ff6b16 !important;
    box-shadow: 0 10px 25px rgba(255, 107, 22, 0.08) !important;
    transform: translateY(-2px);
}

.search-box-wrapper input::placeholder {
    color: #94a3b8;
    font-size: 0.95rem;
}

/* Premium Card Design */
.city-card {
    border-radius: 12px !important;
    background: #ffffff !important;
    border: 1px solid #e2e8f0 !important;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    position: relative;
    overflow: hidden;
}

.city-card-link {
    perspective: 800px;
}

.city-card-link:hover .city-card {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(7, 60, 145, 0.06) !important;
    border-color: #ff6b16 !important;
}

.card-body {
    padding: 12px 14px !important;
    display: flex;
    align-items: center;
    gap: 12px;
    justify-content: flex-start !important;
    position: relative;
}

/* Radar Pulse Indicator Box */
.pulse-indicator-box {
    width: 36px;
    height: 36px;
    background: rgba(255, 107, 22, 0.08);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.pulse-indicator-box i {
    font-size: 1.05rem;
    color: #ff6b16;
    z-index: 2;
    transition: all 0.3s ease;
}

/* Pulsing radar point */
.pulse-dot {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(255, 107, 22, 0.25);
    animation: radar-pulse 2s infinite ease-out;
    pointer-events: none;
    z-index: 1;
}

@keyframes radar-pulse {
    0% {
        transform: scale(0.6);
        opacity: 1;
    }
    100% {
        transform: scale(1.6);
        opacity: 0;
    }
}

.city-card-link:hover .pulse-indicator-box {
    background: #ff6b16;
}

.city-card-link:hover .pulse-indicator-box i {
    color: #ffffff;
}

.city-card-link:hover .pulse-dot {
    background: var(--primary-cyan);
    animation: radar-pulse-hover 1.5s infinite ease-out;
}

@keyframes radar-pulse-hover {
    0% {
        transform: scale(0.6);
        opacity: 1;
    }
    100% {
        transform: scale(1.8);
        opacity: 0;
    }
}

/* Typography Layout Hierarchy */
.city-name {
    flex: 1;
    display: flex;
    flex-direction: column;
    text-align: left;
}

.city-title {
    font-size: 0.95rem;
    font-weight: 800;
    color: #1e293b;
    margin: 0;
    line-height: 1.2;
    transition: color 0.3s ease;
}

.city-card-link:hover .city-title {
    color: var(--primary-cyan);
}

.city-status {
    font-size: 0.65rem;
    font-weight: 600;
    color: #94a3b8;
    margin-top: 1px;
    letter-spacing: 0.2px;
    display: flex;
    align-items: center;
    gap: 4px;
}

/* Add active green point marker next to status text */
.city-status::before {
    content: "";
    width: 6px;
    height: 6px;
    background-color: #22c55e;
    border-radius: 50%;
    display: inline-block;
}

.city-card-link:hover .city-status {
    color: #ff6b16;
}

/* Action Chevron slide-in */
.arrow-indicator {
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transform: translateX(-6px);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    color: #ff6b16;
    flex-shrink: 0;
}

.city-card-link:hover .arrow-indicator {
    opacity: 1;
    transform: translateX(0);
}

.arrow-indicator i {
    font-size: 0.9rem;
    font-weight: 700;
}

/* Empty State Wrap styling */
.empty-icon-wrap {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #f1f5f9;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

@media (max-width: 576px) {
    .card-body {
        padding: 10px 12px !important;
        gap: 10px;
    }
    .pulse-indicator-box {
        width: 32px;
        height: 32px;
    }
    .pulse-indicator-box i {
        font-size: 0.95rem;
    }
    .city-title {
        font-size: 0.88rem;
    }
    .arrow-indicator {
        display: none !important; /* Hide chevron on mobile to preserve layout space */
    }
}
</style>

