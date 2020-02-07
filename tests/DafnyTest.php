<?php
declare(strict_types=1);
namespace Dafny\Runtime\Tests;

use Dafny\Runtime\Dafny;
use PHPUnit\Framework\TestCase;

class DafnyTest extends TestCase
{
    public function testDafnyTostring()
    {
        $this->assertSame('true', Dafny::toString(true));
        $this->assertSame('false', Dafny::toString(false));

    }
}
