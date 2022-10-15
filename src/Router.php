<?php

namespace Muyomu\Router;

use Muyomu\Router\model\DataBase;
use Muyomu\Router\model\Rule;

class Router extends DataBase
{
    public static function rule(string $method, string $uri, string $controller, string $handle,string $middleware):void{
        $rule=new Rule($uri,$method,$controller,$handle,$middleware);
        DataBase::add($uri,$rule);
    }
}