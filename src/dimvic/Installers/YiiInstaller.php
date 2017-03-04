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
        ];
    }
}
