<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
$st = strtolower(str_replace(" ", "-", $state));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
}
?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-branches') ?>">Our Branches</a>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= htmlspecialchars($state) ?> to <?= htmlspecialchars($city) ?> Route</span>
        </nav>
        <h1>
            <span class="bc-title-white">Bike Transport:</span> 
            <span class="bc-title-orange"><?= htmlspecialchars($state) ?> to <?= htmlspecialchars($city) ?></span>
        </h1>
        <p class="bc-desc">Premium door-to-door two-wheeler parcel and motorcycle relocation services from <?= htmlspecialchars($state) ?> to <?= htmlspecialchars($city) ?> with secure multi-layer packing.</p>
        <div class="bc-features">
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-shield-fill-check"></i></div>
                <div class="pill-text"><strong>Multi-Layer Packing</strong><small>Bubble Wrap &amp; Foam</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-truck"></i></div>
                <div class="pill-text"><strong>Enclosed Carriers</strong><small>Safe &amp; Weatherproof</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="pill-text"><strong>Door Delivery</strong><small>Convenient Pickup &amp; Drop</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-hourglass-split"></i></div>
                <div class="pill-text"><strong>Quick Transit</strong><small>3 - 6 Days Commitment</small></div>
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
<section class="service-details-section py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            
            <!-- Left Side: Route Shifting Showcase & Prices (col-lg-8) -->
            <div class="col-lg-8 col-12">
                <div class="d-flex flex-column gap-4">
                    
                    <!-- Overview Card -->
                    <div class="route-overview-box">
                        <div class="route-badge-pill mb-3">Professional Two-Wheeler Shipping</div>
                        <h2 class="route-card-title-main">Relocating from <?= htmlspecialchars($state) ?> to <?= htmlspecialchars($city) ?></h2>
                        <p class="route-text">
                            Relocating your motorcycle or scooter from <strong><?= htmlspecialchars($state) ?></strong> to <strong><?= htmlspecialchars($city) ?></strong> requires specialized care to prevent any transit damages, scratches, or alignment issues. At <strong><?= htmlspecialchars($company3) ?></strong>, we are committed to providing premium, stress-free intercity bike parcel shipping services.
                        </p>
                        <p class="route-text">
                            Whether shipping a standard commuter motorcycle, a premium cruiser like a Royal Enfield, or a high-end sports bike, our relocation experts handle the entire transit with absolute precision. We utilize containerized carrier trucks and professional loaders to deliver your vehicle safely and on schedule.
                        </p>
                        
                        <!-- Route Stats Row -->
                        <div class="route-stats-row mt-4">
                            <div class="route-stat-item">
                                <span class="stat-num text-cyan">99.9%</span>
                                <span class="stat-label">Damage-Free Rate</span>
                            </div>
                            <div class="route-stat-item">
                                <span class="stat-num text-orange">3-6 Days</span>
                                <span class="stat-label">Typical Transit Time</span>
                            </div>
                            <div class="route-stat-item">
                                <span class="stat-num text-success">100%</span>
                                <span class="stat-label">Insured Transit</span>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Table Section -->
                    <div class="route-pricing-box">
                        <h3 class="route-section-title">Estimated Shifting Rates &amp; Timelines</h3>
                        <p class="route-section-desc">Below is an estimated price guide for shifting two-wheelers from <?= htmlspecialchars($state) ?> to <?= htmlspecialchars($city) ?>. Actual rates may vary depending on shifting dates and insurance coverage.</p>
                        
                        <div class="table-responsive mt-3">
                            <table class="route-price-table-premium">
                                <thead>
                                    <tr>
                                        <th>Vehicle Category</th>
                                        <th>Packing &amp; Loading</th>
                                        <th>Transit Fee</th>
                                        <th>Estimated Delivery</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="vehicle-info">
                                                <i class="bi bi-scooter text-cyan"></i>
                                                <div>
                                                    <strong>Scooters &amp; Mopeds</strong>
                                                    <small>Activa, Jupiter, Access, etc.</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fw-semibold text-dark">₹1,200 - ₹1,500</td>
                                        <td class="fw-bold text-cyan">₹3,500 - ₹4,800</td>
                                        <td class="text-muted">3 - 5 Days</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="vehicle-info">
                                                <i class="bi bi-bicycle text-cyan"></i>
                                                <div>
                                                    <strong>Commuter Bikes</strong>
                                                    <small>Splendor, Pulsar, Shine (100cc-150cc)</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fw-semibold text-dark">₹1,500 - ₹1,800</td>
                                        <td class="fw-bold text-cyan">₹4,000 - ₹5,500</td>
                                        <td class="text-muted">3 - 5 Days</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="vehicle-info">
                                                <i class="bi bi-speedometer2 text-cyan"></i>
                                                <div>
                                                    <strong>Sports &amp; Premium Bikes</strong>
                                                    <small>Duke, Apache, R15, FZ (150cc-350cc)</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fw-semibold text-dark">₹1,800 - ₹2,500</td>
                                        <td class="fw-bold text-cyan">₹5,500 - ₹7,500</td>
                                        <td class="text-muted">4 - 6 Days</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="vehicle-info">
                                                <i class="bi bi-shield-fill text-cyan"></i>
                                                <div>
                                                    <strong>Cruiser &amp; Superbikes</strong>
                                                    <small>Royal Enfield, Harley, KTM (&gt;350cc)</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fw-semibold text-dark">₹2,500 - ₹3,500</td>
                                        <td class="fw-bold text-cyan">₹7,500 - ₹11,000</td>
                                        <td class="text-muted">4 - 6 Days</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Steps Timeline -->
                    <div class="route-process-box">
                        <h3 class="route-section-title">Our Safe Transit Process</h3>
                        <p class="route-section-desc">Every step is meticulously handled to guarantee zero scratches and total security for your bike.</p>
                        
                        <div class="route-timeline mt-4">
                            <div class="timeline-step">
                                <div class="step-badge">1</div>
                                <div class="step-content-card">
                                    <div class="step-header">
                                        <i class="bi bi-box-seam text-cyan"></i>
                                        <h4>Multi-Layer Wrapping</h4>
                                    </div>
                                    <p>We pack your two-wheeler using bubble wrap, foam sheets, and heavy-duty corrugated sheets to guard it from road vibrations and scratches.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-step">
                                <div class="step-badge">2</div>
                                <div class="step-content-card">
                                    <div class="step-header">
                                        <i class="bi bi-truck text-cyan"></i>
                                        <h4>Covered Container Carrier Loading</h4>
                                    </div>
                                    <p>Your bike is loaded onto specialized enclosed carrier trucks using advanced ramp mechanisms and safely locked in position with heavy industrial straps.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-step">
                                <div class="step-badge">3</div>
                                <div class="step-content-card">
                                    <div class="step-header">
                                        <i class="bi bi-house-check text-cyan"></i>
                                        <h4>Scratch-Free Doorstep Delivery</h4>
                                    </div>
                                    <p>Our destination branch delivers the vehicle directly to your doorstep in <?= htmlspecialchars($city) ?>, performing a safe unloading inspection with you.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Route Map Iframe/Visual Showcase -->
                    <div class="route-map-showcase">
                        <h3 class="route-section-title">Route Map &amp; Tracking Visualizer</h3>
                        <p class="route-section-desc">Standard transit route map between <?= htmlspecialchars($state) ?> and <?= htmlspecialchars($city) ?>. All shipments include real-time milestone messaging alerts.</p>
                        
                        <div class="route-map-box-premium mt-3">
                            <iframe 
                                src="https://maps.google.com/maps?q=<?= urlencode($state) ?>+to+<?= urlencode($city) ?>&t=&z=6&ie=UTF8&iwloc=&output=embed" 
                                width="100%" 
                                height="340" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side: Sidebar Widget (col-lg-4) -->
            <div class="col-lg-4 col-12">
                <?php include 'city_page_design/city_siderbar.php'; ?>
            </div>

        </div>
    </div>
</section>
