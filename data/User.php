<?php

class User
{
    const AUTHOR = 'REIMII';

    public string $name;
    public ?string $address = null;
    // Default value
    public string $country = "Indonesia";

    function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}