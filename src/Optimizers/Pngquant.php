<?php

namespace RealRisman\ImageOptimizer\Optimizers;

use RealRisman\ImageOptimizer\Image;

class Pngquant extends BaseOptimizer
{
    public $binaryName = '/usr/local/bin/pngquant';

    public function canHandle(Image $image): bool
    {
        return $image->mime() === 'image/png';
    }

    public function getCommand(): string
    {
        $optionString = implode(' ', $this->options);

        return "{$this->binaryName} {$optionString}"
            .' '.escapeshellarg($this->imagePath)
            .' --output='.escapeshellarg($this->imagePath);
    }
}
