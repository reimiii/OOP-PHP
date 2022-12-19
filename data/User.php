<?php

namespace Data;

class User
{
    public const AUTHOR = 'REIMII';

    public string $name;
    public ?string $address = null;
    // Default value
    public string $country = "Indonesia";

    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name".PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name".PHP_EOL;
        }
    }

    public function info(): void
    {
        echo 'Author : '.self::AUTHOR.PHP_EOL;
    }

    public function __destruct()
    {
        echo 'Object user '.$this->name.' is destroyed'.PHP_EOL;
    }
}