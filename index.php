<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'vendor/autoload.php';

use \MainDuck\MainDuck;
use \Ducks\WoodenDuck;
use \Ducks\RedheadDuck;
use \Ducks\RubberDuck;
use \Ducks\NormalDuck;


    $ducks = new MainDuck(new WoodenDuck());
    $ducks->swim();
    $ducks = new MainDuck(new RedheadDuck());
    $ducks->quack();
