<?php

namespace DNW\Skills\FactorGraphs;

abstract class Schedule implements \Stringable
{
    protected function __construct(private $_name)
    {
    }

    abstract public function visit($depth = -1, $maxDepth = 0);

    public function __toString(): string
    {
        return (string) $this->_name;
    }
}
