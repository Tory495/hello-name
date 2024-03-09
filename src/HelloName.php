<?php

declare(strict_types=1);

namespace IlyaPlotnikov\HelloName;

class HelloName
{
    public function sayHi(string $name): string
    {
        return "Hello $name";
    }
}
