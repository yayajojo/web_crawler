<?php

namespace App\Actions;

abstract class iAction
{
    private $uri = '';
 
    abstract public function exec(array $argv);
}