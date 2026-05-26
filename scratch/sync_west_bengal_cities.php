<?php

$target_cities_raw = [
    "Ahmedpur",
    "Aistala",
    "Aknapur",
    "Alipurduar",
    "Amta",
    "Amtala",
    "Andal",
    "Arambagh",
    "Asansol",
    "Ashoknagar Kalyangarh",
    "Badkulla",
    "Baduria",
    "Bagdogra",
    "Bagnan",
    "Bagula",
    "Bahula",
    "Baidyabati",
    "Bakreswar",
    "Balarampur",
    "Bally",
    "Balurghat",
    "Bamangola",
    "Baneswar",
    "Bangaon",
    "Bankra",
    "Bankura",
    "Bansberia",
    "Bansihari",
    "Barabazar",
    "Baranagar",
    "Barasat",
    "Bardhaman",
    "Barjora",
    "Barrackpore",
    "Baruipur",
    "Basanti",
    "Basirhat",
    "Begampur",
    "Belda",
    "Beldanga",
    "Beliatore",
    "Berhampore",
    "Bhadreswar",
    "Bhandardaha",
    "Bhatpara",
    "Birbhum",
    "Birpara",
    "Bishnupur",
    "Bolpur",
    "Budge Budge",
    "Bali Chak",
    "Bawali",
    "Canning",
    "Chakapara",
    "Chakdaha",
    "Champadanga",
    "Champdani",
    "Chandannagar",
    "Chandrakona",
    "Chittaranjan",
    "Churulia",
    "Champahati",
    "Contai",
    "Cooch Behar",
    "Cossimbazar",
    "Dakshin Dinajpur",
    "Dalkola",
    "Dum Dum",
    "Darjeeling",
    "Daulatpur",
    "Debagram",
    "Debipur",
    "Dhaniakhali",
    "Dhulagari",
    "Dhulian",
    "Dhupguri",
    "Diamond Harbour",
    "Digha",
    "Dinhata",
    "Domjur",
    "Dubrajpur",
    "Durgapur",
    "Egra",
    "Falakata",
    "Farakka",
    "Fort Gloster",
    "Gaighata",
    "Gairkata",
    "Gangadharpur",
    "Gangarampur",
    "Garui",
    "Garulia",
    "Ghatal",
    "Giria",
    "Gobardanga",
    "Gobindapur",
    "Gopinathpur",
    "Gopalpur",
    "Gorubathan",
    "Gosaba",
    "Gosanimari",
    "Gurdaha",
    "Guskhara",
    "Habra",
    "Haldia",
    "Haldibari",
    "Halisahar",
    "Harindanga",
    "Haringhata",
    "Haripur",
    "Hasimara",
    "Hindusthan Cables Town",
    "Hooghly",
    "Howrah",
    "Ichapur",
    "Indpur",
    "Ingraj Bazar",
    "Islampur",
    "Jafarpur",
    "Jaigaon",
    "Jalpaiguri",
    "Jamuria",
    "Jangipur",
    "Jaynagar Majilpur",
    "Jejur",
    "Jhalida",
    "Jhargram",
    "Jhilimili",
    "Kakdwip",
    "Kalaikunda",
    "Kaliaganj",
    "Kalimpong",
    "Kalna",
    "Kalyani",
    "Kamarhati",
    "Kamarpukur",
    "Kanchrapara",
    "Kandi",
    "Karimpur",
    "Katwa",
    "Kenda",
    "Keshabpur",
    "Kharagpur",
    "Kharar",
    "Kharba",
    "Khardaha",
    "Khatra",
    "Kirnahar",
    "Kolkata",
    "Konnagar",
    "Krishna Nagar",
    "Krishnapur",
    "Kshirpai",
    "Kulpi",
    "Kultali",
    "Kulti",
    "Kurseong",
    "Lalgarh",
    "Lalgola",
    "Loyabad",
    "Madanpur",
    "Madhyamgram",
    "Mahiari",
    "Mahishadal",
    "Mainaguri",
    "Manikpara",
    "Masila",
    "Mathabhanga",
    "Matiali",
    "Matigara",
    "Medinipur",
    "Mejia",
    "Memari",
    "Mirik",
    "Mohanpur",
    "Monoharpur",
    "Muragacha",
    "Muri",
    "Murshidabad",
    "Nabadwip",
    "Nabagram",
    "Nadia",
    "Nagarukhra",
    "Nagrakata",
    "Naihati",
    "Naksalbari",
    "Nalhati",
    "Nalpur",
    "Namkhana",
    "Nandigram",
    "Nangi",
    "Nayagram",
    "North 24 Parganas",
    "Odlabari",
    "Paikpara",
    "Panagarh",
    "Panchla",
    "Panchmura",
    "Pandua",
    "Panihati",
    "Panskura",
    "Parbatipur",
    "Paschim Medinipur",
    "Patiram",
    "Patuli",
    "Pujali",
    "Puncha",
    "Purba Medinipur",
    "Purulia",
    "Patrasaer",
    "Raghudebbati",
    "Raghunathpur",
    "Raiganj",
    "Rajmahal",
    "Rajnagar",
    "Ramchandrapur",
    "Ramjibanpur",
    "Rampur Hat",
    "Ranaghat",
    "Raniganj",
    "Raypur",
    "Rishra",
    "Ramnagar",
    "Sahapur",
    "Sainthia",
    "Salanpur",
    "Sankarpur",
    "Sankrail",
    "Santipur",
    "Santoshpur",
    "Santuri",
    "Sarenga",
    "Serampore",
    "Serpur",
    "Shyamnagar",
    "Siliguri",
    "Singur",
    "Sodpur",
    "Solap",
    "Sonada",
    "Sonamukhi",
    "Sonarpur",
    "South 24 Parganas",
    "Srikhanda",
    "Srirampur",
    "Suri",
    "Swarupnagar",
    "Takdah",
    "Taki",
    "Tamluk",
    "Tarakeswar",
    "Titagarh",
    "Tufanganj",
    "Tulin",
    "Uchalan",
    "Ula",
    "Uluberia",
    "Uttar Dinajpur",
    "Uttarpara Kotrung",
    "Amlagora"
];

