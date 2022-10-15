<?php

namespace muyomu\router;

use muyomu\router\model\DataBase;
use muyomu\router\model\Rule;

class Router extends DataBase
{
    public static function rule(string $method, string $uri, string $controller, string $handle,string $middleware):void{
        $rule=new Rule($uri,$method,$controller,$handle,$middleware);
        DataBase::add($uri,$rule);
    }
}