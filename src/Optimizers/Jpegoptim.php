<?php

namespace RealRisman\ImageOptimizer\Optimizers;

use RealRisman\ImageOptimizer\Image;

class Jpegoptim extends BaseOptimizer
{
    public $binaryName = '/usr/local/bin/jpegoptim';

    public function canHandle(Image $image): bool
    {
        return $image->mime() === 'image/jpeg';
    }
}
