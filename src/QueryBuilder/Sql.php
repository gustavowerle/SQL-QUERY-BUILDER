<?php

namespace GW\Db\QueryBuilder;

class Sql implements SyntaxStrategy
{
    private $table = '';
    private $sql = '';

    public function table(string $table): SyntaxStrategy
    {
        $this->table = $table;
        return $this;
    }

    public function select($collumns = '*'): SyntaxStrategy
    {
        if (is_array($collumns)) {
            $collumns = implode(', ', $collumns);
        }
        $this->sql = sprintf('SELECT %s FROM %s;', $collumns, $this->table);
        return $this;
    }

    public function getQuery(): string
    {
        return $this->sql;
    }
}