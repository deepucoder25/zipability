<section class="home-page-slider">
  <div class="home-page-slider-content">
    <div class="container">
      <!-- Breadcrumb -->
      <div class="row">
        <div class="col-12">
          <nav class="bc-nav" style="margin-bottom:0.5rem;">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-branches') ?>">Our Branches</a>
            <span class="bc-sep">›</span>
            <?php
              $state_slug = strtolower(str_replace(' ', '-', $state));
            ?>
                <span class="bc"><?= $state ?></span>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= $city ?></span>
          </nav>
        </div>
      </div>

      <!-- Title & Text Section -->
      <div class="row">
        <div class="col-lg-8 col-md-10 text-start hero-text-col">
          <div class="hero-eyebrow">INDIA'S TRUSTED RELOCATION PARTNER</div>
          <h1 class="hero-title">
          Best Packers and Movers in  <span class="accent-text"><?= $city ?></span>
          </h1>
          <p class="hero-lead">
Best movers & packers in <?=$city?>. Safe, affordable, and reliable packing, moving and storage services. Get your free quote now.
          </p>
        </div>
      </div>
      
      <!-- Quote Form Card -->
      <div class="row">
        <div class="col-12">
        <?php $this->load->view('contacts/quoteform.php')?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Mobile Trust Badge Bar (Mobile Only, Outside the Card) -->
<div class="mobile-trust-bar d-flex d-lg-none py-3 bg-white border-bottom">
  <div class="container-fluid px-1">
    <div class="row g-0 justify-content-center align-items-stretch">
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-shield-check trust-icon mb-2"></i>
        <strong>100% Secure</strong>
        <span>Your data is safe with us</span>
      </div>
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-clock trust-icon mb-2"></i>
        <strong>Quick Response</strong>
        <span>We respond within 15 mins</span>
      </div>
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-currency-rupee trust-icon-circle mb-2"></i>
        <strong>Best Price Guarantee</strong>
        <span>Get the most competitive rates</span>
      </div>
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-headset trust-icon mb-2"></i>
        <strong>24/7 Support</strong>
        <span>We are here to help</span>
      </div>
    </div>
  </div>
</div>



<style>
  :root {
    <?php
      $state_slug     = strtolower(str_replace(' ', '-', $state));
      $state_img_file = FCPATH . 'assets/images/state/' . $state_slug . '.jpg';
      $state_img_url  = file_exists($state_img_file)
                          ? base_url('assets/images/state/' . $state_slug . '.jpg')
                          : base_url('assets/images/slider/slider.jpg');
    ?>
    --hero-bg: url("<?= $state_img_url ?>");
  }

  .home-page-slider {
    min-height: auto;
    background-image: var(--hero-bg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: var(--white);
    position: relative;
    overflow: hidden;
  }

  @media (max-width: 991px) {
    .home-page-slider {
      min-height: auto;
      background-position: 80% top;
    }
  }
</style>
