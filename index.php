<?php

use Cottonfarmer420\Weather\Days;
use Cottonfarmer420\Weather\Histories;


require 'vendor/autoload.php';

$day1 = new Days("2024-05-03","Ein regnerischer Tag!");
$day2 = new Days("2024-05-02","Ein sonniger Tag!");

$history = new Histories();

$history->addDays($day1);
$history->addDays($day2);

$history->getDays("2024-05-03");







