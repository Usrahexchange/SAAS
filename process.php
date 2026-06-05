<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $bvn = htmlspecialchars(trim($_POST['bvn']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $crop = htmlspecialchars(trim($_POST['crop']));
    $coordinates = htmlspecialchars(trim($_POST['coordinates']));
    $amount = floatval($_POST['amount']);
    $finance = htmlspecialchars(trim($_POST['finance_type']));

    if(
        empty($fullname) ||
        empty($bvn) ||
        empty($phone) ||
        empty($crop) ||
        empty($coordinates)
    ){
        die("All fields are required.");
    }

    if($finance == "Murabaha"){
        $markup = $amount * 0.15;
        $finalAmount = $amount + $markup;
    }
    else{
        $finalAmount = $amount * 0.90;
    }

    $_SESSION['application'] = [
        'name' => $fullname,
        'crop' => $crop,
        'finance' => $finance,
        'amount' => number_format($finalAmount,2)
    ];

    $_SESSION['success'] =
    "Application submitted successfully.";

    header("Location: dashboard.php");
    exit;
}
?>
