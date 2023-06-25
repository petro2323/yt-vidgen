<?php

$url = '/watch?v='.generateVideoId();
header("Location: https://www.youtube.com".$url);

function generateVideoId() {
    $lowerLet = asciiChars();
    $upperLet = strtoupper(asciiChars());
    $all = $lowerLet . $upperLet . '-_';
    $videoId = '';

    for ($i = 0; $i < 11; $i++) {
        $videoId .= $all[rand(0, strlen($all) - 1)];
    }

    return $videoId;
}

function asciiChars() {
    $characters = '';
    for($i = 97; $i < 123; $i++) {
        $characters .= chr($i);
    }
    return $characters;
}

