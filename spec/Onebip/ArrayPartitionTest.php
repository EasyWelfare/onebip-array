<?php

namespace Onebip;

use PHPUnit\Framework\TestCase;

class ArrayPartitionTest extends TestCase
{
    public function testArray()
    {
        $this->assertSame(
            [
                [0, 2, 4, 6, 8, 10],
                [1, 3, 5, 7, 9],
            ],
            array_partition(
                [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                function ($n) { return $n % 2 == 0; }
            )
        );
    }

    public function testIterator()
    {
        $this->assertSame(
            [
                [0, 2, 4, 6, 8, 10],
                [1, 3, 5, 7, 9],
            ],
            array_partition(
                new Range(0, 11),
                function ($n) { return $n % 2 == 0; }
            )
        );
    }
}
