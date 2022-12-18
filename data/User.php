<?php

class User
{
    const AUTHOR = 'REIMII';

    public string $name;
    public ?string $address = null;
    // Default value
    public string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name".PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name".PHP_EOL;
        }
    }

    function info(): void
    {
        echo 'Author : '.self::AUTHOR.PHP_EOL;
    }
}