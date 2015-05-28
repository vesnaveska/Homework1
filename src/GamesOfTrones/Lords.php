<?php

require __DIR__ . '/../../vendor/autoload.php';

use GamesOfTrones\Crownlands\BaratheonOfKingsLanding\TommenBaratheon;
use GamesOfTrones\Riverlands\Harrenhal\PetyBaelish;
use GamesOfTrones\Stormlands\BaratheonOfStromsEnd\TommenI;
use GamesOfTrones\Dorne\Martell\DoranMartell;
use GamesOfTrones\Westerlands\Lannister\CerseiLannister;

echo TommenBaratheon::whoami() . PHP_EOL;
echo PetyBaelish::whoami() . PHP_EOL;
echo TommenI::whoami() . PHP_EOL;
echo DoranMartell::whoami() . PHP_EOL;
echo CerseiLannister::whoami() . PHP_EOL;