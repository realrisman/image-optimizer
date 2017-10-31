<?php

namespace RealRisman\ImageOptimizer;

use RealRisman\ImageOptimizer\Optimizers\Svgo;
use RealRisman\ImageOptimizer\Optimizers\Optipng;
use RealRisman\ImageOptimizer\Optimizers\Gifsicle;
use RealRisman\ImageOptimizer\Optimizers\Pngquant;
use RealRisman\ImageOptimizer\Optimizers\Jpegoptim;

class OptimizerChainFactory
{
    public static function create(): OptimizerChain
    {
        return (new OptimizerChain())
            ->addOptimizer(new Jpegoptim([
                '-m85',
                '--strip-all',
                '--all-progressive',
            ]))

            ->addOptimizer(new Pngquant([
                '--force',
            ]))

            ->addOptimizer(new Optipng([
                '-i0',
                '-o2',
                '-quiet',
            ]))

            ->addOptimizer(new Svgo([
                '--disable=cleanupIDs',
            ]))

            ->addOptimizer(new Gifsicle([
                '-b',
                '-O3',
            ]));
    }
}
