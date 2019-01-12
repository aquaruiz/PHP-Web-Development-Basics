<?php

namespace Database;

class PDODatabase implements DatabaseInterface
{
    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * PDODatabase constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function query(string $query): StatementInterface
    {
        $stm = $this->pdo->prepare($query);
        return new PDOPreparedStatement($stm);
    }

    public function getLastError(): array
    {
        return $this->pdo->errorInfo();
    }

    public function getLastInsertId(): int
    {
        return $this->pdo->lastInsertId();
    }
}