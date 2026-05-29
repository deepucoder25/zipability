<?php
$locations = [
    // Added from screenshot
    ["city" => "Aurangabad", "state" => "maharashtra"],
    ["city" => "Chandigarh", "state" => "chandigarh"],
    ["city" => "Dhanbad", "state" => "jharkhand"],
    ["city" => "Gwalior", "state" => "madhya-pradesh"],
    ["city" => "Hyderabad", "state" => "telangana"],
    ["city" => "Jodhpur", "state" => "rajasthan"],
    ["city" => "Kota", "state" => "rajasthan"],
    ["city" => "Meerut", "state" => "uttar-pradesh"],
    ["city" => "Navi Mumbai", "state" => "maharashtra"],
    ["city" => "Rajkot", "state" => "gujarat"],
    ["city" => "Siliguri", "state" => "west-bengal"],
    ["city" => "Vijayawada", "state" => "andhra-pradesh"],

    ["city" => "Ahmedabad", "state" => "gujarat"],
    ["city" => "Bangalore", "state" => "karnataka"],
    ["city" => "Chennai", "state" => "tamil-nadu"],
    ["city" => "Faridabad", "state" => "haryana"],
    ["city" => "Gurugram", "state" => "haryana"],
    ["city" => "Indore", "state" => "madhya-pradesh"],
    ["city" => "Jamshedpur", "state" => "jharkhand"],
    ["city" => "Mumbai", "state" => "maharashtra"],
    ["city" => "Ranchi", "state" => "jharkhand"],
    ["city" => "Surat", "state" => "gujarat"],
    ["city" => "Visakhapatnam", "state" => "andhra-pradesh"],

    ["city" => "Allahabad", "state" => "uttar-pradesh"],
    ["city" => "Bareilly", "state" => "uttar-pradesh"],
    ["city" => "Coimbatore", "state" => "tamil-nadu"],
    ["city" => "Ghaziabad", "state" => "uttar-pradesh"],
    ["city" => "Howrah", "state" => "west-bengal"],
    ["city" => "Jabalpur", "state" => "madhya-pradesh"],
    ["city" => "Ludhiana", "state" => "punjab"],
    ["city" => "Nagpur", "state" => "maharashtra"],
    ["city" => "Pune", "state" => "maharashtra"],
    ["city" => "Solapur", "state" => "maharashtra"],
    ["city" => "Vadodara", "state" => "gujarat"],

    ["city" => "Amritsar", "state" => "punjab"],
    ["city" => "Bhopal", "state" => "madhya-pradesh"],
    ["city" => "Delhi", "state" => "delhi"],
    ["city" => "Hubli-Dharwad", "state" => "karnataka"],
    ["city" => "Jaipur", "state" => "rajasthan"],
    ["city" => "Kolkata", "state" => "west-bengal"],
    ["city" => "Madurai", "state" => "tamil-nadu"],
    ["city" => "Nashik", "state" => "maharashtra"],
    ["city" => "Raipur", "state" => "chhattisgarh"],
    ["city" => "Srinagar", "state" => "jammu-and-kashmir"],
];

$hyderabad_localities = [
    "Hitech City", "Gachibowli", "Kondapur", "Madhapur", "Kukatpally", 
    "Miyapur", "Manikonda", "Jubilee Hills", "Banjara Hills", "Secunderabad", 
    "Begumpet", "Ameerpet", "Uppal", "Dilsukhnagar", "L.B. Nagar", 
    "Nanakramguda", "Hafeezpet", "Balanagar", "Jeedimetla", "Bowenpally", 
    "Malkajgiri", "Tarnaka", "Nagole", "Amberpet", "Chandanagar", 
    "Lingampally", "Nizampet", "Bachupally", "Kompally", "Alwal"
];

