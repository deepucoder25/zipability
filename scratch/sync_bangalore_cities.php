<?php

$target_cities_raw = [
    "A F station yelahanka",
    "Adugodi",
    "Agara",
    "Agram",
    "Air Force hospital",
    "Amruthahalli",
    "Anandnagar",
    "Anekal",
    "Anekalbazar",
    "Arabic College",
    "Aranya Bhavan",
    "Ashoknagar",
    "Attibele",
    "Attur",
    "Austin Town",
    "Avalahalli",
    "Avani Sringeri mutt",
    "Avenue Road",
    "B Sk ii stage",
    "Bsf Campus yelahanka",
    "Bagalgunte",
    "Bagalur",
    "Balepete",
    "Banashankari",
    "Banaswadi",
    "Bandikodigehalli",
    "Bannerghatta",
    "Bapujinagar",
    "Basavanagudi",
    "Basaveshwaranagar",
    "Bellandur",
    "Benson Town",
    "Bestamaranahalli",
    "Bettahalsur",
    "Bhashyam Circle",
    "Bhattarahalli",
    "Bidaraguppe",
    "Bidrahalli",
    "Bangalore Viswavidalaya",
    "Bommanahalli",
    "Brigade Road",
    "Byatarayanapura",
    "C.V.raman nagar",
    "CMP Centre and school",
    "Crpf Campus yelahanka",
    "Cahmrajendrapet",
    "Chamrajpet",
    "Chandra Lay out",
    "Chickpet",
    "Chikkabettahalli",
    "Chikkajala",
    "Chikkalasandra",
    "Chikkanahalli",
    "Chunchanakuppe",
    "Cubban Road",
    "Dasarahalli",
    "Deepanjalinagar",
    "Devanagundi",
    "Devarjeevanahalli",
    "Devasandra",
    "Dharmaram College",
    "Doddagubbi",
    "Doddajala",
    "Doddakallasandra",
    "Doddanekkundi",
    "Domlur",
    "Dommasandra",
    "Doorvaninagar",
    "Dr Ambedkar Veedhi",
    "Electronics City",
    "Fraser Town",
    "Gaviopuram Extension",
    "Gaviopuram Guttanahalli",
    "Gayathrinagar",
    "Girinagar",
    "Goraguntepalya",
    "Goripalya",
    "Government Electric factory",
    "Govindapalya",
    "Gunjur",
    "Chamrajendrapet",
    "Chandra Layout",
    "Hsr Layout",
    "Hampinagar",
    "Handenahalli",
    "Harogadde",
    "Hebbal Kempapura",
    "Hennagara",
    "Highcourt",
    "Hongasandra",
    "Hoodi",
    "Horamavu",
    "Hosakerehalli",
    "Hosur Road",
    "Hulimangala",
    "Hulimavu",
    "Hulsur Bazaar",
    "Hunasamaranahalli",
    "Isro Anthariksh Bhavan",
    "Immedihalli",
    "Indalavadi",
    "Indiranagar",
    "Ittamadu Layout",
    "J P Nagar",
    "J.C. Nagar",
    "Jakkur",
    "Jalahalli",
    "Jalavayuvihar",
    "Jayanagar",
    "Jeevanahalli",
    "Jeevanbhimanagar",
    "Jigani",
    "JP Nagar III Phase",
    "KHB Colony",
    "Kacharakanahalli",
    "Kadabagere",
    "Kadugodi",
    "Kalkunte",
    "Kalyanagar",
    "Kamagondanahalli",
    "Kamakshipalya",
    "Kannamangala",
    "Kannur",
    "Kanteeravanagar",
    "Kathriguppe",
    "Kenchanahalli",
    "Kendriya Sadan",
    "Kendriya Vihar",
    "Kodigehalli",
    "Konanakunte",
    "Koramangala",
    "Kothanur",
    "Krishnarajapuram",
    "Kugur",
    "Kumaraswamy Layout",
    "Kumbalgodu",
    "Kundalahalli",
    "Lalbagh West",
    "Legislators Home",
    "Lingarajapuram",
    "M S R road",
    "Madhavan Park",
    "Madivala",
    "Magadi Road",
    "Mahadevapura",
    "Mahalakshmipuram Layout",
    "Mahatma Gandhi road",
    "Malkand Lines",
    "Mallathahalli",
    "Malleswaram",
    "Mandalay Lines",
    "Marathahalli Colony",
    "Marsur",
    "Maruthi Sevanagar",
    "Mathikere",
    "Mavalli",
    "Mayasandra",
    "Medihalli",
    "Medimallasandra",
    "Mico Layout",
    "Milk Colony",
    "Mount St joseph",
    "Msrit",
    "Mundur",
    "Museum Road",
    "Muthanallur",
    "Muthusandra",
    "Nal",
    "Naduvathi",
    "Nagarbhavi",
    "Nagasandra",
    "Nagavara",
    "Nandinilayout",
    "Narasimharaja Colony",
    "Narayan Pillai street",
    "Nayandahalli",
    "Neralur",
    "New Tharaggupet",
    "New Thippasandra",
    "Okalipuram",
    "Pnt Col kavalbyrasandra",
    "Padmanabhnagar",
    "Palace Guttahalli",
    "Panathur",
    "Pasmpamahakavi Road",
    "Peenya",
    "R T nagar",
    "R.M.v. extension ii stage",
    "Rajajinagar",
    "Rajanakunte",
    "Rajarajeshwarinagar",
    "Rajbhavan",
    "Ramachandrapuram",
    "Ramagondanahalli",
    "Ramakrishna Hegde nagar"
];

