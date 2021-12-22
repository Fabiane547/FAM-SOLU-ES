<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    class Database{
        protected static $db;
        private function __construct(){
            $db_host    = "localhost";  
            $db_nome    = "fabiola";
            $db_usuario = "root";   // usuário de acesso do seu banco
            $db_senha   = "setembr00";       // senha de acesso do seu banco de dados  
            $db_driver  = "mysql";
            try{
                self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 self::$db->exec('SET NAMES utf8');
            }catch (PDOException $e){
                mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
                die("Connection Error: " . $e->getMessage());
            }
        }
        public static function conexao(){
            if (!self::$db){
                new Database();
            }
            return self::$db;
        }
    }

    function User($email, $password){
        $email      = $email;
        $password   = md5($password);
       
        $pdo        = Database::conexao();
        $consulta   = $pdo->prepare("SELECT * FROM user WHERE email = :EMAIL and password = :PASSWORD");
        $consulta->bindParam(":EMAIL", $email, PDO::PARAM_STR);
        $consulta->bindParam(":PASSWORD", $password, PDO::PARAM_STR);
        $consulta->execute();
        $r_consulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $r_consulta;
    };
    
    function Consult($email){
        $email      = $email;
   
        $pdo        = Database::conexao();
        $consulta   = $pdo->prepare("SELECT * FROM user WHERE email = :EMAIL");
        $consulta->bindParam(":EMAIL", $email, PDO::PARAM_STR);
        $consulta->execute();
        $r_consulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $r_consulta;
    };


    function Insert($email, $password){
        $data = [
            'email' => $email,
            'password' => md5($password),
            //'cad_date' => new Datetime('now'),
        ];        

        try {
            $pdo       = Database::conexao();
            $inserir   = $pdo->prepare("INSERT INTO user (email, password) VALUES(:EMAIL, :PASSWORD)");
            $inserir->bindParam(":EMAIL", $data['email'], PDO::PARAM_STR);
            $inserir->bindParam(":PASSWORD", $data['password'], PDO::PARAM_STR);
           // $inserir->bindParam(":CAD_DATE", $data['cad_date'], PDO::PARAM_STR);
            $inserir->execute();

        } catch(PDOException $e) { 
            $inserir =  'Error: ' . $e->getMessage(); 
        }   
        return $inserir;
    };