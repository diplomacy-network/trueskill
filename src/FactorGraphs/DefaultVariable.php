<?php

namespace DNW\Skills\FactorGraphs;

use Exception;

// XXX: This class is not used anywhere
class DefaultVariable extends Variable
{
    public function __construct()
    {
        parent::__construct('Default', null);
    }

    public function getValue()
    {
        return null;
    }

    public function setValue($value): never
    {
        throw new Exception();
    }
}
