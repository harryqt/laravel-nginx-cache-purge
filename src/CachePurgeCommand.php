<?php

declare(strict_types=1);

namespace Harryqt\NginxCachePurge;

use Harryqt\NginxCachePurge\Facades\NginxCachePurge;
use Illuminate\Console\Command;

class CachePurgeCommand extends Command
{
    protected $signature = 'nginx:clear';

    protected $description = 'Nginx clear all fastcgi cache';

    public function handle(): void
    {
        NginxCachePurge::purgeAll();

        $this->info('Nginx all fastcgi cache cleared.');
    }
}
