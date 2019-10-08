<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class LinioTest extends TestCase
{
    public function testOutOfRange(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Linio::linianos(101);
    }

    public function testOk(): void
    {
        $this->assertEquals(
            1,
            Linio::linianos(100)
        );
    }
}
