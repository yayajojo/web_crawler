<?php

namespace App\Actions;

abstract class iAction
{
    abstract public function exec(array $argv);
}