// Clean and normalize target list, keeping unique ones
$target_cities = [];
foreach ($target_cities_raw as $c) {
    $c = trim($c);
    if (!empty($c)) {
        $target_cities[$c] = true;
    }
}
$target_cities_list = array_keys($target_cities);

echo "Unique target cities count: " . count($target_cities_list) . "\n";

// Load Karnataka cities as reference
$karnataka_file = __DIR__ . '/../application/modules/packers_movers/views/data/karnataka.php';
$karnataka_map = [];
if (file_exists($karnataka_file)) {
    // Read the file line by line to extract coordinates even from commented ones
    $k_lines = file($karnataka_file);
    foreach ($k_lines as $line) {
        if (preg_match('/array\(\s*\'nm\'\s*=>\s*\'([^\']+)\'\s*,\s*\'lat\'\s*=>\s*\'([^\']+)\'\s*,\s*\'lon\'\s*=>\s*\'([^\']+)\'/', $line, $m)) {
            $name = trim($m[1]);
            $lat = trim($m[2]);
            $lon = trim($m[3]);
            $karnataka_map[strtolower($name)] = ['lat' => $lat, 'lon' => $lon];
        }
    }
}
echo "Loaded " . count($karnataka_map) . " cities from Karnataka reference.\n";

// Load cache if it exists
$cache_file = __DIR__ . '/bangalore_geocode_cache.json';
$cache = [];
if (file_exists($cache_file)) {
    $cache = json_decode(file_get_contents($cache_file), true);
    if (!is_array($cache)) {
        $cache = [];
    }
}
echo "Loaded " . count($cache) . " cached geocoding results.\n";

$opts = [
    'http' => [
        'method' => "GET",
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36\r\n"
    ]
];
$context = stream_context_create($opts);

$final_cities = [];
$total_to_fetch = 0;

foreach ($target_cities_list as $city) {
    // 1. Check Karnataka map
    $lower_city = strtolower($city);
    if (isset($karnataka_map[$lower_city])) {
        $final_cities[] = [
            'nm' => $city,
            'lat' => $karnataka_map[$lower_city]['lat'],
            'lon' => $karnataka_map[$lower_city]['lon']
        ];
        continue;
    }
    
    // 2. Check cache
    if (isset($cache[$city])) {
        $final_cities[] = [
            'nm' => $city,
            'lat' => $cache[$city]['lat'],
            'lon' => $cache[$city]['lon']
        ];
        continue;
    }
    
    $total_to_fetch++;
}

echo "Cities to fetch from Nominatim: $total_to_fetch\n";

$fetched_count = 0;
foreach ($target_cities_list as $city) {
    $lower_city = strtolower($city);
    if (isset($karnataka_map[$lower_city])) {
        continue;
    }
    if (isset($cache[$city])) {
        continue;
    }
    
    $lat = '12.971598';
    $lon = '77.594562';
    
    // Try to fetch
    // sleep 1.5 seconds to respect Nominatim rate limit
    usleep(1500000);
    
    $query = urlencode("{$city}, Bangalore, Karnataka, India");
    $url = "https://nominatim.openstreetmap.org/search?q={$query}&format=json&limit=1";
    
    echo "Fetching: $city ... ";
    $response = @file_get_contents($url, false, $context);
    
    if ($response) {
        $data = json_decode($response, true);
        if (!empty($data) && isset($data[0]['lat']) && isset($data[0]['lon'])) {
            $lat = $data[0]['lat'];
            $lon = $data[0]['lon'];
            echo "Success! ({$lat}, {$lon})\n";
        } else {
            // Try with Bengaluru
            usleep(1500000);
            $query2 = urlencode("{$city}, Bengaluru, Karnataka, India");
            $url2 = "https://nominatim.openstreetmap.org/search?q={$query2}&format=json&limit=1";
            $response2 = @file_get_contents($url2, false, $context);
            if ($response2) {
                $data2 = json_decode($response2, true);
                if (!empty($data2) && isset($data2[0]['lat']) && isset($data2[0]['lon'])) {
                    $lat = $data2[0]['lat'];
                    $lon = $data2[0]['lon'];
                    echo "Success (with Bengaluru)! ({$lat}, {$lon})\n";
                } else {
                    echo "Not found, using fallback.\n";
                }
            } else {
                echo "Failed response, using fallback.\n";
            }
        }
    } else {
        echo "Failed request, using fallback.\n";
    }
    
    $cache[$city] = ['lat' => $lat, 'lon' => $lon];
    file_put_contents($cache_file, json_encode($cache, JSON_PRETTY_PRINT));
    
    $final_cities[] = [
        'nm' => $city,
        'lat' => $lat,
        'lon' => $lon
    ];
}

// Generate the PHP array output
$output = "<?php\n";
$output .= "//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='KA'\n";
$output .= "\$cities = array(\n";
foreach ($final_cities as $c) {
    $output .= "\t\tarray('nm' => '" . addslashes($c['nm']) . "','lat' => '{$c['lat']}','lon' => '{$c['lon']}','sc' => 'KA'),\n";
}
// Strip the trailing comma and newline from the last entry
$output = rtrim($output, ",\n") . "\n";
$output .= ");\n";

$dest_file = __DIR__ . '/../application/modules/packers_movers/views/data/bangalore.php';
file_put_contents($dest_file, $output);
echo "Successfully updated $dest_file with " . count($final_cities) . " cities.\n";
