<?php

namespace XmlSchemaValidatorTests;

use XmlSchemaValidator\Schema;

class SchemaTest extends TestCase
{
    public function testCreateObjectAndReadProperties()
    {
        $schema = new Schema('a', 'b');
        $this->assertSame('a', $schema->getNamespace(), 'First parameter is namespace');
        $this->assertSame('b', $schema->getLocation(), 'Second parameter is location');
    }
}