// Clean and normalize target list (just in case there are duplicates or extra spaces)
$target_cities = [];
foreach ($target_cities_raw as $c) {
    $c = trim($c);
    if (!empty($c)) {
        $target_cities[$c] = true;
    }
}

echo "Target cities count: " . count($target_cities) . "\n";

$filepath = __DIR__ . '/../application/modules/packers_movers/views/data/west-bengal.php';
if (!file_exists($filepath)) {
    die("File not found: $filepath\n");
}

// Backup file first
copy($filepath, $filepath . '.bak');
echo "Backup created.\n";

$lines = file($filepath);
$new_lines = [];
$processed_cities = [];

foreach ($lines as $line) {
    // Check if line contains an array entry: array('nm' => 'CityName',...
    // Note: It might be commented out with //
    if (preg_match('/(array\(\s*\'nm\'\s*=>\s*\'([^\']+)\')/', $line, $matches)) {
        $city_name = $matches[2];
        $processed_cities[$city_name] = true;
        
        // Check if this city is in our target list
        if (isset($target_cities[$city_name])) {
            // It should be active (uncommented). If it starts with //, remove it.
            $cleaned_line = preg_replace('/^\s*\/\/\s*/', "\t\t", $line);
            $new_lines[] = $cleaned_line;
        } else {
            // It should be inactive (commented out). If it doesn't start with //, comment it out.
            // Let's preserve current indentation.
            if (!preg_match('/^\s*\/\//', $line)) {
                // If it starts with tabs or spaces, replace them with tabs and // array(...)
                $cleaned_line = preg_replace('/^(\s*)/', '$1// ', $line);
                $new_lines[] = $cleaned_line;
            } else {
                $new_lines[] = $line;
            }
        }
    } else {
        $new_lines[] = $line;
    }
}

// Find any target cities that were not in the file
$missing_cities = array_diff_key($target_cities, $processed_cities);
echo "Missing cities count: " . count($missing_cities) . "\n";

if (!empty($missing_cities)) {
    // We need to add the missing cities inside the $cities array before the closing array parenthesis.
    // Let's find the closing parenthesis line '):' or ');'
    $closing_idx = -1;
    for ($i = count($new_lines) - 1; $i >= 0; $i--) {
        if (trim($new_lines[$i]) === ');') {
            $closing_idx = $i;
            break;
        }
    }
    
    if ($closing_idx !== -1) {
        $added_lines = [];
        foreach ($missing_cities as $city_name => $_) {
            $added_lines[] = "\t\tarray('nm' => '$city_name','lat' => '0.00000000','lon' => '0.00000000','sc' => 'WB'),\n";
            echo "Adding missing city: $city_name\n";
        }
        
        // Insert missing cities before the closing array line
        array_splice($new_lines, $closing_idx, 0, $added_lines);
    } else {
        echo "Error: Could not find closing array parenthesis ');'\n";
    }
}

file_put_contents($filepath, implode('', $new_lines));
echo "Successfully updated $filepath\n";
