<?php

namespace Ducks;
use MainDuck\MainDuck;

class NormalDuck extends MainDuck
{
    public function fly(): void
    {
        echo __CLASS__ . " flying" . PHP_EOL;
    }

    public function quack(): void
    {
        echo __CLASS__ . " quacking". PHP_EOL;
    }

    public function display(): void
    {
        echo __CLASS__ . " displaying". PHP_EOL;
    }
}