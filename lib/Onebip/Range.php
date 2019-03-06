<?php

namespace Onebip;

use Iterator;

class Range implements Iterator
{
    private $from;
    private $to;
    private $curr;

    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;

        $this->rewind();
    }

    public function rewind()
    {
        $this->curr = $this->from;
    }

    public function current()
    {
        return $this->curr;
    }

    public function key()
    {
        return $this->curr;
    }

    public function next()
    {
        ++$this->curr;
    }

    public function valid()
    {
        return $this->curr < $this->to;
    }
}
