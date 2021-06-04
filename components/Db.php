<?php

class Db
{
    private static $instance;

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getConnection()
    {
        $paramsPath = ROOT . '/../config/db_params.php';

        $params = include ($paramsPath);

        $con = mysqli_connect($params['host'], $params['user'], $params['password']);

        if (!$con) {
            echo "Error: Unable to connect to MySQL. Please check your DB connection parameters.\n";
            exit;
        }

        $selDb = mysqli_select_db($con, "{$params['dbname']}");

        if (!$selDb) {
            if ($con->query("CREATE DATABASE {$params['dbname']}") === true) {
                echo 'Database created successfully';
            } else {
                exit("Error creating database: " . $con->error);
            }
        }
        $con->select_db($params['dbname']);

        self::$instance = $con;

        return self::$instance;
    }

}