$bangalore_localities = [
    "HSR Layout", "Koramangala", "Indiranagar", "Whitefield", "Jayanagar", 
    "JP Nagar", "Marathahalli", "BTM Layout", "Yelahanka", "Electronic City", 
    "Bannerghatta Road", "Malleshwaram", "Hebbal", "Rajajinagar", "Bellandur", 
    "Banashankari", "Sarjapur Road", "Yeshwanthpur", "Domlur", "Kammanahalli", 
    "Kalyan Nagar", "RT Nagar", "Vijayanagar", "Basaveshwaranagar", "Anekal", 
    "Adugodi", "Agara", "Agram", "Banaswadi", "Chandra Layout"
];

$chennai_localities = [
    "Adyar", "Ambattur", "Anna Nagar", "T. Nagar", "Velachery", 
    "Tambaram", "OMR Road", "ECR Road", "Porur", "Guindy", 
    "Mylapore", "Nungambakkam", "Kodambakkam", "Sholinganallur", "Chromepet", 
    "Pallavaram", "Medavakkam", "Perungudi", "Madipakkam", "Alandur", 
    "Avadi", "Poonamallee", "Kilpauk", "Saidapet", "Royapettah", 
    "Egmore", "Besant Nagar", "Kotturpuram", "Thiruvanmiyur", "Triplicane", 
    "Royapuram", "Choolaimedu", "Mogappair", "Valasaravakkam", "Maduravoyal", 
    "Perambur"
];
?>

<section class="search-location-section py-5">
    <div class="container">

        <!-- Section Header -->
        <div class="location-heading mb-5 pb-3 border-bottom border-secondary border-opacity-10 d-flex align-items-center gap-3">
            <div class="location-heading-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-pin-map-fill"></i>
            </div>
            <div>
                <h2 class="h4 fw-bold mb-1 text-dark">Search By Location</h2>
                <p class="text-muted mb-0 small">Select your locality to find local bike transportation services in your city.</p>
            </div>
        </div>

        <!-- 3 Boxes Grid -->
        <div class="row g-4 justify-content-center">
            
            <!-- Box 1: Hyderabad -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="city-locality-box bg-white shadow-sm rounded-4 overflow-hidden border border-secondary border-opacity-10 d-flex flex-column w-100">
                    <div class="city-box-header px-4 py-3 text-white d-flex align-items-center justify-content-between">
                        <h3 class="h6 fw-bold mb-0 text-white"><i class="bi bi-geo-alt-fill me-2 text-warning"></i>Bike Transportation in Hyderabad</h3>
                        <span class="badge bg-white bg-opacity-20 text-dark rounded-pill px-2.5 py-1" style="font-size: 11px;"><?= count($hyderabad_localities) ?> Areas</span>
                    </div>
                    <div class="city-box-scroll px-3 py-2 flex-grow-1 overflow-y-auto" style="max-height: 350px;">
                        <ul class="locality-list list-unstyled mb-0">
                            <?php foreach ($hyderabad_localities as $loc): 
                                $slug = strtolower(str_replace(' ', '-', $loc));
                                $link = $slug . "-bike-transportation-telangana";
                            ?>
                                <li>
                                    <a href="<?= site_url($link) ?>" class="locality-item d-flex align-items-center justify-content-between" aria-label="Bike Transportation in <?= $loc ?>, Hyderabad">
                                        <span class="loc-text">Bike Transportation <strong><?= $loc ?></strong></span>
                                        <i class="bi bi-arrow-right-short loc-arrow"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Box 2: Bangalore -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="city-locality-box bg-white shadow-sm rounded-4 overflow-hidden border border-secondary border-opacity-10 d-flex flex-column w-100">
                    <div class="city-box-header px-4 py-3 text-white d-flex align-items-center justify-content-between">
                        <h3 class="h6 fw-bold mb-0 text-white"><i class="bi bi-geo-alt-fill me-2 text-warning"></i>Bike Transportation in Bangalore</h3>
                        <span class="badge bg-white bg-opacity-20 text-dark rounded-pill px-2.5 py-1" style="font-size: 11px;"><?= count($bangalore_localities) ?> Areas</span>
                    </div>
                    <div class="city-box-scroll px-3 py-2 flex-grow-1 overflow-y-auto" style="max-height: 350px;">
                        <ul class="locality-list list-unstyled mb-0">
                            <?php foreach ($bangalore_localities as $loc): 
                                $slug = strtolower(str_replace(' ', '-', $loc));
                                $link = $slug . "-bike-transportation-bangalore";
                            ?>
                                <li>
                                    <a href="<?= site_url($link) ?>" class="locality-item d-flex align-items-center justify-content-between" aria-label="Bike Transportation in <?= $loc ?>, Bangalore">
                                        <span class="loc-text">Bike Transportation <strong><?= $loc ?></strong></span>
                                        <i class="bi bi-arrow-right-short loc-arrow"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Box 3: Chennai -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="city-locality-box bg-white shadow-sm rounded-4 overflow-hidden border border-secondary border-opacity-10 d-flex flex-column w-100">
                    <div class="city-box-header px-4 py-3 text-white d-flex align-items-center justify-content-between">
                        <h3 class="h6 fw-bold mb-0 text-white"><i class="bi bi-geo-alt-fill me-2 text-warning"></i>Bike Transportation in Chennai</h3>
                        <span class="badge bg-white bg-opacity-20 text-dark rounded-pill px-2.5 py-1" style="font-size: 11px;"><?= count($chennai_localities) ?> Areas</span>
                    </div>
                    <div class="city-box-scroll px-3 py-2 flex-grow-1 overflow-y-auto" style="max-height: 350px;">
                        <ul class="locality-list list-unstyled mb-0">
                            <?php foreach ($chennai_localities as $loc): 
                                $slug = strtolower(str_replace(' ', '-', $loc));
                                $link = $slug . "-bike-transportation-tamil-nadu";
                            ?>
                                <li>
                                    <a href="<?= site_url($link) ?>" class="locality-item d-flex align-items-center justify-content-between" aria-label="Bike Transportation in <?= $loc ?>, Chennai">
                                        <span class="loc-text">Bike Transportation <strong><?= $loc ?></strong></span>
                                        <i class="bi bi-arrow-right-short loc-arrow"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
