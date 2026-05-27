<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">About Us</span>
        </nav>
        <h1><span class="bc-title-white">About</span> <span class="bc-title-orange">Us</span></h1>
        <p class="bc-desc">Learn more about our history, values, infrastructure, and the expert team dedicated to your seamless move.</p>
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
                    
                    <h2 class="service-section-title">About <?= $company3 ?></h2>
                    <div class="about-service-text">
                        <p>
                            <strong><?= $company3 ?></strong> is a fastest growing packers &amp; movers company and specializes in providing multi-modal transport solutions. We offer our professional services with the help of our highly motivated team and modern infrastructural back up. With a personal touch to our client's requirements, <strong><?= $company3 ?></strong> provides a complete range of assurance for the safety &amp; movement of their goods.
                        </p>
                        <p> 
                            We are a nation-wide company that specializes in offering Logistics, Transportation and Movers and Packing services, which includes Warehousing Facilities, Movers &amp; Packing Solutions for Household, Office &amp; Factory Shifting, Car Transportation services by Car Containers, Loading &amp; Unloading Services and Railway Moving Facility.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Bike Transportation Experts</h2>
                    <div class="about-service-text">
                        <p>
                            We provide comprehensive and reliable <strong>Bike Parcel Services</strong> with complete safety assurance. Whether you need Local Bike Shifting or Intercity Bike Parcel Services, our team guarantees timely pickup and on-time delivery at competitive prices.
                        </p>
                        <p>
                            We transport all types of two-wheelers including scooters, commuter bikes, sports bikes, and premium motorcycles. We use premium packing materials, proper strapping, and containerized transport for maximum protection. Optional insurance coverage is also available for added security during transit.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Our Process</h2>
                    <div class="about-service-text">
                        <ul class="list-unstyled mt-3">
                            <li class="mb-3">
                                <strong>1. Schedule Your Door Pick-Up:</strong> The first step is to schedule a pickup time that is convenient for you. We will send one of our experienced team members to pick up your bike from your given location.
                            </li>
                            <li class="mb-3">
                                <strong>2. Prepare Your Bike For Shipment:</strong> Once we have picked up your bike, we will thoroughly inspect it and take care of any necessary preparation, packing it securely in our specially designed shipping containers.
                            </li>
                            <li class="mb-3">
                                <strong>3. Shipping Your Bike:</strong> We use only the safest and most reliable shipping methods to ensure that your bike reaches its destination securely.
                            </li>
                            <li>
                                <strong>4. Door Delivery:</strong> Once your bike has reached its destination, we will notify you and arrange for a safe delivery. We will also unpack the bike for you so that it is ready to ride.
                            </li>
                        </ul>
                    </div>

                    <h2 class="service-section-title mt-5">Our Mission &amp; Vision</h2>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="card h-100 shadow-sm border-0 bg-light rounded-3">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-bold text-success mb-3"><i class="bi bi-bullseye me-2"></i>Our Mission</h5>
                                    <p class="card-text small text-muted">
                                        At <strong><?= $company3 ?></strong>, our mission is to provide the best packing and moving services, especially focusing on bike transportation. Our goal is to become the customers’ first choice nation-wide through dedication, transparency, and top-tier logistics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card h-100 shadow-sm border-0 bg-light rounded-3">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-bold text-success mb-3"><i class="bi bi-eye me-2"></i>Our Vision</h5>
                                    <p class="card-text small text-muted">
                                        Our vision is to have a global environment that is fully mobile. We want our clients to have total confidence in us and our services, making us the market leaders in the relocation and two-wheeler transport industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>

<style>
.team-member-card {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), border-color 0.3s ease;
    border: 1px solid #eef1f6 !important;
}
.team-member-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 181, 184, 0.15) !important;
    border-color: var(--primary-cyan) !important;
}
.border-light-green {
    border-color: rgba(0, 181, 184, 0.15) !important;
}
.transition-hover {
    transition: all 0.3s ease;
}
/* Override green accents to match the brand color */
.team-member-card .text-success,
.team-member-card .text-success a,
.card-title.text-success,
.card-title.text-success i {
    color: var(--primary-cyan) !important;
}
.team-member-card .contact-details {
    border-top-color: rgba(0, 181, 184, 0.1) !important;
}
</style>
