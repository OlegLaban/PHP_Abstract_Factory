<?php

namespace App;

use App\realisations\EnvVariables;
use App\realisations\XfceFactory;
use App\realisations\WindowsFactory;
use App\realisations\MacFactory;
use App\Application;

class ApplicationConfigurator
{

    public function run(EnvVariables $envVars): void
    {
        if ($envVars->os == 'Xfce') {
            $factory = new XfceFactory();
        } else if ($envVars->os == 'Windows') {
            $factory = new WindowsFactory();
        } else if ($envVars->os == 'Mac') {
            $factory = new MacFactory();
        }

        $app = new Application();

        $app->run($factory);
    }
}
