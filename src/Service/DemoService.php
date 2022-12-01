<?php

namespace App\Service;

class DemoService
{
    public function __construct(public string $demo) {

    }
    
    public function getDemoMessage(): string
    {
        return $this->demo;
    }
}