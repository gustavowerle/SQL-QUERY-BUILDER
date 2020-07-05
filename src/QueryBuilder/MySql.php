<?php

namespace GW\Db\QueryBuilder;

class MySql implements SyntaxStrategy
{
    protected $table = '';
    protected $sql = '';

    public function table(string $table): SyntaxStrategy
    {
        $this->table = '`' . $table . '`';
        return $this;
    }

    public function select($collumns = '*'): SyntaxStrategy
    {
        if ($collumns != '*' and is_string($collumns)) {
            $collumns = explode(',', $collumns);
            $collumns = array_map('trim', $collumns);
        }
        if (is_array($collumns)) {
            $collumns = implode('`, `', $collumns);
            $collumns = '`' . $collumns . '`';
        }
        $this->sql = sprintf('SELECT %s FROM %s;', $collumns, $this->table);
        return $this;
    }

    public function getQuery(): string
    {
        return $this->sql;
    }
}