<?php

namespace GW\Db;

use GW\Db\Builder\BuilderInterface;
use GW\Db\Builder\DirectorAbstract;

abstract class ModelAbstract extends DirectorAbstract
{
    protected $db;

    public function __construct(BuilderInterface $builder = null) 
    {
        $this->db = \GW\Db\DbSingleton::getInstance();
        $driver = $this->db->getPdo()
            ->getAttribute(\PDO::ATTR_DRIVER_NAME);

        if ($driver == 'mysql') {
            $builder = new \GW\Db\Builder\MySqlBuilder;
        } else {
            $builder = new \GW\Db\Builder\SqlBuilder;
        }

        parent::__construct($builder);
        $this->db->setDirector($this);
    }

    public function getAll()
    {
        return $this->db->getAll()->execute()->fetchAll();
    }

}