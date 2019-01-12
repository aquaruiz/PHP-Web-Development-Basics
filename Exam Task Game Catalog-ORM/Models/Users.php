<?php
namespace Models;

class Users
{
    /**
     * @var \PDO
     */
    private $db_connection;

    /**
     * Users constructor.
     * @param \PDO $db_connection
     */
    public function __construct(\PDO $db_connection)
    {
        $this->db_connection = $db_connection;
    }

    /**
     * @return \PDO
     */
    public function save()
    {
        $username;
    }
}