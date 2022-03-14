<?php


namespace Core;


class PDOConnection
{
    public static function getConnection()
    {
        $params = include(ROOT. "/Application/config/db.php");

        $dsn = "mysql:dbname={$params['dbname']};host={$params['host']}";
        $user = $params['dbuser'];
        $password = $params['password'];
        try{
            $PDO = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo "Не возможно соединиться с базой данных " . $e->getMessage();
            die();
        }
        return $PDO;
    }
}
