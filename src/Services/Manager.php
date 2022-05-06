<?php

namespace tutoAPI\Services;

class Manager 
{

    protected static function connectDb(){

        try{

            $pdo_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
    
            $dbh = new \PDO('mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8', LOGIN, MOT_DE_PASSE, $pdo_options);
                        
            } catch (\Exception $e){

                die('Erreur : ' . $e->getMessage());

            }

            return $dbh;
    }  
    

}