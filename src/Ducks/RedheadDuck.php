<?php
namespace Ducks;


class RedheadDuck
{
    private string $type = __CLASS__;
    public function fly(): void
    {
        echo $this->type . " flying". PHP_EOL;
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