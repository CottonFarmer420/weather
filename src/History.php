<?php
namespace Cottonfarmer420\Weather;
use Cottonfarmer420\Weather\Days;

class Histories
{
    private array $list = [];

    public function addDay(): void
    {
       $this->list[] = array_push();
    }

    public function getDay($date) : void
    {
        foreach ($this->list as $item) {
            echo $item;
        }
    }



}