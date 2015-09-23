<?php
use Dyln\Alibaba\ImageParser;

require __DIR__ . '/../vendor/autoload.php';
$url = isset($_GET['url']) ? $_GET['url'] : null;
echo '<form method="get"><input type="text" name="url" placeholder="url" value="' . $url . '" style="width: 100%;font-size:20px;padding:5px;"><input type="submit" value="GET IMAGES"></form>';
if ($url) {
    $imageParser = new ImageParser();
    $images = $imageParser->parseAlibabaExpressImages($url);
    foreach ($images as $image) {
        echo '<img src="' . $image . '" style="border:4px solid red;margin:10px;"><br>';
    }
} else {
    echo '<h1>Gene hata yaptin loooooo</h1>';
}