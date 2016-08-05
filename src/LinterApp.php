<?php

namespace HexletPsrLinter;

use League\CLImate\CLImate;

class LinterApp
{
    private $cli;

    public function __construct()
    {
        $this->cli = new CLImate();
    }

}
