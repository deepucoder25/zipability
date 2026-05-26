<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Pet Relocation</span>
        </nav>
        <h1><span class="bc-title-white">Pet</span> <span class="bc-title-orange">Relocation</span></h1>
        <p class="bc-desc">Your beloved pets deserve a safe, caring, and stress-free journey. We handle all documentation, IATA-approved crates, and airline or road logistics so your pets travel comfortably.</p>
        <div class="bc-features">
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-heart-fill"></i></div>
                <div class="pill-text"><strong>Pet-First</strong><small>Caring approach</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-box2-heart-fill"></i></div>
                <div class="pill-text"><strong>IATA Crate</strong><small>Airline approved</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-file-medical-fill"></i></div>
                <div class="pill-text"><strong>Vet Certified</strong><small>Health documented</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-telephone-inbound-fill"></i></div>
                <div class="pill-text"><strong>Live Updates</strong><small>Journey tracking</small></div>
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
                    <h2 class="service-section-title">Safe and Compassionate Pet Relocation Services</h2>
                    <div class="about-service-text">
                        <p>
                            <strong><?= $company3 ?></strong> is the best company dealing with pet relocation services making sure that your pets will travel in the best conditions to their new destination. We have personnel who are well-equipped to handle all types of pets and they know the special considerations that come with moving animals. We respect their needs and do our best to make the journey as comfortable as possible.
                        </p>
                        <p>
                            When it comes to the services we offer in pet relocation we ensure that it is highly recommended and also that it is pocket-friendly. We guarantee professional service and great concern in handling your pet while using quality materials to enhance relocation services for your pet.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/pet.jpg') ?>" alt="pet relocation" class="img-fluid rounded my-3 w-100">
                        <p>
                            The fact that we offer affordable charges makes us easily adaptable for all pet owners seeking a reliable and economical transporting service. By choosing the services of the <strong><?= $company3 ?></strong> you can be assured that your pets will be safe.
                        </p>
                        <p>
                            Our team of experts and genuine writers are always focused towards offering the best services of pet moving, so your pets can safely reach their new home comfortably. This is one of the outstanding pet relocation services with top-notch efficiency and utmost care for your pets.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Pet Relocation Process</h2>
                    <p class="text-muted">A caring, step-by-step approach to ensure your pet travels safely:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Consultation &amp; Documentation</h4>
                            <p>We assess your pet's breed, size, health requirements, and destination to prepare the necessary health certificates, vaccination records, and travel permits.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>IATA-Approved Travel Crate</h4>
                            <p>We arrange an IATA-compliant travel kennel of the right size, lined with absorbent mats and ventilated for your pet's comfort during transit.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Door-to-Terminal Transfer</h4>
                            <p>We safely collect your pet from your home and transport them to the airport or road terminal, handling all check-in formalities on your behalf.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Destination Pickup &amp; Delivery</h4>
                            <p>At the destination, our partner agents or your designated person receives your pet and delivers them safely to your new home address.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-heart-fill"></i></div>
                            <div class="choose-content">
                                <h5>Pet-First Approach</h5>
                                <p>Every decision is made with your pet's comfort, safety, and wellbeing in mind.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-file-medical-fill"></i></div>
                            <div class="choose-content">
                                <h5>Complete Documentation</h5>
                                <p>Health certificates, NOCs, vet records, and import/export permits handled by us.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-airplane-fill"></i></div>
                            <div class="choose-content">
                                <h5>Air &amp; Road Transport</h5>
                                <p>Flexible pet transport options — air cargo or climate-controlled road vehicles.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-telephone-inbound-fill"></i></div>
                            <div class="choose-content">
                                <h5>Real-Time Updates</h5>
                                <p>Regular status updates at every stage of your pet's journey for your peace of mind.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Client Review Slice -->
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "I was extremely worried about relocating my Labrador from Siliguri to Bangalore. <?= $company3 ?> handled everything — the vet certificate, crate, and airport check-in. My dog arrived healthy and calm. They kept me updated throughout. Exceptional service!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">N</div>
                            <div class="user-name">
                                <h6>Nandita Ghosh</h6>
                                <span>Siliguri to Bangalore</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pr-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Which pets can you relocate?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pr-1" class="collapse">
                                <div class="faq-card-body">
                                    We primarily relocate dogs, cats, birds, and small domestic animals. For exotic or large animals, please contact us for a customized relocation assessment.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pr-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are needed for pet relocation?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pr-2" class="collapse">
                                <div class="faq-card-body">
                                    Required documents typically include a valid health certificate (issued within 10 days of travel), updated vaccination records (especially rabies), and an airline NOC. For international moves, additional import permits may apply based on the destination country.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pr-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Is air travel safe for my pet?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pr-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes, when handled by professionals. We use IATA-approved travel crates, book climate-controlled cargo holds, and follow all airline pet travel guidelines to minimize stress and ensure safety for your pet.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'pet-relocation']); ?>
            </div>
        </div>
    </div>
</section>
