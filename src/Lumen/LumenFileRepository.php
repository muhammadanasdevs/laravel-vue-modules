<?php

namespace Muhammadanasdevs\Modules\Lumen;

use Muhammadanasdevs\Modules\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
