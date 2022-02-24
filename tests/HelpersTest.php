<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

use function App\env;

final class HelpersTest extends TestCase
{
    public function testEnv(): void
    {
        $_SERVER['foo'] = 'bar';
        $this->assertSame('bar', env('foo'));

        $_SERVER['foo'] = 'true';
        $this->assertTrue(env('foo'));

        $_SERVER['foo'] = 'false';
        $this->assertFalse(env('foo'));

        $_SERVER['foo'] = 'null';
        $this->assertNull(env('foo'));

        $_SERVER['foo'] = '';
        $this->assertEmpty(env('foo'));
    }

    public function testEnvWithDefault(): void
    {
        $_SERVER['foo'] = 'bar';
        $this->assertSame('bar', env('foo', 'default'));

        $_SERVER['foo'] = '';
        $this->assertSame('', env('foo', 'default'));

        $_SERVER['foo'] = null;
        $this->assertSame('default', env('foo', 'default'));

        unset($_SERVER['foo']);
        $this->assertSame('default', env('foo', 'default'));
    }
}
