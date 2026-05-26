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

$filepath = __DIR__ . '/../application/modules/packers_movers/views/data/bangalore.php';
if (!file_exists($filepath)) {
    die("Error: bangalore.php file does not exist yet.\n");
}

include $filepath;

if (!isset($cities) || !is_array($cities)) {
    die("Error: \$cities variable is not set or not an array in bangalore.php.\n");
}

$active_cities = [];
$errors = [];
foreach ($cities as $index => $c) {
    if (!isset($c['nm']) || !isset($c['lat']) || !isset($c['lon']) || !isset($c['sc'])) {
        $errors[] = "Index $index has missing keys: " . json_encode($c);
        continue;
    }
    
    if ($c['sc'] !== 'KA') {
        $errors[] = "City '{$c['nm']}' has wrong state code '{$c['sc']}' (expected 'KA')";
    }
    
    if (empty($c['lat']) || empty($c['lon'])) {
        $errors[] = "City '{$c['nm']}' has empty coordinates";
    }
    
    $active_cities[$c['nm']] = $c;
}

echo "Total target unique cities: " . count($target_cities_list) . "\n";
echo "Total active cities in bangalore.php: " . count($active_cities) . "\n";

$extra_in_file = array_diff_key($active_cities, $target_cities);
$missing_in_file = array_diff_key($target_cities, $active_cities);

if (!empty($extra_in_file)) {
    echo "ERROR: Extra cities in file:\n";
    foreach ($extra_in_file as $name => $_) {
        echo " - $name\n";
    }
}

if (!empty($missing_in_file)) {
    echo "ERROR: Missing cities in file:\n";
    foreach ($missing_in_file as $name => $_) {
        echo " - $name\n";
    }
}

if (!empty($errors)) {
    echo "ERROR: Structural or validation errors found:\n";
    foreach ($errors as $err) {
        echo " - $err\n";
    }
}

if (empty($extra_in_file) && empty($missing_in_file) && empty($errors) && count($target_cities_list) === count($active_cities)) {
    echo "SUCCESS: Verification passed! All " . count($target_cities_list) . " cities are correctly synced and configured.\n";
    exit(0);
} else {
    echo "FAILED: Verification failed.\n";
    exit(1);
}
