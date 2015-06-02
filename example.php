<?php

require_once __DIR__ . '/vendor/autoload.php';

$random = new \RandomOrg\Random();

// Simple method
// following functions returns 52 random non-repeating numbers between 1-52
$result = $random->generateIntegers(52, 1, 52, false);

// Signed methods
// following functions returns the above with signed data
$result = $random->generateIntegers(52, 1, 52, false, 10, true);

// Verify Signature
$random->verifySignature($result['result']['random'], $result['result']['signature']);

