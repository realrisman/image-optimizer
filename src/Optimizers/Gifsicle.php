<?php

namespace RealRisman\ImageOptimizer\Optimizers;

use RealRisman\ImageOptimizer\Image;

class Gifsicle extends BaseOptimizer
{
    public $binaryName = '/usr/local/bin/gifsicle';

    public function canHandle(Image $image): bool
    {
        return $image->mime() === 'image/gif';
    }
}
