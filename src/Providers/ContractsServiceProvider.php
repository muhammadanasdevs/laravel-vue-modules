<?php

namespace Muhammadanasdevs\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Muhammadanasdevs\Modules\Contracts\RepositoryInterface;
use Muhammadanasdevs\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
