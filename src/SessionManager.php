<?php

declare(strict_types=1);

namespace FulbertGato\SessionManager;

class SessionManager
{
    /**
     * Create a new SessionManager Instance
     */
    public function __construct()
    {
        $this->openSession();
    }

    public static function setSession(string $key, $value):void{
        $_SESSION[$key]= $value;
    }

    public static function getSession(string $key){
        return $_SESSION[$key];
    }
    public static function openSession(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    public static function destroySession(){


        session_destroy();
    }

   public static function keyExist(string $key){

    return isset($_SESSION[$key]);
   }
   
   public static function destroyKey(string $key){

     unset($_SESSION[$key]);
   }

}
