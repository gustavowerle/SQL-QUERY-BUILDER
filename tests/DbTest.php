<?php

namespace GW\Db;

class DbTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        require __DIR__.'/../bootstrap.php';
    }

    public function testSeAClasseEstaInstanciando()
    {
        $db = \GW\Db\DbSingleton::getInstance();
        $this->assertInstanceOf('GW\Db\Db', $db);
    }
}