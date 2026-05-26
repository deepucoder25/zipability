<?php
$urls = [
    'http://localhost/apmIndia/index.php/our-branches',
    'http://localhost/apmIndia/index.php/uttar-pradesh',
    'http://localhost/apmIndia/index.php/bihar',
    'http://localhost/apmIndia/index.php/karnataka',
    'http://localhost/apmIndia/index.php/tamil-nadu'
];

foreach ($urls as $url) {
    echo "========================================\n";
    echo "Fetching: $url\n";
    $html = @file_get_contents($url);
    if ($html === false) {
        echo "FAILED to fetch!\n";
        continue;
    }
    
    echo "Length: " . strlen($html) . " bytes\n";
    
    // Extract title
    if (preg_match('/<title>(.*?)<\/title>/is', $html, $matches)) {
        echo "Title: " . trim($matches[1]) . "\n";
    } else {
        echo "Title: NOT FOUND\n";
    }

    // Extract h1
    if (preg_match('/<h1>(.*?)<\/h1>/is', $html, $matches)) {
        echo "H1: " . trim(strip_tags($matches[1])) . "\n";
    } else {
        echo "H1: NOT FOUND\n";
    }
    
    // Check breadcrumbs class
    $has_bc = strpos($html, 'service-breadcrumbs') !== false;
    echo "Has service-breadcrumbs: " . ($has_bc ? "YES" : "NO") . "\n";
    
    // Check for some expected keywords
    if (strpos($url, 'our-branches') !== false) {
        $has_up = stripos($html, 'Uttar Pradesh') !== false;
        $has_tn = stripos($html, 'Tamil Nadu') !== false;
        $has_har = stripos($html, 'Haryana') !== false;
        echo "Contains Uttar Pradesh: " . ($has_up ? "YES" : "NO") . "\n";
        echo "Contains Tamil Nadu: " . ($has_tn ? "YES" : "NO") . "\n";
        echo "Contains Haryana: " . ($has_har ? "YES" : "NO") . "\n";
    } else {
        // State specific page
        $state_name = basename($url);
        $state_display = ucwords(str_replace('-', ' ', $state_name));
        $has_state_title = stripos($html, $state_display) !== false;
        echo "Contains state title '$state_display' (case-insensitive): " . ($has_state_title ? "YES" : "NO") . "\n";
        if (!$has_state_title) {
            // Find what occurrences of 'pradesh' or 'bengal' or other keywords are present
            if (preg_match_all('/[A-Za-z\-]+[Pp]radesh/i', $html, $p_matches)) {
                echo "Found pradesh matches: " . implode(', ', array_unique($p_matches[0])) . "\n";
            }
        }
    }
}
