<?php

namespace Muhammadanasdevs\Modules\Generators;

use Illuminate\Config\Repository as Config;
use Illuminate\Filesystem\Filesystem;
use Muhammadanasdevs\Modules\FileRepository;
use Muhammadanasdevs\Modules\Support\Stub;

class VueGenerator extends Generator
{


    /**
     * The laravel config instance.
     *
     * @var Config
     */
    protected $config;

    /**
     * The laravel filesystem instance.
     *
     * @var Filesystem
     */
    protected $filesystem;


    /**
     * The laravel component Factory instance.
     *
     * @var \Illuminate\Console\View\Components\Factory
     */
    protected $component;
    /**
     * The constructor.
     * @param Config     $config
     * @param Filesystem $filesystem
     */
    public function __construct(
        Config $config = null,
        Filesystem $filesystem = null,

    ) {
        $this->config = $config;
        $this->filesystem = $filesystem;

    }



    /**
     * Get the laravel config instance.
     *
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set the laravel config instance.
     *
     * @param Config $config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }



    /**
     * Get the laravel filesystem instance.
     *
     * @return Filesystem
     */
    public function getFilesystem()
    {
        return $this->filesystem;
    }

    /**
     * Set the laravel filesystem instance.
     *
     * @param Filesystem $filesystem
     *
     * @return $this
     */
    public function setFilesystem($filesystem)
    {
        $this->filesystem = $filesystem;

        return $this;
    }


    /**
     * @return \Illuminate\Console\View\Components\Factory
     */
    public function getComponent(): \Illuminate\Console\View\Components\Factory
    {
        return $this->component;
    }

    /**
     * @param \Illuminate\Console\View\Components\Factory $component
     */
    public function setComponent(\Illuminate\Console\View\Components\Factory $component): self
    {
        $this->component = $component;
        return $this;
    }


        /**
     * Get the list of files will created.
     *
     * @return array
     */
    public function getFiles()
    {
        return $this->getConfig()['modules']['stubs']['vue']['files'];
    }



    /**
     * Generate the module.
     */
    public function generate(): int
    {
        $this->component->info("Vue Initialization Start...");

        $this->generateFiles();

        $this->component->info("Vue Initialized successfully...");

        return 0;
    }



    /**
     * Generate the files.
     */
    public function generateFiles()
    {
        foreach ($this->getFiles() as $stub => $file) {
            $path =  $file;

            $this->component->task("Generating file {$path}",function () use ($stub, $path) {
                if (!$this->filesystem->isDirectory($dir = dirname($path))) {
                    $this->filesystem->makeDirectory($dir, 0775, true);
                }

                $this->filesystem->put($path, $this->getStubContents($stub));
            });
            
        }
    }


    /**
     * Get the contents of the specified stub file by given stub name.
     *
     * @param $stub
     *
     * @return string
     */
    protected function getStubContents($stub)
    {
        return (new Stub(
            '/' . $stub . '.stub',
            []
        )
        )->render();
    }

}
