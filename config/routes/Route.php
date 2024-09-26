<?php

namespace Config\routes;

use Attribute;

#[Attribute]
class Route
{
    private string $path;
    private string $method;

    public function __construct(string $path, string $method = 'GET')
    {
        $this->path = $path;
        $this->method = $method;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

}