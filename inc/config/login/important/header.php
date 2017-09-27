<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 6:39 PM
 */
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="/img/mobile/icon/favicon.ico" />
    <title>lrprn.com | Login and start roleplaying right now!!</title>
    <meta name="description" content="lrprn.com | Lets Roleplay Right Now? want too then make sure you login.">
    <link rel="canonical" href="http://lrprn.com">
    <meta name="subject" content="Games">
    <base target="_top" />
    <meta name="copyright" content="Wayne Meadows">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="revised" content="09/25/2017">
    <link rel="stylesheet" href="https://s3.us-east-2.amazonaws.com/socialzuy/styles(1).css">
    <meta name='Classification' content='Business'>
    <link rel="stylesheet" href="https://s3.us-east-2.amazonaws.com/socialzuy/styles.css">
    <meta name='url' content='http://lrprn.com'>
    <link rel="apple-touch-icon" sizes="57x57" href="/img/mobile/ios/apple-icon.png">
    <meta http-equiv='Expires' content='0'>
    <link rel="apple-touch-icon" sizes="57x57" href="/img/mobile/ios/apple-icon-57x57.png">
    <meta http-equiv='Pragma' content='no-cache'>
    <link rel="apple-touch-icon" sizes="60x60" href="/img/mobile/ios/apple-icon-60x60.png">
    <meta http-equiv='Cache-Control' content='no-cache'>
    <link rel="apple-touch-icon" sizes="72x72" href="/img/mobile/ios/apple-icon-72x72.png">
    <meta http-equiv='imagetoolbar' content='no'>
    <link rel="apple-touch-icon" sizes="76x76" href="/img/mobile/ios/apple-icon-76x76.png">
    <meta http-equiv='x-dns-prefetch-control' content='off'>
    <link rel="apple-touch-icon" sizes="114x114" href="/img/mobile/ios/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/mobile/ios/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/mobile/ios/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/mobile/ios/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/mobile/ios/apple-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/mobile/ios/apple-icon-precomposed.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/mobile/android/android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/mobile/android/android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/mobile/android/android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/mobile/android/android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/mobile/android/android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/mobile/android/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/mobile/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/mobile/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/mobile/icon/favicon-16x16.png">
    <link rel="manifest" href="/img/mobile/android/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/mobile/microsoft/ms-icon-70x70.png">
    <meta name="msapplication-TileImage" content="/img//mobile/microsoft/ms-icon-144x144.png">
    <meta name="msapplication-TileImage" content="/img/mobile?microsoft/ms-icon-150x150.png">
    <meta name="msapplication-TileImage" content="/img/mobile/microsoft/ms-icon-310x310.png">
    <meta name="msapplication-config" content="browserconfig.xml" />
    <meta property="og:site_name" content="lrprn" />
    <meta name="theme-color" content="#ffffff">
        <a content="text/html;charset=UTF-8" http-equiv="Content-Type" />
    <!-- cross browser support -->
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 DAYS">
    <!--[if lt IE 9]><link rel="author" type="text/plain" href="humans.txt" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <link rel="publisher" href="https://twitter.com/lrprn" />
        <meta name="contact" content="admin.lrprn.com" />
    <![endif]-->
    <meta property="og:locale" content="en_US" />
    <meta property="og:locale:alternate" content="en_UK" />
    <meta property="og:type" content="website" />
    <!-- modernizer https://modernizr.com/ -->
    <meta property="og:title" content="lrprn.com | Login and start roleplaying right now!!" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <meta property="og:description" content="lrprn.com | Lets Roleplay Right Now? want too then make sure you login." />
    <meta property="og:url" content="https://lrprn.com" />
    <!-- normalize https://necolas.github.io/normalize.css/ -->
    <meta property="og:image" content="/img/microsoft/ms-icon-310x310.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
    <meta name="geography" content="USA">
    <!-- Twitter Card data https://dev.twitter.com/cards/overview -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@lrprn">
    <meta name="twitter:title" content="lrprn.com | Login and start roleplaying right now!!">
    <meta name="twitter:description" content="lrprn.com | Lets Roleplay Right Now? want too then make sure you login.">
</head>

<body>

<div class="w3-top">
    <div class="w3-bar w3-black">
        <div class="w3-dropdown-hover">
            <button class="w3-button">Home</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-black">
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
            </div>
        </div>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Stories</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-5 w3-black">
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
            </div>
        </div>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Account</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-5 w3-black">
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
                <a href="" class="w3-bar-item w3-button"></a>
            </div>
        </div>
        <a href="../login/logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
</div>