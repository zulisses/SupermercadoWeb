<?php
class Conexao
{
    private static $dsn = 'mysql:host=localhost;dbname=supermercadov2;port=3306';
    private static $usuario = 'root';
    private static $senha = '2904Uli$$&$';
    private static $con = null;

    public function __construct()
    {
    }

    private static function getConexao()
    {
        if (Conexao::$con == null) {
            try{
                Conexao::$con = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return Conexao::$con;
    }

    public static function getPreparedStatement($sql)
    {
        if (Conexao::$con == null) {
            Conexao::$con = Conexao::getConexao();
        }
        try {
            return Conexao::$con->prepare($sql);
        } catch (PDOException $e) {
            echo $e->getTraceAsString();
        }
        return null;
    }
}