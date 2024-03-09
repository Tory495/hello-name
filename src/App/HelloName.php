<?php

declare(strict_types=1);

class HelloName
{
    public function sayHi(string $name): string
    {
        return "Hello $name";
    }
}
