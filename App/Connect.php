<?php 

namespace App;

use Exception;
use PDOException;

/**
 * RESPONSAVEL POR FAZER CONEXAO COM O BANCO DE DADOS
 * @author Robson Lucas
 */
abstract class Connect 
{   
    /**
     * HOST
     * 
     * @param string
     */
    private static $host = 'localhost';


    /**
     * USER
     * 
     * @param string
     */
    private static $user = 'root';


    /**
     * PASSWORD
     * 
     * @param string
     */
    private static $pass = '';


    /**
     * DBNAME
     * 
     * @param string
     */
    private static $db   = 'crud-tenis';



    /**
     * RETORNA INSTANCIA DE CONEXAO PDO
     * 
     * @return PDO
     */
    static function get ()
    {
        try 
        {
            $getConnectPdo = new \PDO('mysql:host='.self::$host.';dbname='.self::$db.','.self::$user.','.self::$pass);
            return $getConnectPdo;
        } catch (\PDOException $errorConnect)
        {
            throw new \Exception($errorConnect.__CLASS__);
        }
    }
}
