<?php

namespace Nwidart\Modules\Commands;

use Illuminate\Console\Command;
use Nwidart\Modules\Generators\VueGenerator;


class VueInitCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'vue-init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initializing Vue.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $success = true;

            $code = with(new VueGenerator())
                ->setFilesystem($this->laravel['files'])
                ->setConfig($this->laravel['config'])
                ->setComponent($this->components)
                ->generate();

            if ($code === E_ERROR) {
                $success = false;
            }


        return $success ? 0 : E_ERROR;
    }


}
