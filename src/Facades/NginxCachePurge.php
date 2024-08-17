<?php

declare(strict_types=1);

namespace Harryqt\NginxCachePurge\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Harryqt\NginxCachePurge\NginxCachePurge;
 *
 * @method static void purgeUrl()
 * @method static void purgeUrlPath()
 * @method static void purgeAll()
 */
class NginxCachePurge extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'nginx-cache-purge';
    }
}
