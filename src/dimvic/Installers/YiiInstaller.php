<?php

namespace dimvic\Installers;

class YiiInstaller extends BaseInstaller
{
    public function getLocations()
    {
        $dir = getcwd();
        return [
            'module' => $dir . '/protected/modules/{$name}/',
            'extension' => $dir . '/protected/extensions/{$name}/',
            'component' => $dir . '/protected/components/{$name}/',
            'vendor' => $dir . '/protected/vendor/{$vendor}/{$name}/',
            'vendors' => $dir . '/protected/vendors/{$vendor}/{$name}/',
        ];
    }
}
