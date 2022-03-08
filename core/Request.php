<?php

namespace app\core;
/*
 * @author Matias Borrazas <borrazas.trabajo@gmail.com>
 * @package app\core
 */

class Request
{
    public function getPath(){
        $path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
        $position = strpos($path, '?');
        if($position === false){
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}