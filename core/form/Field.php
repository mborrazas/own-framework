<?php

namespace app\core\form;

class Field
{
    public Model $model;
    public string $attribute;

    public function __construct(\app\core\Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }
}
