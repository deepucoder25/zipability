<?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');
?>
<!-- TRUSTED BY SECTION -->
<section class="trusted-by-section bg-white py-3 border-top">
  <div class="container-fluid px-4 px-xl-5">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
      <div class="trusted-text fw-bold text-dark mb-0 d-flex align-items-center me-4">TRUSTED BY</div>
      <div class="trusted-logos flex-grow-1 d-flex align-items-center justify-content-between flex-wrap gap-4" loading="lazy">
        <img src="<?= base_url('assets/images/trusted/google.jpg') ?>" alt="Google" class="img-fluid trusted-logo-lg" loading="lazy">
        <img src="<?= base_url('assets/images/trusted/amazon.jpg') ?>" alt="Amazon" class="img-fluid trusted-logo-lg" loading="lazy">
        <img src="<?= base_url('assets/images/trusted/tata.jpg') ?>" alt="Tata" class="img-fluid trusted-logo-sm" loading="lazy">
        <img src="<?= base_url('assets/images/trusted/infosys.jpg') ?>" alt="Infosys" class="img-fluid trusted-logo-lg" loading="lazy">
        <img src="<?= base_url('assets/images/trusted/wipro.jpg') ?>" alt="Wipro" class="img-fluid trusted-logo-md" loading="lazy">
        <img src="<?= base_url('assets/images/trusted/dhl.jpg') ?>" alt="DHL" class="img-fluid trusted-logo-md" loading="lazy">
        <img src="<?= base_url('assets/images/trusted/hdfc.jpg') ?>" alt="HDFC Bank" class="img-fluid trusted-logo-sm" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- FOOTER SECTION -->
<footer class="footer-section">
  <div class="container-fluid px-4 px-xl-5">
    <div class="row pt-5 pb-4 g-4 border-bottom border-secondary border-opacity-25">
      
      <!-- Col 1: Brand & About -->
      <div class="col-lg-3 col-md-6 pe-lg-4">
        <a href="<?= site_url() ?>" class="d-inline-block mb-3">
          <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= @$company3 ?> RELOCATION" class="footer-brand-logo">
        </a>
        <p class="footer-copy-text mb-4">
          Your trusted partner for safe, secure, and hassle-free relocations across India. We move your world with care.
        </p>
        <div class="footer-socials d-flex gap-2">
          <a href="<?= @$facebookhtml ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?= @$instagramhtml ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="<?= @$linkedinhtml ?>" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Col 2: Company -->
      <div class="col-lg-2 col-md-6 col-6">
        <h5 class="footer-heading">COMPANY</h5>
        <ul class="footer-links list-unstyled">
          <li><a href="<?= site_url('about-us') ?>">About Us</a></li>
          <li><a href="<?= site_url('why-us') ?>">Why Us</a></li>
          <li><a href="<?= site_url('how-it-works') ?>">How It Works</a></li>
          <li><a href="<?= site_url('careers') ?>">Careers</a></li>
          <li><a href="<?= site_url('contact-us') ?>">Contact Us</a></li>
        </ul>
      </div>

      <!-- Col 3: Services (Double column wide) -->
      <div class="col-lg-3 col-md-6 col-12">
        <h5 class="footer-heading">OUR SERVICES</h5>
        <div class="row">
          <div class="col-6">
            <ul class="footer-links list-unstyled">
              <li><a href="<?= site_url('home-shifting') ?>">Home Relocation</a></li>
              <li><a href="<?= site_url('office-relocation') ?>">Office Shifting</a></li>
              <li><a href="<?= site_url('bike-transportation') ?>">Bike Relocation</a></li>
              <li><a href="<?= site_url('car-transportation') ?>">Car Carrier</a></li>
              <li><a href="<?= site_url('loading-unloading') ?>">Loading & Unloading</a></li>
            </ul>
          </div>
          <div class="col-6">
            <ul class="footer-links list-unstyled">
              <li><a href="<?= site_url('packing-unpacking') ?>">Packing & Unpacking</a></li>
              <li><a href="<?= site_url('warehouse-and-storage') ?>">Warehousing</a></li>
              <li><a href="<?= site_url('vehicle-transportation') ?>">Vehicle Transportation</a></li>
              <li><a href="<?= site_url('storage-solutions') ?>">Storage Solutions</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Col 4: Quick Links -->
      <div class="col-lg-2 col-md-6 col-6">
        <h5 class="footer-heading">QUICK LINKS</h5>
        <ul class="footer-links list-unstyled">
          <li><a href="<?= site_url('faqs') ?>">FAQs</a></li>
          <li><a href="<?= site_url('blog') ?>">Blog</a></li>
          <li><a href="<?= site_url('terms-and-conditions') ?>">Terms & Conditions</a></li>
          <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Col 5: Contact Us -->
      <div class="col-lg-2 col-md-12">
        <h5 class="footer-heading">CONTACT US</h5>
        <ul class="footer-contact-list list-unstyled">
          <li class="d-flex align-items-start mb-3">
            <div class="contact-icon"><i class="bi bi-telephone"></i></div>
            <div class="contact-text">
              <a href="<?= @$phonehtml ?>"><?= @$phone ?></a><br>
              <a href="<?= @$phonehtml1 ?>"><?= @$phone1 ?></a>
            </div>
          </li>
          <li class="d-flex align-items-start mb-3">
            <div class="contact-icon"><i class="bi bi-envelope"></i></div>
            <div class="contact-text">
              <a href="<?= @$mailhtml ?>"><?= @$mail ?></a>
            </div>
          </li>
          <li class="d-flex align-items-start mb-3">
            <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
            <div class="contact-text">
              <?= @$address ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
    <div class="footer-bottom-bar text-center py-4">
      <p class="mb-0 footer-copyright">&copy; <?= date('Y') ?> <?= @$company3 ?>. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<div class="floating-actions">
  <a href="<?= $phonehtml ?>" class="float-btn float-call" title="Call Now" aria-label="Call <?= $company3 ?> now">
    <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
    <span>Call Now</span>
  </a>
  <a href="<?= $floatingWhatsappLink ?>" class="float-btn float-whatsapp" title="WhatsApp Us" target="_blank" rel="noopener" aria-label="Message <?= $company3 ?> on WhatsApp">
    <div class="icon-wrap"><i class="bi bi-whatsapp"></i></div>
    <span>WhatsApp Us</span>
  </a>
  <button type="button" class="float-btn float-callback" data-bs-toggle="modal" data-bs-target="#callMeBackModal" title="Call Me Back" aria-label="Request a Call Back">
    <div class="icon-wrap"><i class="bi bi-headset"></i></div>
    <span>Call Me Back</span>
  </button>
</div>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/callmeback_modal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/form.js"></script>
</body>
</html>
