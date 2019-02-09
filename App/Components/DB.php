<?php
namespace App\Components;

class DB
{
    private static $pdo = null;

    /**
     * We use PDO to make sure there is no SQL injection in our code.
     * @return \PDO
     */
    public static function getPDO(): \PDO
    {
        if (empty(self::$pdo)) {
            self::$pdo = new \PDO('mysql:dbname=h;host=127.0.0.1', 'root', '');
        }
        return self::$pdo;
    }

    public static function execute(string $sql, array $bind)
    {
        $pdo = self::getPDO();
        $statement = $pdo->prepare($sql);
        foreach ($bind as $name => $value) {
            $statement->bindValue($name, $value);
        }
        return $statement->execute();
    }
}