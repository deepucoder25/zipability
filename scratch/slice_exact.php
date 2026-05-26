<?php
$source_path = 'C:/Users/grove/.gemini/antigravity-ide/brain/6bd5cd0a-92ee-410f-bfec-91d51211c869/media__1779370678350.png';
$output_dir = 'c:/xampp/htdocs/apmIndia/assets/images/services_modules/';

if (!file_exists($source_path)) {
    die("Source file not found!\n");
}

$source = imagecreatefrompng($source_path);
if (!$source) {
    die("Failed to load source image!\n");
}

// Exact coordinate mappings based on transparency gap analysis
// Each item maps to its precise x and y bounding box.
$items = [
    1 => [
        'name' => 'bike-transportation-services.webp',
        'x1' => 56, 'x2' => 256, 'y1' => 41, 'y2' => 182
    ],
    2 => [
        'name' => 'car-transportation-services.webp',
        'x1' => 381, 'x2' => 604, 'y1' => 41, 'y2' => 183
    ],
    3 => [
        'name' => 'domestic-relocation-services.webp',
        'x1' => 754, 'x2' => 991, 'y1' => 44, 'y2' => 182
    ],
    4 => [
        'name' => 'home-shifting-services.webp',
        'x1' => 56, 'x2' => 256, 'y1' => 245, 'y2' => 346
    ],
    5 => [
        'name' => 'international-shifting-services.webp',
        'x1' => 381, 'x2' => 604, 'y1' => 232, 'y2' => 360
    ],
    6 => [
        'name' => 'local-shifting-services.webp',
        'x1' => 754, 'x2' => 991, 'y1' => 251, 'y2' => 349
    ],
    7 => [
        'name' => 'corporate-shifting-services.webp',
        'x1' => 56, 'x2' => 256, 'y1' => 391, 'y2' => 500
    ],
    8 => [
        'name' => 'intercity-shifting-services.webp',
        'x1' => 381, 'x2' => 604, 'y1' => 396, 'y2' => 503
    ],
    9 => [
        'name' => 'office-relocation-services.webp',
        'x1' => 754, 'x2' => 991, 'y1' => 403, 'y2' => 502
    ],
    10 => [
        'name' => 'logistic-services.webp',
        'x1' => 56, 'x2' => 256, 'y1' => 545, 'y2' => 629
    ],
    11 => [
        'name' => 'pet-relocation-services.webp',
        'x1' => 381, 'x2' => 604, 'y1' => 549, 'y2' => 655
    ],
    12 => [
        'name' => 'warehouse-storage-services.webp',
        'x1' => 754, 'x2' => 991, 'y1' => 554, 'y2' => 637
    ]
];

foreach ($items as $id => $item) {
    $x1 = $item['x1'];
    $x2 = $item['x2'];
    $y1 = $item['y1'];
    $y2 = $item['y2'];
    $filename = $item['name'];
    
    $w = $x2 - $x1 + 1;
    $h = $y2 - $y1 + 1;
    
    echo "Processing item $id: $filename ({$w}x{$h}) at [x: $x1-$x2, y: $y1-$y2]... ";
    
    // Create new transparent canvas
    $cell = imagecreatetruecolor($w, $h);
    imagealphablending($cell, false);
    imagesavealpha($cell, true);
    
    // Copy the sub-image from source directly
    imagecopy($cell, $source, 0, 0, $x1, $y1, $w, $h);
    
    $dest_file = $output_dir . $filename;
    
    if (file_exists($dest_file)) {
        unlink($dest_file);
    }
    
    // Save as WebP with high quality (95) to preserve fine watercolor details
    imagewebp($cell, $dest_file, 95);
    imagedestroy($cell);
    
    echo "Saved (Size: " . filesize($dest_file) . " bytes)\n";
}

imagedestroy($source);
echo "All 12 images sliced and saved successfully with exact coordinates!\n";
?>
