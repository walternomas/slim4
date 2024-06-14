<?php
namespace App\Models;

use App\Models\MySQLModel;

class CommentModel extends MySQLModel
{
    public static function fetch()
    {
        $query = "SELECT * FROM comments ORDER BY create_at DESC LIMIT 100";
        $results = self::execute($query);

        var_dump($results);
    }
}