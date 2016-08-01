<?php

namespace HexletPsrLinter;

class App
{
    private $source;

    public function __construct($source)
    {
        $this->source = $source;
    }

    public function validate()
    {
        return "Is valid";
    }
}
