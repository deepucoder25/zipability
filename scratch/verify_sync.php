<?php
// Load live cities
$html_path = 'C:\Users\grove\.gemini\antigravity-ide\brain\029e0967-740a-4559-ada6-361c6cc11ce5\.system_generated\steps\889\content.md';
$html = file_get_contents($html_path);
preg_match_all('/Packers and Movers in <b>(.*?)<\/b>/i', $html, $matches);
$live_cities = array_unique(array_map('trim', $matches[1]));
sort($live_cities);

// Load generated cities file
include __DIR__ . '/../application/modules/packers_movers/views/data/maharashtra.php';

// $cities contains the active ones
$active_cities = [];
foreach ($cities as $c) {
    $active_cities[] = $c['nm'];
}
sort($active_cities);

echo "Total Live Cities Extracted: " . count($live_cities) . "\n";
echo "Total Active Cities in maharashtra.php: " . count($active_cities) . "\n";

// Compare
$missing = array_diff($live_cities, $active_cities);
$extra = array_diff($active_cities, $live_cities);

if (count($missing) > 0) {
    echo "ERROR: The following live cities are missing in maharashtra.php:\n";
    print_r($missing);
} else {
    echo "SUCCESS: No live cities are missing in maharashtra.php.\n";
}

if (count($extra) > 0) {
    echo "ERROR: The following cities in maharashtra.php are active but not in the live list:\n";
    print_r($extra);
} else {
    echo "SUCCESS: No extra cities are active in maharashtra.php.\n";
}

if (count($missing) == 0 && count($extra) == 0 && count($live_cities) == count($active_cities)) {
    echo "VERIFICATION PASSED! Output matches live site exactly.\n";
} else {
    echo "VERIFICATION FAILED!\n";
}
