<?php

class Database
{
    private static ?PDO $pdo = null;

    private static string $host = 'localhost';
    private static string $port = '5432';
    private static string $dbname = 'gestion_articles';
    private static string $user = 'postgres';
    private static string $pass = 'seydinathiam05';

    public static function getConnection(): PDO
    {
        if (self::$pdo === null) {
            $dsn = "pgsql:host=" . self::$host .
                   ";port=" . self::$port .
                   ";dbname=" . self::$dbname;

            try {
                self::$pdo = new PDO($dsn, self::$user, self::$pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }

        return self::$pdo;
    }


    private function __construct() {}
    private function __clone() {}
}