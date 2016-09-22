<?php

# Declare variables
$allTheWords = [];
$password = '';
$numberChecked = '';
$specialChecked = '';
$params = [];

# Gather word from wordlists into array
/*  This was too eclectic used common words instead.
for ($i = 65; $i < 91; $i++) {
    $file = 'assets/wordlists/' . chr($i) . 'word.csv';
    $allTheWords = array_merge($allTheWords, file($file));
}
*/
$allTheWords = file('assets/wordlists/commonwords.csv');

# Iterate over values provided by html input and assign to params
foreach ($_GET as $key => $value) {
    $params[$key] = $value;
}

# Set passLength and validate
$passLength = $params['number_of_words'];
if ($passLength == '' or strLen($passLength) != 1 or !ctype_digit($passLength) )  {
    $passLength = 4;
}

#Set Special Character length.
$spchrLength = $params['number_of_spchr'];
if ($spchrLength == '' or strLen($spchrLength) !=1 or !ctype_digit($spchrLength) or $spchrLength > 5) {
    $spchrLength = 1;
}

# Create a new password based on length using a random word.
for ($x = 0; $x < $passLength; $x++) {
    
    if ($x < $passLength-1) {
        $password = $password . rtrim($allTheWords[rand(0,sizeOf($allTheWords))]) . '-';
    } else {
        $password = $password . rtrim($allTheWords[rand(0,sizeOf($allTheWords))]);
    }
}

# Add additonal options as necessary
if ($params['add_number'] == 'on') {
    $password = $password . rand(0,9);
    $numberChecked = 'checked';
} else {
    $numberChecked = '';
}

# Add Special characters, as many as requested.
if ($params['add_symbol'] == 'on') {
    if ($spchrLength > 1) {
        for ($x = 0; $x < $spchrLength; $x++) {
            $password = $password . chr(rand(33,47));
        }
    }
    $specialChecked = 'checked';
} else {
    $specialChecked = '';
}