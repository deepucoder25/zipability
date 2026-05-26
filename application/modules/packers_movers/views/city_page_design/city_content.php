<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
   $htmlcontent = "
            <p>
              Planning a move in <strong> $city </strong>? Here's what you need to know. Traffic delays, apartment timing rules, narrow society lanes, and sudden weather changes can turn a simple shifting job into a long day. That's exactly where <strong> $company3 </strong> helps. We've been handling household relocation, office shifting, bike transport, and local moving in  $city  with trained staff, proper packing methods, and practical planning that actually works on ground level.
            </p>
            <p>
              People searching for <strong>Top Packers and Movers in  $city </strong> usually want one thing — safe shifting without confusion. Nobody wants broken furniture or late delivery calls after packing their whole house.
            </p>
          </div>

          <!-- Feature Pills -->
          <div class='city-feature-pills'>
            <div class='city-pill'><i class='bi bi-shield-check'></i> 100% Insured Shifting</div>
            <div class='city-pill'><i class='bi bi-truck'></i> Real-time GPS Tracking</div>
            <div class='city-pill'><i class='bi bi-box-seam'></i> Premium Multi-layer Packing</div>
            <div class='city-pill'><i class='bi bi-clock-history'></i> On-Time Delivery Guaranteed</div>
          </div>
       
   ";
   $htmlcontent1 = "
    <!-- What Makes Relocation Different -->
        <div class='city-content-card mt-4'>
          <h3 class='city-section-title-sm'>What Makes Local Relocation in  $city Different?</h3>
          <p>Every city has its own moving challenges. In <strong> $city</strong>, monsoon season means extra waterproof wrapping is necessary for wooden furniture and electronics. Some residential areas also have limited parking access for larger trucks, so arranging a local tempo becomes important.</p>
          <p>That's why families looking for <strong>Best Packers and Movers in  $city</strong> prefer experienced movers instead of random transport vendors. Timing coordination, building permissions, unloading sequence, and proper carton labeling save a lot of confusion later.</p>

          <!-- Services List -->
          <h3 class='city-section-title-sm mt-4'>Services Available for Household, Office & Vehicles in  $city</h3>
          <p> $company3  handles a wide range of relocation needs:</p>
          <ul class='city-checklist'>
            <li><i class='bi bi-check2-circle'></i> Household relocation in  $city</li>
            <li><i class='bi bi-check2-circle'></i> Office and commercial shifting</li>
            <li><i class='bi bi-check2-circle'></i> Bike and car transportation</li>
            <li><i class='bi bi-check2-circle'></i> Local moving within  $city</li>
            <li><i class='bi bi-check2-circle'></i> Storage and warehouse support</li>
            <li><i class='bi bi-check2-circle'></i> Loading and unloading assistance</li>
          </ul>
          <p>Many customers searching for <strong>Relocating Services Near Me in  $city</strong> also ask about part-load shifting. We handle that too — especially for students and small families. Temporary storage is also available for customers waiting for possession dates.</p>
        </div>

       

   ";
   $htmlcontent2 = "
    <!-- Why Choose Professional Movers -->
        <div class='city-content-card mt-4'>
          <h3 class='city-section-title-sm'>Why Experienced Movers in  $city Make Relocation Easier</h3>
          <p>Professional relocation is about timing, coordination, and packing quality. Fragile kitchen items? Packed separately. Glass tables? Corner protected. Washing machine installation? Done carefully after unloading.</p>
          <p>A trained mover in <strong> $city</strong> understands apartment restrictions, society permissions, local transport timing, and road conditions — without unnecessary delays. Our staff uses lifting belts, furniture sliders, and layered wrapping for delicate items.</p>
          <p>We keep pricing fair: transparent quotations, no hidden loading charges, and clear discussion before booking is confirmed.</p>

      
        </div>
   ";
} 