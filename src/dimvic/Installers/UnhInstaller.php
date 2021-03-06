<?php

namespace dimvic\Installers;

class UnhInstaller extends BaseInstaller
{
    public function getLocations()
    {
        $dir = getcwd();
        return [
            'module' => $dir . '/modules/{$name}/',
            'extension' => $dir . '/extensions/{$name}/',
            'component' => $dir . '/components/{$name}/',
            'vendor' => $dir . '/vendor/{$vendor}/{$name}/',
            'vendors' => $dir . '/vendors/{$vendor}/{$name}/',
        ];
    }
}
