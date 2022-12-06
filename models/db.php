<?php
include('db_info.php');
class DB{
    protected $pdo;
    function __construct($user = DB_USER, $password = DB_PASSWORD, $host = DB_HOST, $dbname = DB_NAME)
    {
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

            // Set the PDO error mode to exception
            // $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // $this->pdo->getAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    function __destruct()
    {
        if ($this->pdo !== null) {$this->pdo = null;} //return false to close the connection
    }
}