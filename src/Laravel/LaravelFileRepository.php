<?php

namespace Muhammadanasdevs\Modules\Laravel;

use Muhammadanasdevs\Modules\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
