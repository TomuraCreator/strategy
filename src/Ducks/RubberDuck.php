<?php

namespace Ducks;

class RubberDuck
{
    public function quack(): void
    {
        echo __CLASS__ . " quacking". PHP_EOL;
    }

    public function display(): void
    {
        echo __CLASS__ . " displaying". PHP_EOL;
    }
    public function __call($name, $arg): void
    {
        echo "method $name not exist in ".PHP_EOL;
    }
}