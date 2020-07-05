<?php

namespace GW\Db\QueryBuilder;

interface SyntaxStrategy
{
    public function table(string $table): SyntaxStrategy;
    public function select($collumns = '*'): SyntaxStrategy;
    public function getQuery(): string;
}