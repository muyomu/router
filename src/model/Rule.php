<?php

namespace muyomu\router\model;

class Rule
{
    private string $route;

    private string $method;

    private string $controller;

    private string $handle;

    private string $middleware;

    /**
     * @param string $route
     * @param string $method
     * @param string $controller
     * @param string $handle
     * @param string $middleware
     */
    public function __construct(string $route, string $method, string $controller, string $handle, string $middleware)
    {
        $this->route = $route;
        $this->method = $method;
        $this->controller = $controller;
        $this->handle = $handle;
        $this->middleware = $middleware;
    }


    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    /**
     * @return string
     */
    public function getMiddleware(): string
    {
        return $this->middleware;
    }


}