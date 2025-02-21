<?php

namespace Webkul\Product\CacheFilters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Large implements FilterInterface
{
    /**
     * Apply filter.
     *
     * @param  \Intervention\Image\Image  $image
     * @return \Intervention\Image\Image
     */
    public function applyFilter(Image $image)
    {
        $width = core()->getConfigData('catalog.products.cache-large-image.width') != ''
            ? core()->getConfigData('catalog.products.cache-large-image.width')
            : 560;

        $height = core()->getConfigData('catalog.products.cache-large-image.height') != ''
            ? core()->getConfigData('catalog.products.cache-large-image.height')
            : 610;

        return $image->fit($width, $height);
    }
}
