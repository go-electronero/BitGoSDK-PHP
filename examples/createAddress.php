<?php

require 'vendor/autoload.php';

use neto737\BitGoSDK\BitGoSDK;

$token = 'YOUR_API_KEY_HERE';
$coin = 'tbtc';

$bitgo = new BitGoSDK($token, $coin, true);

$createAddress = $bitgo->createWalletAddress('WALLET_ID_HERE');
var_dump($createAddress);