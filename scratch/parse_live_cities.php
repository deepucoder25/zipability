<?php
$html = file_get_contents('C:\Users\grove\.gemini\antigravity-ide\brain\029e0967-740a-4559-ada6-361c6cc11ce5\.system_generated\steps\866\content.md');
preg_match_all('/Packers and Movers in <b>(.*?)<\/b>/i', $html, $matches);
$live_cities = array_unique($matches[1]);
sort($live_cities);

echo "Total Live Cities: " . count($live_cities) . "\n";
foreach ($live_cities as $city) {
    echo "- " . $city . "\n";
}
