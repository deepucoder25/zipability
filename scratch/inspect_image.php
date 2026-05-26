<?php
$path = 'C:/Users/grove/.gemini/antigravity-ide/brain/6bd5cd0a-92ee-410f-bfec-91d51211c869/media__1779370678350.png';
if (!file_exists($path)) {
    die("File not found\n");
}

$im = imagecreatefrompng($path);
$w = imagesx($im);
$h = imagesy($im);

$in_transparent = false;
$transparent_start = 0;

for ($x = 0; $x < $w; $x++) {
    $non_trans = 0;
    for ($y = 0; $y < $h; $y++) {
        $rgb = imagecolorat($im, $x, $y);
        $colors = imagecolorsforindex($im, $rgb);
        if ($colors['alpha'] < 125) { // not fully transparent
            $non_trans++;
        }
    }
    
    $is_transparent_col = ($non_trans == 0);
    if ($is_transparent_col) {
        if (!$in_transparent) {
            $in_transparent = true;
            $transparent_start = $x;
        }
    } else {
        if ($in_transparent) {
            $in_transparent = false;
            echo "Transparent Column Gap: x = $transparent_start to " . ($x - 1) . " (width: " . ($x - $transparent_start) . ")\n";
        }
    }
}
if ($in_transparent) {
    echo "Transparent Column Gap: x = $transparent_start to " . ($w - 1) . " (width: " . ($w - $transparent_start) . ")\n";
}
?>
