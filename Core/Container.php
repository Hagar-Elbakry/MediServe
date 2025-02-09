<?php

namespace Core;
use Exception;
class Container
{
    public $bindings = [];

    public function bind($key, $value) {
        $this->bindings[$key] = $value;
    }

    public function resolve($key) {
        if(!array_key_exists($key, $this->bindings)) {
            throw new Exception("no matching binding found for $key");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}