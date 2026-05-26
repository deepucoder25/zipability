<!-- FOOTER SECTION -->
<?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');
?>
<footer class="footer-section">

  <div class="footer-main">
    <div class="container">
      <div class="row g-4 g-xl-5">

        <div class="col-lg-4">
          <div class="footer-brand">
            <a href="<?= site_url() ?>" class="footer-brand-logo">
            <div class="h3 fw-bold text-white mb-2"><?= $company3?> </div>
            </a>

            <p class="footer-brand-copy">
              Safe. Secure. Sincere. Your trusted moving partner for a hassle-free relocation experience.
            </p>

            <div class="footer-feature-strip">
              <div class="footer-feature-item">
                <i class="bi bi-shield-check"></i>
                <span>Safe Handling</span>
              </div>

              <div class="footer-feature-item">
                <i class="bi bi-box-seam"></i>
                <span>Secure Packing</span>
              </div>

              <div class="footer-feature-item">
                <i class="bi bi-people"></i>
                <span>Experienced Team</span>
              </div>

              <div class="footer-feature-item">
                <i class="bi bi-award"></i>
                <span>On-Time Delivery</span>
              </div>
            </div>

         
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="footer-widget">
            <div class="h5 fw-bold text-white mb-3">Quick Links</div>

            <ul>
              <li><a href="<?= site_url() ?>">Home</a></li>
              <li><a href="<?= site_url('our-services') ?>">Our Services</a></li>
              <li><a href="<?= site_url('about-us') ?>">About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
              <li><a href="<?= site_url('our-branches') ?>">Our Branches</a></li>
              <li><a href="<?= site_url('testimonials') ?>">Testimonials</a></li>
              <li><a href="<?= site_url('reviews') ?>">Reviews</a></li>
              <li><a href="<?= site_url('photo-gallery') ?>">Gallery</a></li>
              <li><a href="<?= site_url('contact-us') ?>">Contact Us</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="footer-widget">
            <div class="h5 fw-bold text-white mb-3">Our Services</div>

            <ul>
              <li><a href="<?= site_url('home-shifting') ?>">Home Shifting</a></li>
              <li><a href="<?= site_url('office-relocation') ?>">Office Relocation</a></li>
              <li><a href="<?= site_url('car-transportation') ?>">Car Transportation</a></li>
              <li><a href="<?= site_url('bike-transportation') ?>">Bike Transportation</a></li>
              <li><a href="<?= site_url('warehouse-and-storage') ?>">Warehouse &amp; Storage</a></li>
              <li><a href="<?= site_url('domestic-relocation') ?>">Domestic Relocation</a></li>
              <li><a href="<?= site_url('international-shifting') ?>">International Shifting</a></li>
              <li><a href="<?= site_url('corporate-shifting') ?>">Corporate Shifting</a></li>
              <li><a href="<?= site_url('intercity-shifting') ?>">Intercity Shifting</a></li>
              <li><a href="<?= site_url('local-shifting') ?>">Local Shifting</a></li>
              <li><a href="<?= site_url('logistic-services') ?>">Logistic Services</a></li>
              <li><a href="<?= site_url('pet-relocation') ?>">Pet Relocation</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="footer-widget footer-contact-widget">
            <div class="h5 fw-bold text-white mb-3">Contact Us</div>

            <div class="footer-contact-list">
              <a href="<?= $phonehtml ?>" class="footer-contact-item">
                <i class="bi bi-telephone-fill"></i>
                <span><?= $phone ?></span>
              </a>

              <a href="<?= $phonehtml1 ?>" class="footer-contact-item">
                <i class="bi bi-telephone-fill"></i>
                <span><?= $phone1 ?></span>
              </a>

              <a href="<?= $mailhtml ?>" class="footer-contact-item">
                <i class="bi bi-envelope-fill"></i>
                <span><?= $mail ?></span>
              </a>


              <div class="footer-contact-item footer-address-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span><?= $address ?></span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        <div class="footer-bottom-wrap">
          <div class="footer-bottom-col footer-copy">
            <p>
              &copy; <?= date('Y') ?> <?=$company3?>.<br>
              All Rights Reserved.
            </p>
          </div>

          <div class="footer-bottom-col footer-bottom-badge">
            <i class="bi bi-shield-check"></i>
            <span>100% Secure Shifting</span>
          </div>

          <div class="footer-bottom-col footer-bottom-badge">
            <i class="bi bi-people"></i>
            <span>Reliable | Affordable | Professional</span>
          </div>

          <div class="footer-bottom-col footer-bottom-social">
            <span class="footer-follow-text">Follow Us</span>

            <div class="footer-social">
              <a href="<?= $facebookhtml ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="<?= $instagramhtml ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="<?= $linkedinhtml ?>" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="<?= $youtubehtml ?>" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>

        <div class="footer-policy-links">
          <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
          <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
        </div>
      </div>
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
