<?php

namespace muyomu\router\model;

class Rule
{
    private string $route;

    private string $method;

    private string $controller;

    private string $handle;

    private string $middleware;

    private array $pathPara;

    /**
     * @param string $route
     * @param string $method
     * @param string $controller
     * @param string $handle
     */
    public function __construct(string $route, string $method, string $controller, string $handle)
    {
        $this->route = $route;
        $this->method = $method;
        $this->controller = $controller;
        $this->handle = $handle;
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

    /**
     * @return array
     */
    public function getPathPara(): array
    {
        return $this->pathPara;
    }

    /**
     * @param string $middleware
     */
    public function setMiddleware(string $middleware): Rule
    {
        $this->middleware = $middleware;
        return $this;
    }

    /**
     * @param array $pathPara
     */
    public function setPathPara(array $pathPara): Rule
    {
        $this->pathPara = $pathPara;
        return $this;
    }
}