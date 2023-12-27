<?php
require 'vendor/autoload.php';


use App\realisations\EnvVariables;
use App\ApplicationConfigurator; 

$os = $argv[1] ?? 'Xfce';

$env = new EnvVariables($os);
$configurator = new ApplicationConfigurator();

$configurator->run($env);

