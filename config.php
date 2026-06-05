<?php
session_start();

$farmers = [
    [
        "id" => "AGR-001",
        "name" => "Usman Musa",
        "status" => "Verified",
        "coordinates" => "9.0765,7.3986"
    ]
];

$weather = [
    "temperature" => "29°C",
    "rainfall" => "High Probability",
    "soil" => "Moderate Moisture",
    "warning" => "Heavy rain expected within 48 hours."
];

$logs = [
    [
        "request" => "₦500,000",
        "model" => "Murabaha",
        "status" => "Approved"
    ],
    [
        "request" => "₦300,000",
        "model" => "Salam",
        "status" => "Disbursed"
    ]
];
?>
