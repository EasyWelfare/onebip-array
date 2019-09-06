<?php
namespace Onebip;

use PHPUnit\Framework\TestCase;

class ArrayPrefixKeysTest extends TestCase
{
    public function testPrefixAllKeys()
    {
        $this->assertSame(
            ['p.a' => 1, 'p.b' => 2, 'p.c' => 3],
            array_prefix_keys('p.', ['a' => 1, 'b' => 2, 'c' => 3])
        );
    }

    public function testPrefixEmptyArray()
    {
        $this->assertSame([], array_prefix_keys('', []));
    }

    public function testWillNotPrefixNumeriArrays()
    {
        $numericArray = [1, 2, 3, 4];
        $this->assertSame($numericArray, array_prefix_keys('x', $numericArray));
    }
}
