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
     * @param \PDOStatement $pdoStatement
     */
    public function __construct(\PDOStatement $pdoStatement)
    {
        $this->pdoStatement = $pdoStatement;
    }

    public function fetch(string $className = null): \Generator
    {
        if(null === $className){
            while ($row = $this->pdoStatement->fetch(\PDO::FETCH_ASSOC)){
                yield $row;
            }
        } else {
            while ($row = $this->pdoStatement->fetchObject($className)){
                yield $row;
            }
        }
    }

    public function getOne(string $className)
    {
        return $this->pdoStatement->fetchObject($className);
    }
}