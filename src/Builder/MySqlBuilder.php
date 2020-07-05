<?php

namespace GW\Db\Builder;

use GW\Db\QueryBuilder\MySql;

class MySqlBuilder implements BuilderInterface
{
    protected $query;

    public function __construct()
    {
        $this->query = new MySql;
    }

    public function setTable(string $table)
    {
        $this->query->table($table);
    }

    public function getSqlAll(): string
    {
        return $this->query->select()->getQuery();    
    }
}