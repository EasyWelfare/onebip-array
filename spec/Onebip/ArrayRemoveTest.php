<?php

namespace Onebip;

use PHPUnit\Framework\TestCase;

class ArrayRemoveTest extends TestCase
{
    public function testNumericalArray()
    {
        $a = [1, 2, 3, 4, 5, 6];
        $pred = function (int $n): bool {
            return 0 === $n % 2;
        };

        $this->assertSame(2, array_remove($a, $pred));
        $this->assertSame([1, 3, 4, 5, 6], $a);
        $this->assertSame(4, array_remove($a, $pred));
        $this->assertSame([1, 3, 5, 6], $a);
        $this->assertSame(6, array_remove($a, $pred));
        $this->assertSame([1, 3, 5], $a);
        $this->assertNull(array_remove($a, $pred));
        $this->assertSame([1, 3, 5], $a);
    }

    public function testAssociativeArray()
    {
        $a = [
            'foo' => 1,
            'bar' => 2,
            'baz' => 3,
            'lol' => 4,
        ];
        $pred = function (int $n): bool {
            return 0 === $n % 2;
        };

        $this->assertSame(2, array_remove($a, $pred));
        $this->assertSame(['foo' => 1, 'baz' => 3, 'lol' => 4], $a);
        $this->assertSame(4, array_remove($a, $pred));
        $this->assertSame(['foo' => 1, 'baz' => 3], $a);
        $this->assertNull(array_remove($a, $pred));
        $this->assertSame(['foo' => 1, 'baz' => 3], $a);
    }
}
