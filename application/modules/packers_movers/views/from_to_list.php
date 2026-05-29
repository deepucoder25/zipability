<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$stateSlug = strtolower(str_replace(" ", "-", $state));

// Box 1 destinations (20 southern & western cities)
$box1_destinations = [
    ["city" => "Bangalore", "state" => "karnataka"],
    ["city" => "Chennai", "state" => "tamil-nadu"],
    ["city" => "Mumbai", "state" => "maharashtra"],
    ["city" => "Pune", "state" => "maharashtra"],
    ["city" => "Ahmedabad", "state" => "gujarat"],
    ["city" => "Vijayawada", "state" => "andhra-pradesh"],
    ["city" => "Visakhapatnam", "state" => "andhra-pradesh"],
    ["city" => "Surat", "state" => "gujarat"],
    ["city" => "Nagpur", "state" => "maharashtra"],
    ["city" => "Indore", "state" => "madhya-pradesh"],
    ["city" => "Vadodara", "state" => "gujarat"],
    ["city" => "Nashik", "state" => "maharashtra"],
    ["city" => "Rajkot", "state" => "gujarat"],
    ["city" => "Navi Mumbai", "state" => "maharashtra"],
    ["city" => "Thane", "state" => "maharashtra"],
    ["city" => "Coimbatore", "state" => "tamil-nadu"],
    ["city" => "Madurai", "state" => "tamil-nadu"],
    ["city" => "Tirupati", "state" => "andhra-pradesh"],
    ["city" => "Mysore", "state" => "karnataka"],
    ["city" => "Kochi", "state" => "kerala"]
];

// Box 2 destinations (20 northern, eastern & central cities)
$box2_destinations = [
    ["city" => "Delhi", "state" => "delhi"],
    ["city" => "Gurugram", "state" => "haryana"],
    ["city" => "Noida", "state" => "uttar-pradesh"],
    ["city" => "Patna", "state" => "bihar"],
    ["city" => "Kolkata", "state" => "west-bengal"],
    ["city" => "Jaipur", "state" => "rajasthan"],
    ["city" => "Lucknow", "state" => "uttar-pradesh"],
    ["city" => "Kanpur", "state" => "uttar-pradesh"],
    ["city" => "Bhopal", "state" => "madhya-pradesh"],
    ["city" => "Ghaziabad", "state" => "uttar-pradesh"],
    ["city" => "Ludhiana", "state" => "punjab"],
    ["city" => "Agra", "state" => "uttar-pradesh"],
    ["city" => "Faridabad", "state" => "haryana"],
    ["city" => "Meerut", "state" => "uttar-pradesh"],
    ["city" => "Varanasi", "state" => "uttar-pradesh"],
    ["city" => "Srinagar", "state" => "jammu-and-kashmir"],
    ["city" => "Dhanbad", "state" => "jharkhand"],
    ["city" => "Amritsar", "state" => "punjab"],
    ["city" => "Allahabad", "state" => "uttar-pradesh"],
    ["city" => "Howrah", "state" => "west-bengal"]
];

// Helper to filter out self-referential routes
$filter_routes = function($destinations) use ($stateSlug) {
    return array_filter($destinations, function($dest) use ($stateSlug) {
        return strtolower(str_replace(" ", "-", $dest['state'])) != $stateSlug && strtolower(str_replace(" ", "-", $dest['city'])) != $stateSlug;
    });
};

$box1_list = array_values($filter_routes($box1_destinations));
$box2_list = array_values($filter_routes($box2_destinations));
?>

<section class="from-to-list-section py-5">
    <div class="container">
        
        <!-- Premium Section Header -->
        <div class="text-center mb-5">
            <span class="badge rounded-pill text-uppercase px-3 py-1.5 mb-2" style="background: rgba(0, 181, 184, 0.08); color: #00B5B8; font-weight: 700; letter-spacing: 1px; font-size: 0.75rem;">Direct Shifting Network</span>
            <h2 class="fw-bold mb-2" style="color: #031633;">
                Bike Transportation from <span style="color: #00B5B8;"><?= $state ?></span>
            </h2>
            <p class="text-muted max-width-600 mx-auto" style="font-size: 0.95rem;">
                Select your destination city to explore direct two-wheeler courier routes, transport rates, and schedules from <?= $state ?>.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Column 1: South & West Direct Shifting Routes -->
            <div class="col-lg-6 col-12">
                <div class="route-column-card">
                    <div class="route-card-header">
                        <h3 class="route-card-title">
                            <i class="bi bi-geo-alt-fill"></i>
                            From <?= $state ?> to South &amp; West Hubs
                        </h3>
                        <span class="route-card-badge"><?= count($box1_list) ?> Routes</span>
                    </div>
                    <div class="route-list-scroll">
                        <ul class="route-list">
                            <?php foreach ($box1_list as $dest): 
                                $citySlug = strtolower(str_replace(" ", "-", $dest['city']));
                                $link = "bike-transportation-service-from-" . $stateSlug . "-to-" . $citySlug;
                            ?>
                                <li class="route-item">
                                    <a href="<?= site_url($link) ?>" class="route-item-link">
                                        Bike Transportation Service from <?= $state ?> to <?= $dest['city'] ?>
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Column 2: North, East & Central Direct Shifting Routes -->
            <div class="col-lg-6 col-12">
                <div class="route-column-card">
                    <div class="route-card-header">
                        <h3 class="route-card-title">
                            <i class="bi bi-geo-alt-fill"></i>
                            From <?= $state ?> to North &amp; East Hubs
                        </h3>
                        <span class="route-card-badge"><?= count($box2_list) ?> Routes</span>
                    </div>
                    <div class="route-list-scroll">
                        <ul class="route-list">
                            <?php foreach ($box2_list as $dest): 
                                $citySlug = strtolower(str_replace(" ", "-", $dest['city']));
                                $link = "bike-transportation-service-from-" . $stateSlug . "-to-" . $citySlug;
                            ?>
                                <li class="route-item">
                                    <a href="<?= site_url($link) ?>" class="route-item-link">
                                        Bike Transportation Service from <?= $state ?> to <?= $dest['city'] ?>
                                        <i class="bi bi-chevron-right"></i>
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
