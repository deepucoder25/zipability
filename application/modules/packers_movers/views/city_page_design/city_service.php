<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style>
/* Service Cards */
.city-srv-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    border: 1px solid #eef2f6;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    height: 100%;
    transition: all 0.3s ease;
}
.city-srv-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}
.city-srv-icon-wrap {
    height: 70px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.city-srv-icon-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
}
.city-srv-title {
    font-size: 1.15rem;
    font-weight: 800;
    color: #000;
    margin-bottom: 15px;
    line-height: 1.4;
}
.city-srv-desc {
    font-size: 0.85rem;
    color: #64748b;
    line-height: 1.7;
    margin-bottom: 20px;
}
.city-srv-link {
    font-size: 0.9rem;
    color: #4ea3fc;
    text-decoration: none;
    font-weight: 400;
}
.city-srv-link:hover {
    color: #073c91;
    text-decoration: underline;
}
</style>
<div class="container">
<div class="row g-4 mt-5 mb-4">
    <!-- Home Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="city-srv-card w-100 d-flex flex-column">
            <div class="city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/home-shifting-services.webp') ?>" alt="Home Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'" loading="lazy">
            </div>
            <div class="city-srv-title">Home Shifting<br>in <?= $city ?></div>
            <div class="city-srv-desc flex-grow-1">A hassle-free solution for relocating your home in <?= $city ?>, ensuring safe packing, loading, and transport of your belongings to your new location from <?= $city ?>, while minimizing stress and effort.</div>
            <a href="<?= site_url('home-shifting-in-'.$ctlink) ?>" class="city-srv-link mt-auto">Read more home shifting..</a>
        </div>
    </div>
    
    <!-- Office Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="city-srv-card w-100 d-flex flex-column">
            <div class="city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/office-relocation-services.webp') ?>" alt="Office Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'" loading="lazy">
            </div>
            <div class="city-srv-title">Office Shifting<br>in <?= $city ?></div>
            <div class="city-srv-desc flex-grow-1">A comprehensive service for relocating offices, ensuring the safe and efficient transport of office equipment, furniture, and documents.</div>
            <a href="<?= site_url('office-shifting-in-'.$ctlink) ?>" class="city-srv-link mt-auto">Read more office shifting..</a>
        </div>
    </div>
    
    <!-- Car Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="city-srv-card w-100 d-flex flex-column">
            <div class="city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/car-transportation-services.webp') ?>" alt="Car Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'" loading="lazy">
            </div>
            <div class="city-srv-title">Car Shifting<br>in <?= $city ?></div>
            <div class="city-srv-desc flex-grow-1"><?= $city ?> <?= isset($company3) ? $company3 : 'MyCompany' ?> Professional car relocation service offering secure transport of vehicles, either through dedicated car carriers or enclosed trailers, ensuring your car is safely delivered from <?= $city ?> to the new location.</div>
            <a href="<?= site_url('car-transport-in-'.$ctlink) ?>" class="city-srv-link mt-auto">Read more car transport..</a>
        </div>
    </div>
    
    <!-- Bike Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="city-srv-card w-100 d-flex flex-column">
            <div class="city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/bike-transportation-services.webp') ?>" alt="Bike Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'" loading="lazy">
            </div>
            <div class="city-srv-title">Bike Shifting<br>in <?= $city ?></div>
            <div class="city-srv-desc flex-grow-1">Specialized service designed for safe and secure transport of bikes, using protective packaging and experienced handling to ensure your two-wheeler reaches its destination without damage from <?= $city ?>.</div>
            <a href="<?= site_url('bike-transport-in-'.$ctlink) ?>" class="city-srv-link mt-auto">Read more bike transport..</a>
        </div>
    </div>
</div>
</div>