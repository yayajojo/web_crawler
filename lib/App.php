<?php
namespace Cli;

use App\ActionFactories\ActionFactory;
use App\Actions\Top;

class App
{
    public function runCommand(array $argv)
    {
       
        if (isset($argv[1])) {
            $action = $argv[1];
        }
        $action = ucfirst(strtolower($action));
        $parameters = array_slice($argv,2)??[];
        $class = "App\\Actions\\".$action;
        $actionInstance = new $class();
        ActionFactory::execAction($actionInstance,$parameters);
       
    }
}