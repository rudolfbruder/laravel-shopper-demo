<?php

namespace RudolfBruder\LaravelShopper\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shopper:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Laravel Shopper controllers';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Controllers...
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Controllers'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/App/Http/Controllers', app_path('Http/Controllers/Cart'));

        // Views...
        (new Filesystem)->ensureDirectoryExists(resource_path('views'));

        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/resources/views/cart', resource_path('views/cart'));

        // Routes...
        copy(__DIR__ . '/../../stubs/routes/web.php', base_path('routes/web.php'));
    }
}