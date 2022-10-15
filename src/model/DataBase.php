<?php

namespace Muyomu\Router\model;

abstract class DataBase
{
    private static array $database;

    public static function add(string $key,Rule $rule):void{
        DataBase::$database[$key] = $rule;
    }

    public static function get(string $key):Rule{
        return DataBase::$database[$key];
    }
}