<?php
namespace Dyln\Alibaba;

use DOMElement;
use phpQuery;

class ImageParser
{
    public function parseAlibabaExpressImages($url)
    {
        return $this->parseAlibabaExpressImagesFromContent(file_get_contents($url));
    }

    public function parseAlibabaExpressImagesFromContent($content)
    {
        phpQuery::newDocument($content);
        /** @var DOMElement[] $value */
        $value = pq('html')->find('img');
        $images = [];
        foreach ($value as $v) {
            $src = $v->getAttribute('src');
            $pos = strpos($src, '.jpg');
            $src = substr($src, 0, $pos + 4);
            $images[] = $src;
        }

        return array_filter($images);
    }
}