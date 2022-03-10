<?php

namespace app\core;

class Session
{
    protected const FLASH_KEY = 'flash_messages';

    public function __construct(){
        session_start();
        $flashMssages = $_SESSION[self::FLASH_KEY];
        foreach($flashMssages as $key => &$flashMssage){
            $flashMssage['remove'] = true;
        }
        $_SESSION[self::FLASH_KEY] = $flashMssage;
    }

    public function setFlash($key, $message){
        $_SESSION[self::FLASH_KEY][$key] = [
            'removed' => false,
            'value' => $message
        ];
    }

    public function getFlash($key){
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    public function __destruct(){
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        foreach($flashMessages as $key => &$flashMessage){
            if($flashMessage['remove']){
                unset($flashMessages[$key]);
            }
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }

}