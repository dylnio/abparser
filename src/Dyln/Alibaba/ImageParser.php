<?php
namespace Dyln\Alibaba;

use DOMElement;
use phpQuery;

class ImageParser
{
    public function parseAlibabaExpressImages($url)
    {
        phpQuery::newDocument(file_get_contents($url));
        /** @var DOMElement[] $value */
        $value = pq('html')->find('img');
        $images = [];
        foreach ($value as $v) {
            $src = $v->getAttribute('src');
            $pos = strpos($src, '.jpg');
            $src = substr($src, 0, $pos + 4);
            $images[] = $src;
        }

        return $images;
    }
}