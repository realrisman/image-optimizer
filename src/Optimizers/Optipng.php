<?php

namespace RealRisman\ImageOptimizer\Optimizers;

use RealRisman\ImageOptimizer\Image;

class Optipng extends BaseOptimizer
{
    public $binaryName = '/usr/local/bin/optipng';

    public function canHandle(Image $image): bool
    {
        return $image->mime() === 'image/png';
    }
}
