<?php

declare(strict_types=1);

namespace Harryqt\NginxCachePurge;

use Symfony\Component\Filesystem\Filesystem;

class NginxCachePurge
{
    private Filesystem $fs;

    public function __construct(private string $cacheDirPath)
    {
        $this->fs = new Filesystem();
    }

    public function purgeUrl(string $url): void
    {
        $this->purgeUrlPath(parse_url($url)['path'] ?? '/');
    }

    public function purgeUrlPath(string $urlPath): void
    {
        $hash = md5($urlPath);
        $fullPath = $this->cacheDirPath.'/'.substr($hash, -1).'/'.substr($hash, -3, 2).'/'.$hash;

        $this->fs->remove($fullPath);
    }

    public function purgeAll(): void
    {
        $this->fs->remove(new \RecursiveDirectoryIterator($this->cacheDirPath, \FilesystemIterator::SKIP_DOTS));
    }
}
