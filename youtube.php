<?php

$url = '/watch?v='.generateVideoId();
header("Location: https://www.youtube.com".$url);

function generateVideoId() {
    $lowerCaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $upperCaseLetters = strtoupper($lowerCaseLetters);
    $numbers = '0123456789';
    $characters = $lowerCaseLetters . $upperCaseLetters . $numbers;

    $videoId = '';

    for ($i = 0; $i < 11; $i++) {
        $videoId .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $videoId;
}

