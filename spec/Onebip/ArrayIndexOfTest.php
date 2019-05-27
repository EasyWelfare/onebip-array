<?php

namespace Onebip;

use PHPUnit\Framework\TestCase;

class ArrayIndexOfTest extends TestCase
{
    public function testNumericalArray()
    {
        $a = [1, 2, 3, 4, 5, 6];

        $this->assertSame(1, array_index_of($a, function (int $n): bool {
            return 0 === $n % 2;
        }));
        $this->assertSame(3, array_index_of($a, function (int $n): bool {
            return 0 === $n % 4;
        }));
        $this->assertNull(array_index_of($a, function (int $n): bool {
            return 0 === $n % 9;
        }));
    }
}
