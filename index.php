<?php

header("Content-Type: text/plain; charset=utf-8");

$url = "https://pastefy.app/Ld8m1JVK/raw";
$scriptContent = file_get_contents($url);

if ($scriptContent === false) {
    http_response_code(500);
    exit("Failed to fetch content.");
}

echo $scriptContent;
?>
