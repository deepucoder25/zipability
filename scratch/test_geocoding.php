<?php

$opts = [
    'http' => [
        'method' => "GET",
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36\r\n"
    ]
];

$context = stream_context_create($opts);
$query = urlencode("Adugodi, Bangalore, Karnataka, India");
$url = "https://nominatim.openstreetmap.org/search?q={$query}&format=json&limit=1";

$response = file_get_contents($url, false, $context);
echo "Response:\n";
echo $response . "\n";
