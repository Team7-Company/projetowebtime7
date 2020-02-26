//Conexão ao Banco de Dados PHP

<?php

include_once "config.php";

class DataBase{
    private static $instance;
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
		/*cria a conexão com os atributos do Banco de Dados
		DB_NAME ( nome do Banco ), DB_USER ( usuário ), DB_PASS 				( senha )*/

                self::$instance = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                /*
                PDO::ATTR_ERRMODE : espera receber um dos três modos
                PDO::ERRMODE_SILENT: define somente o código de erro
                PDO::ERRMODE_WARNING: gera um E_WARNING.
                PDO::ERRMODE_EXCEPTION: gera uma exceção.
                 */

                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }
    public static function prepare($sql){
        return self::getInstance()->prepare($sql);
    }

}
?>
