<?php
use Dyln\Alibaba\ImageParser;

require __DIR__ . '/../vendor/autoload.php';
$contents = isset($_POST['contents']) ? $_POST['contents'] : null;
echo '<form method="post" action="index2.php">
        <textarea rows="10" cols="200" name="contents" placeholder="contents">' . $contents . '</textarea><br>
        <input type="submit" value="GET IMAGES">
      </form>';
if ($contents) {
    $imageParser = new ImageParser();
    $images = $imageParser->parseAlibabaExpressImagesFromContent($contents);
    foreach ($images as $image) {
        echo '<img src="' . $image . '" style="border:4px solid red;margin:10px;"><br>';
    }
} else {
    echo '<h1>Gene hata yaptin loooooo</h1>';
}