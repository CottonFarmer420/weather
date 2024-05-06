<?php
namespace Cottonfarmer420\Weather;

require 'vendor/autoload.php';

use Carbon\Carbon;

class Days
{
    private string $date = '';

    private string $description = '';


    function __construct($date, $description)
    {
        $this->date = $date;
        $this->description = $description;
    }
}

// history mit liste machen diese fertigstellen und mit einer index.php fertigstellen