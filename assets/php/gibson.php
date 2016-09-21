<?php

$allTheWords = [
    "crazy",
    "hedgehog",
    "monkey",
    "boat",
    "fungus",
    "test",
    "serpant",
    "spray",
    "house",
    "country",
];

$password = '';

$params = [];

foreach ($_GET as $key => $value) {
    $params[$key] = $value;
}

$passLength = $params['number_of_words'];

if ($passLength == '' or strLen($passLength) != 1 or !ctype_digit($passLength) )  {
    $passLength = 4;
}

for ($x = 0; $x < $passLength; $x++) {
    
    if ($x < $passLength-1) {
        $password = $password . $allTheWords[rand(0,sizeOf($allTheWords))] . '-';
    } else {
        $password = $password . $allTheWords[rand(0,sizeOf($allTheWords))];
    }
}

if ($params['add_number'] == 'on') {
    $password = $password . rand(0,9);
}

if ($params['add_symbol'] == 'on') {
    $password = $password . chr(rand(33,47));
}