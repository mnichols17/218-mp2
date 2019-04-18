<?php

class CreateSQLTable
{
    /**
     * database host
     */
    const DB_HOST = 'localhost';

    /**
     * database name
     */
    const DB_NAME = 'data';

    /**
     * database user
     */
    const DB_USER = 'man46';
    /*
     * database password
     */
    const DB_PASSWORD = 'password';

    /**
     *
     * @var type
     */
    private $pdo = null;

    /**
     * Open the database connection
     */
    public function __construct()
    {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * close the database connection
     */
    public function __destruct()
    {
        // close the database connection
        $this->pdo = null;
    }

    public function createTaskTable($titles, $data) {

        $sql = <<<EOSQL
        
            CREATE TABLE IF NOT EXISTS tasks (
                task_id     INT AUTO_INCREMENT PRIMARY KEY,
              );
EOSQL;
        return $this->pdo->exec($sql);
    }
}