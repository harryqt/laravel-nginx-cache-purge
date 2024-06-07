<?php

declare(strict_types=1);

namespace Harryqt\NginxCachePurge;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class NginxCachePurgeServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->singleton('nginx-cache-purge', fn () => new NginxCachePurge(config('nginx-cache-purge.path')));
    }

    public function provides(): array
    {
        return ['nginx-cache-purge'];
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/nginx-cache-purge.php' => config_path('nginx-cache-purge.php'),
        ]);
    }
}
