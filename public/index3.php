<?php
use Dyln\Alibaba\ImageParser;

require __DIR__ . '/../vendor/autoload.php';
echo '<form method="post" action="index3.php" enctype="multipart/form-data">
        <input type="file" name="html" size="25" />
        <input type="submit" value="GET IMAGES">
      </form>';
if (isset($_FILES['html'])) {
    $imageParser = new ImageParser();
    $images = $imageParser->parseAlibabaExpressImagesFromContent(file_get_contents($_FILES['html']['tmp_name']));
    foreach ($images as $image) {
        echo '<img src="' . $image . '" style="border:4px solid red;margin:10px;"><br>';
    }
} else {
    echo '<h1>Gene hata yaptin loooooo</h1>';
}