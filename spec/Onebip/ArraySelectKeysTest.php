<?php

namespace Onebip;

use PHPUnit\Framework\TestCase;

class ArraySelectKeysTest extends TestCase
{
    public function testArraySelectKeys()
    {
        $this->assertSame([], array_select_keys([], []));
        $this->assertSame([], array_select_keys([], ['a', 'b', 'c']));
        $this->assertSame(
            ['a' => 1, 'b' => 2],
            array_select_keys(
                ['a' => 1, 'b' => 2, 'd' => 3],
                ['a', 'b', 'c']
            )
        );
    }
}
