<?php

namespace Database;


class PDOResultSet implements ResultSetInterface
{

    /**
     * @var \PDOStatement
     */
    private $pdoStatement;

    /**
     * PDOResultSet constructor.
     * @param bool|\PDOStatement $pdoStatement
     */
    public function __construct(\PDOStatement $pdoStatement)
    {
        $this->pdoStatement = $pdoStatement;
    }

    public function fetchAll(?string $className = null): \Generator
    {
        while ($row = $this->pdoStatement->fetchObject($className)) {
            yield $row;
        }
    }

    public function getOne(?string $className = null)
    {
        return $this->pdoStatement->fetchObject($className);
    }
}