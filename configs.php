<?php 
class configs
{
    private static $instance = NULL;
    public static function getConnection()
    {
        if(!isset(self::$instance))
        {
            try {
                //PDO PHP Data Objects
                //Parametres: type de Base de donnees utilise mysql host nom de la connection
                self::$instance = new PDO('mysql:host=localhost;dbname=test;','majd','');
            }   
            catch (Execption $e){

                die('Erreur: '.$e->getMessage());
            }
        }
    return self::$instance;
    }
}
?>