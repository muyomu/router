<?php

namespace muyomu\http\client;

interface RequestClient
{
    public function getRequestMethod():string;

    public function getRequestURI():string;

    public function getRemoteHost():string;

    public function getRemotePort():int;
}