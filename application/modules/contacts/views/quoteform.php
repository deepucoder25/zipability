  <div class="hero-quote-card-container">
            <!-- Card Header -->
            <div class="hero-quote-header">
              <h3 class="hero-quote-title">Get Your Best Moving Quote</h3>
              <p class="hero-quote-subtitle">Quick, Fast & Free Estimates</p>
            </div>
            
            <div class="hero-quote-white-card">
              <!-- Card Body / Form -->
              <div class="card-body-form">
                <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
                  
                  <div class="form-row-custom">
                    <!-- Name Input -->
                    <div class="input-wrap-custom">
                      <i class="bi bi-person input-icon-custom"></i>
                      <input type="text" name="name" class="form-control-custom" placeholder="Your Name" >
                    </div>
                    
                    <!-- Phone Input -->
                    <div class="input-wrap-custom">
                      <i class="bi bi-telephone input-icon-custom"></i>
                      <input type="tel" name="phone" class="form-control-custom" placeholder="Phone Number" >
                    </div>
                    
                    <!-- Email Input -->
                    <div class="input-wrap-custom">
                      <i class="bi bi-envelope input-icon-custom"></i>
                      <input type="email" name="email" class="form-control-custom" placeholder="Email Address" >
                    </div>
                    
                    <!-- Select Service -->
                    <div class="input-wrap-custom select-wrap-custom">
                      <span class="select-label-custom">Select Service</span>
                      <select name="mtype" class="form-select-custom" >
                        <option value="" disabled selected>Select Service</option>
                        <option>Household Relocation</option>
                        <option>Office Relocation</option>
                        <option>Car/Bike Shifting</option>
                        <option>Warehousing</option>
                      </select>
                    </div>
                    
                    <!-- Moving From -->
                    <div class="input-wrap-custom half-width-mobile">
                      <i class="bi bi-geo-alt input-icon-custom"></i>
                      <input type="text" name="mfrom" class="form-control-custom" value="<?= @$city ?>" placeholder="Moving From" >
                    </div>
                    
                    <!-- Moving To -->
                    <div class="input-wrap-custom half-width-mobile">
                      <i class="bi bi-geo-alt input-icon-custom"></i>
                      <input type="text" name="mto" class="form-control-custom" placeholder="Moving To" >
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit-custom">
                      <i class="bi bi-send submit-btn-icon-desktop"></i>
                      <i class="bi bi-file-earmark-text submit-btn-icon-mobile"></i>
                      <span>Get Quote</span>
                    </button>
                  </div>
                  
                  <div id="quoteformresults"></div>
                </form>
              </div>
              
              <!-- Card Footer / Trust Badge Bar (Desktop Only) -->
              <div class="card-footer-trust d-none d-lg-flex justify-content-between align-items-center">
                <div class="trust-item">
                  <i class="bi bi-shield-check trust-icon"></i>
                  <div class="trust-text">
                    <strong>100% Secure</strong>
                    <span>Your data is safe with us</span>
                  </div>
                </div>
                <div class="divider-vertical"></div>
                <div class="trust-item">
                  <i class="bi bi-clock trust-icon"></i>
                  <div class="trust-text">
                    <strong>Quick Response</strong>
                    <span>We respond within 15 mins</span>
                  </div>
                </div>
                <div class="divider-vertical"></div>
                <div class="trust-item">
                  <i class="bi bi-currency-rupee trust-icon-circle"></i>
                  <div class="trust-text">
                    <strong>Best Price Guarantee</strong>
                    <span>Get the most competitive rates</span>
                  </div>
                </div>
                <div class="divider-vertical"></div>
                <div class="trust-item">
                  <i class="bi bi-headset trust-icon"></i>
                  <div class="trust-text">
                    <strong>24/7 Support</strong>
                    <span>We are here to help</span>
                  </div>
                </div>
              </div>
              
              <!-- Mobile Security Tag (Mobile Only, Inside the Card) -->
              <div class="mobile-security-tag d-flex d-lg-none justify-content-center align-items-center gap-2 py-3">
                <i class="bi bi-shield-check text-primary"></i>
                <span>100% Secure. We never share your data.</span>
              </div>
            </div>

          </div>