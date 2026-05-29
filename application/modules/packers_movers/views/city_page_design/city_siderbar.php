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

<style>
/* =====================================================
   CITY PAGE — SIDEBAR STYLES
   ===================================================== */
.city-sidebar {
  position: sticky;
  top: 100px;
}

/* Generic sidebar widget */
.city-sidebar-widget {
  background: #ffffff;
  border-radius: 18px;
  padding: 24px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.06);
  border: 1px solid #e8edf4;
}

.city-sidebar-widget-title {
  font-size: 1rem;
  font-weight: 800;
  color: #001333;
  margin-bottom: 6px;
  padding-bottom: 10px;
  border-bottom: 2px solid #f1f5f9;
  position: relative;
}
.city-sidebar-widget-title::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 36px;
  height: 2px;
  background: #ff6600;
}
.city-sidebar-widget-desc {
  font-size: 12px;
  color: #94a3b8;
  margin-bottom: 16px;
}

/* ---- CTA Card ---- */
.city-cta-card {
  background: linear-gradient(125deg, var(--primary-cyan) 0%, #0a3fa8 55%, #1565d8 100%);
  position: relative;
  overflow: hidden;
  border: none;
  padding: 28px 22px;
}
.city-cta-bg-icon {
  position: absolute;
  top: -10px;
  right: -10px;
  font-size: 7rem;
  color: rgba(255,255,255,0.04);
  pointer-events: none;
  transform: rotate(15deg);
}
.city-cta-inner { position: relative; z-index: 1; }

.city-cta-icon-wrap {
  width: 50px;
  height: 50px;
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.25);
  border-radius: 14px;
  display: grid;
  place-items: center;
  font-size: 22px;
  color: #ffd600;
  margin-bottom: 14px;
  position: relative;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  animation: cta-icon-pulse 3s infinite ease-in-out;
}
.city-cta-icon-wrap i {
  display: inline-block;
  animation: headset-float 2.5s infinite ease-in-out;
}
.city-cta-card:hover .city-cta-icon-wrap {
  transform: scale(1.1) rotate(15deg);
  background: rgba(255,255,255,0.2);
  border-color: #ffd600;
  box-shadow: 0 0 15px rgba(255, 214, 0, 0.6);
}
@keyframes cta-icon-pulse {
  0%, 100% {
    box-shadow: 0 0 0 0 rgba(255, 214, 0, 0.2), inset 0 0 0 0 rgba(255, 255, 255, 0.1);
  }
  50% {
    box-shadow: 0 0 12px 3px rgba(255, 214, 0, 0.4), inset 0 0 6px 1px rgba(255, 255, 255, 0.15);
  }
}
@keyframes headset-float {
  0%, 100% { transform: translateY(0) rotate(0) scale(1); }
  50% { transform: translateY(-5px) rotate(8deg) scale(1.08); }
}
.city-cta-title {
  font-size: 1.05rem;
  font-weight: 800;
  color: #ffffff;
  line-height: 1.3;
  margin-bottom: 8px;
}
.city-cta-title span { color: #ffd600; }
.city-cta-desc {
  font-size: 12px;
  color: rgba(255,255,255,0.72);
  margin-bottom: 18px;
  line-height: 1.5;
}

/* CTA Buttons */
.city-cta-buttons { display: flex; flex-direction: column; gap: 10px; }

.city-cta-btn {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 12px 16px;
  border-radius: 12px;
  background: rgba(255,255,255,0.09);
  border: 1px solid rgba(255,255,255,0.14);
  text-decoration: none;
  color: #ffffff;
  transition: background 0.25s, transform 0.2s;
}
.city-cta-btn:hover {
  background: rgba(255,255,255,0.16);
  transform: translateX(3px);
  color: #fff;
}
.city-cta-btn > i { font-size: 20px; color: #ffd600; flex-shrink: 0; display: inline-block; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }

/* Different highly attractive animations on the two phone numbers */
.city-cta-call > i {
  animation: modern-phone-ring 2s infinite ease-in-out;
}
.city-cta-alt-call > i {
  animation: alt-phone-heartbeat 2.2s infinite ease-in-out;
}

#sidebarCallBtn:hover > i {
  transform: scale(1.3) rotate(-15deg);
  color: #ffffff;
  filter: drop-shadow(0 0 8px #ffd600);
  animation: modern-phone-ring 0.6s infinite ease-in-out; /* Supercharged ring on hover */
}

#sidebarAltCallBtn:hover > i {
  transform: scale(1.3) rotate(360deg);
  color: #ffffff;
  filter: drop-shadow(0 0 8px #ffd600);
}

@keyframes modern-phone-ring {
  0%, 100% {
    transform: rotate(0) scale(1);
    filter: drop-shadow(0 0 0px rgba(255, 214, 0, 0));
  }
  15% {
    transform: rotate(-15deg) scale(1.2);
    filter: drop-shadow(0 0 6px rgba(255, 214, 0, 0.7));
  }
  30% {
    transform: rotate(15deg) scale(1.2);
    filter: drop-shadow(0 0 6px rgba(255, 214, 0, 0.7));
  }
  45% {
    transform: rotate(-10deg) scale(1.15);
    filter: drop-shadow(0 0 4px rgba(255, 214, 0, 0.5));
  }
  60% {
    transform: rotate(10deg) scale(1.15);
    filter: drop-shadow(0 0 4px rgba(255, 214, 0, 0.5));
  }
  75% {
    transform: rotate(0) scale(1.05);
  }
}

@keyframes alt-phone-heartbeat {
  0%, 100% {
    transform: translateY(0) scale(1) rotate(0deg);
    color: #ffd600;
  }
  25% {
    transform: translateY(-4px) scale(1.2) rotate(-8deg);
    color: #ffffff;
    filter: drop-shadow(0 0 4px rgba(255, 255, 255, 0.6));
  }
  40% {
    transform: translateY(0) scale(1.1) rotate(4deg);
    color: #ffd600;
  }
  60% {
    transform: translateY(-2px) scale(1.25) rotate(0deg);
    color: #ffffff;
    filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.8));
  }
}

