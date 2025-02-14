<?php

namespace DNW\Skills\FactorGraphs;

class ScheduleStep extends Schedule
{
    public function __construct($name, private readonly Factor $_factor, private $_index)
    {
        parent::__construct($name);
    }

    public function visit($depth = -1, $maxDepth = 0)
    {
        $currentFactor = $this->_factor;

        return $currentFactor->updateMessageIndex($this->_index);
    }
}
