<?php
namespace Hostnet\Component\EntityPlugin;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Hostnet\Component\EntityPlugin\ReflectionTypePolyFill
 */
class ReflectionTypePolyFillTest extends TestCase
{
    public function testGetName()
    {
        $type = new ReflectionTypePolyFill('name', true);
        $this->assertSame('name', $type->getName());
    }

    public function testAllowsNull()
    {
        $type = new ReflectionTypePolyFill('name', true);
        $this->assertTrue($type->allowsNull());

        $type = new ReflectionTypePolyFill('name', false);
        $this->assertFalse($type->allowsNull());
    }

    public function constructorProvider()
    {
        return [
            ['name', 'yes'],
            ['name', null],
            ['name', ''],
            [true, true],
            [[], true],
        ];
    }

    /**
     * @dataProvider constructorProvider
     * @param mixed $name
     * @param mixed $allows_null
     */
    public function testConstructor($name, $allows_null)
    {
        $this->expectException(\InvalidArgumentException::class);
        new ReflectionTypePolyFill($name, $allows_null);
    }
}
