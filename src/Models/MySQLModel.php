<?php
namespace App\Models;

use PDO;

class MySQLModel
{
    protected static $table = 'dual';

    public static function byId($id = 0)
    {
        $query = "SELECT * FROM static::$table WHERE id = '$id'";
        $results = self::execute($query);

        return $results[0] ?? NULL;
    }

    public static function select()
    {
        $query = "SELECT * FROM " . static::$table . " ORDER BY 1 DESC";

        return self::execute($query);
    }
    protected static function execute($query)
    {
        $dsn = 'mysql:dbname=slim4;host=127.0.0.1;charset=utf8mb4';
        $user = 'root';
        $password = '';
        $con = new PDO($dsn, $user, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $con->prepare($query);
        $results = $stm->execute();
        $rows = [];
        while ($row = $stm->fetch(PDO::FETCH_ASSOC))
        {
            $rows = $row;
        }

        return $rows;
    }
}