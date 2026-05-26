<?php
// Path to content.md (fetched live page)
$html_path = 'C:\Users\grove\.gemini\antigravity-ide\brain\029e0967-740a-4559-ada6-361c6cc11ce5\.system_generated\steps\889\content.md';
$html = file_get_contents($html_path);

// Extract live cities
preg_match_all('/Packers and Movers in <b>(.*?)<\/b>/i', $html, $matches);
$live_cities = array_unique(array_map('trim', $matches[1]));
sort($live_cities);

echo "Live Cities Count: " . count($live_cities) . "\n";

// We will index live cities by lowercase name for case-insensitive matching
$live_cities_lower = [];
foreach ($live_cities as $lc) {
    $live_cities_lower[strtolower($lc)] = $lc;
}

// Paths
$maharashtra_file = __DIR__ . '/../application/modules/packers_movers/views/data/maharashtra.php';
$backup_file = $maharashtra_file . '.bak';

// Backup first
copy($maharashtra_file, $backup_file);
echo "Backup created at: $backup_file\n";

// Read file lines
$lines = file($maharashtra_file);
$new_lines = [];

// First, parse existing cities and keep track of them
$existing_cities = []; // lowerCaseName => array info
foreach ($lines as $line) {
    if (preg_match('/array\(\s*\'nm\'\s*=>\s*\'([^\']*)\'\s*,\s*\'lat\'\s*=>\s*\'([^\']*)\'\s*,\s*\'lon\'\s*=>\s*\'([^\']*)\'\s*,\s*\'sc\'\s*=>\s*\'([^\']*)\'\s*\)/', $line, $m)) {
        $nm = trim($m[1]);
        $lat = trim($m[2]);
        $lon = trim($m[3]);
        $sc = trim($m[4]);
        $existing_cities[strtolower($nm)] = [
            'nm' => $nm,
            'lat' => $lat,
            'lon' => $lon,
            'sc' => $sc
        ];
    }
}

// Let's create a combined list of all cities (unique keys)
$all_city_keys = array_unique(array_merge(array_keys($existing_cities), array_keys($live_cities_lower)));
sort($all_city_keys);

$output_lines = [];
$output_lines[] = "<?php";
$output_lines[] = "//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='MH'";
$output_lines[] = "\$cities = array(";

$added_count = 0;
$commented_count = 0;
$uncommented_count = 0;
$added_list = [];

foreach ($all_city_keys as $key) {
    $is_live = isset($live_cities_lower[$key]);
    
    if (isset($existing_cities[$key])) {
        // We have this city in the existing file
        $city_info = $existing_cities[$key];
        $nm = $city_info['nm'];
        // If live, use the actual name from the live list to ensure correct casing
        if ($is_live) {
            $nm = $live_cities_lower[$key];
        }
        $lat = $city_info['lat'];
        $lon = $city_info['lon'];
        $sc = $city_info['sc'];
    } else {
        // This is a new city from live list
        $nm = $live_cities_lower[$key];
        $lat = '0.00000000'; // Default coordinates
        $lon = '0.00000000';
        $sc = 'MH';
        $added_count++;
        $added_list[] = $nm;
    }
    
    $city_line = "\t\tarray('nm' => '$nm','lat' => '$lat','lon' => '$lon','sc' => '$sc')";
    
    if ($is_live) {
        $output_lines[] = $city_line . ",";
        $uncommented_count++;
    } else {
        $output_lines[] = "\t\t// " . $city_line . ",";
        $commented_count++;
    }
}

$output_lines[] = ");";

// Write to file
file_put_contents($maharashtra_file, implode("\n", $output_lines) . "\n");

echo "Synchronization complete!\n";
echo "Total Active/Uncommented Cities: $uncommented_count\n";
echo "Total Commented Out Cities: $commented_count\n";
echo "Newly Added Cities ($added_count):\n";
foreach ($added_list as $new_city) {
    echo "  - $new_city\n";
}
