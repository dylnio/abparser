<?php

use Dyln\Alibaba\ImageParser;

class ImageParserTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function canParseProductImagesFromPage()
    {
        $images = (new ImageParser())->parseAlibabaExpressImages('http://www.aliexpress.com/item/2015-Free-Shipping-New-Winter-Women-Wool-Coat-Long-Slim-down-Coats-China-Plus-Size-Jacket/32434091293.html');
        $this->assertCount(6, $images);
    }
}