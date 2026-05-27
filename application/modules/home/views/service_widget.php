<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'Home Relocation',
        'icon' => 'bi-house-door',
        'image' => 'home.jpg',
        'desc' => 'Safe and hassle-free shifting of your home anywhere in India.',
        'link' => 'home-shifting'
    ],
    [
        'title' => 'Office Shifting',
        'icon' => 'bi-building',
        'image' => 'office.png',
        'desc' => 'Complete office relocation with minimal downtime and maximum care.',
        'link' => 'office-relocation'
    ],
    [
        'title' => 'Bike Relocation',
        'icon' => 'bi-bicycle',
        'image' => 'bike.jpg',
        'desc' => 'Secure bike transportation across cities with door-to-door service.',
        'link' => 'bike-transportation'
    ],
    [
        'title' => 'Car Carrier',
        'icon' => 'bi-car-front',
        'image' => 'car.jpg',
        'desc' => 'Reliable car transportation services for a smooth and damage-free move.',
        'link' => 'car-transportation'
    ],
    [
        'title' => 'Loading & Unloading',
        'icon' => 'bi-truck',
        'image' => 'loading.png',
        'desc' => 'Expert handling for safe loading and unloading of your belongings.',
        'link' => 'loading-unloading'
    ],
    [
        'title' => 'Packing & Unpacking',
        'icon' => 'bi-box-seam',
        'image' => 'packing.png',
        'desc' => 'High-quality packing materials and careful unpacking for zero hassle.',
        'link' => 'packing-unpacking'
    ],
    [
        'title' => 'Warehousing',
        'icon' => 'bi-shop',
        'image' => 'warehouse.png',
        'desc' => 'Secure storage solutions with 24/7 surveillance and full protection.',
        'link' => 'warehouse-and-storage'
    ]
];
?>

<section class="services-section py-5 bg-white">
    <div class="container position-relative" style="z-index: 2;">
        
        <!-- Top Header Layout matching screenshot -->
        <div class="row mb-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-uppercase fw-bold mb-2" style="color: #00B5B8; font-size: 13px; letter-spacing: 1px;">COMPLETE RELOCATION SOLUTIONS</div>
                <h2 class="fw-bolder" style="font-size: 42px; line-height: 1.2; color: #111827;">We Move More <br><span style="color: #00B5B8;">Than You Imagine.</span></h2>
            </div>
            <div class="col-lg-6">
                <p class="text-muted mb-0 ps-lg-5" style="font-size: 17px; line-height: 1.6;">Whether it's your home, office, vehicle, or valuables—we offer end-to-end relocation solutions tailored to your needs.</p>
            </div>
        </div>

        <!-- Grid of Services -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($services as $index => $service): ?>
                <div class="col-lg-3 col-md-6 col-12 d-flex">
                    <a href="<?= site_url($service['link']) ?>" class="srv-card w-100 d-flex flex-column text-decoration-none">
                        <div class="srv-content p-4 pb-0">
                            <div class="srv-header d-flex align-items-center mb-3">
                                <div class="srv-icon me-3">
                                    <i class="bi <?= $service['icon'] ?>"></i>
                                </div>
                                <h4 class="srv-title mb-0"><?= htmlspecialchars($service['title']) ?></h4>
                            </div>
                            <p class="srv-desc mb-4"><?= htmlspecialchars($service['desc']) ?></p>
                        </div>
                        <div class="srv-image-wrap mt-auto">
                            <img src="<?= base_url('assets/images/services/' . $service['image']) ?>" alt="<?= $service['title'] ?>" class="img-fluid w-100 srv-img">
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
