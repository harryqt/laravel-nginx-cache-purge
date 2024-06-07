<?php

declare(strict_types=1);

namespace Harryqt\NginxCachePurge\Facades;

use Illuminate\Support\Facades\Facade;

class NginxCachePurge extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'nginx-cache-purge';
    }
}
