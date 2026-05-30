<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================
     CITY PAGE SIDEBAR
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
  ====================================================== -->

<aside class="city-sidebar">

  <!-- CTA Contact Card -->
  <div class="city-sidebar-widget city-cta-card">
    <!-- Decorative BG icon -->
    <i class="bi bi-headset city-cta-bg-icon"></i>

    <div class="city-cta-inner">
      <div class="city-cta-icon-wrap">
        <i class="bi bi-headset"></i>
      </div>
      <h4 class="city-cta-title">Need Help Moving in <span><?= $city ?></span>?</h4>
      <p class="city-cta-desc">Get a free consultation from our shifting experts. Available 24/7.</p>

      <div class="city-cta-buttons">
        <!-- Primary Phone -->
        <a href="<?= $phonehtml ?>" class="city-cta-btn city-cta-call" id="sidebarCallBtn">
          <i class="bi bi-telephone-fill"></i>
          <div>
            <small>Call Support &nbsp;<span class="badge-live">LIVE</span></small>
            <strong><?= $phone ?></strong>
          </div>
        </a>

        <!-- Alternate Phone -->
        <a href="<?= $phonehtml1 ?>" class="city-cta-btn city-cta-alt-call" id="sidebarAltCallBtn">
          <i class="bi bi-telephone"></i>
          <div>
            <small>Alternate Line</small>
            <strong><?= $phone1 ?></strong>
          </div>
        </a>

        <!-- Action Row -->
        <div class="city-cta-action-row">
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="city-action-btn city-whatsapp-btn" id="sidebarWhatsAppBtn">
            <i class="bi bi-whatsapp"></i>
            WhatsApp
          </a>
          <button type="button" class="city-action-btn city-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal" id="sidebarQuoteBtn">
            <i class="bi bi-clipboard-check"></i>
            Get Quote
          </button>
        </div>
      </div>
    </div>
  </div>


  <!-- Trust Badges Widget -->
  <div class="city-sidebar-widget mt-4" id="sidebarTrustWidget">
    <h4 class="city-sidebar-widget-title">
      <i class="bi bi-patch-check-fill me-2 text-success"></i>Why Choose <?= $company3 ?>?
    </h4>
    <ul class="city-trust-list">
      <li>
        <div class="trust-icon-wrap"><i class="bi bi-clock-history"></i></div>
        <div>
          <strong><?= $yearsExperience ?> Years Experience</strong>
          <small>Trusted since <?= $startYear ?></small>
        </div>
      </li>
      <li>
        <div class="trust-icon-wrap trust-green"><i class="bi bi-people-fill"></i></div>
        <div>
          <strong><?= $happyClients ?> Happy Clients</strong>
          <small>Families and businesses trust us</small>
        </div>
      </li>
      <li>
        <div class="trust-icon-wrap trust-orange"><i class="bi bi-patch-check-fill"></i></div>
        <div>
          <strong>Verified & Licensed</strong>
          <small>ISO certified packers and movers</small>
        </div>
      </li>
      <li>
        <div class="trust-icon-wrap trust-red"><i class="bi bi-shield-fill-check"></i></div>
        <div>
          <strong><?= $secureShifting ?> Secure Shifting</strong>
          <small>Complete transit insurance options</small>
        </div>
      </li>
      <li>
        <div class="trust-icon-wrap trust-yellow"><i class="bi bi-geo-alt-fill"></i></div>
        <div>
          <strong>Pan-India Coverage</strong>
          <small>100+ branches across <?= $statesCovered ?> states</small>
        </div>
      </li>
    </ul>
  </div>

  <!-- Related Locations -->
  <div class="city-sidebar-widget mt-4" id="sidebarRelatedLocations">
    <h4 class="city-sidebar-widget-title">
      <i class="bi bi-pin-map-fill me-2"></i>Nearby Cities
    </h4>
    <p class="city-sidebar-widget-desc">Packers and Movers near <?= $city ?>.</p>
    <div class="city-related-tags" id="relatedCityTags">
      <?php
      $count = 0;
      foreach ($cities as $ct):
        if ($ct['nm'] == $city) continue;
        if ($count >= 10) break;
        $link      = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
        $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
      ?>
      <a href="<?= site_url("$link-bike-transportation-$statename") ?>"
         class="city-tag"
         id="relatedCity-<?= $count ?>">
        <i class="bi bi-arrow-right-short"></i><?= $ct['nm'] ?>
      </a>
      <?php
        $count++;
      endforeach;
      ?>
    </div>
  </div>

</aside><!-- /city-sidebar -->
