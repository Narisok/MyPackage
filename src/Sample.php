<?php

namespace Narisok\MyPackage;


class Sample
{
    public $var;

    public function __construct($var = 'default text')
    {
        $this->var = $var;
    }

    public function getText()
    {
        return $this->var;
    }
}


