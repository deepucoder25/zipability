    <!-- FAQ Section -->
        <div class="city-content-card mt-4">
          <h3 class="city-section-title-sm"><i class="bi bi-patch-question me-2"></i>Frequently Asked Questions — Packers & Movers in <?= $city ?></h3>
          <div class="city-faq-list mt-3" id="cityFaqAccordion">
            <?php
            $faqs = [
              ["q" => "How early should I book shifting services in $city?",
               "a" => "Booking at least 5–7 days earlier is recommended, especially for month-end dates and weekends when demand is highest."],
              ["q" => "Do you provide packing materials?",
               "a" => "Yes. Cartons, wrapping sheets, bubble rolls, and protective materials are included based on service type."],
              ["q" => "Can I move only a few household items?",
               "a" => "Absolutely. Small shifting requests and part-load transportation are available in $city."],
              ["q" => "Are goods insured during relocation?",
               "a" => "Insurance options are available for long-distance and valuable-item transportation."],
              ["q" => "Do you handle local office shifts in $city?",
               "a" => "Yes, including workstation packing, file movement, and electronic equipment relocation."],
              ["q" => "What is the cost of packers and movers in $city?",
               "a" => "Cost depends on distance, volume of goods, floor, and service type. Contact us for a free detailed quote."],
            ];
            foreach ($faqs as $i => $faq):
            ?>
            <div class="city-faq-item">
              <button class="city-faq-btn <?= $i === 0 ? 'active' : '' ?>" type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#cfaq<?= $i ?>"
                      aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
                <i class="bi bi-patch-question-fill faq-q-icon"></i>
                <span><?= $faq['q'] ?></span>
                <i class="bi bi-chevron-down faq-chevron"></i>
              </button>
              <div id="cfaq<?= $i ?>" class="collapse <?= $i === 0 ? 'show' : '' ?>">
                <div class="city-faq-body"><?= $faq['a'] ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>