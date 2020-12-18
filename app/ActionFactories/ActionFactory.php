<?php

namespace App\ActionFactories;

use App\Actions\iAction;

class ActionFactory
{
    static public function execAction(iAction $action,array $argvs)
    {
        $action->exec($argvs);
    }
  
}