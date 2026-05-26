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

list($width, $height) = getimagesize($source_path);

// 4 rows, 3 columns
$cols = 3;
$rows = 4;

$cell_w = $width / $cols; // 341.333
$cell_h = $height / $rows; // 170.5

// Mapping cells to filenames
// 1-indexed cell numbers (row 1: 1,2,3; row 2: 4,5,6; row 3: 7,8,9; row 4: 10,11,12)
$mapping = [
    1 => 'bike-transportation-services.webp',
    2 => 'car-transportation-services.webp',
    3 => 'domestic-relocation-services.webp',
    4 => 'home-shifting-services.webp',
    5 => 'international-shifting-services.webp',
    6 => 'local-shifting-services.webp',
    7 => 'corporate-shifting-services.webp',
    8 => 'intercity-shifting-services.webp',
    9 => 'office-relocation-services.webp',
    10 => 'logistic-services.webp',
    11 => 'pet-relocation-services.webp',
    12 => 'warehouse-storage-services.webp'
];

function process_cell($src, $x, $y, $w, $h) {
    // Slices out a cell
    $cell = imagecreatetruecolor($w, $h);
    imagealphablending($cell, false);
    imagesavealpha($cell, true);
    
    // Copy from source
    imagecopy($cell, $src, 0, 0, $x, $y, $w, $h);
    
    // Make background transparent (anti-aliased)
    $transparent_cell = make_white_transparent($cell);
    imagedestroy($cell);
    
    // Autocrop margins
    $cropped = autocrop($transparent_cell);
    imagedestroy($transparent_cell);
    
    return $cropped;
}

function make_white_transparent($src) {
    $w = imagesx($src);
    $h = imagesy($src);
    
    $dst = imagecreatetruecolor($w, $h);
    imagealphablending($dst, false);
    imagesavealpha($dst, true);
    
    // Fill transparent background
    $transparentColor = imagecolorallocatealpha($dst, 0, 0, 0, 127);
    imagefill($dst, 0, 0, $transparentColor);
    
    for ($x = 0; $x < $w; $x++) {
        for ($y = 0; $y < $h; $y++) {
            $colorIndex = imagecolorat($src, $x, $y);
            $colors = imagecolorsforindex($src, $colorIndex);
            
            $r = $colors['red'];
            $g = $colors['green'];
            $b = $colors['blue'];
            $alpha = $colors['alpha'];
            
            // Check if pixel is white or near-white
            if ($r > 240 && $g > 240 && $b > 240) {
                $avg = ($r + $g + $b) / 3.0;
                if ($avg >= 254) {
                    $newAlpha = 127;
                } else {
                    $factor = ($avg - 240) / 14.0;
                    $newAlpha = (int)(127 * $factor);
                }
                
                if ($alpha > $newAlpha) {
                    $newAlpha = $alpha;
                }
                
                $col = imagecolorallocatealpha($dst, $r, $g, $b, $newAlpha);
            } else {
                $col = imagecolorallocatealpha($dst, $r, $g, $b, $alpha);
            }
            imagesetpixel($dst, $x, $y, $col);
        }
    }
    return $dst;
}

function autocrop($im) {
    $w = imagesx($im);
    $h = imagesy($im);
    
    $minX = $w;
    $minY = $h;
    $maxX = 0;
    $maxY = 0;
    
    for ($x = 0; $x < $w; $x++) {
        for ($y = 0; $y < $h; $y++) {
            $colorIndex = imagecolorat($im, $x, $y);
            $colors = imagecolorsforindex($im, $colorIndex);
            
            // Pixel is not fully transparent
            if ($colors['alpha'] < 125) {
                if ($x < $minX) $minX = $x;
                if ($x > $maxX) $maxX = $x;
                if ($y < $minY) $minY = $y;
                if ($y > $maxY) $maxY = $y;
            }
        }
    }
    
    if ($maxX < $minX || $maxY < $minY) {
        return $im;
    }
    
    // Add 10px padding for safety
    $padding = 10;
    $minX = max(0, $minX - $padding);
    $minY = max(0, $minY - $padding);
    $maxX = min($w - 1, $maxX + $padding);
    $maxY = min($h - 1, $maxY + $padding);
    
    $cropW = $maxX - $minX + 1;
    $cropH = $maxY - $minY + 1;
    
    $cropped = imagecreatetruecolor($cropW, $cropH);
    imagealphablending($cropped, false);
    imagesavealpha($cropped, true);
    
    imagecopy($cropped, $im, 0, 0, $minX, $minY, $cropW, $cropH);
    return $cropped;
}

// Slice loop
for ($r = 0; $r < $rows; $r++) {
    for ($c = 0; $c < $cols; $c++) {
        $cell_num = ($r * $cols) + $c + 1;
        $filename = $mapping[$cell_num];
        
        $x = (int)($c * $cell_w);
        $y = (int)($r * $cell_h);
        $w = (int)$cell_w;
        $h = (int)$cell_h;
        
        echo "Slicing cell $cell_num at ($x, $y) with size {$w}x{$h}... ";
        
        $cropped = process_cell($source, $x, $y, $w, $h);
        
        $dest_file = $output_dir . $filename;
        
        // Remove existing file if exists
        if (file_exists($dest_file)) {
            unlink($dest_file);
        }
        
        // Save as WebP
        imagewebp($cropped, $dest_file, 90);
        imagedestroy($cropped);
        
        echo "Saved to $dest_file (Size: " . filesize($dest_file) . " bytes)\n";
    }
}

imagedestroy($source);
echo "All 12 images sliced, processed, and stored successfully!\n";
?>