/* --- Search By Location Redesign --- */
.search-location-section {
    background-color: #fafbfd;
    font-family: 'Outfit', sans-serif;
}

.location-heading-icon {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: color-mix(in srgb, var(--footer-heading, #00B5B8) 12%, transparent);
    color: var(--footer-heading, #00B5B8);
    font-size: 17px;
    animation: bouncePin 3s infinite ease-in-out;
}

@keyframes bouncePin {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-4px); }
}

.city-locality-box {
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}

.city-locality-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08) !important;
}

.city-box-header {
    background: linear-gradient(135deg, var(--footer-heading, #00B5B8) 0%, var(--footer-bg, #04121E) 100%);
}

.locality-list li {
    margin-bottom: 2px;
}

.locality-item {
    display: flex;
    align-items: center;
    padding: 10px 12px;
    border-radius: 8px;
    color: #475569;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid transparent;
}

.locality-item:hover {
    background: #f8fafc;
    border-color: #f1f5f9;
    color: var(--footer-heading, #00B5B8);
    padding-left: 18px;
}

.loc-arrow {
    font-size: 16px;
    opacity: 0;
    transform: translateX(-6px);
    transition: all 0.25s ease;
    color: var(--footer-heading, #00B5B8);
}

.locality-item:hover .loc-arrow {
    opacity: 1;
    transform: translateX(0);
}

/* Custom Scrollbars */
.city-box-scroll::-webkit-scrollbar {
    width: 6px;
}

.city-box-scroll::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}

.city-box-scroll::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}

.city-box-scroll::-webkit-scrollbar-thumb:hover {
    background: var(--footer-heading, #00B5B8);
}
</style>

