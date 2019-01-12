<?php

namespace App\Repository;

use Database\DatabaseInterface;

class ControllerRepository
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * ControllerRepository constructor.
     * @param \Database\PDODatabase $db
     */
    public function __construct(\Database\PDODatabase $db)
    {
    }
}