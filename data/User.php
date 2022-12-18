<?php

class User
{
    public string $name;
    public ?string $address = null;
    // Default value
    public string $country = "Indonesia";

    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}