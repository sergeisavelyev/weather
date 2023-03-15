<?php

require_once __DIR__ . '/vendor/autoload.php';

use WayWay\Weather\Weather;

$weather = new Weather('b4994dd56b814a9d92094618231503');

echo $weather->location('Moscow')->get();
