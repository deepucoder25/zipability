<?php
include __DIR__ . '/../application/modules/packers_movers/views/data/maharashtra.php';
echo "Active Cities:\n";
foreach ($cities as $c) {
    echo "- " . $c['nm'] . "\n";
}
