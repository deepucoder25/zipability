<?php
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_URI'] = '/apmIndia/index.php/our-branches';
$_SERVER['SCRIPT_NAME'] = '/apmIndia/index.php';
$_SERVER['SCRIPT_FILENAME'] = 'c:\\xampp\\htdocs\\apmIndia\\index.php';
ob_start();
include 'index.php';
$out = ob_get_clean();
echo strlen($out) . " bytes fetched.\n";
file_put_contents('scratch/verify_output.html', $out);
if (strpos($out, 'Fatal error') !== false || strpos($out, 'Parse error') !== false || strpos($out, 'Severity:') !== false) {
    echo "FAIL\n";
    echo substr(strip_tags($out), 0, 1000);
} else {
    echo "SUCCESS\n";
    echo "Contains Our Branches: " . (stripos($out, 'Our Branches') !== false ? 'YES' : 'NO') . "\n";
    echo "Contains Uttar Pradesh: " . (stripos($out, 'Uttar Pradesh') !== false ? 'YES' : 'NO') . "\n";
}
