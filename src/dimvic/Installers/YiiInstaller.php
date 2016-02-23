<?php

namespace dimvic\Installers;

class YiiInstaller extends BaseInstaller
{
    public function getLocations()
    {
        return [
            'module' => 'protected/modules/{$name}/',
            'extension' => 'protected/extensions/{$name}/',
            'component' => 'protected/components/{$name}/'
        ];
    }
}
