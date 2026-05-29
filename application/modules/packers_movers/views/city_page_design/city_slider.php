<section class="hero-section">
  <div class="container-fluid px-4 px-xl-5 h-100 position-relative z-2">
    <div class="row h-100 align-items-center">
      <div class="col-lg-7 col-md-10 text-start hero-content-wrapper">
        <div class="hero-eyebrow">TRUSTED BIKE TRANSPORTATION IN <?= $city ?></div>
        
        <h1 class="hero-title">
          <span class="text-dark">Professional Bike</span><br/>
          <span class="text-cyan">Transportation in <?= $city ?></span>
        </h1>

        <p class="hero-lead">
          Experience hassle-free relocation in <?= $city ?> with professional packing, safe transportation, and timely delivery for homes, offices, cars, and bikes.
        </p>

        <!-- Features List -->
        <div class="hero-features d-flex flex-wrap gap-4 mt-5 mb-5">
          <div class="feature-item text-center">
            <div class="feature-icon mb-2"><i class="bi bi-shield-check"></i></div>
            <div class="feature-text">Safe &amp; Secure<br/>Relocation</div>
          </div>

          <div class="feature-item text-center">
            <div class="feature-icon mb-2"><i class="bi bi-clock"></i></div>
            <div class="feature-text">Fast &amp; Timely<br/>Delivery</div>
          </div>

          <div class="feature-item text-center">
            <div class="feature-icon mb-2"><i class="bi bi-geo-alt"></i></div>
            <div class="feature-text"><?= $city ?><br/>Local Experts</div>
          </div>

          <div class="feature-item text-center">
            <div class="feature-icon mb-2"><i class="bi bi-headset"></i></div>
            <div class="feature-text">24/7 Customer<br/>Support</div>
          </div>
        </div>
        
        <!-- Buttons -->
        <div class="hero-buttons d-flex gap-3 flex-wrap">
          <a href="#" class="btn btn-cyan btn-lg d-flex align-items-center justify-content-center gap-2 rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get a Free Quote <i class="bi bi-arrow-right"></i>
          </a>

          <a href="<?= site_url('our-services') ?>" class="btn btn-outline-dark btn-lg d-flex align-items-center justify-content-center gap-2 rounded-pill px-4 py-2">
            Explore Services <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>