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
                        <span class="badge bg-white bg-opacity-20 text-dark rounded-pill px-2.5 py-1 city-badge-pill"><?= count($hyderabad_localities) ?> Areas</span>
                    </div>
                    <div class="city-box-scroll px-3 py-2 flex-grow-1 overflow-y-auto city-box-scroll-pane">
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
                        <span class="badge bg-white bg-opacity-20 text-dark rounded-pill px-2.5 py-1 city-badge-pill"><?= count($bangalore_localities) ?> Areas</span>
                    </div>
                    <div class="city-box-scroll px-3 py-2 flex-grow-1 overflow-y-auto city-box-scroll-pane">
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
                        <span class="badge bg-white bg-opacity-20 text-dark rounded-pill px-2.5 py-1 city-badge-pill"><?= count($chennai_localities) ?> Areas</span>
                    </div>
                    <div class="city-box-scroll px-3 py-2 flex-grow-1 overflow-y-auto city-box-scroll-pane">
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


