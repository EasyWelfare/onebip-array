<?php

namespace Onebip;

use PHPUnit\Framework\TestCase;

class ArraySomeTest extends TestCase
{
    public function testArraySome()
    {
        $this->assertTrue(
            array_some([1, 2, 3], function ($value) {
                return 0 === $value % 2;
            })
        );
    }

    public function testIterator()
    {
        $this->assertTrue(
            array_some(
                new Range(1, 4),
                function ($value) {
                    return 0 === $value % 2;
                }
            )
        );
    }
}
