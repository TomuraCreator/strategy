<?php
namespace MainDuck;


class MainDuck
{
    private $context;

    public function __construct($context)
    {
        $this->context = $context;
    }

    public function __call($name, $arg): void
    {
        echo "method $name not exist in {__CLASS__}".PHP_EOL;
    }

    public function setContext($context) : void
    {
        $this->context = $context;
    }

    public function swim() : void
    {
        echo __CLASS__ . ' swimming';
    }
    public function fly(): void
    {
        $this->context->fly();
    }

    public function quack(): void
    {
        $this->context->quack();
    }

    public function display(): void
    {
        $this->context->display();
    }
}