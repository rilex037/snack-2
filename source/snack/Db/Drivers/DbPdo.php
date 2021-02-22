<?php

namespace Snack\Db\Drivers;

use Snack\Interfaces\Db;

final class DbPdo implements Db
{
    /**
     * @var \PDO $connection
     */
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connection();
        //var_dump($this->connection->exec("set foreign_key_checks=1"));
    }

    private function connection(): \PDO
    {
        return new \PDO(
            "mysql:host=$_ENV[DB_HOST];dbname=$_ENV[DB_DATABASE]",
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD']
        );
    }

    public function query(string $query)
    {
        return  $this->connection->query($query);
    }

    public function foreignKeyCkecks(int $value = 0): bool
    {
        return !is_bool($this->connection->exec("set foreign_key_checks=$value"));
    }
}
