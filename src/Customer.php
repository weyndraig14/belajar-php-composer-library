<?php

namespace XsX\Belajar;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Han so-hee"): string
    {
        return "Hello $name, My Name is $this->name";
    }
}