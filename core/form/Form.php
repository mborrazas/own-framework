<?php

class Form
{
    public static function begin($action, $method){
        return sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }


    public static function end(){
        return '</form>';
    }

    public function field(Model $model, $attribute){
        return new Field($model, $attribute);
    }
}