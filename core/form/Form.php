<?php

namespace app\core\form;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" mehtod="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }
}
