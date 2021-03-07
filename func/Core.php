<?php

class Core
{
    private $cwd = null;

    public function __construct()
    {
        $this->cwd = getcwd();
        echo $this->cwd;
    }
}