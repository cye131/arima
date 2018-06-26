<?php

class CookieMonster {

    public function __construct() {    
    }
    
    
    public static function CookieSet() {
        
        $uniqId = $_COOKIE['uniqid'] ?? uniqid();
        setcookie('uniqid', $uniqId, time() + (86400 * 30), "/");

    
    }
    
    
    public static function CookieReset() {   
    }
    
}