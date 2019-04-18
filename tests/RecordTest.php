<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RecordTest extends TestCase
{
    public function testRecordObject() {
        $this->assertInstanceOf(Record::class, new Record([1,2], [1,2]));
    }
}