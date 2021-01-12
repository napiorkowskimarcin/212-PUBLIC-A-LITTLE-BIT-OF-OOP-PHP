<?php

require_once 'classes/Vehicle.php';

class Car extends Vehicle
{
    public $speed_limit = 140;
    
    public function __construct($model_name, $color, $body_type, $year_of_production)
    {
        $this->model_name = $model_name;
        $this->color = $color;
        $this->body_type = $body_type;
        $this->year_of_production = $year_of_production;

    }

}
