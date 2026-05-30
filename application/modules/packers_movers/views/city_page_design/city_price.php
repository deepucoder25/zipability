<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ============ Premium Shifting Rate Charts Widget ============ -->
<div class="city-pricing-section mt-5 mb-5">
  <div class="city-section-title-sm">
    <i class="bi bi-tags-fill me-2 text-primary"></i>Shifting Charges in <?= $city ?>
  </div>
  <p class="city-pricing-desc mb-3">Check out our transparent, affordable packers and movers price charts for local and domestic shifts from <?= $city ?>. Use the tabs below to view different transport rates:</p>
  
  <!-- Swipe indicator helper for mobile view -->
  <div class="text-end text-muted mb-2 d-md-none scroll-hint">
    <small><i class="bi bi-arrow-left-right me-1"></i> Swipe horizontally to view full rate columns</small>
  </div>

  <!-- Tab Scrollable Navigation -->
  <div class="pricing-tabs-scroll-wrap">
    <ul class="nav nav-pills pricing-pills" id="pricingTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="house-tab" data-bs-toggle="pill" data-bs-target="#pills-house" type="button" role="tab" aria-controls="pills-house" aria-selected="true">
          <i class="bi bi-house-door-fill me-1"></i>House Shifting
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="office-tab" data-bs-toggle="pill" data-bs-target="#pills-office" type="button" role="tab" aria-controls="pills-office" aria-selected="false">
          <i class="bi bi-building-fill me-1"></i>Office Shifting
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="car-tab" data-bs-toggle="pill" data-bs-target="#pills-car" type="button" role="tab" aria-controls="pills-car" aria-selected="false">
          <i class="bi bi-car-front-fill me-1"></i>Car Transport
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="bike-tab" data-bs-toggle="pill" data-bs-target="#pills-bike" type="button" role="tab" aria-controls="pills-bike" aria-selected="false">
          <i class="bi bi-bicycle me-1"></i>Bike Shifting
        </button>
      </li>
    </ul>
  </div>
  
  <!-- Tab Content (responsive side scrollable tables) -->
  <div class="tab-content" id="pricingTabContent">
    
    <!-- House Shifting Tab -->
    <div class="tab-pane fade show active" id="pills-house" role="tabpanel" aria-labelledby="house-tab">
      <div class="pricing-table-container">
        <button type="button" class="table-scroll-btn btn-left" onclick="scrollPricingTable(-250)" aria-label="Scroll Left" title="Scroll Left"><i class="bi bi-chevron-left"></i></button>
        <button type="button" class="table-scroll-btn btn-right" onclick="scrollPricingTable(250)" aria-label="Scroll Right" title="Scroll Right"><i class="bi bi-chevron-right"></i></button>
        <div class="table-responsive city-table-wrap">
          <table class="table table-hover text-center align-middle pricing-table">
            <thead>
              <tr>
                <th>Move Type</th>
                <th>100-350 km</th>
                <th>350-750 km</th>
                <th>750-1200 km</th>
                <th>1200-1700 km</th>
                <th>1700-2300 km</th>
                <th>2300-3000 km</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-box-seam me-1 text-primary"></i> 1 BHK House</td>
                <td>Rs. 11,000 - 21,000</td>
                <td>Rs. 13,500 - 22,500</td>
                <td>Rs. 15,500 - 25,500</td>
                <td>Rs. 18,500 - 27,000</td>
                <td>Rs. 21,000 - 30,000</td>
                <td>Rs. 23,500 - 36,700</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-houses-fill me-1 text-primary"></i> 2 BHK House</td>
                <td>Rs. 15,000 - 25,000</td>
                <td>Rs. 17,500 - 28,500</td>
                <td>Rs. 20,000 - 31,000</td>
                <td>Rs. 23,000 - 36,000</td>
                <td>Rs. 27,000 - 40,000</td>
                <td>Rs. 29,300 - 46,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-house-heart-fill me-1 text-primary"></i> 3 BHK House</td>
                <td>Rs. 18,000 - 30,000</td>
                <td>Rs. 21,000 - 34,000</td>
                <td>Rs. 23,500 - 38,000</td>
                <td>Rs. 27,500 - 42,000</td>
                <td>Rs. 32,000 - 48,000</td>
                <td>Rs. 35,000 - 55,500</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-building-fill-check me-1 text-primary"></i> 4+ BHK/Villa</td>
                <td>Rs. 22,500 - 34,500</td>
                <td>Rs. 26,000 - 39,000</td>
                <td>Rs. 29,000 - 45,000</td>
                <td>Rs. 34,000 - 47,500</td>
                <td>Rs. 38,000 - 55,000</td>
                <td>Rs. 41,000 - 60,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <!-- Office Shifting Tab -->
    <div class="tab-pane fade" id="pills-office" role="tabpanel" aria-labelledby="office-tab">
      <div class="pricing-table-container">
        <button type="button" class="table-scroll-btn btn-left" onclick="scrollPricingTable(-250)" aria-label="Scroll Left" title="Scroll Left"><i class="bi bi-chevron-left"></i></button>
        <button type="button" class="table-scroll-btn btn-right" onclick="scrollPricingTable(250)" aria-label="Scroll Right" title="Scroll Right"><i class="bi bi-chevron-right"></i></button>
        <div class="table-responsive city-table-wrap">
          <table class="table table-hover text-center align-middle pricing-table">
            <thead>
              <tr>
                <th>Office Size</th>
                <th>100-350 km</th>
                <th>350-750 km</th>
                <th>750-1200 km</th>
                <th>1200-1700 km</th>
                <th>1700-2300 km</th>
                <th>2300-3000 km</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-display me-1 text-success"></i> Micro (1-5 Desk)</td>
                <td>Rs. 14,000 - 25,000</td>
                <td>Rs. 17,000 - 28,000</td>
                <td>Rs. 20,000 - 32,000</td>
                <td>Rs. 24,000 - 35,000</td>
                <td>Rs. 28,000 - 40,000</td>
                <td>Rs. 32,000 - 45,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-pc-display-horizontal me-1 text-success"></i> Small (6-15 Desk)</td>
                <td>Rs. 20,000 - 35,000</td>
                <td>Rs. 25,000 - 42,000</td>
                <td>Rs. 28,000 - 48,000</td>
                <td>Rs. 32,000 - 55,000</td>
                <td>Rs. 38,000 - 65,000</td>
                <td>Rs. 45,000 - 75,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-briefcase-fill me-1 text-success"></i> Medium (16-30 Desk)</td>
                <td>Rs. 30,000 - 50,000</td>
                <td>Rs. 38,000 - 60,000</td>
                <td>Rs. 45,000 - 70,000</td>
                <td>Rs. 52,000 - 80,000</td>
                <td>Rs. 60,000 - 95,000</td>
                <td>Rs. 70,000 - 1,10,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-buildings-fill me-1 text-success"></i> Large IT Setup</td>
                <td>Rs. 50,000+</td>
                <td>Rs. 65,000+</td>
                <td>Rs. 80,000+</td>
                <td>Rs. 95,000+</td>
                <td>Rs. 1,15,000+</td>
                <td>Rs. 1,35,000+</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <!-- Car Shifting Tab -->
    <div class="tab-pane fade" id="pills-car" role="tabpanel" aria-labelledby="car-tab">
      <div class="pricing-table-container">
        <button type="button" class="table-scroll-btn btn-left" onclick="scrollPricingTable(-250)" aria-label="Scroll Left" title="Scroll Left"><i class="bi bi-chevron-left"></i></button>
        <button type="button" class="table-scroll-btn btn-right" onclick="scrollPricingTable(250)" aria-label="Scroll Right" title="Scroll Right"><i class="bi bi-chevron-right"></i></button>
        <div class="table-responsive city-table-wrap">
          <table class="table table-hover text-center align-middle pricing-table">
            <thead>
              <tr>
                <th>Car Type</th>
                <th>100-350 km</th>
                <th>350-750 km</th>
                <th>750-1200 km</th>
                <th>1200-1700 km</th>
                <th>1700-2300 km</th>
                <th>2300-3000 km</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-car-front me-1 text-warning"></i> Hatchback Car</td>
                <td>Rs. 5,500 - 11,000</td>
                <td>Rs. 7,500 - 14,000</td>
                <td>Rs. 9,000 - 17,000</td>
                <td>Rs. 11,000 - 13,000</td>
                <td>Rs. 13,000 - 23,000</td>
                <td>Rs. 15,000 - 26,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-car-front-fill me-1 text-warning"></i> Sedan Car</td>
                <td>Rs. 7,000 - 10,000</td>
                <td>Rs. 10,000 - 15,000</td>
                <td>Rs. 13,000 - 18,000</td>
                <td>Rs. 15,000 - 20,000</td>
                <td>Rs. 18,000 - 24,000</td>
                <td>Rs. 21,000 - 27,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-truck me-1 text-warning"></i> SUV Car</td>
                <td>Rs. 13,000 - 15,000</td>
                <td>Rs. 15,000 - 19,000</td>
                <td>Rs. 18,000 - 22,000</td>
                <td>Rs. 21,000 - 24,000</td>
                <td>Rs. 23,000 - 27,000</td>
                <td>Rs. 25,000 - 30,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-gem me-1 text-warning"></i> Luxury Car</td>
                <td>Rs. 17,000 - 21,000</td>
                <td>Rs. 20,000 - 25,000</td>
                <td>Rs. 23,000 - 27,000</td>
                <td>Rs. 26,000 - 31,000</td>
                <td>Rs. 29,000 - 35,000</td>
                <td>Rs. 31,000 - 40,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-speedometer2 me-1 text-warning"></i> Sports Car</td>
                <td>Rs. 20,000 - 24,000</td>
                <td>Rs. 24,000 - 28,000</td>
                <td>Rs. 27,000 - 31,000</td>
                <td>Rs. 30,000 - 35,000</td>
                <td>Rs. 33,000 - 40,000</td>
                <td>Rs. 35,000 - 45,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <!-- Bike Shifting Tab -->
    <div class="tab-pane fade" id="pills-bike" role="tabpanel" aria-labelledby="bike-tab">
      <div class="pricing-table-container">
        <button type="button" class="table-scroll-btn btn-left" onclick="scrollPricingTable(-250)" aria-label="Scroll Left" title="Scroll Left"><i class="bi bi-chevron-left"></i></button>
        <button type="button" class="table-scroll-btn btn-right" onclick="scrollPricingTable(250)" aria-label="Scroll Right" title="Scroll Right"><i class="bi bi-chevron-right"></i></button>
        <div class="table-responsive city-table-wrap">
          <table class="table table-hover text-center align-middle pricing-table">
            <thead>
              <tr>
                <th>Bike Type</th>
                <th>Up to 400 Km</th>
                <th>400-800 Km</th>
                <th>800-1300 Km</th>
                <th>1300-1900 Km</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-bicycle me-1 text-danger"></i> 100cc - 150cc</td>
                <td>Rs. 2,000 - 3,500</td>
                <td>Rs. 3,000 - 4,000</td>
                <td>Rs. 3,500 - 4,500</td>
                <td>Rs. 4,000 - 5,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-bicycle me-1 text-danger"></i> 150cc - 200cc</td>
                <td>Rs. 2,400 - 3,600</td>
                <td>Rs. 3,400 - 4,100</td>
                <td>Rs. 3,900 - 4,600</td>
                <td>Rs. 4,400 - 4,900</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-bicycle me-1 text-danger"></i> 200cc - 250cc</td>
                <td>Rs. 2,700 - 3,900</td>
                <td>Rs. 3,700 - 4,400</td>
                <td>Rs. 4,200 - 4,900</td>
                <td>Rs. 4,700 - 5,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-bicycle me-1 text-danger"></i> 250cc - 350cc</td>
                <td>Rs. 2,800 - 3,800</td>
                <td>Rs. 3,800 - 4,300</td>
                <td>Rs. 4,300 - 4,800</td>
                <td>Rs. 4,800 - 5,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-bicycle me-1 text-danger"></i> 350cc - 500cc</td>
                <td>Rs. 2,800 - 3,800</td>
                <td>Rs. 3,800 - 4,300</td>
                <td>Rs. 4,300 - 4,800</td>
                <td>Rs. 4,800 - 5,000</td>
              </tr>
              <tr>
                <td class="tbl-main-col"><i class="bi bi-lightning-fill me-1 text-danger"></i> Sports Bike</td>
                <td>Rs. 4,500 - 7,000</td>
                <td>Rs. 6,000 - 9,000</td>
                <td>Rs. 8,000 - 12,000</td>
                <td>Rs. 11,000 - 15,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div><!-- /tab-content -->
</div><!-- /city-pricing-section -->

<!-- Concise Interactive scroll helpers with zero library dependencies -->
<script>
function scrollPricingTable(amount) {
  // Select the active tab content pane
  const activePane = document.querySelector('#pricingTabContent .tab-pane.active');
  if (activePane) {
    // Select the overflow-scrolling table wrap container
    const scrollContainer = activePane.querySelector('.table-responsive');
    if (scrollContainer) {
      scrollContainer.scrollBy({
        left: amount,
        behavior: 'smooth'
      });
    }
  }
}
</script>