.city-cta-btn small {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 10px;
  color: rgba(255,255,255,0.65);
  margin-bottom: 2px;
}
.city-cta-btn strong { display: block; font-size: 14px; font-weight: 700; }

.badge-live {
  background: #22c55e;
  color: #fff;
  font-size: 9px;
  padding: 1px 5px;
  border-radius: 3px;
  font-weight: 700;
}

.city-cta-action-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
  margin-top: 4px;
}
.city-action-btn {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
  padding: 12px 8px;
  border-radius: 12px;
  border: none;
  font-size: 13px;
  font-weight: 700;
  cursor: pointer;
  text-decoration: none;
  transition: transform 0.2s, opacity 0.2s;
}
.city-action-btn:hover {
  transform: translateY(-4px);
  opacity: 1;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}
.city-action-btn i {
  font-size: 18px;
  display: inline-block;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.city-whatsapp-btn {
  background: #25d366;
  color: #fff;
  transition: all 0.3s ease;
}
.city-whatsapp-btn:hover {
  background: #22c35e;
}
.city-whatsapp-btn i {
  animation: wa-bounce-spin 3s infinite ease-in-out;
}
.city-whatsapp-btn:hover i {
  transform: scale(1.35) rotate(360deg);
  filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.8));
}

.city-quote-btn {
  background: #ffd600;
  color: #001333;
  transition: all 0.3s ease;
}
.city-quote-btn:hover {
  background: #ffea00;
}
.city-quote-btn i {
  animation: quote-pop-check 2.8s infinite ease-in-out;
}
.city-quote-btn:hover i {
  transform: scale(1.3) translateY(-2px) rotate(-15deg);
  filter: drop-shadow(0 0 6px rgba(0, 19, 51, 0.3));
}

/* ---- Services List ---- */
.city-services-list { list-style: none; padding: 0; margin: 0 0 14px; display: flex; flex-direction: column; gap: 6px; }
.city-service-link {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 14px;
  border-radius: 10px;
  background: #f8fafc;
  border: 1px solid #f1f5f9;
  text-decoration: none;
  color: #334155;
  font-size: 13px;
  font-weight: 600;
  transition: all 0.25s;
}
.city-service-link:hover {
  background: var(--primary-cyan);
  color: #fff;
  border-color: var(--primary-cyan);
  transform: translateX(4px);
}
.city-service-link:hover .city-svc-icon,
.city-service-link:hover .city-svc-arrow { color: #fff; }
.city-svc-icon { font-size: 16px; color: var(--primary-cyan); flex-shrink: 0; transition: color 0.25s; }
.city-svc-name { flex: 1; }
.city-svc-arrow { font-size: 13px; color: #94a3b8; transition: color 0.25s; }
.city-view-all-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding: 10px;
  border: 2px solid var(--primary-cyan);
  border-radius: 10px;
  color: var(--primary-cyan);
  font-weight: 700;
  font-size: 13px;
  text-decoration: none;
  transition: all 0.25s;
}
.city-view-all-btn:hover { background: var(--primary-cyan); color: #fff; }

/* ---- Trust List ---- */
.city-trust-list { list-style: none; padding: 0; margin: 14px 0 0; display: flex; flex-direction: column; gap: 16px; }
.city-trust-list li { display: flex; align-items: flex-start; gap: 12px; }
.trust-icon-wrap {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  background: #eff6ff;
  color: var(--primary-cyan);
  display: grid;
  place-items: center;
  font-size: 16px;
  flex-shrink: 0;
}
.trust-green  { background: #f0fdf4; color: #16a34a; }
.trust-orange { background: #fff7ed; color: #ea580c; }
.trust-red    { background: #fef2f2; color: #dc2626; }
.trust-yellow { background: #fefce8; color: #ca8a04; }
.city-trust-list li strong { display: block; font-size: 13px; color: #001333; line-height: 1.3; }
.city-trust-list li small  { font-size: 11px; color: #94a3b8; }

/* ---- Related tags ---- */
.city-related-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 4px; }
.city-tag {
  display: inline-flex;
  align-items: center;
  gap: 3px;
  padding: 6px 12px;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  color: #334155;
  text-decoration: none;
  transition: all 0.2s;
}
.city-tag:hover { background: var(--primary-cyan); color: #fff; border-color: var(--primary-cyan); }
.city-tag i { color: var(--primary-cyan); transition: color 0.2s; font-size: 14px; }
.city-tag:hover i { color: #fff; }

/* Responsive */
@media (max-width: 991px) {
  .city-sidebar { position: static; }
}
</style>